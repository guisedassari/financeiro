<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Saida Entity
 *
 * @property int $id
 * @property string $nome
 * @property float $valor
 * @property int $comprador_id
 * @property int|null $parcela
 * @property int $tipo_id
 * @property \Cake\I18n\FrozenDate $data_compra
 * @property int|null $status
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $descricao
 * @property string|null $forma_pagamento_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenDate|null $data_pagamento
 * @property int|null $total_parcelas
 * @property int|null $user_id
 *
 * @property \App\Model\Entity\Comprador $comprador
 * @property \App\Model\Entity\Tipo $tipo
 * @property \App\Model\Entity\FormaPagamento $forma_pagamento
 * @property \App\Model\Entity\User $user
 */
class Saida extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nome' => true,
        'valor' => true,
        'comprador_id' => true,
        'parcela' => true,
        'tipo_id' => true,
        'data_compra' => true,
        'status' => true,
        'modified' => true,
        'descricao' => true,
        'forma_pagamento_id' => true,
        'created' => true,
        'data_pagamento' => true,
        'total_parcelas' => true,
        'user_id' => true,
        'comprador' => true,
        'tipo' => true,
        'forma_pagamento' => true,
        'user' => true,
        'conta_id' => true,
        'conta' => true,
    ];
}
