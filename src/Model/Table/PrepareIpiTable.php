<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PrepareIpi Model
 *
 * @method \App\Model\Entity\PrepareIpi get($primaryKey, $options = [])
 * @method \App\Model\Entity\PrepareIpi newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PrepareIpi[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PrepareIpi|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PrepareIpi patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PrepareIpi[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PrepareIpi findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PrepareIpiTable extends Table
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

        $this->setTable('prepare_ipi');
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
            ->requirePresence('productName', 'create')
            ->notEmpty('productName');

        $validator
            ->requirePresence('sn_no', 'create')
            ->notEmpty('sn_no');

        $validator
            ->requirePresence('manufacturer', 'create')
            ->notEmpty('manufacturer');

        $validator
            ->requirePresence('qty', 'create')
            ->notEmpty('qty');

        $validator
            ->requirePresence('uom', 'create')
            ->notEmpty('uom');

        $validator
            ->requirePresence('do_no', 'create')
            ->notEmpty('do_no');

        $validator
            ->requirePresence('remarks', 'create')
            ->allowEmpty('remarks');

        $validator
            ->requirePresence('checked_by', 'create')
            ->allowEmpty('checked_by');

        $validator
            ->allowEmpty('confirmed_by');

        $validator
            ->allowEmpty('stat');

        return $validator;
    }
}
