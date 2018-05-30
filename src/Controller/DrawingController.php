<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Drawing Controller
 *
 * @property \App\Model\Table\DrawingTable $Drawing
 *
 * @method \App\Model\Entity\Drawing[] paginate($object = null, array $settings = [])
 */
class DrawingController extends AppController
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
        $drawing = $this->paginate($this->Drawing->find('all')
        ->where(['stat' => 'approved']));

        $this->set(compact('drawing'));
        $this->set('_serialize', ['drawing']);
    }

    /**
     * View method
     *
     * @param string|null $id Drawing id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $drawing = $this->Drawing->get($id, [
            'contain' => []
        ]);

        $this->loadModel('ChildDrawing');
        $childDrawings = $this->ChildDrawing->find()
            ->where(['projectId' => $drawing->id]);

        $this->set('drawing', $drawing);
        $this->set('_serialize', ['drawing']);
        $this->set('childDrawing', $childDrawings);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        //$this->autoRender = false;
        $drawing = $this->Drawing->newEntity();
        if ($this->request->is('post')) {
            $drawing = $this->Drawing->patchEntity($drawing, $this->request->getData());
            if ($this->Drawing->save($drawing)) {
                if($this->request->getData('uploadedFile') != ''){
                    $fileName = $this->request->getData('uploadedFile');
                    $project_no = $this->Drawing->find('all', ['fields' => 'id'])->last();
                    $ext = substr(strtolower(strrchr($fileName['name'], '.')), 1);
                    $arr_ext = array('jpg', 'jpeg', 'gif', 'png');
                    $setNewFileName = 'uploadedFile';
                    $imageFileName = $setNewFileName . '.' . $ext;
                    $uploadPath = WWW_ROOT.'uploads/drawings/'.$project_no['id'].'/';
                    if(!file_exists($uploadPath)){
                        mkdir($uploadPath);
                    }
                    $uploadFile = $uploadPath.$imageFileName;
                    //$this->request->getData('uploadedFile') = $uploadFile;
                    //print_r($fileName);
                    if(move_uploaded_file($fileName['tmp_name'], $uploadFile)){
                        $imageFile = 'uploads/drawings/'.$project_no['id'].'/'.$imageFileName;
                        $drawing_this = $this->Drawing->find()
                            ->where(['id' => $project_no['id']]);
                        foreach($drawing_this as $draw){
                            $draw->uploadedFile = $imageFile;
                            $this->Drawing->save($draw);
                        }
                    }
                }
                if($this->request->getData('total') != null){
                    $this->loadModel('ChildDrawing');
                    $childTable = TableRegistry::get('ChildDrawing');
                    $childData = array();
                    $drawing_no = $this->ChildDrawing->find('all', ['fields' => 'id'])->last();
                    for($i = 1; $i <= $this->request->getData('total'); $i++){
                        if($this->request->getData('uploadedFile'.$i) != ''){
                            $fileName = $this->request->getData('uploadedFile'.$i);
                            $ext = substr(strtolower(strrchr($fileName['name'], '.')), 1);
                            $arr_ext = array('jpg', 'jpeg', 'gif', 'png');
                            $setNewFileName = 'uploadedFile'.($drawing_no['id']+1);
                            $imageFileName = $setNewFileName . '.' . $ext;
                            $uploadPath = WWW_ROOT.'uploads/child-drawings/'.$project_no['id'].'/';
                            if(!file_exists($uploadPath)){
                                mkdir($uploadPath);
                            }
                            $uploadFile = $uploadPath.$imageFileName;
                            if(move_uploaded_file($fileName['tmp_name'], $uploadFile)){
                                $imageFile = 'uploads/child-drawings/'.$project_no['id'].'/'.$imageFileName;
                                $childData[$i]['uploadedFile'] = $imageFile;
                            }
                        }
                        $childData[$i]['drawingName'] = $this->request->getData('drawingName'.$i);
                        $childData[$i]['drawingNo'] = $this->request->getData('drawingNo'.$i);
                        $childData[$i]['revNo'] = $this->request->getData('revNo'.$i);
                        $childData[$i]['projectId'] = $project_no['id'];
                        $drawing_no['id']++;
                    }
                    $children = $childTable->newEntities($childData);
                    foreach($children as $child){
                        $childTable->save($child);
                    }
                }
                $this->Flash->success(__('The drawing has been saved.'));

                return $this->redirect(['action' => 'requests']);
            }
            $this->Flash->error(__('The drawing could not be saved. Please, try again.'));
        }
        $this->set(compact('drawing'));
        $this->set('_serialize', ['drawing']);
        $this->set('pic', $this->Auth->user('name'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Drawing id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $drawing = $this->Drawing->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $drawing = $this->Drawing->patchEntity($drawing, $this->request->getData());
            if ($this->Drawing->save($drawing)) {
                $this->Flash->success(__('The drawing has been saved.'));

                return $this->redirect(['action' => 'notification']);
            }
            $this->Flash->error(__('The drawing could not be saved. Please, try again.'));
        }
        $this->set(compact('drawing'));
        $this->set('_serialize', ['drawing']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Drawing id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $drawing = $this->Drawing->get($id);
        if ($this->Drawing->delete($drawing)) {
            $this->Flash->success(__('The drawing has been deleted.'));
        } else {
            $this->Flash->error(__('The drawing could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function addDrawings(){
        $this->autoRender = false;
        $drawing_no = null;
        $this->loadModel('ChildDrawing');
        $drawing = $this->ChildDrawing->newEntity();
        if ($this->request->is('post')) {
            $drawing = $this->ChildDrawing->patchEntity($drawing, $this->request->getData());
            if ($this->ChildDrawing->save($drawing)) {
                if($this->request->getData('uploadedFile') != ''){
                    $fileName = $this->request->getData('uploadedFile');
                    $drawing_no = $this->ChildDrawing->find('all', ['fields' => 'id'])->last();
                    $ext = substr(strtolower(strrchr($fileName['name'], '.')), 1);
                    $arr_ext = array('jpg', 'jpeg', 'gif', 'png');
                    $setNewFileName = 'uploadedFile'.$drawing_no['id'];
                    $imageFileName = $setNewFileName . '.' . $ext;
                    $uploadPath = WWW_ROOT.'uploads/child-drawings/'.$this->request->getData('projectId').'/';
                    if(!file_exists($uploadPath)){
                        mkdir($uploadPath);
                    }
                    $uploadFile = $uploadPath.$imageFileName;
                    //$this->request->getData('uploadedFile') = $uploadFile;
                    //print_r($fileName);
                    if(move_uploaded_file($fileName['tmp_name'], $uploadFile)){
                        $imageFile = 'uploads/child-drawings/'.$this->request->getData('projectId').'/'.$imageFileName;
                        $drawing_this = $this->ChildDrawing->find()
                            ->where(['id' => $drawing_no['id']]);
                        foreach($drawing_this as $draw){
                            $draw->uploadedFile = $imageFile;
                            $this->ChildDrawing->save($draw);
                        }
                    }
                }
                $this->Flash->success(__('The drawing has been saved.'));

                return $this->redirect(['action' => 'editRequests', $this->request->getData('projectId')]);
            }
            $this->Flash->error(__('The drawing could not be saved. Please, try again.'));
            $this->redirect(['action' => 'editRequests', $this->request->getData('projectId')]);
        }
    }

    public function viewDrawing($id = null){
        $this->loadModel('ChildDrawing');
        $drawing = $this->ChildDrawing->get($id, [
            'contain' => []
        ]);

        $this->set('drawing', $drawing);
        $this->set('_serialize', ['drawing']);
    }

    public function testForm(){
        $this->autoRender = false;
        if($this->request->is('post')){
            print_r($this->request->getData());
        }
    }

    public function notification()
    {
        $drawing = null;
        if($this->Auth->user('role') == 'consultant'){
            $drawing = $this->paginate($this->Drawing->find('all')
                ->where(['stat' => 'pending']));
            $drawing->action = 'check';
        }elseif($this->Auth->user('role') == 'marketing-director'){
            $drawing = $this->paginate($this->Drawing->find('all')
                ->where(['stat' => 'checked']));
            $drawing->action = 'approve';
        }
        $this->set('drawings', $drawing);
        $this->set('_serialize', ['drawings']);
    }

    public function check($id = null){
        $drawing = $this->Drawing->get($id, [
            'contain' => []
        ]);

        if($drawing->stat != 'pending'){
            $this->Flash->error(__('This Drawing is already checked/rejected!'));
            return $this->redirect(['action' => 'notification']);
        }

        $this->set('drawing', $drawing);
        $this->set('_serialize', ['drawing']);
        $this->set('pic', $this->Auth->user('name'));
    }

    public function approve($id = null){
        $drawing = $this->Drawing->get($id, [
            'contain' => []
        ]);

        if($drawing->stat != 'checked'){
            $this->Flash->error(__('This Drawing is already approved/rejected!'));
            return $this->redirect(['action' => 'notification']);
        }

        $this->set('drawing', $drawing);
        $this->set('_serialize', ['drawing']);
        $this->set('pic', $this->Auth->user('name'));
    }

    public function isAuthorized($user){
        // All registered users can add articles
        if ($this->request->getParam('action') === 'index' || $this->request->getParam('action') === 'view') {
            return true;
        }

        if(isset($user['role']) && $user['role'] === 'eng-personnel'){
            if(in_array($this->request->action, ['add', 'addDrawings', 'edit', 'requests', 'editRequests'])){
                return true;
            }
        }

        if(isset($user['role']) && $user['role'] === 'consultant'){
            if(in_array($this->request->action, ['notification', 'check', 'edit'])){
                return true;
            }
        }

        if(isset($user['role']) && $user['role'] === 'marketing-director'){
            if(in_array($this->request->action, ['notification', 'approve', 'edit'])){
                return true;
            }
        }

        return parent::isAuthorized($user);

    }

    public function requests(){
        $drawing = null;
        if($this->Auth->user('role') == 'eng-personnel'){
            $drawing = $this->paginate($this->Drawing->find('all')
                ->where(['stat' => 'pending'])
->orwhere(['stat' => 'rejected'])
                ->orwhere(['stat' => 'acknowledged'])
);
        }
        $this->set('drawings', $drawing);
        $this->set('_serialize', ['drawings']);
    }

    public function editRequests($id = null){
        $drawing = $this->Drawing->get($id, [
            'contain' => []
        ]);
        $this->loadModel('ChildDrawing');
        $childDrawings = $this->ChildDrawing->find('all')
            ->where(['projectId' => $drawing->id]);
        $count = 0;
        foreach($childDrawings as $cd){
            $count++;
        }
        if ($this->request->is(['patch', 'post', 'put'])) {
            $drawing = $this->Drawing->patchEntity($drawing, $this->request->getData());
            if ($this->Drawing->save($drawing)) {
                if($this->request->getData('uploadFile') != null){
                    $fileName = $this->request->getData('uploadFile');
                    $project_no = $id;
                    $ext = substr(strtolower(strrchr($fileName['name'], '.')), 1);
                    $arr_ext = array('jpg', 'jpeg', 'gif', 'png');
                    $setNewFileName = 'uploadedFile';
                    $imageFileName = $setNewFileName . '.' . $ext;
                    $uploadPath = WWW_ROOT.'uploads/drawings/'.$project_no.'/';
                    if(!file_exists($uploadPath)){
                        mkdir($uploadPath);
                    }
                    $uploadFile = $uploadPath.$imageFileName;
                    //$this->request->getData('uploadedFile') = $uploadFile;
                    //print_r($fileName);
                    if(move_uploaded_file($fileName['tmp_name'], $uploadFile)){
                        $imageFile = 'uploads/drawings/'.$project_no.'/'.$imageFileName;
                        $drawing_this = $this->Drawing->find()
                            ->where(['id' => $id]);
                        foreach($drawing_this as $draw){
                            $draw->uploadedFile = $imageFile;
                            $this->Drawing->save($draw);
                        }
                    }
                }
                for($i = 1; $i <= $count; $i++){
                    $shama = $this->ChildDrawing->get($this->request->getData('idNo'.$i), [
                        'contain' => []
                    ]);
                    $shama->drawingNo = $this->request->getData('drawingNo'.$i);
                    $shama->revNo = $this->request->getData('revNo'.$i);
                    $shama->drawingName = $this->request->getData('drawingName'.$i);
                    if($this->request->getData('uploadedFile'.$i) != ''){
                        $fileName = $this->request->getData('uploadedFile'.$i);
                        $drawing_no = $this->request->getData('idNo'.$i);
                        $ext = substr(strtolower(strrchr($fileName['name'], '.')), 1);
                        $arr_ext = array('jpg', 'jpeg', 'gif', 'png');
                        $setNewFileName = 'uploadedFile'.$drawing_no;
                        $imageFileName = $setNewFileName . '.' . $ext;
                        $uploadPath = WWW_ROOT.'uploads/child-drawings/'.$id.'/';
                        if(!file_exists($uploadPath)){
                            mkdir($uploadPath);
                        }
                        $uploadFile = $uploadPath.$imageFileName;
                        //$this->request->getData('uploadedFile') = $uploadFile;
                        //print_r($fileName);
                        if(move_uploaded_file($fileName['tmp_name'], $uploadFile)){
                            $imageFile = 'uploads/child-drawings/'.$id.'/'.$imageFileName;
                            $shama->uploadedFile = $imageFile;
                        }
                    }
                    $this->ChildDrawing->save($shama);
                }
                $this->Flash->success(__('The drawing has been saved.'));

                return $this->redirect(['action' => 'requests']);
            }
            $this->Flash->error(__('The drawing could not be saved. Please, try again.'));
        }
        $this->set(compact('drawing'));
        $this->set('_serialize', ['drawing']);
        $this->set('childDrawings', $childDrawings);
        $this->set('count', $count);
    }

}
