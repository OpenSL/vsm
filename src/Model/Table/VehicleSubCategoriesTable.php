<?php
namespace App\Model\Table;

use App\Model\Entity\VehicleSubCategory;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * VehicleSubCategories Model
 *
 * @property \Cake\ORM\Association\BelongsTo $VehicleCategories
 * @property \Cake\ORM\Association\HasMany $Vehicles
 */
class VehicleSubCategoriesTable extends Table
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

        $this->table('vehicle_sub_categories');
        $this->displayField('type');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('VehicleCategories', [
            'foreignKey' => 'vehicle_category_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Vehicles', [
            'foreignKey' => 'vehicle_sub_category_id'
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

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['vehicle_category_id'], 'VehicleCategories'));
        return $rules;
    }
}
