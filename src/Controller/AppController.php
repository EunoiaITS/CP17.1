<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'authorize' => ['Controller'],
            'loginRedirect' => [
                'controller' => 'Dashboard',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
            'unauthorizedRedirect' => [
                'controller' => 'Dashboard',
                'action' => 'index',
                'prefix' => false
            ]
        ]);

        /*
         * Enable the following components for recommended CakePHP security settings.
         * see http://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Network\Response|null|void
     */
    public function beforeRender(Event $event)
    {
        $this->loadComponent('Auth');
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
        $this->loadModel('BOM');
        $this->loadModel('DocumentChangeNotice');
        $this->loadModel('Drawing');
        $this->loadModel('ECR');
        $this->loadModel('IPI');
        $this->loadModel('PartApproval');
        $this->loadModel('PrepareIpi');
        $this->loadModel('PurchaseRequisition');
        $pendingBOM = $this->BOM->find('all')
            ->where(['stat' => 'pending'])
            ->count();
        $checkedBOM = $this->BOM->find('all')
            ->where(['stat' => 'checked'])
            ->count();
        $pendingDrawing = $this->Drawing->find('all')
            ->where(['stat' => 'pending'])
            ->count();
        $checkedDrawing = $this->Drawing->find('all')
            ->where(['stat' => 'checked'])
            ->count();
        $pendingPr = $this->PurchaseRequisition->find('all')
            ->where(['status' => 'pending'])
            ->count();
        $ackPr = $this->PurchaseRequisition->find('all')
            ->where(['status' => 'acknowledged'])
            ->count();
        $pendingEcr = $this->ECR->find('all')
            ->where(['stat' => 'pending'])
            ->count();
        $verifiedEcr = $this->ECR->find('all')
            ->where(['stat' => 'verified'])
            ->count();
        $ackEcr = $this->ECR->find('all')
            ->where(['stat' => 'acknowledged'])
            ->count();
        $pendingDcn = $this->DocumentChangeNotice->find('all')
            ->where(['status' => 'pending'])
            ->count();
        $ackDcn = $this->DocumentChangeNotice->find('all')
            ->where(['status' => 'acknowledged'])
            ->count();
        $pendingIpi = $this->IPI->find('all')
            ->where(['stat' => 'pending'])
            ->count();
        $approvedIpi = $this->IPI->find('all')
            ->where(['stat' => 'approved'])
            ->count();
        $checkedIpi = $this->PrepareIpi->find('all')
            ->where(['stat' => 'pending'])
            ->count();
        $pendingPart = $this->PartApproval->find('all')
            ->where(['status' => 'pending'])
            ->count();
        $ackPart = $this->PartApproval->find('all')
            ->where(['status' => 'acknowledged'])
            ->count();
        $this->set('role', $this->Auth->user('role'));
        $this->set('userId', $this->Auth->user('id'));
        $this->set('userName', $this->Auth->user('name'));
        $this->set('pendingBOM', $pendingBOM);
        $this->set('checkedBOM', $checkedBOM);
        $this->set('pendingDrawing', $pendingDrawing);
        $this->set('checkedDrawing', $checkedDrawing);
        $this->set('pendingPr', $pendingPr);
        $this->set('ackPr', $ackPr);
        $this->set('pendingEcr', $pendingEcr);
        $this->set('ackEcr', $ackEcr);
        $this->set('verifiedEcr', $verifiedEcr);
        $this->set('pendingDcn', $pendingDcn);
        $this->set('ackDcn', $ackDcn);
        $this->set('pendingIpi', $pendingIpi);
        $this->set('approvedIpi', $approvedIpi);
        $this->set('checkedIpi', $checkedIpi);
        $this->set('ackPart', $ackPart);
        $this->set('pendingPart', $pendingPart);
    }

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['logout']);
    }

    public function isAuthorized($user){
        if (isset($user['role']) && $user['role'] === 'admin') {
            return true;
        }
        return false;
    }

}
