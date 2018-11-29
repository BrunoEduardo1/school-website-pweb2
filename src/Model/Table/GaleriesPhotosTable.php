<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GaleriesPhotos Model
 *
 * @property \App\Model\Table\GaleriesTable|\Cake\ORM\Association\BelongsTo $Galeries
 *
 * @method \App\Model\Entity\GaleriesPhoto get($primaryKey, $options = [])
 * @method \App\Model\Entity\GaleriesPhoto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GaleriesPhoto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GaleriesPhoto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GaleriesPhoto|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GaleriesPhoto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GaleriesPhoto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GaleriesPhoto findOrCreate($search, callable $callback = null, $options = [])
 */
class GaleriesPhotosTable extends Table
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

        $this->setTable('galeries_photos');
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
            ->scalar('photo')
            ->maxLength('photo', 255)
            ->requirePresence('photo', 'create')
            ->notEmpty('photo');

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
