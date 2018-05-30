<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PartApproval Model
 *
 * @method \App\Model\Entity\PartApproval get($primaryKey, $options = [])
 * @method \App\Model\Entity\PartApproval newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PartApproval[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PartApproval|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PartApproval patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PartApproval[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PartApproval findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PartApprovalTable extends Table
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

        $this->setTable('part_approval');
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
            ->requirePresence('vendor', 'create')
            ->notEmpty('vendor');

        $validator
            ->requirePresence('partName', 'create')
            ->notEmpty('partName');

        $validator
            ->requirePresence('date', 'create')
            ->notEmpty('date');

        $validator
            ->requirePresence('issued_date', 'create')
            ->notEmpty('issued_date');

        $validator
            ->requirePresence('drawingNo', 'create')
            ->notEmpty('drawingNo');

        $validator
            ->boolean('fullyApprove')
            ->allowEmpty('fullyApprove');

        $validator
            ->boolean('conditionApprove')
            ->allowEmpty('conditionApprove');

        $validator
            ->boolean('notApprove')
            ->allowEmpty('notApprove');

        $validator
            ->requirePresence('remarks', 'create')
            ->notEmpty('remarks');

        $validator
            ->notEmpty('upload');

        $validator
            ->boolean('materialStore')
            ->allowEmpty('materialStore');

        $validator
            ->boolean('quantityAssurance')
            ->allowEmpty('quantityAssurance');

        $validator
            ->boolean('production')
            ->allowEmpty('production');

        $validator
            ->boolean('purchaser')
            ->allowEmpty('purchaser');

        $validator
            ->allowEmpty('status');

        $validator
            ->allowEmpty('requestor');

        $validator
            ->allowEmpty('pic');

        $validator
            ->allowEmpty('acknowledgedBy');

        $validator
            ->allowEmpty('approvedBy');

        return $validator;
    }
}
