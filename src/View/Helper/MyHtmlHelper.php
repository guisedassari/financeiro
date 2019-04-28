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

    public function description($descricao, $id)
    {
        $modal = '
        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#descricao-' . $id . '">
            Descrição
        </button>
        

        
        <div class="modal fade" id="descricao-' . $id . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"></h4>
              </div>
              <div class="modal-body">
                ' . $descricao . '
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        ';

        return $modal;
    }

}