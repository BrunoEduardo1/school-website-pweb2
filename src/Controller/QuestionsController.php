<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Questions Controller
 *
 * @property \App\Model\Table\QuestionsTable $Questions
 *
 * @method \App\Model\Entity\Question[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class QuestionsController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        //layout
        $this->viewBuilder()->setLayout('admin');     
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {   
        $questions = $this->Questions->find('all')->where(['Questions.active' => 1]);
        
        $questions = $this->paginate($questions);

        $this->set(compact('questions'));
    }

    /**
     * View method
     *
     * @param string|null $id Question id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $question = $this->Questions->get($id, [
            'contain' => []
        ]);

        $this->set('question', $question);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $question = $this->Questions->newEntity();
        if ($this->request->is('post')) {
            $question = $this->Questions->patchEntity($question, $this->request->getData());
            if ($this->Questions->save($question)) {
                $this->Flash->success(__('Nova pergunta adicionada.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A pergunta no pode ser adicionada. Tente novamente.'));
        }
        $this->set(compact('question'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Question id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $question = $this->Questions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $question = $this->Questions->patchEntity($question, $this->request->getData());
            if ($this->Questions->save($question)) {
                $this->Flash->success(__('A pergunta atualizada.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A pergunta no pode ser atualizada. Tente novamente.'));
        }
        $this->set(compact('question'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Question id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $question = $this->Questions->get($id);
        if ($this->Questions->delete($question)) {
            $this->Flash->success(__('A pergunta foi deletada.'));
        } else {
            $this->Flash->error(__('A pergunta no pode ser deletada. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
