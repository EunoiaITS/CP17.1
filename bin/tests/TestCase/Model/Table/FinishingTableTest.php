<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FinishingTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FinishingTable Test Case
 */
class FinishingTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FinishingTable
     */
    public $Finishing;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.finishing'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Finishing') ? [] : ['className' => 'App\Model\Table\FinishingTable'];
        $this->Finishing = TableRegistry::get('Finishing', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Finishing);

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
