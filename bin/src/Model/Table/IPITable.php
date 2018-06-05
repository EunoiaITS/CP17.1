<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * IPI Model
 *
 * @method \App\Model\Entity\IPI get($primaryKey, $options = [])
 * @method \App\Model\Entity\IPI newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\IPI[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\IPI|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\IPI patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\IPI[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\IPI findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class IPITable extends Table
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

        $this->setTable('i_p_i');
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
            ->requirePresence('partName', 'create')
            ->notEmpty('partName', 'Part Name cannot be empty.');

        $validator
            ->integer('drawingNo')
            ->requirePresence('drawingNo', 'create')
            ->notEmpty('drawingNo', 'Drawing No cannot be empty.');

        $validator
            ->integer('qty_1')
            ->requirePresence('qty_1', 'create')
            ->notEmpty('qty_1', 'Quantity cannot be empty.');

        $validator
            ->integer('qty_2')
            ->requirePresence('qty_2', 'create')
            ->notEmpty('qty_2', 'Quantity cannot be empty.');

        $validator
            ->requirePresence('supplier', 'create')
            ->notEmpty('supplier', 'Supplier cannot be empty.');

        $validator
            ->requirePresence('purpose', 'create')
            ->notEmpty('purpose', 'Purpose cannot be empty.');

        $validator
            ->requirePresence('dept', 'create')
            ->notEmpty('dept', 'Department cannot be empty.');

        $validator
            ->date('due_date')
            ->requirePresence('due_date', 'create')
            ->notEmpty('due_date', 'Due Date cannot be empty.');

        $validator
            ->requirePresence('remarks', 'create')
            ->allowEmpty('remarks');

        $validator
            ->allowEmpty('stat');

        $validator
            ->allowEmpty('requested_by');

        $validator
            ->allowEmpty('approved_by');

        $validator
            ->allowEmpty('reject_remarks');

        return $validator;
    }
}
