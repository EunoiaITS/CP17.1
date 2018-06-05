<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IpiTestsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IpiTestsTable Test Case
 */
class IpiTestsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\IpiTestsTable
     */
    public $IpiTests;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ipi_tests'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('IpiTests') ? [] : ['className' => 'App\Model\Table\IpiTestsTable'];
        $this->IpiTests = TableRegistry::get('IpiTests', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->IpiTests);

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
