<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GaleriesPhotos Controller
 *
 * @property \App\Model\Table\GaleriesPhotosTable $GaleriesPhotos
 *
 * @method \App\Model\Entity\GaleriesPhoto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GaleriesPhotosController extends AppController
{   
    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('admin');
        $this->loadComponent('Upload');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Galeries']
        ];
        $galeriesPhotos = $this->paginate($this->GaleriesPhotos);

        $this->loadModel('Galeries');
        $galeries = $this->Galeries->find('all')
        ->where(['Galeries.active'=>1, 'Galeries.type'=>'PHOTOS'])
        ->select(['id','creted_at','updated_at','name']);
        $this->set(compact('galeriesPhotos', 'galeries'));
    }

    /**
     * View method
     *
     * @param string|null $id Galeries Photo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {   
        return $this->redirect(['action' => 'index']);
        $galeriesPhoto = $this->GaleriesPhotos->get($id, [
            'contain' => ['Galeries']
        ]);

        $this->set('galeriesPhoto', $galeriesPhoto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $galeriesPhoto = $this->GaleriesPhotos->newEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            
            if (empty($data['galery_id']) && !empty($data['new_galery'])) :
                //Criar nova galeria
                $this->loadModel('Galeries');
                $new_galery       = $this->Galeries->newEntity(); 
                $new_galery->name = $data['new_galery'];
                $new_galery->type = 'PHOTOS';
                
                $this->Galeries->save($new_galery);

                $galeriesPhoto    = $this->GaleriesPhotos->newEntity();
                $galeriesPhoto->caption = $data['caption'];
                $galeriesPhoto->galery_id = $new_galery->id;

                if(!empty($data['photo']['name'])) :
                    // $path = '/galerias/'.$new_galery->name;
                    $path = '/galerias/fotos';
                    $this->Upload->setPath($path);
                    $galeriesPhoto->photo = $this->Upload->copyUploadedFile($data['photo'], '');                     
                endif;

                if ($this->GaleriesPhotos->save($galeriesPhoto)) {
                    $this->Flash->success(__('Foto salva e adicionada à nova galeria.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Não possível salvar a foto na nova galeria. Tente novamente.'));
            elseif(!empty($data['galery_id'])) :
               
                $galeriesPhoto    = $this->GaleriesPhotos->newEntity();
                $galeriesPhoto->caption = $data['caption'];
                $galeriesPhoto->galery_id = $data['galery_id'];

                if(!empty($data['photo']['name'])) :
                    // $path = '/galerias/'.$new_galery->name;
                    $path = '/galerias/fotos';
                    $this->Upload->setPath($path);
                    $galeriesPhoto->photo = $this->Upload->copyUploadedFile($data['photo'], '');                     
                endif;

                if ($this->GaleriesPhotos->save($galeriesPhoto)) {
                    $this->Flash->success(__('Nova foto salva na galeria.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Erro em salvar a foto na geleria existente.'));
            endif;
            // echo var_dump($new_galery);
            // die();
            //-------
        }
         $galeries = $this->GaleriesPhotos->Galeries->find('all')->select(['id','name'])->where(['Galeries.active'=>1, 'Galeries.type'=>'PHOTOS']);
        $this->set(compact('galeriesPhoto', 'galeries'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Galeries Photo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $galeriesPhoto = $this->GaleriesPhotos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
             $data = $this->request->getData();
            
            if (empty($data['galery_id']) && !empty($data['new_galery'])) :
                //Criar nova galeria
                $this->loadModel('Galeries');
                $new_galery       = $this->Galeries->newEntity(); 
                $new_galery->name = $data['new_galery'];
                $new_galery->type = 'PHOTOS';
                
                $this->Galeries->save($new_galery);

                $galeriesPhoto->caption = $data['caption'];
                $galeriesPhoto->galery_id = $new_galery->id;

                if(!empty($data['photo']['name'])) :
                    // $path = '/galerias/'.$new_galery->name;
                    $path = '/galerias/fotos';
                    $this->Upload->setPath($path);
                    $galeriesPhoto->photo = $this->Upload->copyUploadedFile($data['photo'], '');                     
                endif;

                if ($this->GaleriesPhotos->save($galeriesPhoto)) {
                    $this->Flash->success(__('Foto atualizada e adicionada à nova galeria.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Não possível salvar a foto na nova galeria. Tente novamente.'));
            elseif(!empty($data['galery_id'])) :
               
                $galeriesPhoto->caption = $data['caption'];
                $galeriesPhoto->galery_id = $data['galery_id'];

                if(!empty($data['photo']['name'])) :
                    // $path = '/galerias/'.$new_galery->name;
                    $path = '/galerias/fotos';
                    $this->Upload->setPath($path);
                    $galeriesPhoto->photo = $this->Upload->copyUploadedFile($data['photo'], '');                     
                endif;

                if ($this->GaleriesPhotos->save($galeriesPhoto)) {
                    $this->Flash->success(__('Foto atualizada.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Erro em salvar a foto na geleria existente.'));
            endif;
            //-------
        }
        $galeries = $this->GaleriesPhotos->Galeries->find('all')->select(['id','name'])->where(['Galeries.active'=>1, 'Galeries.type'=>'PHOTOS']);
        $this->set(compact('galeriesPhoto', 'galeries'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Galeries Photo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $galeriesPhoto = $this->GaleriesPhotos->get($id);
        if ($this->GaleriesPhotos->delete($galeriesPhoto)) {
            $this->Flash->success(__('Foto deletada'));
        } else {
            $this->Flash->error(__('The galeries photo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
