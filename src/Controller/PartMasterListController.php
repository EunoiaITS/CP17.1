<?php

namespace App\Controller;

/**
 * PartMasterList Controller
 *
 * @property \App\Model\Table\PartMasterListTable $PartMasterList
 *
 * @method \App\Model\Entity\PartMasterList[] paginate($object = null, array $settings = [])
 */
class PartMasterListController extends AppController
{

    public $paginate = [
        // Other keys here.
        'maxLimit' => 10
    ];

    public function initialize()
    {
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
        $partMasterList = $this->paginate($this->PartMasterList);

        $this->set(compact('partMasterList'));
        $this->set('_serialize', ['partMasterList']);
    }

    /**
     * View method
     *
     * @param string|null $id Part Master List id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $partMasterList = $this->PartMasterList->get($id, [
            'contain' => []
        ]);

        $this->set('partMasterList', $partMasterList);
        $this->set('_serialize', ['partMasterList']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $partMasterList = $this->PartMasterList->newEntity();
        if ($this->request->is('post')) {
            $partMasterList = $this->PartMasterList->patchEntity($partMasterList, $this->request->getData());

            if ($this->PartMasterList->save($partMasterList)) {
                if ($this->request->getData('picture') != '') {
                    $fileName = $this->request->getData('picture');
                    $part_no = $this->PartMasterList->find('all', ['fields' => 'id'])->last();
                    $ext = substr(strtolower(strrchr($fileName['name'], '.')), 1);
                    $arr_ext = array('jpg', 'jpeg', 'gif', 'png');
                    $setNewFileName = 'uploadedFile';
                    $imageFileName = $setNewFileName . '.' . $ext;
                    $uploadPath = WWW_ROOT . 'uploads/parts/' . $part_no['id'] . '/';
                    if (!file_exists($uploadPath)) {
                        mkdir($uploadPath);
                    }
                    $uploadFile = $uploadPath.$imageFileName;
                    //$this->request->getData('uploadedFile') = $uploadFile;
                    //print_r($fileName);
                    if (move_uploaded_file($fileName['tmp_name'], $uploadFile)) {
                        $imageFile = 'uploads/parts/'.$part_no['id'].'/'.$imageFileName;
                        $partMasterList_this = $this->PartMasterList->find()
                            ->where(['id' => $part_no['id']]);
                        foreach ($partMasterList_this as $draw) {
                            $draw->picture = $imageFile;
                            $this->PartMasterList->save($draw);
                        }
                    }
                }
                $this->Flash->success(__('The part master list has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The part master list could not be saved. Please, try again.'));
        }
        $this->set(compact('partMasterList'));
        $this->set('_serialize', ['partMasterList']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Part Master List id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $partMasterList = $this->PartMasterList->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $partMasterList = $this->PartMasterList->patchEntity($partMasterList, $this->request->getData());
            if ($this->PartMasterList->save($partMasterList)) {
                $this->Flash->success(__('The part master list has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The part master list could not be saved. Please, try again.'));
        }
        $this->set(compact('partMasterList'));
        $this->set('_serialize', ['partMasterList']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Part Master List id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $partMasterList = $this->PartMasterList->get($id);
        if ($this->PartMasterList->delete($partMasterList)) {
            $this->Flash->success(__('The part master list has been deleted.'));
        } else {
            $this->Flash->error(__('The part master list could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function isAuthorized($user){
        if ($this->request->getParam('action') === 'index' || $this->request->getParam('action') === 'view') {
            return true;
        }

        if(isset($user['role']) && $user['role'] === 'eng-personnel'){
            if(in_array($this->request->action, ['add', 'edit'])){
                return true;
            }
        }

        return parent::isAuthorized($user);

    }

}
