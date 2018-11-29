<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GaleriesVideos Controller
 *
 * @property \App\Model\Table\GaleriesVideosTable $GaleriesVideos
 *
 * @method \App\Model\Entity\GaleriesVideo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GaleriesVideosController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('admin');
        // permitir apenas estas ações com  o user sem login
        //$this->Auth->allow(['logout', 'cadastro']);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        //Exibir as galerias de videos
        $this->paginate = [
            'contain' => ['Galeries']
        ];
        $galeriesVideos = $this->paginate($this->GaleriesVideos);

        $this->loadModel('Galeries');
        $galeries = $this->Galeries->find('all')
        ->where(['Galeries.active'=>1, 'Galeries.type'=>'VIDEOS'])
        ->select(['id','creted_at','updated_at','name']);
        $this->set(compact('galeries'));
        $this->set(compact('galeriesVideos'));
    }

    /**
     * View method
     *
     * @param string|null $id Galeries Video id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $galeriesVideo = $this->GaleriesVideos->get($id, [
            'contain' => ['Galeries']
        ]);

        $this->set('galeriesVideo', $galeriesVideo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $galeriesVideo = $this->GaleriesVideos->newEntity();
        if ($this->request->is('post')) {

            $data = $this->request->getData();
            
            if (empty($data['galery_id']) && !empty($data['new_galery'])) :
                $this->loadModel('Galeries');
                $new_galery       = $this->Galeries->newEntity(); 
                $new_galery->name = $data['new_galery'];
                //$new_galery->content = 'Descrição da galeria';
                $new_galery->type = 'VIDEOS';
                
                $this->Galeries->save($new_galery);

                $galeriesVideo    = $this->GaleriesVideos->newEntity();
                $galeriesVideo->link = $data['link'];
                $galeriesVideo->caption = $data['caption'];
                $galeriesVideo->galery_id = $new_galery->id;

                if ($this->GaleriesVideos->save($galeriesVideo)) {
                    $this->Flash->success(__('Vídeo salvo e adicionado à nova galeria.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Não possível salvar o vídeo na nova galeria. Tente novamente.'));
            elseif(!empty($data['galery_id'])) :

                $galeriesVideo    = $this->GaleriesVideos->newEntity();
                $galeriesVideo->link = $data['link'];
                $galeriesVideo->caption = $data['caption'];
                $galeriesVideo->galery_id = $data['galery_id'];

                if ($this->GaleriesVideos->save($galeriesVideo)) {
                    $this->Flash->success(__('Novo vídeo salvo na galeria.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Erro em salvar o vídeo na geleria existente.'));
            endif;
            // echo var_dump($new_galery);
            // die();
            
        }
        $galeries = $this->GaleriesVideos->Galeries->find('all')->select(['id','name'])->where(['Galeries.active'=>1, 'Galeries.type'=>'VIDEOS']);
        $this->set(compact('galeriesVideo', 'galeries'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Galeries Video id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $galeriesVideo = $this->GaleriesVideos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            $data = $this->request->getData();
            
            if (empty($data['galery_id']) && !empty($data['new_galery'])) :
                $this->loadModel('Galeries');
                $new_galery       = $this->Galeries->newEntity(); 
                $new_galery->name = $data['new_galery'];
                //$new_galery->content = 'Descrição da galeria';
                $new_galery->type = 'VIDEOS';
                
                $this->Galeries->save($new_galery);

                $galeriesVideo->link = $data['link'];
                $galeriesVideo->caption = $data['caption'];
                $galeriesVideo->galery_id = $new_galery->id;

                if ($this->GaleriesVideos->save($galeriesVideo)) {
                    $this->Flash->success(__('Vídeo salvo e adicionado à nova galeria.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Não possível salvar o vídeo na nova galeria. Tente novamente.'));
            elseif(!empty($data['galery_id'])) :

                $galeriesVideo->link = $data['link'];
                $galeriesVideo->caption = $data['caption'];
                $galeriesVideo->galery_id = $data['galery_id'];

                if ($this->GaleriesVideos->save($galeriesVideo)) {
                    $this->Flash->success(__('Vídeo atualizado.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Erro em salvar o vídeo na geleria existente.'));
            endif;
        }
        $galeries = $this->GaleriesVideos->Galeries->find('all')->select(['id','name'])->where(['Galeries.active'=>1, 'Galeries.type'=>'VIDEOS']);
        $this->set(compact('galeriesVideo', 'galeries'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Galeries Video id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $galeriesVideo = $this->GaleriesVideos->get($id);
        if ($this->GaleriesVideos->delete($galeriesVideo)) {
            $this->Flash->success(__('The galeries video has been deleted.'));
        } else {
            $this->Flash->error(__('The galeries video could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
//Bruno Eduardo