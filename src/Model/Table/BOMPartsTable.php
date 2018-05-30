<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BOMParts Model
 *
 * @method \App\Model\Entity\BOMPart get($primaryKey, $options = [])
 * @method \App\Model\Entity\BOMPart newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BOMPart[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BOMPart|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BOMPart patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BOMPart[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BOMPart findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BOMPartsTable extends Table
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

        $this->setTable('b_o_m_parts');
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
            ->integer('bomId')
            ->requirePresence('bomId', 'create')
            ->notEmpty('bomId');

        $validator
            ->requirePresence('partNo', 'create')
            ->notEmpty('partNo');

        $validator
            ->requirePresence('partName', 'create')
            ->notEmpty('partName');

        $validator
            ->requirePresence('drawingNo', 'create')
            ->notEmpty('drawingNo');

        $validator
            ->requirePresence('revNo', 'create')
            ->notEmpty('revNo');

        $validator
            ->requirePresence('material', 'create')
            ->notEmpty('material');

        $validator
            ->requirePresence('finishing', 'create')
            ->notEmpty('finishing');

        $validator
            ->requirePresence('common', 'create')
            ->notEmpty('common');

        $validator
            ->requirePresence('size', 'create')
            ->notEmpty('size');

        $validator
            ->requirePresence('quality', 'create')
            ->notEmpty('quality');

        return $validator;
    }
}
