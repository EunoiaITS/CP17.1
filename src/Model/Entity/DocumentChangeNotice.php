<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DocumentChangeNotice Entity
 *
 * @property int $id
 * @property string $requester
 * @property string $dateRequester
 * @property string $effectiveDate
 * @property string $department
 * @property int $dcnNo
 * @property int $page
 * @property int $docNo
 * @property string $docTitle
 * @property string $docDesc
 * @property string $version
 * @property string $resChange
 * @property string $detailChange
 * @property string $upload
 * @property string $remarks
 * @property string $status
 * @property string $createdBy
 * @property string $acknowledgedBy
 * @property string $approvedBy
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class DocumentChangeNotice extends Entity
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
