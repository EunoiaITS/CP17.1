<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChildDrawingTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChildDrawingTable Test Case
 */
class ChildDrawingTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ChildDrawingTable
     */
    public $ChildDrawing;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.child_drawing'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ChildDrawing') ? [] : ['className' => 'App\Model\Table\ChildDrawingTable'];
        $this->ChildDrawing = TableRegistry::get('ChildDrawing', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ChildDrawing);

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
