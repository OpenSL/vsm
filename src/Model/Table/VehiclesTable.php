<?php
namespace App\Model\Table;

use App\Model\Entity\Vehicle;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vehicles Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Customers
 * @property \Cake\ORM\Association\BelongsTo $VehicleCategories
 * @property \Cake\ORM\Association\BelongsTo $VehicleSubCategories
 */
class VehiclesTable extends Table
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

        $this->table('vehicles');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('VehicleCategories', [
            'foreignKey' => 'vehicle_category_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('VehicleSubCategories', [
            'foreignKey' => 'vehicle_sub_category_id',
            'joinType' => 'INNER'
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
            ->requirePresence('vehicle_number', 'create')
            ->notEmpty('vehicle_number');

        $validator
            ->dateTime('last_service_date')
            ->requirePresence('last_service_date', 'create')
            ->notEmpty('last_service_date');

        $validator
            ->allowEmpty('additional_description');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        $rules->add($rules->existsIn(['vehicle_category_id'], 'VehicleCategories'));
        $rules->add($rules->existsIn(['vehicle_sub_category_id'], 'VehicleSubCategories'));
        return $rules;
    }
}
