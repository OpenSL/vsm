<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vehicle Entity.
 *
 * @property int $id
 * @property string $vehicle_number
 * @property \Cake\I18n\Time $last_service_date
 * @property int $customer_id
 * @property \App\Model\Entity\Customer $customer
 * @property int $vehicle_category_id
 * @property \App\Model\Entity\VehicleCategory $vehicle_category
 * @property int $vehicle_sub_category_id
 * @property \App\Model\Entity\VehicleSubCategory $vehicle_sub_category
 * @property string $additional_description
 * @property \Cake\I18n\Time $created
 */
class Vehicle extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
