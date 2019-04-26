<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Saidas Model
 *
 * @property \App\Model\Table\CompradorsTable|\Cake\ORM\Association\BelongsTo $Compradors
 * @property \App\Model\Table\TiposTable|\Cake\ORM\Association\BelongsTo $Tipos
 * @property \App\Model\Table\FormaPagamentosTable|\Cake\ORM\Association\BelongsTo $FormaPagamentos
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Saida get($primaryKey, $options = [])
 * @method \App\Model\Entity\Saida newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Saida[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Saida|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Saida|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Saida patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Saida[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Saida findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SaidasTable extends Table
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

        $this->setTable('saidas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Compradores', [
            'foreignKey' => 'comprador_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Tipos', [
            'foreignKey' => 'tipo_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('FormasPagamentos', [
            'foreignKey' => 'forma_pagamento_id'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsTo('Contas', [
            'foreignKey' => 'conta_id',
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
            ->date('data_compra')
            ->requirePresence('data_compra', 'create')
            ->allowEmptyDate('data_compra', false);

        $validator
            ->integer('status')
            ->allowEmptyString('status');

        $validator
            ->scalar('descricao')
            ->allowEmptyString('descricao');

        $validator
            ->date('data_pagamento')
            ->allowEmptyDate('data_pagamento');

        $validator
            ->integer('total_parcelas')
            ->allowEmptyString('total_parcelas');

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
        $rules->add($rules->existsIn(['comprador_id'], 'Compradores'));
        $rules->add($rules->existsIn(['tipo_id'], 'Tipos'));
        $rules->add($rules->existsIn(['forma_pagamento_id'], 'FormasPagamentos'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['conta_id'], 'Contas'));

        return $rules;
    }
}
