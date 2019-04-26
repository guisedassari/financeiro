<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Entradas Model
 *
 * @property \App\Model\Table\FormasPagamentosTable|\Cake\ORM\Association\BelongsTo $FormasPagamentos
 * @property \App\Model\Table\ContasTable|\Cake\ORM\Association\BelongsTo $Contas
 *
 * @method \App\Model\Entity\Entrada get($primaryKey, $options = [])
 * @method \App\Model\Entity\Entrada newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Entrada[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Entrada|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Entrada|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Entrada patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Entrada[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Entrada findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EntradasTable extends Table
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

        $this->setTable('entradas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('FormasPagamentos', [
            'foreignKey' => 'formas_pagamento_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Contas', [
            'foreignKey' => 'conta_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
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
            ->scalar('nome')
            ->maxLength('nome', 255)
            ->requirePresence('nome', 'create')
            ->allowEmptyString('nome', false);

        $validator
            ->numeric('valor')
            ->requirePresence('valor', 'create')
            ->allowEmptyString('valor', false);

        $validator
            ->integer('parcela')
            ->allowEmptyString('parcela');

        $validator
            ->date('data')
            ->requirePresence('data', 'create')
            ->allowEmptyDate('data', false);

        $validator
            ->scalar('obs')
            ->allowEmptyString('obs');

        $validator
            ->integer('dizimo')
            ->allowEmptyString('dizimo');

        $validator
            ->integer('status')
            ->allowEmptyString('status');

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
        $rules->add($rules->existsIn(['formas_pagamento_id'], 'FormasPagamentos'));
        $rules->add($rules->existsIn(['conta_id'], 'Contas'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
