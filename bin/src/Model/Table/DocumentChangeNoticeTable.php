<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DocumentChangeNotice Model
 *
 * @method \App\Model\Entity\DocumentChangeNotice get($primaryKey, $options = [])
 * @method \App\Model\Entity\DocumentChangeNotice newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DocumentChangeNotice[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DocumentChangeNotice|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DocumentChangeNotice patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DocumentChangeNotice[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DocumentChangeNotice findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DocumentChangeNoticeTable extends Table
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

        $this->setTable('document_change_notice');
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
            ->requirePresence('requester', 'create')
            ->notEmpty('requester');

        $validator
            ->requirePresence('dateRequested', 'create')
            ->notEmpty('dateRequested');

        $validator
            ->requirePresence('effectiveDate', 'create')
            ->notEmpty('effectiveDate');

        $validator
            ->requirePresence('department', 'create')
            ->notEmpty('department');

        $validator
            ->integer('dcnNo')
            ->requirePresence('dcnNo', 'create')
            ->notEmpty('dcnNo');

        $validator
            ->integer('page')
            ->requirePresence('page', 'create')
            ->notEmpty('page');

        $validator
            ->integer('docNo')
            ->requirePresence('docNo', 'create')
            ->notEmpty('docNo');

        $validator
            ->requirePresence('docTitle', 'create')
            ->notEmpty('docTitle');

        $validator
            ->requirePresence('docDesc', 'create')
            ->notEmpty('docDesc');

        $validator
            ->requirePresence('version', 'create')
            ->notEmpty('version');

        $validator
            ->requirePresence('resChange', 'create')
            ->notEmpty('resChange');

        $validator
            ->requirePresence('detailChange', 'create')
            ->notEmpty('detailChange');

        $validator
            ->allowEmpty('upload');

        $validator
            ->allowEmpty('remarks');

        $validator
            ->allowEmpty('status');

        $validator
            ->allowEmpty('createdBy');

        $validator
            ->allowEmpty('acknowledgedBy');

        $validator
            ->allowEmpty('approvedBy');

        return $validator;
    }
}
