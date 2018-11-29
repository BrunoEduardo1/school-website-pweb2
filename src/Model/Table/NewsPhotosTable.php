<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * NewsPhotos Model
 *
 * @property \App\Model\Table\NewsTable|\Cake\ORM\Association\BelongsTo $News
 *
 * @method \App\Model\Entity\NewsPhoto get($primaryKey, $options = [])
 * @method \App\Model\Entity\NewsPhoto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\NewsPhoto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\NewsPhoto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\NewsPhoto|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\NewsPhoto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\NewsPhoto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\NewsPhoto findOrCreate($search, callable $callback = null, $options = [])
 */
class NewsPhotosTable extends Table
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

        $this->setTable('news_photos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('News', [
            'foreignKey' => 'news_id',
            'joinType' => 'INNER'
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
            ->nonNegativeInteger('id')
            ->allowEmpty('id', 'create');
/*
        $validator
            ->dateTime('creted_at')
            ->requirePresence('creted_at', 'create')
            ->notEmpty('creted_at');*/

        $validator
            ->dateTime('updated_at')
            ->allowEmpty('updated_at');

        $validator
            ->scalar('photo')
            ->maxLength('photo', 255)
            ->allowEmpty('photo');

        $validator
            ->scalar('description')
            ->maxLength('description', 255)
            ->allowEmpty('description');
/*
        $validator
            ->boolean('active')
            ->requirePresence('active', 'create')
            ->notEmpty('active');*/

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
        $rules->add($rules->existsIn(['news_id'], 'News'));

        return $rules;
    }
}
