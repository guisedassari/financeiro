<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Entrada Entity
 *
 * @property int $id
 * @property string $nome
 * @property float $valor
 * @property int|null $parcela
 * @property \Cake\I18n\FrozenDate $data
 * @property string|null $obs
 * @property int|null $dizimo
 * @property int $formas_pagamento_id
 * @property int|null $status
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int $conta_id
 *
 * @property \App\Model\Entity\FormasPagamento $formas_pagamento
 * @property \App\Model\Entity\Conta $conta
 */
class Entrada extends Entity
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
        'parcela' => true,
        'data' => true,
        'obs' => true,
        'dizimo' => true,
        'formas_pagamento_id' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'conta_id' => true,
        'formas_pagamento' => true,
        'conta' => true,
        'user_id' => true,
        'user' => true
    ];
}
