<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PurchaseRequisitionDescriptionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PurchaseRequisitionDescriptionTable Test Case
 */
class PurchaseRequisitionDescriptionTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PurchaseRequisitionDescriptionTable
     */
    public $PurchaseRequisitionDescription;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.purchase_requisition_description'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PurchaseRequisitionDescription') ? [] : ['className' => 'App\Model\Table\PurchaseRequisitionDescriptionTable'];
        $this->PurchaseRequisitionDescription = TableRegistry::get('PurchaseRequisitionDescription', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PurchaseRequisitionDescription);

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
