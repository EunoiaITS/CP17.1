<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BOM Model
 *
 * @method \App\Model\Entity\BOM get($primaryKey, $options = [])
 * @method \App\Model\Entity\BOM newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BOM[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BOM|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BOM patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BOM[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BOM findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BOMTable extends Table
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

        $this->setTable('b_o_m');
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
            ->requirePresence('model', 'create')
            ->notEmpty('model');

        $validator
            ->requirePresence('version', 'create')
            ->notEmpty('version');

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

        $validator
            ->requirePresence('category', 'create')
            ->notEmpty('category');

        $validator
            ->allowEmpty('stat');
        $validator
            ->requirePresence('process_1', 'create')
            ->notEmpty('process_1');
        $validator
            ->requirePresence('process_2', 'create')
            ->notEmpty('process_2');
        $validator
            ->requirePresence('process_3', 'create')
            ->notEmpty('process_3');
        $validator
            ->requirePresence('process_4', 'create')
            ->notEmpty('process_4');
        $validator
            ->requirePresence('supplier_1', 'create')
            ->notEmpty('supplier_1');
        $validator
            ->requirePresence('supplier_2', 'create')
            ->notEmpty('supplier_2');
        $validator
            ->requirePresence('supplier_3', 'create')
            ->notEmpty('supplier_3');
        $validator
            ->requirePresence('supplier_4', 'create')
            ->notEmpty('supplier_4');

        $validator
            ->allowEmpty('requested_by');

        $validator
            ->allowEmpty('checked_by');

        $validator
            ->allowEmpty('approved_by');

        return $validator;
    }
}
