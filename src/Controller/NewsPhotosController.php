<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * NewsPhotos Controller
 *
 * @property \App\Model\Table\NewsPhotosTable $NewsPhotos
 *
 * @method \App\Model\Entity\NewsPhoto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NewsPhotosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['News']
        ];
        $newsPhotos = $this->paginate($this->NewsPhotos);

        $this->set(compact('newsPhotos'));
    }

    /**
     * View method
     *
     * @param string|null $id News Photo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $newsPhoto = $this->NewsPhotos->get($id, [
            'contain' => ['News']
        ]);

        $this->set('newsPhoto', $newsPhoto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $newsPhoto = $this->NewsPhotos->newEntity();
        if ($this->request->is('post')) {
            $newsPhoto = $this->NewsPhotos->patchEntity($newsPhoto, $this->request->getData());
            if ($this->NewsPhotos->save($newsPhoto)) {
                $this->Flash->success(__('The news photo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The news photo could not be saved. Please, try again.'));
        }
        $news = $this->NewsPhotos->News->find('list', ['limit' => 200]);
        $this->set(compact('newsPhoto', 'news'));
    }

    /**
     * Edit method
     *
     * @param string|null $id News Photo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $newsPhoto = $this->NewsPhotos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $newsPhoto = $this->NewsPhotos->patchEntity($newsPhoto, $this->request->getData());
            if ($this->NewsPhotos->save($newsPhoto)) {
                $this->Flash->success(__('The news photo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The news photo could not be saved. Please, try again.'));
        }
        $news = $this->NewsPhotos->News->find('list', ['limit' => 200]);
        $this->set(compact('newsPhoto', 'news'));
    }

    /**
     * Delete method
     *
     * @param string|null $id News Photo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null,$news_id)
    {
        $this->request->allowMethod(['post', 'delete']);
        $newsPhoto = $this->NewsPhotos->get($id);
        if ($this->NewsPhotos->delete($newsPhoto)) {
            $this->Flash->success(__('Foto deletada com sucesso.'));
        } else {
            $this->Flash->error(__('Ocorreu um erro em deletadar a foto. Tente novamente.'));
        }

        return $this->redirect(['controller' => 'News', 'action' => 'edit',$news_id]);
    }
}
