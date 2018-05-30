<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BOMPartsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BOMPartsTable Test Case
 */
class BOMPartsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BOMPartsTable
     */
    public $BOMParts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.b_o_m_parts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('BOMParts') ? [] : ['className' => 'App\Model\Table\BOMPartsTable'];
        $this->BOMParts = TableRegistry::get('BOMParts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BOMParts);

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
