<?php
namespace App\Model\Table;

use App\Model\Entity\VehicleCategory;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * VehicleCategories Model
 *
 * @property \Cake\ORM\Association\HasMany $VehicleSubCategories
 * @property \Cake\ORM\Association\HasMany $Vehicles
 */
class VehicleCategoriesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('vehicle_categories');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('VehicleSubCategories', [
            'foreignKey' => 'vehicle_category_id'
        ]);
        $this->hasMany('Vehicles', [
            'foreignKey' => 'vehicle_category_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('type', 'create')
            ->notEmpty('type');

        return $validator;
    }
}
