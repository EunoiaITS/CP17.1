<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ECRTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ECRTable Test Case
 */
class ECRTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ECRTable
     */
    public $ECR;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.e_c_r'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ECR') ? [] : ['className' => 'App\Model\Table\ECRTable'];
        $this->ECR = TableRegistry::get('ECR', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ECR);

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
