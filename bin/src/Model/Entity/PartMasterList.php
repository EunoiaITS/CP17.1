<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PartMasterList Entity
 *
 * @property int $id
 * @property string $model
 * @property string $partNo
 * @property string $partName
 * @property string $picture
 * @property string $drawingNo
 * @property string $section
 * @property int $zzt
 * @property int $zzz
 * @property int $zztt
 * @property int $zzzt
 * @property int $zzztt
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class PartMasterList extends Entity
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
