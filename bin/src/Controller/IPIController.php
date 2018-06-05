<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * IPI Controller
 *
 * @property \App\Model\Table\IPITable $IPI
 *
 * @method \App\Model\Entity\IPI[] paginate($object = null, array $settings = [])
 */
class IPIController extends AppController
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
        $this->loadModel('PrepareIpi');
        $iPI = $this->paginate($this->PrepareIpi->find()
        ->where(['stat' => 'confirmed']));

        $this->set(compact('iPI'));
        $this->set('_serialize', ['iPI']);
    }

    /**
     * View method
     *
     * @param string|null $id I P I id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->loadModel('PrepareIpi');
        $this->loadModel('IpiTests');
        $iPI = $this->PrepareIpi->get($id, [
            'contain' => []
        ]);

        if($iPI->stat != 'confirmed'){
            $this->Flash->error(__('This Incoming Parts Inspection is not confirmed!'));
            return $this->redirect(['action' => 'index']);
        }

        $ipiTests = $this->IpiTests->find('all')
            ->where(['prepareId' => $id]);

        $this->set('iPI', $iPI);
        $this->set('_serialize', ['iPI']);
        $this->set('ipiTests', $ipiTests);
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
        $iPI = $this->IPI->newEntity();
        if ($this->request->is('post')) {
            $iPI = $this->IPI->patchEntity($iPI, $this->request->getData());
            if ($this->IPI->save($iPI)) {
                $this->Flash->success(__('The Incoming Parts Inspection has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            if($iPI->getErrors()){
                $error_msg = [];
                foreach( $iPI->getErrors() as $errors){
                    if(is_array($errors)){
                        foreach($errors as $error){
                            $error_msg[]    =   $error;
                        }
                    }else{
                        $error_msg[]    =   $errors;
                    }
                }

                if(!empty($error_msg)){
                    $this->Flash->error(
                        __("Please fix the following error(s):".implode("\n \r", $error_msg))
                    );
                }
            }
            //$this->Flash->error(__('The Incoming Parts Inspection could not be saved. Please, try again.'));
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
        $this->set(compact('iPI'));
        $this->set('_serialize', ['iPI']);
        $this->set('pic', $this->Auth->user('name'));
        $this->set('part_no', $part_no);
    }

    /**
     * Edit method
     *
     * @param string|null $id I P I id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $iPI = $this->IPI->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $iPI = $this->IPI->patchEntity($iPI, $this->request->getData());
            if ($this->IPI->save($iPI)) {
                $this->Flash->success(__('The Incoming Parts Inspection has been saved.'));

                return $this->redirect(['action' => 'forApprove']);
            }
            $this->Flash->error(__('The Incoming Parts Inspection could not be saved. Please, try again.'));
        }
        $this->set(compact('iPI'));
        $this->set('_serialize', ['iPI']);
    }

    /**
     * Delete method
     *
     * @param string|null $id I P I id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $iPI = $this->IPI->get($id);
        if ($this->IPI->delete($iPI)) {
            $this->Flash->success(__('The Incoming Parts Inspection has been deleted.'));
        } else {
            $this->Flash->error(__('The Incoming Parts Inspection could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * List for approval
    */
    public function forApprove(){
        $iPI = $this->paginate($this->IPI->find('all')
        ->where(['stat' => 'pending']));

        $this->set(compact('iPI'));
        $this->set('_serialize', ['iPI']);
    }

    /**
     * View function for approval
     */
    public function approve($id = null){
        $iPI = $this->IPI->get($id, [
            'contain' => []
        ]);

        if($iPI->stat != 'pending'){
            $this->Flash->error(__('This Incoming Parts Inspection is already approved/rejected!'));
            return $this->redirect(['action' => 'forApprove']);
        }

        $this->set('iPI', $iPI);
        $this->set('_serialize', ['iPI']);
        $this->set('pic', $this->Auth->user('name'));
    }

    /**
     * List for checking
     */
    public function forCheck(){
        $iPI = $this->paginate($this->IPI->find('all')
            ->where(['stat' => 'approved']));

        $this->set(compact('iPI'));
        $this->set('_serialize', ['iPI']);
    }

    /**
     * Function for checking and preparing an IPI
     */
    public function checkAndPrepare($id = null){
        $iPI = $this->IPI->get($id, [
            'contain' => []
        ]);

        if($iPI->stat != 'approved'){
            $this->Flash->error(__('This Incoming Parts Inspection is already checked/rejected!'));
            return $this->redirect(['action' => 'forCheck']);
        }

        $this->set(compact('iPI'));
        $this->set('_serialize', ['iPI']);
        $this->set('pic', $this->Auth->user('name'));
    }

    public function checked(){
        $this->loadModel('PrepareIpi');
        $prepareIpi = $this->PrepareIpi->newEntity();
        if($this->request->is('post')){
            $iPI = $this->IPI->get($this->request->getData('ipiId'), [
                'contain' => []
            ]);
            $iPI->stat = $this->request->getData('prevStat');
            $this->IPI->save($iPI);
            $prepareIpi = $this->PrepareIpi->patchEntity($prepareIpi, $this->request->getData());
            if($this->PrepareIpi->save($prepareIpi)){
                $prepare_no = $this->PrepareIpi->find('all', ['fields' => 'id'])->last();
                if($this->request->getData('total') != null){
                    $ipiTests = TableRegistry::get('IpiTests');
                    $testData = array();
                    for($i = 1; $i <= $this->request->getData('total'); $i++){
                        $testData[$i]['prepareId'] = $prepare_no['id'];
                        $testData[$i]['partName'] = $this->request->getData('partName'.$i);
                        $testData[$i]['ctrlDimension'] = $this->request->getData('ctrlDimension'.$i);
                        $testData[$i]['spec'] = $this->request->getData('spec'.$i);
                        $testData[$i]['sample_1'] = $this->request->getData('sample_1'.$i);
                        $testData[$i]['sample_2'] = $this->request->getData('sample_2'.$i);
                        $testData[$i]['sample_3'] = $this->request->getData('sample_3'.$i);
                        $testData[$i]['sample_4'] = $this->request->getData('sample_4'.$i);
                        $testData[$i]['sample_5'] = $this->request->getData('sample_5'.$i);
                        $testData[$i]['partStat'] = $this->request->getData('partStat'.$i);
                        $testData[$i]['drawingRef'] = $this->request->getData('drawingRef'.$i);
                    }
                    $tests = $ipiTests->newEntities($testData);
                    foreach($tests as $test){
                        $ipiTests->save($test);
                    }
                }
                $this->Flash->success(__('The Incoming Parts Inspection has been saved.'));

                return $this->redirect(['action' => 'forCheck']);
            }
            $this->Flash->error(__('The Incoming Parts Inspection could not be saved. Please, try again.'));
        }
    }

    /**
     * List for confirmation
     */
    public function forConfirm(){
        $this->loadModel('PrepareIpi');
        $iPI = $this->paginate($this->PrepareIpi->find('all')
        ->where(['stat' => 'pending']));

        $this->set(compact('iPI'));
        $this->set('_serialize', ['iPI']);
    }

    /**
     * View function for confirmation
     */
    public function confirm($id = null){
        $this->loadModel('PrepareIpi');
        $this->loadModel('IpiTests');
        $iPI = $this->PrepareIpi->get($id, [
            'contain' => []
        ]);

        if($iPI->stat != 'pending'){
            $this->Flash->error(__('This Incoming Parts Inspection is already confirmed/rejected!'));
            return $this->redirect(['action' => 'forConfirm']);
        }

        $ipiTests = $this->IpiTests->find('all')
            ->where(['prepareId' => $id]);

        $this->set('iPI', $iPI);
        $this->set('_serialize', ['iPI']);
        $this->set('ipiTests', $ipiTests);
        $this->set('pic', $this->Auth->user('name'));
    }

    /**
     * Function for confirming an IPI
     */
    public function confirmed($id = null)
    {
        $this->loadModel('PrepareIpi');
        $iPI = $this->PrepareIpi->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $iPI = $this->PrepareIpi->patchEntity($iPI, $this->request->getData());
            if ($this->PrepareIpi->save($iPI)) {
                $this->Flash->success(__('The Incoming Parts Inspection has been confirmed.'));

                return $this->redirect(['action' => 'forConfirm']);
            }
            $this->Flash->error(__('The Incoming Parts Inspection could not be confirmed. Please, try again.'));
        }
        $this->set(compact('iPI'));
        $this->set('_serialize', ['iPI']);
    }

    /**
     * This is just for testing
     */
    public function testForm(){
        $this->autoRender = false;
        if($this->request->is('post')){
            print_r($this->request->getData());
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

        if(isset($user['role']) && $user['role'] === 'proc-manager'){
            if(in_array($this->request->action, ['forApprove', 'approve', 'edit'])){
                return true;
            }
        }

        if(isset($user['role']) && $user['role'] === 'draft-man'){
            if(in_array($this->request->action, ['forCheck', 'checkAndPrepare', 'checked', 'edit'])){
                return true;
            }
        }

        if(isset($user['role']) && $user['role'] === 'eng-officer'){
            if(in_array($this->request->action, ['forConfirm', 'confirm', 'confirmed', 'edit'])){
                return true;
            }
        }

        return parent::isAuthorized($user);

    }

    public function requests(){
        $iPI = null;
        if($this->Auth->user('role') == 'eng-personnel'){
            $iPI = $this->paginate($this->IPI->find('all')
                ->where(['stat' => 'pending'])
->orwhere(['stat' => 'rejected'])
                ->orwhere(['stat' => 'acknowledged'])
);
        }
        $this->set('iPI', $iPI);
    }

    public function editRequests($id = null){
        $iPI = $this->IPI->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $iPI = $this->IPI->patchEntity($iPI, $this->request->getData());
            if ($this->IPI->save($iPI)) {
                $this->Flash->success(__('The Incoming Parts Inspection has been saved.'));

                return $this->redirect(['action' => 'requests']);
            }
            $this->Flash->error(__('The Incoming Parts Inspection could not be saved. Please, try again.'));
        }
        $this->loadModel('PartMasterList');
        $partMasterList = $this->paginate($this->PartMasterList);
        $part_no = null;
        foreach($partMasterList as $pm){
            $part_no .= '{label:"'.$pm->partName.'",idx:"'.$pm->partNo.'",drawNo:"'.$pm->drawingNo.'"},';
        }
        $part_no = rtrim($part_no, ',');
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
        $this->set(compact('iPI'));
        $this->set('_serialize', ['iPI']);
        $this->set('part_no', $part_no);
    }

}
