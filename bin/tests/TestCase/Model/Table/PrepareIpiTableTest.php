<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PrepareIpiTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PrepareIpiTable Test Case
 */
class PrepareIpiTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PrepareIpiTable
     */
    public $PrepareIpi;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.prepare_ipi'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PrepareIpi') ? [] : ['className' => 'App\Model\Table\PrepareIpiTable'];
        $this->PrepareIpi = TableRegistry::get('PrepareIpi', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PrepareIpi);

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
