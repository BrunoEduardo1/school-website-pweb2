<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Services Controller
 *
 * @property \App\Model\Table\ServicesTable $Services
 *
 * @method \App\Model\Entity\Service[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ServicesController extends AppController
{
     public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('admin');
        // permitir apenas estas ações com  o user sem login
        //$this->Auth->allow(['logout'/*, 'cadastro'*/]);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $services = $this->Services->find('all')->where(['Services.active' => 1]);

        // $services = $this->paginate($this->Services);
        $services = $this->paginate($services);


        $this->set(compact('services'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $service = $this->Services->newEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $service->name = $data['name'];
            $service->icon = $data['icon'];
            $service->description = $data['description'];

            if ($this->Services->save($service)) {
                $this->Flash->success(__('Novo serviço adicionado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O serviço não pode ser salvo. Tente novamente.'));
        }
        $this->set(compact('service'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Service id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $service = $this->Services->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $service = $this->Services->patchEntity($service, $this->request->getData());
            if ($this->Services->save($service)) {
                $this->Flash->success(__('Serviço atualizado'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O serviço não pode ser salvo. Tente novamente.'));
        }
        $this->set(compact('service'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Service id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $service = $this->Services->get($id);
        $service->active = 0;
        if ($this->Services->save($service)) {
            $this->Flash->success(__('Serviço deletado com sucesso.'));
        } else {
            $this->Flash->error(__('O serviço não pode ser deletado. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
