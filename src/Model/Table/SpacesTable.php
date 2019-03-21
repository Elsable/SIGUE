<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Spaces Model
 *
 * @method \App\Model\Entity\Space get($primaryKey, $options = [])
 * @method \App\Model\Entity\Space newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Space[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Space|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Space|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Space patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Space[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Space findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SpacesTable extends Table
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

        $this->setTable('spaces');
        $this->setDisplayField('name');
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
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 150)
            ->requirePresence('name', 'create')
            ->allowEmptyString('name', false)
            ->add('name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('capacity', 'create')
            ->range('capacity',[1,100])
            ->allowEmptyString('capacity', false);

        $validator
            ->scalar('location')
            ->requirePresence('location', 'create')
            ->allowEmptyString('location', false);

        $validator
            ->scalar('observations')
            ->requirePresence('observations', 'create')
            ->allowEmptyString('observations', false);

        $validator
            ->boolean('internet')
            ->requirePresence('internet', 'create')
            ->allowEmptyString('internet', false);

        $validator
            ->boolean('board')
            ->requirePresence('board', 'create')
            ->allowEmptyString('board', false);

        $validator
            ->boolean('projector')
            ->requirePresence('projector', 'create')
            ->allowEmptyString('projector', false);

        $validator
            ->boolean('blind')
            ->requirePresence('blind', 'create')
            ->allowEmptyString('blind', false);

        $validator
            ->boolean('speakers')
            ->requirePresence('speakers', 'create')
            ->allowEmptyString('speakers', false);

        $validator
            ->scalar('type')
            ->maxLength('type', 255)
            ->requirePresence('type', 'create')
            ->allowEmptyString('type', false);

        $validator
            ->boolean('active')
            ->requirePresence('active', 'create')
            ->allowEmptyString('active', false);

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
        $rules->add($rules->isUnique(['name']));

        return $rules;
    }
}
