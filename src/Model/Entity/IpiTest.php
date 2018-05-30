<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * IpiTest Entity
 *
 * @property int $id
 * @property int $prepareId
 * @property string $partName
 * @property string $ctrlDimension
 * @property string $spec
 * @property string $sample_1
 * @property string $sample_2
 * @property string $sample_3
 * @property string $sample_4
 * @property string $sample_5
 * @property string $partStat
 * @property string $drawingRef
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class IpiTest extends Entity
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
