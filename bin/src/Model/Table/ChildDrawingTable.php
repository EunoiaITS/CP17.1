<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ChildDrawing Model
 *
 * @method \App\Model\Entity\ChildDrawing get($primaryKey, $options = [])
 * @method \App\Model\Entity\ChildDrawing newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ChildDrawing[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ChildDrawing|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ChildDrawing patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ChildDrawing[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ChildDrawing findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ChildDrawingTable extends Table
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

        $this->setTable('child_drawing');
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
            ->notEmpty('projectId');

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
            ->requirePresence('uploadedFile', 'create')
            ->notEmpty('uploadedFile');

        return $validator;
    }
}
