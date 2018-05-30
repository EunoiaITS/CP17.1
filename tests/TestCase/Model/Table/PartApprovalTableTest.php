<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PartApprovalTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PartApprovalTable Test Case
 */
class PartApprovalTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PartApprovalTable
     */
    public $PartApproval;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.part_approval'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PartApproval') ? [] : ['className' => 'App\Model\Table\PartApprovalTable'];
        $this->PartApproval = TableRegistry::get('PartApproval', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PartApproval);

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
