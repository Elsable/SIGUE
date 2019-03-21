<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Requests Model
 *
 * @property \App\Model\Table\AcademicsTable|\Cake\ORM\Association\BelongsTo $Academics
 * @property |\Cake\ORM\Association\BelongsTo $Spaces
 * @property |\Cake\ORM\Association\BelongsTo $Users
 * @property |\Cake\ORM\Association\BelongsTo $Users
 * @property |\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Request get($primaryKey, $options = [])
 * @method \App\Model\Entity\Request newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Request[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Request|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Request|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Request patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Request[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Request findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RequestsTable extends Table
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

        $this->setTable('requests');
        $this->setDisplayField('event');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Academics', [
            'foreignKey' => 'academic_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Spaces', [
            'foreignKey' => 'space_id'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'vobo_attendant_id'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'aproved_attendant_id'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'cancelled_attendant_id'
        ]);
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
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('event')
            ->maxLength('event', 255)
            ->requirePresence('event', 'create')
            ->allowEmptyString('event', false);

        $validator
            ->scalar('period')
            ->maxLength('period', 255)
            ->requirePresence('period', 'create')
            ->allowEmptyString('period', false);

        $validator
            ->scalar('type')
            ->maxLength('type', 50)
            ->requirePresence('type', 'create')
            ->allowEmptyString('type', false);

        $validator
            ->date('start_date')
            ->requirePresence('start_date', 'create')
            ->allowEmptyDate('start_date', false);

        $validator
            ->date('end_date')
            ->requirePresence('end_date', 'create')
            ->allowEmptyDate('end_date', false);

        $validator
            ->time('start_hour')
            ->requirePresence('start_hour', 'create')
            ->allowEmptyTime('start_hour', false);

        $validator
            ->time('end_hour')
            ->requirePresence('end_hour', 'create')
            ->allowEmptyTime('end_hour', false);

        $validator
            ->scalar('observations')
            ->requirePresence('observations', 'create')
            ->allowEmptyString('observations', false);

        $validator
            ->boolean('monday')
            ->requirePresence('monday', 'create')
            ->allowEmptyString('monday', false);

        $validator
            ->boolean('tuesday')
            ->requirePresence('tuesday', 'create')
            ->allowEmptyString('tuesday', false);

        $validator
            ->boolean('wednesday')
            ->requirePresence('wednesday', 'create')
            ->allowEmptyString('wednesday', false);

        $validator
            ->boolean('thursday')
            ->requirePresence('thursday', 'create')
            ->allowEmptyString('thursday', false);

        $validator
            ->boolean('friday')
            ->requirePresence('friday', 'create')
            ->allowEmptyString('friday', false);

        $validator
            ->boolean('saturday')
            ->requirePresence('saturday', 'create')
            ->allowEmptyString('saturday', false);

        $validator
            ->boolean('vobo')
            ->allowEmptyString('vobo');

        $validator
            ->dateTime('vobo_register')
            ->allowEmptyDateTime('vobo_register');

        $validator
            ->scalar('vobo_observations')
            ->allowEmptyString('vobo_observations');

        $validator
            ->boolean('aproved')
            ->allowEmptyString('aproved');

        $validator
            ->dateTime('aproved_register')
            ->allowEmptyDateTime('aproved_register');

        $validator
            ->scalar('aproved_observations')
            ->allowEmptyString('aproved_observations');

        $validator
            ->boolean('cancelled')
            ->allowEmptyString('cancelled');

        $validator
            ->dateTime('cancelled_register')
            ->allowEmptyDateTime('cancelled_register');

        $validator
            ->scalar('cancelled_observations')
            ->allowEmptyString('cancelled_observations');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['academic_id'], 'Academics'));
        $rules->add($rules->existsIn(['space_id'], 'Spaces'));
        $rules->add($rules->existsIn(['vobo_attendant_id'], 'Users'));
        $rules->add($rules->existsIn(['aproved_attendant_id'], 'Users'));
        $rules->add($rules->existsIn(['cancelled_attendant_id'], 'Users'));

        return $rules;
    }
}
