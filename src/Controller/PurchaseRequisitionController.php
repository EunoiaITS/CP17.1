<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * PurchaseRequisition Controller
 *
 * @property \App\Model\Table\PurchaseRequisitionTable $PurchaseRequisition
 *
 * @method \App\Model\Entity\PurchaseRequisition[] paginate($object = null, array $settings = [])
 */
class PurchaseRequisitionController extends AppController
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
        $purchaseRequisition = $this->paginate($this->PurchaseRequisition->find('all',['order'=>['PurchaseRequisition.id'=>'desc']])
        ->where(['status' => 'approved']));

        $this->set(compact('purchaseRequisition'));
        $this->set('_serialize', ['purchaseRequisition']);
    }

    public function notification()
    {
        $purchaseRequisition = null;
        if($this->Auth->user('role') == 'eng-manager'){
            $purchaseRequisition = $this->paginate($this->PurchaseRequisition->find('all')
                ->where(['status' => 'pending']));
            $purchaseRequisition->action = 'acknowledge';
        }elseif($this->Auth->user('role') == 'managing-director'){
            $purchaseRequisition = $this->paginate($this->PurchaseRequisition->find('all')
                ->where(['status' => 'acknowledged']));
            $purchaseRequisition->action = 'approve';
        }
        $this->set('purchaseRequisition', $purchaseRequisition);
    }

    /**
     * View method
     *
     * @param string|null $id Purchase Requisition id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $purchaseRequisition = $this->PurchaseRequisition->get($id, [
            'contain' => []
        ]);
        $this->loadModel('PurchaseRequisitionDescription');
        $childDrawings = $this->PurchaseRequisitionDescription->find()
            ->where(['purchaseRequisitionId' => $purchaseRequisition->id]);
//        echo '<pre>';
//        print_r($childDrawings);
//        exit();

        $this->set('purchaseRequisition', $purchaseRequisition);
        $this->set('_serialize', ['purchaseRequisition']);
        $this->set('childDrawing', $childDrawings);
    }

    public function acknowledge($id = null)
    {
        $purchaseRequisition = $this->PurchaseRequisition->get($id, [
            'contain' => []
        ]);

        if($purchaseRequisition->status != 'pending'){
            $this->Flash->error(__('This purchase requisition is already acknowledged/rejected!'));
            return $this->redirect(['action' => 'notification']);
        }

        $this->loadModel('PurchaseRequisitionDescription');
        $childDrawings = $this->PurchaseRequisitionDescription->find()
            ->where(['purchaseRequisitionId' => $purchaseRequisition->id]);

        $this->set('purchaseRequisition', $purchaseRequisition);
        $this->set('_serialize', ['purchaseRequisition']);
        $this->set('childDrawing', $childDrawings);
        $this->set('pic', $this->Auth->user('name'));
    }

    public function approve($id = null)
    {
        $purchaseRequisition = $this->PurchaseRequisition->get($id, [
            'contain' => []
        ]);

        if($purchaseRequisition->status != 'acknowledged'){
            $this->Flash->error(__('This purchase requisition is already approved/rejected!'));
            return $this->redirect(['action' => 'notification']);
        }

        $this->loadModel('PurchaseRequisitionDescription');
        $childDrawings = $this->PurchaseRequisitionDescription->find()
            ->where(['purchaseRequisitionId' => $purchaseRequisition->id]);

        $this->set('purchaseRequisition', $purchaseRequisition);
        $this->set('_serialize', ['purchaseRequisition']);
        $this->set('childDrawing', $childDrawings);
        $this->set('pic', $this->Auth->user('name'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

        //$this->autoRender = false;
        $this->loadModel('Drawing');
        $drawing = $this->paginate($this->Drawing);
        $drawing_no = null;
        $drawing_name = null;
        foreach($drawing as $pm){
            $drawing_no .= '{label:"'.$pm->drawingName.'",idx:"'.$pm->drawingNo.'"},';
            $drawing_name .= '{label:"'.$pm->drawingNo.'",idx:"'.$pm->drawingName.'"},';
        }
        $drawing_no = rtrim($drawing_no, ',');
        $drawing_name = rtrim($drawing_name, ',');
        $part_no = $this->PurchaseRequisition->find('all', ['fields' => 'id'])->last();
        $purchaseRequisition = $this->PurchaseRequisition->newEntity();
        if ($this->request->is('post')) {
            $purchaseRequisition = $this->PurchaseRequisition->patchEntity($purchaseRequisition, $this->request->getData());
//            echo '<pre>';
//            print_r($purchaseRequisition);
//            exit();
            if ($this->PurchaseRequisition->save($purchaseRequisition)) {
                if ($this->request->getData('upload') != '') {
                    $fileName = $this->request->getData('upload');
                    $part_no = $this->PurchaseRequisition->find('all', ['fields' => 'id'])->last();
                    $ext = substr(strtolower(strrchr($fileName['name'], '.')), 1);
                    $arr_ext = array('jpg', 'jpeg', 'gif', 'png');
                    $setNewFileName = 'uploadedFile';
                    $imageFileName = $setNewFileName . '.' . $ext;
                    $uploadPath = WWW_ROOT . 'uploads/purchaseRequisition/' . $part_no['id'] . '/';
                    if (!file_exists($uploadPath)) {
                        mkdir($uploadPath);
                    }
                    $uploadFile = $uploadPath.$imageFileName;
                    //$this->request->getData('uploadedFile') = $uploadFile;
                    //print_r($fileName);
                    if (move_uploaded_file($fileName['tmp_name'], $uploadFile)) {
                        $imageFile = 'uploads/purchaseRequisition/'.$part_no['id'].'/'.$imageFileName;
                        $partMasterList_this = $this->PurchaseRequisition->find()
                            ->where(['id' => $part_no['id']]);
                        foreach ($partMasterList_this as $draw) {
                            $draw->upload = $imageFile;
                            $this->PurchaseRequisition->save($draw);
                        }
                    }
                    $purchaseRequisitionId = $part_no['id'];

                }
                if ($this->request->getData('total') != '') {
                    $childTable = TableRegistry::get('PurchaseRequisitionDescription');
                    $childData = array();
                    for ($i = 1; $i <= $this->request->getData('total'); $i++) {
                        $childData[$i]['drawingName'] = $this->request->getData('drawingName' . $i);
                        $childData[$i]['purchaseRequisitionId'] = $purchaseRequisitionId;
                        $childData[$i]['drawingNo'] = $this->request->getData('drawingNo' . $i);
                        $childData[$i]['qty'] = $this->request->getData('qty' . $i);
                        $childData[$i]['uom'] = $this->request->getData('uom' . $i);
                        $childData[$i]['uPPrice'] = $this->request->getData('uPPrice' . $i);
                        $childData[$i]['amount'] = $this->request->getData('amount' . $i);
                    }
                    $children = $childTable->newEntities($childData);
                    foreach ($children as $child) {
                        $childTable->save($child);
                    }
                }

                $this->Flash->success(__('The purchase requisition has been saved.'));
                
                $urlToEng = 'http://salesmodule.acumenits.com/purchase-requisition/eng-receive';
                $sendToEng = $this->request->getData();


        $optionsForEng = [
            'http' => [
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($sendToEng)
            ]
        ];
        $contextForEng  = stream_context_create($optionsForEng);
        $resultFromEng = file_get_contents($urlToEng, false, $contextForEng);
        if ($resultFromEng === FALSE) {
            echo 'ERROR!!';
        }
        $dataFromEng = json_decode($resultFromEng);


        return $this->redirect(['action' => 'requests']);

    }
$this->Flash->error(__('The purchase requisition could not be saved. Please, try again.'));
}

	$finalResult = null;
        $options = [
            'http' => [
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'GET'
            ]
        ];
        $context  = stream_context_create($options);
        $xml = file_get_contents("http://salesmodule.acumenits.com/supplier/get-all", false, $context);
        $suppliers = json_decode($xml);
        foreach($suppliers as $supplier){
            $finalResult .= '"'.$supplier->name.'",';
        }
        $finalResult = rtrim($finalResult, ',');
        $this->set('supplier', $finalResult);
        $this->set(compact('purchaseRequisition'));
        $this->set('_serialize', ['purchaseRequisition']);
        $this->set('pic', $this->Auth->user('name'));
        $this->set('snNo', $part_no['id']+1);
        $this->set('drawing_no', $drawing_no);
        $this->set('drawing_name',$drawing_name);

    }

    /**
     * Edit method
     *
     * @param string|null $id Purchase Requisition id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $purchaseRequisition = $this->PurchaseRequisition->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $purchaseRequisition = $this->PurchaseRequisition->patchEntity($purchaseRequisition, $this->request->getData());
            if ($this->PurchaseRequisition->save($purchaseRequisition)) {
                $this->Flash->success(__('The purchase requisition has been saved.'));

                return $this->redirect(['action' => 'notification']);
            }
            $this->Flash->error(__('The purchase requisition could not be saved. Please, try again.'));
        }
        $this->set(compact('purchaseRequisition'));
        $this->set('_serialize', ['purchaseRequisition']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Purchase Requisition id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $purchaseRequisition = $this->PurchaseRequisition->get($id);
        if ($this->PurchaseRequisition->delete($purchaseRequisition)) {
            $this->Flash->success(__('The purchase requisition has been deleted.'));
        } else {
            $this->Flash->error(__('The purchase requisition could not be deleted. Please, try again.'));
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

        if(isset($user['role']) && $user['role'] === 'proc-manager'){
            if(in_array($this->request->action, ['notification', 'approve', 'edit'])){
                return true;
            }
        }

        return parent::isAuthorized($user);

    }

    public function requests(){
        $purchaseRequisition = null;
        if($this->Auth->user('role') == 'eng-personnel'){
            $purchaseRequisition = $this->paginate($this->PurchaseRequisition->find('all')
                ->where(['status' => 'pending'])
->orwhere(['status' => 'rejected'])
                ->orwhere(['status' => 'acknowledged'])
);
        }
        $this->set('purchaseRequisition', $purchaseRequisition);
    }

    public function editRequests($id = null){
    	$this->loadModel('Drawing');
        $drawing = $this->paginate($this->Drawing);
        $drawing_no = null;
        $drawing_name = null;
        foreach($drawing as $pm){
            $drawing_no .= '{label:"'.$pm->drawingName.'",idx:"'.$pm->drawingNo.'"},';
            $drawing_name .= '{label:"'.$pm->drawingNo.'",idx:"'.$pm->drawingName.'"},';
        }
        $drawing_no = rtrim($drawing_no, ',');
        $drawing_name = rtrim($drawing_name, ',');
        $purchaseRequisition = $this->PurchaseRequisition->get($id, [
            'contain' => []
        ]);
        $this->loadModel('PurchaseRequisitionDescription');
        $prDesc = $this->PurchaseRequisitionDescription->find('all')
            ->where(['PurchaseRequisitionId' => $purchaseRequisition->id]);
        $count = 0;
        foreach($prDesc as $pr){
            $count++;
        }
        if ($this->request->is(['patch', 'post', 'put'])) {
            $purchaseRequisition = $this->PurchaseRequisition->patchEntity($purchaseRequisition, $this->request->getData());
            if ($this->PurchaseRequisition->save($purchaseRequisition)) {
                if ($this->request->getData('uploadFile') != '') {
                    $fileName = $this->request->getData('uploadFile');
                    $part_no = $id;
                    $ext = substr(strtolower(strrchr($fileName['name'], '.')), 1);
                    $arr_ext = array('jpg', 'jpeg', 'gif', 'png');
                    $setNewFileName = 'uploadedFile';
                    $imageFileName = $setNewFileName . '.' . $ext;
                    $uploadPath = WWW_ROOT . 'uploads/purchaseRequisition/' . $part_no . '/';
                    if (!file_exists($uploadPath)) {
                        mkdir($uploadPath);
                    }
                    $uploadFile = $uploadPath.$imageFileName;
                    if (move_uploaded_file($fileName['tmp_name'], $uploadFile)) {
                        $imageFile = 'uploads/purchaseRequisition/'.$part_no.'/'.$imageFileName;
                        $purchaseRequisition_this = $this->PurchaseRequisition->find()
                            ->where(['id' => $part_no]);
                        foreach ($purchaseRequisition_this as $draw) {
                            $draw->upload = $imageFile;
                            $this->PurchaseRequisition->save($draw);
                        }
                    }
                }
                for($i = 1; $i <= $count; $i++){
                    $shama = $this->PurchaseRequisitionDescription->get($this->request->getData('idNo'.$i), [
                        'contain' => []
                    ]);
                    $shama->drawingName = $this->request->getData('drawingName'.$i);
                    $shama->drawingNo = $this->request->getData('drawingNo'.$i);
                    $shama->qty = $this->request->getData('qty'.$i);
                    $shama->uom = $this->request->getData('uom'.$i);
                    $shama->uPPrice = $this->request->getData('uPPrice'.$i);
                    $shama->amount = $this->request->getData('amount'.$i);
                    $this->PurchaseRequisitionDescription->save($shama);
                }
                $this->Flash->success(__('The purchase requisition has been saved.'));

                return $this->redirect(['action' => 'requests']);
            }
            $this->Flash->error(__('The purchase requisition could not be saved. Please, try again.'));
        }
        $finalResult = null;
        $options = [
            'http' => [
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'GET'
            ]
        ];
        $context  = stream_context_create($options);
        $xml = file_get_contents("http://salesmodule.acumenits.com/supplier/get-all", false, $context);
        $suppliers = json_decode($xml);
        foreach($suppliers as $supplier){
            $finalResult .= '"'.$supplier->name.'",';
        }
        $finalResult = rtrim($finalResult, ',');
        $this->set('supplier', $finalResult);
        $this->set(compact('purchaseRequisition'));
        $this->set('_serialize', ['purchaseRequisition']);
        $this->set('prDesc', $prDesc);
        $this->set('count', $count);
        $this->set('drawing_no', $drawing_no);
        $this->set('drawing_name',$drawing_name);
    }

}
