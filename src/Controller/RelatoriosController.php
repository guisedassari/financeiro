<?php


namespace App\Controller;


class RelatoriosController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Contas');
        $this->loadModel('Entradas');
        $this->loadModel('Saidas');

    }

    public function index()
    {
        $userInfo = $this->request->getSession()->read('Auth.User');

        $query = $this->Contas->find()
            ->where(['user_id' => $userInfo['id']]);

        $totalGeral = $query->select(['totalGeral' => $query->func()->sum('valor')])->first();

        //$teste = $query->select(['nome', 'valor'])->all();

        $contas = $this->Contas->find();

        $qtdeCompras = $this->Saidas->find()->where(['user_id' => $userInfo['id']]);
        $qtdeCompras->select(['qtde_compras' => $query->func()->count('*')]);


        $this->set(compact('totalGeral', 'contas'));
        $this->set(['qtdeCompras' => $qtdeCompras->first()]);
    }

    public function relatorioGeral()
    {
        $userInfo = $this->request->getSession()->read('Auth.User');

        $entradas = $this->Entradas->find()
            ->where(['Entradas.user_id' => $userInfo['id']])
            ->contain(['Contas', 'FormasPagamentos']);

        $totalEntradaMensal = $this->Entradas->find()
            ->where(['Entradas.user_id' => $userInfo['id']]);

        $totalEntradaMensal = $totalEntradaMensal->select(['totalMensal' => $totalEntradaMensal->func()->sum('valor')])->first();

        $saidas = $this->Saidas->find()
            ->where(['Saidas.user_id' => $userInfo['id']])
            ->contain(['Contas', 'FormasPagamentos', 'Compradores', 'Tipos']);

        $totalSaidaMensal = $this->Saidas->find()
            ->where(['Saidas.user_id' => $userInfo['id']]);

        $totalSaidaMensal = $totalSaidaMensal->select(['totalMensal' => $totalSaidaMensal->func()->sum('valor')])->first();

        //debug($entradas->all()->contas->nome);

        $this->set(compact('entradas', 'saidas', 'totalEntradaMensal', 'totalSaidaMensal'));
    }
}