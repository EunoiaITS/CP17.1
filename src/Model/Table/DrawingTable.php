<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Drawing Model
 *
 * @method \App\Model\Entity\Drawing get($primaryKey, $options = [])
 * @method \App\Model\Entity\Drawing newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Drawing[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Drawing|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Drawing patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Drawing[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Drawing findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DrawingTable extends Table
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

        $this->setTable('drawing');
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
            ->requirePresence('drawingName', 'create')
            ->notEmpty('drawingName');

        $validator
            ->requirePresence('drawingNo', 'create')
            ->notEmpty('drawingNo');

        $validator
            ->requirePresence('revNo', 'create')
            ->notEmpty('revNo');

        $validator
            ->requirePresence('drawnBy', 'create')
            ->notEmpty('drawnBy');

        $validator
            ->requirePresence('dept', 'create')
            ->notEmpty('dept');

        $validator
            ->allowEmpty('uploadedFile');

        $validator
        ->allowEmpty('stat');

        $validator
            ->allowEmpty('requested_by');

        $validator
            ->allowEmpty('acknowledged_by');

        $validator
            ->allowEmpty('approved_by');

        $validator
            ->allowEmpty('remarks');

        return $validator;
    }
}
