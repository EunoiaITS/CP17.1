<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PurchaseRequisition Entity
 *
 * @property int $id
 * @property string $projectName
 * @property string $requester
 * @property string $prNo
 * @property string $upload
 * @property string $prDate
 * @property string $expectedDateDelivery
 * @property string $supplier
 * @property string $remarks
 * @property string $status
 * @property int $prepared_by
 * @property int $acknowledgement_by
 * @property int $approved_by
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class PurchaseRequisition extends Entity
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
