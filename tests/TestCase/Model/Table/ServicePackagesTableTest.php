<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ServicePackagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ServicePackagesTable Test Case
 */
class ServicePackagesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ServicePackagesTable
     */
    public $ServicePackages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.service_packages',
        'app.services'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ServicePackages') ? [] : ['className' => 'App\Model\Table\ServicePackagesTable'];
        $this->ServicePackages = TableRegistry::get('ServicePackages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ServicePackages);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
