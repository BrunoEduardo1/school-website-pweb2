<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PagesPhotos Controller
 *
 * @property \App\Model\Table\PagesPhotosTable $PagesPhotos
 *
 * @method \App\Model\Entity\PagesPhoto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PagesPhotosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pages']
        ];
        $pagesPhotos = $this->paginate($this->PagesPhotos);

        $this->set(compact('pagesPhotos'));
    }

    /**
     * View method
     *
     * @param string|null $id Pages Photo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pagesPhoto = $this->PagesPhotos->get($id, [
            'contain' => ['Pages']
        ]);

        $this->set('pagesPhoto', $pagesPhoto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pagesPhoto = $this->PagesPhotos->newEntity();
        if ($this->request->is('post')) {
            $pagesPhoto = $this->PagesPhotos->patchEntity($pagesPhoto, $this->request->getData());
            if ($this->PagesPhotos->save($pagesPhoto)) {
                $this->Flash->success(__('The pages photo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pages photo could not be saved. Please, try again.'));
        }
        $pages = $this->PagesPhotos->Pages->find('list', ['limit' => 200]);
        $this->set(compact('pagesPhoto', 'pages'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pages Photo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pagesPhoto = $this->PagesPhotos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pagesPhoto = $this->PagesPhotos->patchEntity($pagesPhoto, $this->request->getData());
            if ($this->PagesPhotos->save($pagesPhoto)) {
                $this->Flash->success(__('The pages photo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pages photo could not be saved. Please, try again.'));
        }
        $pages = $this->PagesPhotos->Pages->find('list', ['limit' => 200]);
        $this->set(compact('pagesPhoto', 'pages'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pages Photo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null,$edit)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pagesPhoto = $this->PagesPhotos->get($id);
        if ($this->PagesPhotos->delete($pagesPhoto)) {
            $this->Flash->success(__('Foto deletada'));
        } else {
            $this->Flash->error(__('A foto não pode ser deletada. Tente novamente.'));
        }

        return $this->redirect(['controller' => 'Pages','action' => 'edit',$edit]);
    }
}
