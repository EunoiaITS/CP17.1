<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PmlData Model
 *
 * @property \App\Model\Table\PmlsTable|\Cake\ORM\Association\BelongsTo $Pmls
 *
 * @method \App\Model\Entity\PmlData get($primaryKey, $options = [])
 * @method \App\Model\Entity\PmlData newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PmlData[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PmlData|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PmlData patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PmlData[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PmlData findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PmlDataTable extends Table
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

        $this->setTable('pml_data');
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
            ->requirePresence('pml_id', 'create')
            ->notEmpty('pml_id');

        $validator
            ->requirePresence('key', 'create')
            ->notEmpty('key');

        $validator
            ->requirePresence('value', 'create')
            ->notEmpty('value');

        return $validator;
    }
}
