<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IPITable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IPITable Test Case
 */
class IPITableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\IPITable
     */
    public $IPI;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.i_p_i'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('IPI') ? [] : ['className' => 'App\Model\Table\IPITable'];
        $this->IPI = TableRegistry::get('IPI', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->IPI);

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
