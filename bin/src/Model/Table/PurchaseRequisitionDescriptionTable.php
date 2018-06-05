<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PurchaseRequisitionDescription Model
 *
 * @method \App\Model\Entity\PurchaseRequisitionDescription get($primaryKey, $options = [])
 * @method \App\Model\Entity\PurchaseRequisitionDescription newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PurchaseRequisitionDescription[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PurchaseRequisitionDescription|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PurchaseRequisitionDescription patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PurchaseRequisitionDescription[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PurchaseRequisitionDescription findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PurchaseRequisitionDescriptionTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('purchase_requisition_description');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('drawingName', 'create')
            ->notEmpty('drawingName');

        $validator
            ->integer('purchaseRequisitionId')
            ->requirePresence('purchaseRequisitionId', 'create')
            ->notEmpty('purchaseRequisitionId');

        $validator
            ->requirePresence('drawingNo', 'create')
            ->notEmpty('drawingNo');

        $validator
            ->requirePresence('qty', 'create')
            ->notEmpty('qty');

        $validator
            ->requirePresence('uom', 'create')
            ->notEmpty('uom');

        $validator
            ->requirePresence('uPPrice', 'create')
            ->notEmpty('uPPrice');

        $validator
            ->requirePresence('amount', 'create')
            ->notEmpty('amount');

        return $validator;
    }
}
