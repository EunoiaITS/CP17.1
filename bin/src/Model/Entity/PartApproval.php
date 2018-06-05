<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PartApproval Entity
 *
 * @property int $id
 * @property string $vendor
 * @property string $partName
 * @property string $date
 * @property string $issued_date
 * @property string $drawingNo
 * @property bool $fullyApprove
 * @property bool $conditionApprove
 * @property bool $notApprove
 * @property string $remarks
 * @property string $upload
 * @property bool $materialStore
 * @property bool $quantityAssurance
 * @property bool $production
 * @property bool $purchaser
 * @property string $status
 * @property string $requestor
 * @property string $pic
 * @property string $acknowledgedBy
 * @property string $approvedBy
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class PartApproval extends Entity
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
