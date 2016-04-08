<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * VehicleSubCategory Entity.
 *
 * @property int $id
 * @property int $vehicle_category_id
 * @property \App\Model\Entity\VehicleCategory $vehicle_category
 * @property string $type
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property \App\Model\Entity\Vehicle[] $vehicles
 */
class VehicleSubCategory extends Entity
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
