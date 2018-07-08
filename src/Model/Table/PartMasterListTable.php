<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PartMasterList Model
 *
 * @method \App\Model\Entity\PartMasterList get($primaryKey, $options = [])
 * @method \App\Model\Entity\PartMasterList newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PartMasterList[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PartMasterList|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PartMasterList patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PartMasterList[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PartMasterList findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PartMasterListTable extends Table
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

        $this->setTable('part_master_list');
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
            ->requirePresence('model', 'create')
            ->notEmpty('model');

        $validator
            ->requirePresence('partNo', 'create')
            ->notEmpty('partNo');

        $validator
            ->requirePresence('partName', 'create')
            ->notEmpty('partName');

        $validator
            ->requirePresence('picture', 'create')
            ->notEmpty('picture');

        $validator
            ->requirePresence('drawingNo', 'create')
            ->notEmpty('drawingNo');

        return $validator;
    }
}
