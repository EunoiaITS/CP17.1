<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * IpiTests Model
 *
 * @method \App\Model\Entity\IpiTest get($primaryKey, $options = [])
 * @method \App\Model\Entity\IpiTest newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\IpiTest[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\IpiTest|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\IpiTest patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\IpiTest[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\IpiTest findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class IpiTestsTable extends Table
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

        $this->setTable('ipi_tests');
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
            ->integer('prepareId')
            ->notEmpty('prepareId');

        $validator
            ->requirePresence('partName', 'create')
            ->allowEmpty('partName');

        $validator
            ->requirePresence('ctrlDimension', 'create')
            ->allowEmpty('ctrlDimension');

        $validator
            ->requirePresence('spec', 'create')
            ->allowEmpty('spec');

        $validator
            ->requirePresence('sample_1', 'create')
            ->allowEmpty('sample_1');

        $validator
            ->requirePresence('sample_2', 'create')
            ->allowEmpty('sample_2');

        $validator
            ->requirePresence('sample_3', 'create')
            ->allowEmpty('sample_3');

        $validator
            ->requirePresence('sample_4', 'create')
            ->allowEmpty('sample_4');

        $validator
            ->requirePresence('sample_5', 'create')
            ->allowEmpty('sample_5');

        $validator
            ->requirePresence('partStat', 'create')
            ->allowEmpty('partStat');

        $validator
            ->requirePresence('drawingRef', 'create')
            ->allowEmpty('drawingRef');

        return $validator;
    }
}
