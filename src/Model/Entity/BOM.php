<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BOM Entity
 *
 * @property int $id
 * @property string $projectName
 * @property string $model
 * @property string $version
 * @property int $partNo
 * @property int $drawingNo
 * @property string $material
 * @property string $finishing
 * @property string $common
 * @property string $size
 * @property string $quality
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class BOM extends Entity
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
        'id' => false
    ];
}
