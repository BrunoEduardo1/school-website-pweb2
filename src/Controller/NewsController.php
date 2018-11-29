<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * News Controller
 *
 * @property \App\Model\Table\NewsTable $News
 *
 * @method \App\Model\Entity\News[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NewsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('admin');
        $this->loadComponent('Upload');
        // permitir apenas estas ações com  o user sem login
        //$this->Auth->allow(['view']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $news = $this->News->find('all')->where(['News.active' => 1]);

        $news = $this->paginate($news);

        $this->set(compact('news'));
    }

    /**
     * View method
     *
     * @param string|null $id News id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $news = $this->News->get($id, [
            'contain' => ['NewsPhotos']
        ]);

        $this->set('news', $news);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $news = $this->News->newEntity();
        if ($this->request->is('post')) {
            $news = $this->News->patchEntity($news, $this->request->getData());
            
            if ($this->News->save($news)) {
                $this->Flash->success(__('Nova notícia salva'));
                
                $data   = $this->request->getData();

                $this->loadModel('NewsPhotos');
                foreach ($data['extra'] as $photos) :
                    
                    if (count($data['extra']) > 5 ) : $this->Flash->error(__('Quantidade inadequada de imagens extras.')); break; endif;
                        
                    if (!empty($photos['name'])) :
                        $path = '/news_pic/'; 
                        $this->Upload->setPath($path);

                        $extra_photo = $this->NewsPhotos->newEntity();
                        $extra_photo->news_id = $news->id;
                        $extra_photo->photo = $this->Upload->copyUploadedFile($photos, ''); 
                        if (!$this->NewsPhotos->save($extra_photo)) {
                           $this->Flash->error(__('Algumas imagens não foram salvas. Por favor, verifique na edição da página'));
                        }
                        // print_r($this->Upload->getLog());
                    endif;
                endforeach;

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocorreu um erro em salvar a notícia. Tente novamente.'));
        }
        $this->set(compact('news'));
    }

    /**
     * Edit method
     *
     * @param string|null $id News id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $news = $this->News->get($id, [
            'contain' => ['NewsPhotos']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $news = $this->News->patchEntity($news, $this->request->getData());
            if ($this->News->save($news)) {
                $this->Flash->success(__('Notícia salva atualizada'));

                $data  = $this->request->getData();

                $sent  = count($data['extra']);
                
                $extra = count($news->news_photos);


                $this->loadModel('NewsPhotos');
                foreach ($data['extra'] as $photos) :
                    
                    if ($sent > 5 || $extra == 5 || $extra+$sent > 5) : $this->Flash->error(__('Quantidade inadequada de imagens extras.')); break; endif;
                        
                    if (!empty($photos['name'])) :
                        $path = '/news_pic/'; 
                        $this->Upload->setPath($path);

                        $extra_photo = $this->NewsPhotos->newEntity();
                        $extra_photo->news_id = $news->id;
                        $extra_photo->photo = $this->Upload->copyUploadedFile($photos, ''); 
                        if (!$this->NewsPhotos->save($extra_photo)) {
                           $this->Flash->error(__('Algumas imagens não foram salvas. Por favor, verifique na edição da página'));
                        }
                        // print_r($this->Upload->getLog());
                    endif;
                endforeach;

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocorreu um erro em salvar a notícia. Tente novamente.'));
        }
        $this->set(compact('news'));
    }

    /**
     * Delete method
     *
     * @param string|null $id News id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $news = $this->News->get($id);
        $news->active = 0;
        if ($this->News->save($news)) {
            $this->Flash->success(__('Notícia deletada'));
        } else {
            $this->Flash->error(__('Ocorreu um erro em deletar a notícia. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
