<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * IPI Entity
 *
 * @property int $id
 * @property int $partNo
 * @property int $drawingNo
 * @property int $qty_1
 * @property int $qty_2
 * @property string $supplier
 * @property string $purpose
 * @property string $dept
 * @property \Cake\I18n\FrozenDate $due_date
 * @property string $remarks
 * @property string $stat
 * @property string $requested_by
 * @property string $approved_by
 * @property string $reject_remarks
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class IPI extends Entity
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
