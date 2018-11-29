<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('admin');
        // permitir apenas estas ações com  o user sem login
        $this->Auth->allow(['logout'/*, 'cadastro'*/]);
    }
    //Login
    public function login()
    {   
        //definir um novo layout
        $this->viewBuilder()->setLayout('login');     
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect(['action' => 'index']);
                //return $this->redirect($this->Auth->redirectUrl()); //home
            }
            $this->Flash->error('Login ou senha incorreta.');
        }
        $this->set('title','Login');
    }

    public function logout()
    {
        $this->Flash->success('You oooooout.');
        return $this->redirect($this->Auth->logout());
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $users = $this->Users->find('all')->where(['Users.active' => 1]);

        $users = $this->paginate($users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Novo usuário adicionado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O usuário no pode ser adicionado. Tente novamente.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuário atualizado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O usuário no pode ser atualizado. Tente novamente.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        $user->active = 0;
        if ($this->Users->save($user)) {
            $this->Flash->success(__('Usuário Deletado.'));
        } else {
            $this->Flash->error(__('O usuário no pode ser deletado. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    //Cadastro de usuário
    public function cadastro()
    {
        //definir um novo layout
        $this->viewBuilder()->setLayout('login');   
        
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Cadastrado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não foi possível salvar o usuário. Tente novamente.'));
        }
        $this->set(compact('user'));
    }
    //Definir restrições ao user logado
    public function isAuthorized($user)
    {
        $action = $this->request->getParam('action');
        // The add and tags actions are always allowed to logged in users.
        if (in_array($action, ['add', 'edit'])) {
            return true;
        }

        // All other actions require a slug.
        $slug = $this->request->getParam('pass.0');
        if (!$slug) {
            return false;
        }

        // Check that the article belongs to the current user.
        $article = $this->Articles->findBySlug($slug)->first();

        return $article->user_id === $user['id'];
    }
}
