<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GaleriesVideos Model
 *
 * @property \App\Model\Table\GaleriesTable|\Cake\ORM\Association\BelongsTo $Galeries
 *
 * @method \App\Model\Entity\GaleriesVideo get($primaryKey, $options = [])
 * @method \App\Model\Entity\GaleriesVideo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GaleriesVideo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GaleriesVideo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GaleriesVideo|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GaleriesVideo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GaleriesVideo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GaleriesVideo findOrCreate($search, callable $callback = null, $options = [])
 */
class GaleriesVideosTable extends Table
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

        $this->setTable('galeries_videos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Galeries', [
            'foreignKey' => 'galery_id',
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
            ->scalar('link')
            ->maxLength('link', 255)
            ->requirePresence('link', 'create')
            ->notEmpty('link');

        $validator
            ->scalar('caption')
            ->maxLength('caption', 255)
            ->allowEmpty('caption');
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
        $rules->add($rules->existsIn(['galery_id'], 'Galeries'));

        return $rules;
    }
}
