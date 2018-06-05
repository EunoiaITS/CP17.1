<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ECR Controller
 *
 * @property \App\Model\Table\ECRTable $ECR
 *
 * @method \App\Model\Entity\ECR[] paginate($object = null, array $settings = [])
 */
class ECRController extends AppController
{

    public $paginate = [
        // Other keys here.
        'maxLimit' => 10
    ];

    public function initialize(){
        parent::initialize();
        $this->viewBuilder()->setLayout('mainframe');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $eCR = $this->paginate($this->ECR->find()->where(['stat' => 'approved']));
        $this->set(compact('eCR'));
        $this->set('_serialize', ['eCR']);
    }

    /**
     * View method
     *
     * @param string|null $id E C R id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $eCR = $this->ECR->get($id, [
            'contain' => []
        ]);
        $this->set('eCR', $eCR);
        $this->set('_serialize', ['eCR']);
        $this->set('user',$this->Auth->User());
        $eCR = $this->ECR->newEntity();
        $eCR = $this->ECR->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $eCR->accepted = $this->request->getData('accepted');
            $eCR->rejected = $this->request->getData('rejected');
            $eCR->klv = $this->request->getData('klv');
            if ($this->ECR->save($eCR)) {
                $this->Flash->success(__('The req has been saved.'));
            }
        }
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
        $ecr_no = $this->ECR->find('all', ['fields' => 'id'])->last();
        $eCR = $this->ECR->newEntity();
        if ($this->request->is('post')) {
            $eCR = $this->ECR->patchEntity($eCR, $this->request->getData());
            if ($this->ECR->save($eCR)) {
                $ecr_no = $this->ECR->find('all', ['fields' => 'id'])->last();
                if($this->request->getData('currentFile') != null){
                    $fileName = $this->request->getData('currentFile');
                    $ext = substr(strtolower(strrchr($fileName['name'], '.')), 1);
                    //$arr_ext = array('jpg', 'jpeg', 'gif', 'png');
                    $setNewFileName = 'currentFile';
                    $imageFileName = $setNewFileName . '.' . $ext;
                    $uploadPath = WWW_ROOT.'uploads/ecr/'.$ecr_no['id'].'/';
                    if(!file_exists($uploadPath)){
                        mkdir($uploadPath);
                    }
                    $uploadFile = $uploadPath.$imageFileName;
                    //$this->request->getData('uploadedFile') = $uploadFile;
                    //print_r($fileName);
                    if(move_uploaded_file($fileName['tmp_name'], $uploadFile)){
                        $imageFile = 'uploads/ecr/'.$ecr_no['id'].'/'.$imageFileName;
                        $ecr_this = $this->ECR->find()
                            ->where(['id' => $ecr_no['id']]);
                        foreach($ecr_this as $ecr){
                            $ecr->currentFile = $imageFile;
                            $this->ECR->save($ecr);
                        }
                    }
                }
                if($this->request->getData('proposedFile') != null){
                    $fileName = $this->request->getData('proposedFile');
                    $ext = substr(strtolower(strrchr($fileName['name'], '.')), 1);
                    //$arr_ext = array('jpg', 'jpeg', 'gif', 'png');
                    $setNewFileName = 'proposedFile';
                    $imageFileName = $setNewFileName . '.' . $ext;
                    $uploadPath = WWW_ROOT.'uploads/ecr/'.$ecr_no['id'].'/';
                    if(!file_exists($uploadPath)){
                        mkdir($uploadPath);
                    }
                    $uploadFile = $uploadPath.$imageFileName;
                    //$this->request->getData('uploadedFile') = $uploadFile;
                    //print_r($fileName);
                    if(move_uploaded_file($fileName['tmp_name'], $uploadFile)){
                        $imageFile = 'uploads/ecr/'.$ecr_no['id'].'/'.$imageFileName;
                        $ecr_this = $this->ECR->find()
                            ->where(['id' => $ecr_no['id']]);
                        foreach($ecr_this as $ecr){
                            $ecr->proposedFile = $imageFile;
                            $this->ECR->save($ecr);
                        }
                    }
                }
                $this->Flash->success(__('The Engineering/Process Change Request has been saved.'));

                return $this->redirect(['action' => 'requests']);
            }
            $this->Flash->error(__('The Engineering/Process Change Request could not be saved. Please, Provide Each field data.'));
        }
        $this->set(compact('eCR'));
        $this->set('_serialize', ['eCR']);
        $this->set('ecr_no', $ecr_no['id']+1);
        $this->set('pic', $this->Auth->user('name'));
        $this->set('part_no', $part_no);
    }

    /**
     * Edit method
     *
     * @param string|null $id E C R id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $eCR = $this->ECR->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $eCR = $this->ECR->patchEntity($eCR, $this->request->getData());
            if ($this->ECR->save($eCR)) {
                $this->Flash->success(__('The Engineering/Process Change Request has been saved.'));

                return $this->redirect(['action' => 'notification']);
            }
            $this->Flash->error(__('The Engineering/Process Change Request could not be saved. Please, try again.'));
        }
        $this->set(compact('eCR'));
        $this->set('_serialize', ['eCR']);
    }

    /**
     * Delete method
     *
     * @param string|null $id E C R id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $eCR = $this->ECR->get($id);
        if ($this->ECR->delete($eCR)) {
            $this->Flash->success(__('The Engineering/Process Change Request has been deleted.'));
        } else {
            $this->Flash->error(__('The Engineering/Process Change Request could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function notification(){
        $ecr = null;
        if($this->Auth->user('role') == 'head-dept'){
            $ecr = $this->paginate($this->ECR->find('all')
                ->where(['stat' => 'pending']));
            $ecr->action = 'verify';
        }elseif($this->Auth->user('role') == 'draft-man'){
            $ecr = $this->paginate($this->ECR->find('all')
                ->where(['stat' => 'verified']));
            $ecr->action = 'acknowledge';
        }elseif($this->Auth->user('role') == 'eng-manager'){
            $ecr = $this->paginate($this->ECR->find('all')
                ->where(['stat' => 'acknowledged']));
            $ecr->action = 'approve';
        }
        $this->set('ecrs', $ecr);
    }

    public function verify($id = null){
        $eCR = $this->ECR->get($id, [
            'contain' => []
        ]);

        if($eCR->stat != 'pending'){
            $this->Flash->error(__('This Engineering/Process Change Request is already verified/rejected!'));
            return $this->redirect(['action' => 'notification']);
        }

        $this->set('eCR', $eCR);
        $this->set('_serialize', ['eCR']);
    }

    public function acknowledge($id = null){
        $eCR = $this->ECR->get($id, [
            'contain' => []
        ]);

        if($eCR->stat != 'verified'){
            $this->Flash->error(__('This Engineering/Process Change Request is already acknowledged/rejected!'));
            return $this->redirect(['action' => 'notification']);
        }

        $this->set('eCR', $eCR);
        $this->set('_serialize', ['eCR']);
    }

    public function approve($id = null){
        $eCR = $this->ECR->get($id, [
            'contain' => []
        ]);

        if($eCR->stat != 'acknowledged'){
            $this->Flash->error(__('This Engineering/Process Change Request is already approved/rejected!'));
            return $this->redirect(['action' => 'notification']);
        }

        $this->set('eCR', $eCR);
        $this->set('_serialize', ['eCR']);
    }

    public function testForm(){
        $this->autoRender = false;
        if($this->request->is('post')){
            $fileName = $this->request->getData();
            print_r($fileName);
        }
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

        if(isset($user['role']) && $user['role'] === 'head-dept'){
            if(in_array($this->request->action, ['notification', 'verify', 'edit'])){
                return true;
            }
        }

        if(isset($user['role']) && $user['role'] === 'eng-manager'){
            if(in_array($this->request->action, ['notification', 'approve', 'edit'])){
                return true;
            }
        }

        if(isset($user['role']) && $user['role'] === 'draft-man'){
            if(in_array($this->request->action, ['notification', 'acknowledge', 'edit'])){
                return true;
            }
        }

        return parent::isAuthorized($user);

    }

    public function requests(){
        //$this->autoRender = false;
        $ecr = null;
        if($this->Auth->user('role') == 'eng-personnel'){
            $ecr = $this->paginate($this->ECR->find('all')
                ->where(['stat' => 'pending'])
                ->orwhere(['stat' => 'rejected'])
                ->orwhere(['stat' => 'acknowledged']));
        }
        $this->set('ecrs', $ecr);
//        echo "<pre>";
//        var_dump($ecr);
//        echo "</pre>";
    }

    public function editRequests($id = null){
    	$this->loadModel('PartMasterList');
        $partMasterList = $this->paginate($this->PartMasterList);
        $part_no = null;
        foreach($partMasterList as $pm){
            $part_no .= '{label:"'.$pm->partName.'",idx:"'.$pm->partNo.'",drawNo:"'.$pm->drawingNo.'"},';
        }
        $part_no = rtrim($part_no, ',');
        $eCR = $this->ECR->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $eCR = $this->ECR->patchEntity($eCR, $this->request->getData());
            if ($this->ECR->save($eCR)) {
                $ecr_no = $id;
                if($this->request->getData('currentFile') != null){
                    $fileName = $this->request->getData('currentFile');
                    $ext = substr(strtolower(strrchr($fileName['name'], '.')), 1);
                    $arr_ext = array('jpg', 'jpeg', 'gif', 'png');
                    $setNewFileName = 'currentFile';
                    $imageFileName = $setNewFileName . '.' . $ext;
                    $uploadPath = WWW_ROOT.'uploads/ecr/'.$ecr_no.'/';
                    if(!file_exists($uploadPath)){
                        mkdir($uploadPath);
                    }
                    $uploadFile = $uploadPath.$imageFileName;
                    //$this->request->getData('uploadedFile') = $uploadFile;
                    //print_r($fileName);
                    if(move_uploaded_file($fileName['tmp_name'], $uploadFile)){
                        $imageFile = 'uploads/ecr/'.$ecr_no.'/'.$imageFileName;
                        $ecr_this = $this->ECR->find()
                            ->where(['id' => $ecr_no]);
                        foreach($ecr_this as $ecr){
                            $ecr->currentFile = $imageFile;
                            $this->ECR->save($ecr);
                        }
                    }
                }
                if($this->request->getData('proposedFile') != null){
                    $fileName = $this->request->getData('proposedFile');
                    $ext = substr(strtolower(strrchr($fileName['name'], '.')), 1);
                    $arr_ext = array('jpg', 'jpeg', 'gif', 'png');
                    $setNewFileName = 'proposedFile';
                    $imageFileName = $setNewFileName . '.' . $ext;
                    $uploadPath = WWW_ROOT.'uploads/ecr/'.$ecr_no.'/';
                    if(!file_exists($uploadPath)){
                        mkdir($uploadPath);
                    }
                    $uploadFile = $uploadPath.$imageFileName;
                    //$this->request->getData('uploadedFile') = $uploadFile;
                    //print_r($fileName);
                    if(move_uploaded_file($fileName['tmp_name'], $uploadFile)){
                        $imageFile = 'uploads/ecr/'.$ecr_no.'/'.$imageFileName;
                        $ecr_this = $this->ECR->find()
                            ->where(['id' => $ecr_no]);
                        foreach($ecr_this as $ecr){
                            $ecr->proposedFile = $imageFile;
                            $this->ECR->save($ecr);
                        }
                    }
                }
                $this->Flash->success(__('The Engineering/Process Change Request has been saved.'));

                return $this->redirect(['action' => 'requests']);
            }
            $this->Flash->error(__('The Engineering/Process Change Request could not be saved. Please, try again.'));
        }
        $this->set(compact('eCR'));
        $this->set('_serialize', ['eCR']);
        $this->set('part_no', $part_no);
    }

}
