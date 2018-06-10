<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * BOM Controller
 *
 * @property \App\Model\Table\BOMTable $BOM
 *
 * @method \App\Model\Entity\BOM[] paginate($object = null, array $settings = [])
 */
class BOMController extends AppController
{

    public $paginate = [
        // Other keys here.
        'maxLimit' => 10
    ];

    public function initialize(){
        parent::initialize();
        $this->viewBuilder()->setLayout('mainframe');
    }
    public function dashboard(){

    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $bOM = $this->paginate($this->BOM);
        $this->set('_serialize', ['bOM']);
        $this->set(compact('bOM'));
        $this->loadModel('BOMParts');
        foreach($bOM as $b){
            $bomParts = $this->BOMParts->find('all')
                ->where(['bomId' => $b->id]);
            $b->childParts = $bomParts;
        }

    }

    /**
     * View method
     *
     * @param string|null $id B O M id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bOM = $this->BOM->get($id, [
            'contain' => []
        ]);
        $this->loadModel('BOMParts');
        $bomParts = $this->BOMParts->find('all')
            ->where(['bomId' => $bOM->id]);

        $this->set('bOM', $bOM);
        $this->set('_serialize', ['bOM']);
        $this->set('bomParts', $bomParts);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->loadModel('Material');
        $this->loadModel('Finishing');
        $finishing = $this->Finishing->find('all');
        $this->set('finishing',$finishing);
        $material = $this->Material->find('all');
        $this->set('material',$material);


        $this->loadModel('PartMasterList');
        $partMasterList = $this->paginate($this->PartMasterList);
        $part_no = $part_name = null;
        foreach($partMasterList as $pm){
            $part_no .= '{label:"'.$pm->partNo.'",idx:"'.$pm->partName.'"},';
            $part_name .= '{label:"'.$pm->partName.'",idx:"'.$pm->partNo.'"},';
        }
        $part_no = rtrim($part_no, ',');
        $part_name = rtrim($part_name, ',');
        $this->loadModel('Drawing');
        $drawing = $this->Drawing->find('all');
        $drawing_no = null;
        foreach($drawing as $pm){
            $drawing_no .= '{label:"'.$pm->drawingNo.'",rev:"'.$pm->revNo.'"},';
        }
        $drawing_no = rtrim($drawing_no, ',');
        $bOM = $this->BOM->newEntity();
        if ($this->request->is('post')) {
            $bOM->projectName = $this->request->getData('projectName');
            $bOM->model = $this->request->getData('model');
            $bOM->version = $this->request->getData('version');
            $bOM->partNo = $this->request->getData('partNo');
            $bOM->partName = $this->request->getData('partName');
            $bOM->drawingNo = $this->request->getData('drawingNo');
            $bOM->revNo = $this->request->getData('revNo');
            $bOM->material = $this->request->getData('material');
            $bOM->finishing = $this->request->getData('finishing');
            $bOM->common = $this->request->getData('common');
            $bOM->size = $this->request->getData('size');
            $bOM->quality = $this->request->getData('quality');
            $bOM->category = $this->request->getData('category');
            $bOM->process1 = $this->request->getData('process1-1');
            $bOM->process2 = $this->request->getData('process2-1');
            $bOM->process3 = $this->request->getData('process3-1');
            $bOM->process4 = $this->request->getData('process4-1');
            $bOM->process5 = $this->request->getData('process5-1');
            $bOM->process6 = $this->request->getData('process6-1');
            $bOM->supplier1 = $this->request->getData('supplier1-1');
            $bOM->supplier2 = $this->request->getData('supplier2-1');
            $bOM->supplier3 = $this->request->getData('supplier3-1');
            $bOM->supplier4 = $this->request->getData('supplier4-1');
            $bOM->supplier5 = $this->request->getData('supplier5-1');
            $bOM->supplier6 = $this->request->getData('supplier6-1');
            $bOM->stat = $this->request->getData('stat');
            $bOM->requested_by = $this->request->getData('requested_by');

            if ($this->BOM->save($bOM)) {

                $bom_no = $this->BOM->find('all', ['fields' => 'id'])->last();
                if($this->request->getData('total') != null){
                    $bomChild = TableRegistry::get('BOMParts');
                    $bomData = array();
                        for($i = 1; $i <= $this->request->getData('total'); $i++){
                            $bomData[$i]['bomId'] = $bom_no['id'];
                            $bomData[$i]['partNo'] = $this->request->getData('partNo'.$i);
                            $bomData[$i]['partName'] = $this->request->getData('partName'.$i);
                            $bomData[$i]['drawingNo'] = $this->request->getData('drawingNo'.$i);
                            $bomData[$i]['revNo'] = $this->request->getData('revNo'.$i);
                            $bomData[$i]['material'] = $this->request->getData('material'.$i);
                            $bomData[$i]['finishing'] = $this->request->getData('finishing'.$i);
                            $bomData[$i]['common'] = $this->request->getData('common'.$i);
                            $bomData[$i]['size'] = $this->request->getData('size'.$i);
                            $bomData[$i]['quality'] = $this->request->getData('quality'.$i);
                            $bomData[$i]['process1'] = $this->request->getData('process1-'.$i);
                            $bomData[$i]['process2'] = $this->request->getData('process2-'.$i);
                            $bomData[$i]['process3'] = $this->request->getData('process3-'.$i);
                            $bomData[$i]['process4'] = $this->request->getData('process4-'.$i);
                            $bomData[$i]['process5'] = $this->request->getData('process5-'.$i);
                            $bomData[$i]['process6'] = $this->request->getData('process6-'.$i);
                            $bomData[$i]['supplier1'] = $this->request->getData('supplier1-'.$i);
                            $bomData[$i]['supplier2'] = $this->request->getData('supplier2-'.$i);
                            $bomData[$i]['supplier3'] = $this->request->getData('supplier3-'.$i);
                            $bomData[$i]['supplier4'] = $this->request->getData('supplier4-'.$i);
                            $bomData[$i]['supplier5'] = $this->request->getData('supplier5-'.$i);
                            $bomData[$i]['supplier6'] = $this->request->getData('supplier6-'.$i);
                    }
                    $boms = $bomChild->newEntities($bomData);
                    foreach($boms as $bom){
                        $bomChild->save($bom);
                    }
                }
                $this->Flash->success(__('The Bill Of Material has been saved.'));

                $urlToEng = 'http://salesmodule.acumenits.com/bom/eng-receive';
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

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The Bill Of Material could not be saved. Please, try again.'));

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
        $this->set('supplier1', $finalResult);
        $this->set('supplier2', $finalResult);
        $this->set('supplier3', $finalResult);
        $this->set('supplier4', $finalResult);
        $this->set('supplier5', $finalResult);
        $this->set('supplier6', $finalResult);
        $this->set(compact('bOM'));
        $this->set('_serialize', ['bOM']);
        $this->set('pic', $this->Auth->user('name'));
        $this->set('part_no', $part_no);
        $this->set('part_name', $part_name);
        $this->set('drawing_no', $drawing_no);
    }

    /**
     * Edit method
     *
     * @param string|null $id B O M id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bOM = $this->BOM->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bOM = $this->BOM->patchEntity($bOM, $this->request->getData());
            if ($this->BOM->save($bOM)) {
                $this->Flash->success(__('The Bill Of Material has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The Bill Of Material could not be saved. Please, try again.'));
        }
        $this->set(compact('bOM'));
        $this->set('_serialize', ['bOM']);
    }

    /**
     * Delete method
     *
     * @param string|null $id B O M id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bOM = $this->BOM->get($id);
        if ($this->BOM->delete($bOM)) {
            $this->Flash->success(__('The Bill Of Material has been deleted.'));
        } else {
            $this->Flash->error(__('The Bill Of Material could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function testForm(){
        $this->autoRender = false;
        if($this->request->is('post')){
            if($this->request->getData('total') != null){
                $bomChild = TableRegistry::get('BOMParts');
                $bomData = array();
                for($i = 1; $i <= $this->request->getData('total'); $i++){
                    $bomData[$i]['bomId'] = 5;
                    $bomData[$i]['partNo'] = $this->request->getData('partNo'.$i);
                    $bomData[$i]['partName'] = $this->request->getData('partName'.$i);
                    $bomData[$i]['drawingNo'] = $this->request->getData('drawingNo'.$i);
                    $bomData[$i]['material'] = $this->request->getData('material'.$i);
                    $bomData[$i]['finishing'] = $this->request->getData('finishing'.$i);
                    $bomData[$i]['common'] = $this->request->getData('common'.$i);
                    $bomData[$i]['size'] = $this->request->getData('size'.$i);
                    $bomData[$i]['quality'] = $this->request->getData('quality'.$i);
                }
                $childs = $bomChild->newEntities($bomData);
                foreach($childs as $child){
                    $bomChild->save($child);
                }
            }
        }
    }

    public function notification(){
        $bom = null;
        if($this->Auth->user('role') == 'consultant'){
            $bom = $this->paginate($this->BOM->find('all')
                ->where(['stat' => 'pending']));
            $bom->action = 'check';
        }elseif($this->Auth->user('role') == 'marketing-director'){
            $bom = $this->paginate($this->BOM->find('all')
                ->where(['stat' => 'checked']));
            $bom->action = 'approve';
        }
        $this->set('boms', $bom);
    }

    public function check($id = null)
    {
        $bOM = $this->BOM->get($id, [
            'contain' => []
        ]);

        if($bOM->stat != 'pending'){
            $this->Flash->error(__('This Bill Of Material is already checked/rejected!'));
            return $this->redirect(['action' => 'notification']);
        }

        $this->loadModel('BOMParts');
        $bomParts = $this->BOMParts->find('all')
            ->where(['bomId' => $bOM->id]);

        $this->set('bOM', $bOM);
        $this->set('_serialize', ['bOM']);
        $this->set('bomParts', $bomParts);
    }

    public function approve($id = null)
    {
        $bOM = $this->BOM->get($id, [
            'contain' => []
        ]);

        if($bOM->stat != 'checked'){
            $this->Flash->error(__('This Bill Of Material is already approved/rejected!'));
            return $this->redirect(['action' => 'notification']);
        }

        $this->loadModel('BOMParts');
        $bomParts = $this->BOMParts->find('all')
            ->where(['bomId' => $bOM->id]);

        $this->set('bOM', $bOM);
        $this->set('_serialize', ['bOM']);
        $this->set('bomParts', $bomParts);
    }

    public function isAuthorized($user){
        // All registered users can add articles
        if ($this->request->getParam('action') === 'index' || $this->request->getParam('action') === 'view' || $this->request->getParam('action') === 'dashboard') {
            return true;
        }

        if(isset($user['role']) && $user['role'] === 'eng-personnel'){
            if(in_array($this->request->action, ['add', 'edit', 'requests', 'editRequests','dashboard'])){
                return true;
            }
        }

        if(isset($user['role']) && $user['role'] === 'consultant'){
            if(in_array($this->request->action, ['notification', 'check', 'edit','dashboard'])){
                return true;
            }
        }

        if(isset($user['role']) && $user['role'] === 'marketing-director'){
            if(in_array($this->request->action, ['notification', 'approve', 'edit','dashboard'])){
                return true;
            }
        }
        return parent::isAuthorized($user);
    }

    public function requests(){
        $bom = null;
        if($this->Auth->user('role') == 'eng-personnel'){
            $bom = $this->paginate($this->BOM->find('all')
                ->where(['stat' => 'pending'])
                ->orwhere(['stat' => 'rejected'])
                ->orwhere(['stat' => 'acknowledged'])
            );

        }
        $this->set('boms', $bom);
    }

    public function editRequests($id = null){
        $this->loadModel('PartMasterList');
        $partMasterList = $this->paginate($this->PartMasterList);
        $part_no = $part_name = null;
        foreach($partMasterList as $pm){
            $part_no .= '{label:"'.$pm->partNo.'",idx:"'.$pm->partName.'"},';
            $part_name .= '{label:"'.$pm->partName.'",idx:"'.$pm->partNo.'"},';
        }
        $part_no = rtrim($part_no, ',');
        $part_name = rtrim($part_name, ',');
        $this->loadModel('Drawing');
        $drawing = $this->paginate($this->Drawing);
        $drawing_no = null;
        foreach($drawing as $pm){
            $drawing_no .= '{label:"'.$pm->drawingName.'",idx:"'.$pm->drawingNo.'",rev:"'.$pm->revNo.'"},';
        }
        $drawing_no = rtrim($drawing_no, ',');
        $this->loadModel('Material');
        $this->loadModel('Finishing');
        $finishing = $this->Finishing->find('all');
        $this->set('finishing',$finishing);
        $material = $this->Material->find('all');
        $this->set('material',$material);
        $bOM = $this->BOM->get($id, [
            'contain' => []
        ]);
        $this->loadModel('BOMParts');
        $bomParts = $this->BOMParts->find('all')
            ->where(['bomId' => $bOM->id]);
        $count = 0;
        foreach($bomParts as $bom){
            $count++;
        }
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bOM = $this->BOM->patchEntity($bOM, $this->request->getData());
            if ($this->BOM->save($bOM)) {
                for($i = 1; $i <= $count; $i++){
                    $shama = $this->BOMParts->get($this->request->getData('idNo'.$i), [
                        'contain' => []
                    ]);
                    $shama->partNo = $this->request->getData('partNo'.$i);
                    $shama->partName = $this->request->getData('partName'.$i);
                    $shama->drawingNo = $this->request->getData('drawingNo'.$i);
                    $shama->revNo = $this->request->getData('revNo'.$i);
                    $shama->material = $this->request->getData('material'.$i);
                    $shama->finishing = $this->request->getData('finishing'.$i);
                    $shama->common = $this->request->getData('common'.$i);
                    $shama->size = $this->request->getData('size'.$i);
                    $shama->quality = $this->request->getData('quality'.$i);
                    $this->BOMParts->save($shama);
                }
                $this->Flash->success(__('The Bill Of Material has been saved.'));

                return $this->redirect(['action' => 'requests']);
            }
            $this->Flash->error(__('The Bill Of Material could not be saved. Please, try again.'));
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
        $this->set('supplier1', $finalResult);
        $this->set('supplier2', $finalResult);
        $this->set('supplier3', $finalResult);
        $this->set('supplier4', $finalResult);
        $this->set(compact('bOM'));
        $this->set('_serialize', ['bOM']);
        $this->set('bomParts', $bomParts);
        $this->set('count', $count);
        $this->set('part_no', $part_no);
        $this->set('part_name', $part_name);
        $this->set('drawing_no', $drawing_no);
    }
}
