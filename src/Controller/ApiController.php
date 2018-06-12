<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Routing\Router;
/**
 * Api Controller
 *
 * @property \App\Model\Table\ApiTable $Api
 *
 * @method \App\Model\Entity\Api[] paginate($object = null, array $settings = [])
 */
class ApiController extends AppController
{

    public function allParts(){
        $this->autoRender = false;
        $this->loadModel('PartMasterList');
        $parts = $this->PartMasterList->find('all');
        echo json_encode($parts, JSON_PRETTY_PRINT);
        die();
    }
    
    public function bomParts(){
        if ($this->request->is('post')) {
            $this->autoRender = false;
            $this->loadModel('BOM');
            $this->loadModel('BOMParts');
            $parts = $this->BOM->find('all')->Where(['model'=>$this->request->getData('model')])->Where(['version'=>$this->request->getData('version')]);
            foreach($parts as $p){
                $relParts = $this->BOMParts->find('all')->where(['bomId' => $p->id]);
                $p->relParts = $relParts;
            }
        echo json_encode($parts,JSON_PRETTY_PRINT);
        die();
        }
    }
    
    public function bomPart($id = null){
        $this->autoRender = false;
        $this->loadModel('BOM');
        $this->loadModel('BOMParts');
        $this->loadModel('PartMasterList');
        $parts = $this->BOM->get($id, [
                'contain' => []
        ]);
        $relParts = $this->BOMParts->find('all')->where(['bomId' => $id]);
        
        $pm = $this->PartMasterList->get($parts->pm_id, [
                'contain' => []
        ]);
        $parts->pm = $pm;
        $parts->sitelink = Router::url('/', true);
        $parts->relParts = $relParts;
        echo json_encode($parts,JSON_PRETTY_PRINT);
        die();
    }
    
    public function allBomParts(){
        $this->autoRender = false;
            $this->loadModel('BOM');
            $this->loadModel('BOMParts');
            $parts = $this->BOM->find('all');
            foreach($parts as $p){
                $relParts = $this->BOMParts->find('all')->where(['bomId' => $p->id]);
                $p->relParts = $relParts;
            }
        echo json_encode($parts,JSON_PRETTY_PRINT);
        die();
    }
    public function modelData(){
        if ($this->request->is('post')) {
            $this->autoRender = false;
            $this->loadModel('PartMasterList');
            $models = $this->PartMasterList->find('all')->Where(['partNo'=>$this->request->getData('part_no')])->Where(['partName'=>$this->request->getData('part_name')]);
        echo json_encode($models,JSON_PRETTY_PRINT);
        die();
        }
    }
    

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['allParts','modelData','bomParts', 'allBomParts', 'bomPart']);
    }

}
