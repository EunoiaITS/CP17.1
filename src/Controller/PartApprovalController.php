<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * PartApproval Controller
 *
 * @property \App\Model\Table\PartApprovalTable $PartApproval
 *
 * @method \App\Model\Entity\PartApproval[] paginate($object = null, array $settings = [])
 */
class PartApprovalController extends AppController
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
        $partApproval = $this->paginate($this->PartApproval->find('all')
        ->where(['status' => 'approved']));

        $this->set(compact('partApproval'));
        $this->set('_serialize', ['partApproval']);
    }

    public function notification()
    {
        $partApproval = null;
        if($this->Auth->user('role') == 'eng-officer'){
            $partApproval = $this->paginate($this->PartApproval->find('all')
                ->where(['status' => 'pending']));
            $partApproval->action = 'acknowledge';
        }elseif($this->Auth->user('role') == 'eng-manager'){
            $partApproval = $this->paginate($this->PartApproval->find('all')
                ->where(['status' => 'acknowledged']));
            $partApproval->action = 'approve';
        }
        $this->set('partApproval', $partApproval);
    }

    public function acknowledge($id = null)
    {
        $partApproval = $this->PartApproval->get($id, [
            'contain' => []
        ]);

        if($partApproval->status != 'pending'){
            $this->Flash->error(__('This Part is already acknowledged/rejected!'));
            return $this->redirect(['action' => 'notification']);
        }

        $this->set('partApproval', $partApproval);
        $this->set('_serialize', ['partApproval']);
        $this->set('pic', $this->Auth->user('name'));
    }

    public function approve($id = null)
    {
        $partApproval = $this->PartApproval->get($id, [
            'contain' => []
        ]);

        if($partApproval->status != 'acknowledged'){
            $this->Flash->error(__('This Part is already approved/rejected!'));
            return $this->redirect(['action' => 'notification']);
        }

        $this->set('partApproval', $partApproval);
        $this->set('_serialize', ['partApproval']);
        $this->set('pic', $this->Auth->user('name'));
    }

    /**
     * View method
     *
     * @param string|null $id Part Approval id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $partApproval = $this->PartApproval->get($id, [
            'contain' => []
        ]);

        $this->set('partApproval', $partApproval);
        $this->set('_serialize', ['partApproval']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->loadModel('PartMasterList');
        $partMasterList = $this->paginate($this->PartMasterList);
        $part_no = null;
        foreach($partMasterList as $pm){
            $part_no .= '{label:"'.$pm->partName.'",idx:"'.$pm->partNo.'",drawNo:"'.$pm->drawingNo.'"},';
        }
        $part_no = rtrim($part_no, ',');
        $partApproval = $this->PartApproval->newEntity();
        if ($this->request->is('post')) {
            $partApproval = $this->PartApproval->patchEntity($partApproval, $this->request->getData());
//            echo '<pre>';
//            print_r($partApproval);
//            exit();
            if ($this->PartApproval->save($partApproval)) {
                if ($this->request->getData('upload') != '') {
                    $fileName = $this->request->getData('upload');
                    $part_no = $this->PartApproval->find('all', ['fields' => 'id'])->last();
                    $ext = substr(strtolower(strrchr($fileName['name'], '.')), 1);
                    $arr_ext = array('jpg', 'jpeg', 'gif', 'png');
                    $setNewFileName = 'uploadedFile';
                    $imageFileName = $setNewFileName . '.' . $ext;
                    $uploadPath = WWW_ROOT . 'uploads/partApproval/' . $part_no['id'] . '/';
                    if (!file_exists($uploadPath)) {
                        mkdir($uploadPath);
                    }
                    $uploadFile = $uploadPath.$imageFileName;
                    //$this->request->getData('uploadedFile') = $uploadFile;
                    //print_r($fileName);
                    if (move_uploaded_file($fileName['tmp_name'], $uploadFile)) {
                        $imageFile = 'uploads/partApproval/'.$part_no['id'].'/'.$imageFileName;
                        $partApproval_this = $this->PartApproval->find()
                            ->where(['id' => $part_no['id']]);
                        foreach ($partApproval_this as $draw) {
                            $draw->upload = $imageFile;
                            $this->PartApproval->save($draw);
                        }
                    }
                }
                $this->Flash->success(__('The part approval has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The part approval could not be saved. Please, try again.'));
        }
        $this->set(compact('partApproval'));
        $this->set('_serialize', ['partApproval']);
        $this->set('pic', $this->Auth->user('name'));
        $this->set('part_no', $part_no);
    }

    /**
     * Edit method
     *
     * @param string|null $id Part Approval id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $partApproval = $this->PartApproval->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $partApproval = $this->PartApproval->patchEntity($partApproval, $this->request->getData());
            if ($this->PartApproval->save($partApproval)) {
                $this->Flash->success(__('The part approval has been saved.'));

                return $this->redirect(['action' => 'notification']);
            }
            $this->Flash->error(__('The part approval could not be saved. Please, try again.'));
        }
        $this->set(compact('partApproval'));
        $this->set('_serialize', ['partApproval']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Part Approval id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $partApproval = $this->PartApproval->get($id);
        if ($this->PartApproval->delete($partApproval)) {
            $this->Flash->success(__('The part approval has been deleted.'));
        } else {
            $this->Flash->error(__('The part approval could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
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

        if(isset($user['role']) && $user['role'] === 'eng-officer'){
            if(in_array($this->request->action, ['notification', 'acknowledge', 'edit'])){
                return true;
            }
        }

        if(isset($user['role']) && $user['role'] === 'eng-manager'){
            if(in_array($this->request->action, ['notification', 'approve', 'edit'])){
                return true;
            }
        }

        return parent::isAuthorized($user);

    }

    public function requests(){
        $partApproval = null;
        if($this->Auth->user('role') == 'eng-personnel'){
            $partApproval = $this->paginate($this->PartApproval->find('all')
                ->where(['status' => 'pending'])
		->orwhere(['status' => 'rejected'])
		);
        }
        $this->set('partApproval', $partApproval);
    }

    public function editRequests($id = null){
    	$this->loadModel('PartMasterList');
        $partMasterList = $this->paginate($this->PartMasterList);
        $part_no = null;
        foreach($partMasterList as $pm){
            $part_no .= '{label:"'.$pm->partName.'",idx:"'.$pm->partNo.'",drawNo:"'.$pm->drawingNo.'"},';
        }
        $part_no = rtrim($part_no, ',');
        $partApproval = $this->PartApproval->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $partApproval = $this->PartApproval->patchEntity($partApproval, $this->request->getData());
            if ($this->PartApproval->save($partApproval)) {
                if ($this->request->getData('uploadFile') != '') {
                    $fileName = $this->request->getData('uploadFile');
                    $part_no = $id;
                    $ext = substr(strtolower(strrchr($fileName['name'], '.')), 1);
                    $arr_ext = array('jpg', 'jpeg', 'gif', 'png');
                    $setNewFileName = 'uploadedFile';
                    $imageFileName = $setNewFileName . '.' . $ext;
                    $uploadPath = WWW_ROOT . 'uploads/partApproval/' . $part_no . '/';
                    if (!file_exists($uploadPath)) {
                        mkdir($uploadPath);
                    }
                    $uploadFile = $uploadPath.$imageFileName;
                    if (move_uploaded_file($fileName['tmp_name'], $uploadFile)) {
                        $imageFile = 'uploads/partApproval/'.$part_no.'/'.$imageFileName;
                        $purchaseRequisition_this = $this->PartApproval->find()
                            ->where(['id' => $part_no]);
                        foreach ($purchaseRequisition_this as $draw) {
                            $draw->upload = $imageFile;
                            $this->PartApproval->save($draw);
                        }
                    }
                }
                $this->Flash->success(__('The part approval has been saved.'));

                return $this->redirect(['action' => 'requests']);
            }
            $this->Flash->error(__('The part approval could not be saved. Please, try again.'));
        }
        $this->set(compact('partApproval'));
        $this->set('_serialize', ['partApproval']);
        $this->set('part_no', $part_no);
    }

}
