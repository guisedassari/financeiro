<?php

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

/**
 * MyForm helper
 */
class MyFormHelper extends Helper
{

    /**
     * Default configuration.
     *
     * @var array
     */
    public $helpers = ['Form', 'Html'];

    protected $_defaultConfig = [];

    public function status($fieldName, array $options = [])
    {
        $default = [
            'empty' => __('Selecione uma situação'),
            'options' => [
                0 => __('Inativo'),
                1 => __('Ativo'),
            ]
        ];
        $options = \Cake\Utility\Hash::merge($default, $options);
        return $this->Form->control($fieldName, $options);
    }

    public function dizimo($fieldName, array $options = [])
    {
        $default = [
            'empty' => __('Selecione uma situação'),
            'options' => [
                0 => __('Não'),
                1 => __('Sim'),
            ]
        ];
        $options = \Cake\Utility\Hash::merge($default, $options);
        return $this->Form->control($fieldName, $options);
    }

    public function tipo($fieldName, array $options = [])
    {
        $default = [
            'empty' => __('Selecione um tipo de usuário'),
            'options' => [
                0 => __('Administrador'),
                1 => __('Usuario'),
            ]
        ];
        $options = \Cake\Utility\Hash::merge($default, $options);
        return $this->Form->control($fieldName, $options);
    }

    public function data($fieldName, $value = null)
    {

        $data_atual = date('Y-m-d');

        $value = (is_null($value)) ? $data_atual : date('Y-m-d', strtotime($value));

        $input = '<input id="date" class="form-control" type="date" name="' . $fieldName . '" value="' . $value . '">';

        return $input;
    }

    public function money($fieldName, $valor = null)
    {
        echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js', ['block' => 'script']);
        $this->Html->scriptStart(['block' => true]);
        echo "$(document).ready(function(){
                $('.money').mask('000.000.000.000.000,00', {reverse: true});
              });";
        $this->Html->scriptEnd();

        $valor = number_format($valor, 2, ',', '.');

        return $this->Form->control($fieldName, ['value' => $valor, 'class' => 'money', 'type' => 'text']);
    }

    public function inputFile($fieldName, $btnName, array $options = [])
    {
        //        debug(key($options));
        //        debug($options['accept']);
        //        debug($options);
        $atributos = null;
        foreach ($options as $key => $value) {
            $atributos .= "{$key}=\"{$value}\"" . " ";
        }

        //echo $atributos;

        $input = "
        <input type=\"file\" name=\"$fieldName\"  id=\"$fieldName\" style=\"display: none;\" onchange=\"document.getElementById('file-input').value = this.files[0].name;\">
        <div class=\"input-group\">
            <div class=\"input-group-btn\">
                <button type=\"button\" onclick=\"document.getElementById('$fieldName').click();\" class=\"btn btn-default\">$btnName</button>
            </div>
            <input type=\"text\" name=\"$fieldName\" class=\"form-control\"  id=\"file-input\" readonly=\"readonly\" onclick=\"document.getElementById('$fieldName').click();\" $atributos />
        </div>
        ";

        return $input;
    }
}