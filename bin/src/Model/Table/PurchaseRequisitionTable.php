<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PurchaseRequisition Model
 *
 * @method \App\Model\Entity\PurchaseRequisition get($primaryKey, $options = [])
 * @method \App\Model\Entity\PurchaseRequisition newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PurchaseRequisition[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PurchaseRequisition|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PurchaseRequisition patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PurchaseRequisition[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PurchaseRequisition findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PurchaseRequisitionTable extends Table
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

        $this->setTable('purchase_requisition');
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
            ->requirePresence('projectName', 'create')
            ->notEmpty('projectName');

        $validator
            ->requirePresence('requester', 'create')
            ->notEmpty('requester');

        $validator
            ->requirePresence('prNo', 'create')
            ->notEmpty('prNo');

        $validator
            ->notEmpty('upload');

        $validator
            ->requirePresence('prDate', 'create')
            ->notEmpty('prDate');

        $validator
            ->requirePresence('expectedDateDelivery', 'create')
            ->notEmpty('expectedDateDelivery');

        $validator
            ->requirePresence('supplier', 'create')
            ->notEmpty('supplier');

        $validator
            ->allowEmpty('remarks');

        $validator
            ->allowEmpty('status');

        $validator
            ->allowEmpty('prepared_by');

        $validator
            ->allowEmpty('acknowledgement_by');

        $validator
            ->allowEmpty('approved_by');

        return $validator;
    }
}
