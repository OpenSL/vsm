<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ServicePackage Entity.
 *
 * @property int $id
 * @property int $service_id
 * @property \App\Model\Entity\Service $service
 * @property string $package_name
 * @property float $price
 */
class ServicePackage extends Entity
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
