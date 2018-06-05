<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PartMasterListTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PartMasterListTable Test Case
 */
class PartMasterListTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PartMasterListTable
     */
    public $PartMasterList;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.part_master_list'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PartMasterList') ? [] : ['className' => 'App\Model\Table\PartMasterListTable'];
        $this->PartMasterList = TableRegistry::get('PartMasterList', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PartMasterList);

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
