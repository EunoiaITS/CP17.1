<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BOMTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BOMTable Test Case
 */
class BOMTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BOMTable
     */
    public $BOM;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.b_o_m'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('BOM') ? [] : ['className' => 'App\Model\Table\BOMTable'];
        $this->BOM = TableRegistry::get('BOM', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BOM);

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
