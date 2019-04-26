<?php

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

/**
 * MyHtml helper
 */
class MyHtmlHelper extends Helper
{

    /**
     * Default configuration.
     *
     * @var array
     */
    public $helpers = ['Form', 'Html'];

    protected $_defaultConfig = [];

    public function status($id)
    {
        $r = [
            0 => [
                'text' => __('Inativo'),
            ],
            1 => [
                'text' => __('Ativo'),
            ],
            9 => [
                'text' => __('Solicitação de Exclusão'),
            ]
        ];
        return $r[$id]['text'];
    }

    public function tipo($id)
    {
        $r = [
            0 => ['text' => __('Administrador')],
            1 => ['text' => __('Usuario')],
        ];
        return $r[$id]['text'];
    }

    public function dizimo($id)
    {
        $r = [
            0 => ['text' => __('Não')],
            1 => ['text' => __('Sim')],
        ];
        return $r[$id]['text'];
    }

    public function data($value)
    {
        $value = date("d/m/Y", strtotime($value));
        return $value;
    }

    public function dataHora($value)
    {
        $value = date("d/m/Y H:i:s", strtotime($value));
        return $value;
    }

    public function money($valor)
    {
        return 'R$ ' . number_format($valor, 2, ',', '.');
    }


}