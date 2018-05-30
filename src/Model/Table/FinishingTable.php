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
class FinishingTable extends Table
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

        $this->setTable('finishings');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->requirePresence('type','create');

        $validator
            ->requirePresence('code', 'create');

        return $validator;
    }
}
