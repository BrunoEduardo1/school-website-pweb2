<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Galeries Model
 *
 * @property \App\Model\Table\GaleriesPhotosTable|\Cake\ORM\Association\HasMany $GaleriesPhotos
 * @property \App\Model\Table\GaleriesVideosTable|\Cake\ORM\Association\HasMany $GaleriesVideos
 *
 * @method \App\Model\Entity\Galery get($primaryKey, $options = [])
 * @method \App\Model\Entity\Galery newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Galery[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Galery|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Galery|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Galery patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Galery[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Galery findOrCreate($search, callable $callback = null, $options = [])
 */
class GaleriesTable extends Table
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

        $this->setTable('galeries');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('GaleriesPhotos', [
            'foreignKey' => 'galery_id'
        ]);
        $this->hasMany('GaleriesVideos', [
            'foreignKey' => 'galery_id'
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmpty('name');

        $validator
            ->scalar('content')
            ->allowEmpty('content');

        $validator
            ->scalar('type')
            ->requirePresence('type', 'create')
            ->notEmpty('type');
/*
        $validator
            ->boolean('active')
            ->requirePresence('active', 'create')
            ->notEmpty('active');*/

        return $validator;
    }
}
