<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ECR Entity
 *
 * @property int $id
 * @property string $requestorName
 * @property string $company
 * @property string $position
 * @property string $dept
 * @property string $internal
 * @property string $external
 * @property string $page
 * @property string $issueNo
 * @property string $projectStage
 * @property string $changeCat
 * @property int $partNo
 * @property int $drawingNo
 * @property string $model
 * @property string $changeReason
 * @property string $currentEx
 * @property string $currentFile
 * @property string $proposedChange
 * @property string $proposedFile
 * @property string $changeBenefit
 * @property string $priority
 * @property string $stat
 * @property string $remarks
 * @property string $requested_by
 * @property string $verified_by
 * @property string $approved_by
 * @property string $acknowledged_by
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class ECR extends Entity
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
