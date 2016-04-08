<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VehicleSubCategoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VehicleSubCategoriesTable Test Case
 */
class VehicleSubCategoriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VehicleSubCategoriesTable
     */
    public $VehicleSubCategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.vehicle_sub_categories',
        'app.vehicle_categories',
        'app.vehicles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('VehicleSubCategories') ? [] : ['className' => 'App\Model\Table\VehicleSubCategoriesTable'];
        $this->VehicleSubCategories = TableRegistry::get('VehicleSubCategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->VehicleSubCategories);

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
