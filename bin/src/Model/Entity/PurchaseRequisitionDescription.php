<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PurchaseRequisitionDescription Entity
 *
 * @property int $id
 * @property string $drawingName
 * @property int $purchaseRequisitionId
 * @property string $drawingNo
 * @property string $qty
 * @property string $uom
 * @property string $uPPrice
 * @property string $amount
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class PurchaseRequisitionDescription extends Entity
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
