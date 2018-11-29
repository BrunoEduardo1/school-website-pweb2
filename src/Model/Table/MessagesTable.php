<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Messages Model
 *
 * @method \App\Model\Entity\Message get($primaryKey, $options = [])
 * @method \App\Model\Entity\Message newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Message[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Message|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Message|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Message patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Message[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Message findOrCreate($search, callable $callback = null, $options = [])
 */
class MessagesTable extends Table
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

        $this->setTable('messages');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->nonNegativeInteger('id')
            ->allowEmpty('id', 'create');
        /*
        $validator
            ->dateTime('creted_at')
            ->requirePresence('creted_at', 'create')
            ->notEmpty('creted_at');*/
        /*
        $validator
            ->dateTime('updated_at')
            ->allowEmpty('updated_at');*/

        $validator
            ->scalar('sender_name')
            ->maxLength('sender_name', 255)
            ->requirePresence('sender_name', 'create')
            ->notEmpty('sender_name');

        $validator
            ->scalar('sender_email')
            ->maxLength('sender_email', 255)
            ->requirePresence('sender_email', 'create')
            ->notEmpty('sender_email');

        $validator
            ->scalar('subject')
            ->maxLength('subject', 255)
            ->allowEmpty('subject');

        $validator
            ->scalar('content')
            ->requirePresence('content', 'create')
            ->notEmpty('content');
        /*
        $validator
            ->boolean('active')
            ->requirePresence('active', 'create')
            ->notEmpty('active'); */

        return $validator;
    }
}
