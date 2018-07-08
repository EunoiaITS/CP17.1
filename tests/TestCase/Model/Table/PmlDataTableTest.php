<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PmlDataTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PmlDataTable Test Case
 */
class PmlDataTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PmlDataTable
     */
    public $PmlData;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pml_data',
        'app.pmls'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PmlData') ? [] : ['className' => PmlDataTable::class];
        $this->PmlData = TableRegistry::get('PmlData', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PmlData);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
