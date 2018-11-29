<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Banners Controller
 *
 * @property \App\Model\Table\BannersTable $Banners
 *
 * @method \App\Model\Entity\Banner[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BannersController extends AppController
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
        $banners = $this->paginate($this->Banners);

        $this->set(compact('banners'));
    }

    /**
     * View method
     *
     * @param string|null $id Banner id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $banner = $this->Banners->get($id, [
            'contain' => []
        ]);

        $this->set('banner', $banner);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $banner = $this->Banners->newEntity();
        if ($this->request->is('post')) {
            //dados do formulário
            $data  = $this->request->getData();
            $banner->title = $data['title'];
            $banner->subtitle = $data['subtitle'];
            $banner->link = !empty($data['link']) ? $data['link'] : null ;

            //echo count($data['extra']);die();
            if(!empty($data['photo']['name'])){
                $path = '/banners/'; 
                $this->Upload->setPath($path);
                $banner->photo = $this->Upload->copyUploadedFile($data['photo'], '');                     
            }

            if ($this->Banners->save($banner)) {
                $this->Flash->success(__('Novo banner salvo'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O banner não pode ser salvo. Tente novamente.'));
        }
        $this->set(compact('banner'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Banner id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $banner = $this->Banners->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            
            $data  = $this->request->getData();
            $banner->title = $data['title'];
            $banner->subtitle = $data['subtitle'];
            $banner->link = !empty($data['link']) ? $data['link'] : null ;

            //echo count($data['extra']);die();
            if(!empty($data['photo']['name'])){
                $path = '/banners/'; 
                $this->Upload->setPath($path);
                $banner->photo = $this->Upload->copyUploadedFile($data['photo'], '');                     
            }
            
            if ($this->Banners->save($banner)) {
                $this->Flash->success(__('Banner atualizado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O banner não pode ser salvo. Tente novamente.'));
        }
        $this->set(compact('banner'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Banner id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $banner = $this->Banners->get($id);
        $banner->active = 0;
        if ($this->Banners->save($banner)) {
            $this->Flash->success(__('O banner não está visível ao público.'));
        } else {
            $this->Flash->error(__('Não foi possível deletar o banner'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
