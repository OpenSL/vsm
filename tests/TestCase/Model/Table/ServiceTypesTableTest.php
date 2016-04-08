<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ServiceTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ServiceTypesTable Test Case
 */
class ServiceTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ServiceTypesTable
     */
    public $ServiceTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.service_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ServiceTypes') ? [] : ['className' => 'App\Model\Table\ServiceTypesTable'];
        $this->ServiceTypes = TableRegistry::get('ServiceTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ServiceTypes);

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
