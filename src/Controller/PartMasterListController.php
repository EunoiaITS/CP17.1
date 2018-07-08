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
                $this->loadModel('PmlData');
                $pml_id = $this->PartMasterList->find('all', ['fields' => 'id'])->last();
                    if($this->request->getData('zzz') != ''){
                        $pml_data = $this->PmlData->newEntity();
                        $pml_data->pml_id = $pml_id['id'];
                        $pml_data->key = 'zzz';
                        $pml_data->value = $this->request->getData('zzz');
                        $this->PmlData->save($pml_data);
                    }
                    if($this->request->getData('zzt') != ''){
                        $pml_data = $this->PmlData->newEntity();
                        $pml_data->pml_id = $pml_id['id'];
                        $pml_data->key = 'zzt';
                        $pml_data->value = $this->request->getData('zzt');
                        $this->PmlData->save($pml_data);
                    }
                    if($this->request->getData('zztt') != ''){
                        $pml_data = $this->PmlData->newEntity();
                        $pml_data->pml_id = $pml_id['id'];
                        $pml_data->key = 'zztt';
                        $pml_data->value = $this->request->getData('zztt');
                        $this->PmlData->save($pml_data);
                    }
                    if($this->request->getData('zzztt') != ''){
                        $pml_data = $this->PmlData->newEntity();
                        $pml_data->pml_id = $pml_id['id'];
                        $pml_data->key = 'zzztt';
                        $pml_data->value = $this->request->getData('zzztt');
                        $this->PmlData->save($pml_data);
                    }
                    if($this->request->getData('zzzt') != ''){
                        $pml_data = $this->PmlData->newEntity();
                        $pml_data->pml_id = $pml_id['id'];
                        $pml_data->key = 'zzzt';
                        $pml_data->value = $this->request->getData('zzzt');
                        $this->PmlData->save($pml_data);
                    }



                if($this->request->getData('rc_101') != ''){
                    $pml_data = $this->PmlData->newEntity();
                    $pml_data->pml_id = $pml_id['id'];
                    $pml_data->key = 'rc_101';
                    $pml_data->value = $this->request->getData('rc_101');
                    $this->PmlData->save($pml_data);
                }
                if($this->request->getData('rc_102') != ''){
                    $pml_data = $this->PmlData->newEntity();
                    $pml_data->pml_id = $pml_id['id'];
                    $pml_data->key = 'rc_102';
                    $pml_data->value = $this->request->getData('rc_102');
                    $this->PmlData->save($pml_data);
                }
                if($this->request->getData('rc_111') != ''){
                    $pml_data = $this->PmlData->newEntity();
                    $pml_data->pml_id = $pml_id['id'];
                    $pml_data->key = 'rc_111';
                    $pml_data->value = $this->request->getData('rc_111');
                    $this->PmlData->save($pml_data);
                }
                if($this->request->getData('rc_112') != ''){
                    $pml_data = $this->PmlData->newEntity();
                    $pml_data->pml_id = $pml_id['id'];
                    $pml_data->key = 'rc_112';
                    $pml_data->value = $this->request->getData('rc_112');
                    $this->PmlData->save($pml_data);
                }
                if($this->request->getData('rc_121') != ''){
                    $pml_data = $this->PmlData->newEntity();
                    $pml_data->pml_id = $pml_id['id'];
                    $pml_data->key = 'rc_121';
                    $pml_data->value = $this->request->getData('rc_121');
                    $this->PmlData->save($pml_data);
                }
                if($this->request->getData('rc_122') != ''){
                    $pml_data = $this->PmlData->newEntity();
                    $pml_data->pml_id = $pml_id['id'];
                    $pml_data->key = 'rc_122';
                    $pml_data->value = $this->request->getData('rc_122');
                    $this->PmlData->save($pml_data);
                }



                if($this->request->getData('z') != ''){
                    $pml_data = $this->PmlData->newEntity();
                    $pml_data->pml_id = $pml_id['id'];
                    $pml_data->key = 'z';
                    $pml_data->value = $this->request->getData('z');
                    $this->PmlData->save($pml_data);
                }
                if($this->request->getData('b') != ''){
                    $pml_data = $this->PmlData->newEntity();
                    $pml_data->pml_id = $pml_id['id'];
                    $pml_data->key = 'b';
                    $pml_data->value = $this->request->getData('b');
                    $this->PmlData->save($pml_data);
                }
                if($this->request->getData('zz') != ''){
                    $pml_data = $this->PmlData->newEntity();
                    $pml_data->pml_id = $pml_id['id'];
                    $pml_data->key = 'zz';
                    $pml_data->value = $this->request->getData('zz');
                    $this->PmlData->save($pml_data);
                }
                if($this->request->getData('zzb') != ''){
                    $pml_data = $this->PmlData->newEntity();
                    $pml_data->pml_id = $pml_id['id'];
                    $pml_data->key = 'zzb';
                    $pml_data->value = $this->request->getData('zzb');
                    $this->PmlData->save($pml_data);
                }
                if($this->request->getData('zzbb') != ''){
                    $pml_data = $this->PmlData->newEntity();
                    $pml_data->pml_id = $pml_id['id'];
                    $pml_data->key = 'zzbb';
                    $pml_data->value = $this->request->getData('zzbb');
                    $this->PmlData->save($pml_data);
                }
                if($this->request->getData('zzzb') != ''){
                    $pml_data = $this->PmlData->newEntity();
                    $pml_data->pml_id = $pml_id['id'];
                    $pml_data->key = 'zzzb';
                    $pml_data->value = $this->request->getData('zzzb');
                    $this->PmlData->save($pml_data);
                }


                if($this->request->getData('kva_500') != ''){
                    $pml_data = $this->PmlData->newEntity();
                    $pml_data->pml_id = $pml_id['id'];
                    $pml_data->key = 'kva_500';
                    $pml_data->value = $this->request->getData('kva_500');
                    $this->PmlData->save($pml_data);
                }
                if($this->request->getData('kva_1000') != ''){
                    $pml_data = $this->PmlData->newEntity();
                    $pml_data->pml_id = $pml_id['id'];
                    $pml_data->key = 'kva_1000';
                    $pml_data->value = $this->request->getData('kva_1000');
                    $this->PmlData->save($pml_data);
                }

                if($this->request->getData('dt_1600') != ''){
                    $pml_data = $this->PmlData->newEntity();
                    $pml_data->pml_id = $pml_id['id'];
                    $pml_data->key = 'dt_1600';
                    $pml_data->value = $this->request->getData('dt_1600');
                    $this->PmlData->save($pml_data);
                }
                if($this->request->getData('slfp') != ''){
                    $pml_data = $this->PmlData->newEntity();
                    $pml_data->pml_id = $pml_id['id'];
                    $pml_data->key = 'slfp';
                    $pml_data->value = $this->request->getData('slfp');
                    $this->PmlData->save($pml_data);
                }

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
