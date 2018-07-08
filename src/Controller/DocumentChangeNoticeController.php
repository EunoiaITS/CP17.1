<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * DocumentChangeNotice Controller
 *
 * @property \App\Model\Table\DocumentChangeNoticeTable $DocumentChangeNotice
 *
 * @method \App\Model\Entity\DocumentChangeNotice[] paginate($object = null, array $settings = [])
 */
class DocumentChangeNoticeController extends AppController
{

    public $paginate = [
        // Other keys here.
        'maxLimit' => 10
    ];

    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->layout('mainframe');
    }


    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $documentChangeNotice = $this->paginate($this->DocumentChangeNotice->find('all',['order'=>['DocumentChangeNotice.id'=>'desc']]));

        $this->set(compact('documentChangeNotice'));
        $this->set('_serialize', ['documentChangeNotice']);
    }

    /**
     * View method
     *
     * @param string|null $id Document Change Notice id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $documentChangeNotice = $this->DocumentChangeNotice->get($id, [
            'contain' => []
        ]);

        $this->set('documentChangeNotice', $documentChangeNotice);
        $this->set('_serialize', ['documentChangeNotice']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $part_no = null;
        $part_no = $this->DocumentChangeNotice->find('all', ['fields' => 'id'])->last();
        $documentChangeNotice = $this->DocumentChangeNotice->newEntity();
        if ($this->request->is('post')) {
            $documentChangeNotice = $this->DocumentChangeNotice->patchEntity($documentChangeNotice, $this->request->getData());
//            echo '<pre>';
//            print_r($documentChangeNotice);
//            exit();
            if ($this->DocumentChangeNotice->save($documentChangeNotice)) {
                if ($this->request->getData('upload') != '') {
                    $fileName = $this->request->getData('upload');
                    $part_no = $this->DocumentChangeNotice->find('all', ['fields' => 'id'])->last();
                    $ext = substr(strtolower(strrchr($fileName['name'], '.')), 1);
                    $arr_ext = array('jpg', 'jpeg', 'gif', 'png');
                    $setNewFileName = 'uploadedFile';
                    $imageFileName = $setNewFileName . '.' . $ext;
                    $uploadPath = WWW_ROOT . 'uploads/dcn/' . $part_no['id'] . '/';
                    if (!file_exists($uploadPath)) {
                        mkdir($uploadPath);
                    }
                    $uploadFile = $uploadPath.$imageFileName;
                    //$this->request->getData('uploadedFile') = $uploadFile;
                    //print_r($fileName);
                    if (move_uploaded_file($fileName['tmp_name'], $uploadFile)) {
                        $imageFile = 'uploads/dcn/'.$part_no['id'].'/'.$imageFileName;
                        $partMasterList_this = $this->DocumentChangeNotice->find()
                            ->where(['id' => $part_no['id']]);
                        foreach ($partMasterList_this as $draw) {
                            $draw->upload = $imageFile;
                            $this->DocumentChangeNotice->save($draw);
                        }
                    }
                }
                $this->Flash->success(__('The document change notice has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The document change notice could not be saved. Please, try again.'));
        }
        $this->set(compact('documentChangeNotice'));
        $this->set('_serialize', ['documentChangeNotice']);
        $this->set('dcn_no', $part_no['id']+1);
        $this->set('pic', $this->Auth->user('name'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Document Change Notice id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $documentChangeNotice = $this->DocumentChangeNotice->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $documentChangeNotice = $this->DocumentChangeNotice->patchEntity($documentChangeNotice, $this->request->getData());
            if ($this->DocumentChangeNotice->save($documentChangeNotice)) {
                $this->Flash->success(__('The document change notice has been saved.'));

                return $this->redirect(['action' => 'notification']);
            }
            $this->Flash->error(__('The document change notice could not be saved. Please, try again.'));
        }
        $this->set(compact('documentChangeNotice'));
        $this->set('_serialize', ['documentChangeNotice']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Document Change Notice id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $documentChangeNotice = $this->DocumentChangeNotice->get($id);
        if ($this->DocumentChangeNotice->delete($documentChangeNotice)) {
            $this->Flash->success(__('The document change notice has been deleted.'));
        } else {
            $this->Flash->error(__('The document change notice could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function notification()
    {
        $dcn = null;
        if($this->Auth->user('role') == 'eng-manager'){
            $dcn = $this->paginate($this->DocumentChangeNotice->find('all')
                ->where(['status' => 'pending']));
            $dcn->action = 'acknowledge';
        }elseif($this->Auth->user('role') == 'managing-director'){
            $dcn = $this->paginate($this->DocumentChangeNotice->find('all')
                ->where(['status' => 'acknowledged']));
            $dcn->action = 'approve';
        }
        $this->set('dcns', $dcn);
    }

    public function acknowledge($id = null)
    {
        $documentChangeNotice = $this->DocumentChangeNotice->get($id, [
            'contain' => []
        ]);

        if($documentChangeNotice->status != 'pending'){
            $this->Flash->error(__('This DCN is already acknowledged/rejected!'));
            return $this->redirect(['action' => 'notification']);
        }

        $this->set('documentChangeNotice', $documentChangeNotice);
        $this->set('_serialize', ['documentChangeNotice']);
        $this->set('pic', $this->Auth->user('name'));
    }

    public function approve($id = null)
    {
        $documentChangeNotice = $this->DocumentChangeNotice->get($id, [
            'contain' => []
        ]);

        if($documentChangeNotice->status != 'acknowledged'){
            $this->Flash->error(__('This DCN is already approved/rejected!'));
            return $this->redirect(['action' => 'notification']);
        }

        $this->set('documentChangeNotice', $documentChangeNotice);
        $this->set('_serialize', ['documentChangeNotice']);
        $this->set('pic', $this->Auth->user('name'));
    }

    public function isAuthorized($user){
        // All registered users can add articles
        if ($this->request->getParam('action') === 'index' || $this->request->getParam('action') === 'view') {
            return true;
        }

        if(isset($user['role']) && $user['role'] === 'eng-personnel'){
            if(in_array($this->request->action, ['add', 'edit', 'requests', 'editRequests'])){
                return true;
            }
        }

        if(isset($user['role']) && $user['role'] === 'eng-manager'){
            if(in_array($this->request->action, ['notification', 'acknowledge', 'edit'])){
                return true;
            }
        }

        if(isset($user['role']) && $user['role'] === 'managing-director'){
            if(in_array($this->request->action, ['notification', 'approve', 'edit'])){
                return true;
            }
        }

        return parent::isAuthorized($user);

    }

    public function requests(){
        $dcn = null;
        if($this->Auth->user('role') == 'eng-personnel'){
            $dcn = $this->paginate($this->DocumentChangeNotice->find('all')
                ->where(['status' => 'pending'])
		->orwhere(['status' => 'rejected'])
	);
        }
        $this->set('dcns', $dcn);
    }

    public function editRequests($id = null){
        $documentChangeNotice = $this->DocumentChangeNotice->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $documentChangeNotice = $this->DocumentChangeNotice->patchEntity($documentChangeNotice, $this->request->getData());
            if ($this->DocumentChangeNotice->save($documentChangeNotice)) {
                if ($this->request->getData('upload') != '') {
                    $fileName = $this->request->getData('upload');
                    $part_no = $id;
                    $ext = substr(strtolower(strrchr($fileName['name'], '.')), 1);
                    $arr_ext = array('jpg', 'jpeg', 'gif', 'png');
                    $setNewFileName = 'uploadedFile';
                    $imageFileName = $setNewFileName . '.' . $ext;
                    $uploadPath = WWW_ROOT . 'uploads/dcn/' . $part_no . '/';
                    if (!file_exists($uploadPath)) {
                        mkdir($uploadPath);
                    }
                    $uploadFile = $uploadPath.$imageFileName;
                    //$this->request->getData('uploadedFile') = $uploadFile;
                    //print_r($fileName);
                    if (move_uploaded_file($fileName['tmp_name'], $uploadFile)) {
                        $imageFile = 'uploads/dcn/'.$part_no.'/'.$imageFileName;
                        $partMasterList_this = $this->DocumentChangeNotice->find()
                            ->where(['id' => $part_no]);
                        foreach ($partMasterList_this as $draw) {
                            $draw->upload = $imageFile;
                            $this->DocumentChangeNotice->save($draw);
                        }
                    }
                }
                $this->Flash->success(__('The document change notice has been saved.'));

                return $this->redirect(['action' => 'requests']);
            }
            $this->Flash->error(__('The document change notice could not be saved. Please, try again.'));
        }
        $this->set(compact('documentChangeNotice'));
        $this->set('_serialize', ['documentChangeNotice']);
    }

}
