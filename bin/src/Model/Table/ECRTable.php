<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ECR Model
 *
 * @method \App\Model\Entity\ECR get($primaryKey, $options = [])
 * @method \App\Model\Entity\ECR newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ECR[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ECR|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ECR patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ECR[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ECR findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ECRTable extends Table
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

        $this->setTable('e_c_r');
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
            ->requirePresence('requestorName', 'create')
            ->notEmpty('requestorName');

        $validator
            ->requirePresence('company', 'create')
            ->notEmpty('company');

        $validator
            ->requirePresence('position', 'create')
            ->notEmpty('position');

        $validator
            ->requirePresence('dept', 'create')
            ->notEmpty('dept');

        $validator
            ->requirePresence('internal', 'create')
            ->notEmpty('internal');

        $validator
            ->requirePresence('external', 'create')
            ->notEmpty('external');

        $validator
            ->requirePresence('page', 'create')
            ->notEmpty('page');

        $validator
            ->requirePresence('issueNo', 'create')
            ->notEmpty('issueNo');

        $validator
            ->requirePresence('projectStage', 'create')
            ->notEmpty('projectStage');

        $validator
            ->requirePresence('changeCat', 'create')
            ->notEmpty('changeCat');

        $validator
            ->requirePresence('partNo', 'create')
            ->notEmpty('partNo');

        $validator
            ->requirePresence('drawingNo', 'create')
            ->notEmpty('drawingNo');

        $validator
            ->requirePresence('model', 'create')
            ->notEmpty('model');

        $validator
            ->requirePresence('changeReason', 'create')
            ->notEmpty('changeReason');

        $validator
            ->requirePresence('currentEx', 'create')
            ->notEmpty('currentEx');

        $validator
            ->allowEmpty('currentFile');

        $validator
            ->requirePresence('proposedChange', 'create')
            ->notEmpty('proposedChange');

        $validator
            ->allowEmpty('proposedFile');

        $validator
            ->requirePresence('changeBenefit', 'create')
            ->notEmpty('changeBenefit');

        $validator
            ->allowEmpty('priority');

        $validator
            ->allowEmpty('stat');

        $validator
            ->allowEmpty('remarks');

        $validator
        ->allowEmpty('requested_by');

        $validator
            ->allowEmpty('accepted');

        $validator
            ->allowEmpty('rejected');

        $validator
            ->allowEmpty('klv');

        $validator
            ->allowEmpty('verified_by');

        $validator
            ->allowEmpty('approved_by');

        $validator
            ->allowEmpty('acknowledged_by');

        return $validator;
    }
}
