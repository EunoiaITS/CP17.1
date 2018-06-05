<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DrawingTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DrawingTable Test Case
 */
class DrawingTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DrawingTable
     */
    public $Drawing;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.drawing'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Drawing') ? [] : ['className' => 'App\Model\Table\DrawingTable'];
        $this->Drawing = TableRegistry::get('Drawing', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Drawing);

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
