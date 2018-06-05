<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PurchaseRequisitionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PurchaseRequisitionTable Test Case
 */
class PurchaseRequisitionTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PurchaseRequisitionTable
     */
    public $PurchaseRequisition;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.purchase_requisition'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PurchaseRequisition') ? [] : ['className' => 'App\Model\Table\PurchaseRequisitionTable'];
        $this->PurchaseRequisition = TableRegistry::get('PurchaseRequisition', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PurchaseRequisition);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
