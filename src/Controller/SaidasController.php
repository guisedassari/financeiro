<?php

namespace App\Controller;

use App\Controller\AppController;

class SaidasController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Contas');
    }

    public function index()
    {
        $this->paginate = [
            'contain' => ['Compradores', 'Tipos', 'FormasPagamentos', 'Users', 'Contas']
        ];
        $saidas = $this->paginate($this->Saidas);

        $this->set(compact('saidas'));
    }


    public function view($id = null)
    {
        $saida = $this->Saidas->get($id, [
            'contain' => ['Compradores', 'Tipos', 'FormasPagamentos', 'Users', 'Contas']
        ]);

        $this->set('saida', $saida);
    }


    public function add()
    {
        $saida = $this->Saidas->newEntity();
        if ($this->request->is('post')) {
            $saida = $this->Saidas->patchEntity($saida, $this->request->getData());
            $saida->valor = $this->Auxiliar->convertMoneyForMySql($this->request->getData('valor'));
            if ($this->Saidas->save($saida)) {

                $conta = $this->Contas->find()->where(['id' => $saida->conta_id])->first();
                $conta->valor = ($conta->valor - $saida->valor);
                $this->Contas->save($conta);

                $this->Flash->success(__('The saida has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The saida could not be saved. Please, try again.'));
        }
        $compradores = $this->Saidas->Compradores->find('list', ['limit' => 200]);
        $tipos = $this->Saidas->Tipos->find('list', ['limit' => 200]);
        $formasPagamentos = $this->Saidas->FormasPagamentos->find('list', ['limit' => 200]);
        $users = $this->Saidas->Users->find('list', ['limit' => 200]);
        $contas = $this->Saidas->Contas->find('list', ['limit' => 200]);
        $this->set(compact('saida', 'compradores', 'tipos', 'formasPagamentos', 'users', 'contas'));
    }


    public function edit($id = null)
    {
        $saida = $this->Saidas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $saida = $this->Saidas->patchEntity($saida, $this->request->getData());
            $saida->valor = $this->Auxiliar->convertMoneyForMySql($this->request->getData('valor'));
            if ($this->Saidas->save($saida)) {

                $conta = $this->Contas->find()->where(['id' => $saida->conta_id])->first();
                $conta->valor = ($conta->valor + $this->request->getData('valor_antigo'));
                $conta->valor = ($conta->valor - $saida->valor);
                $this->Contas->save($conta);

                $this->Flash->success(__('The saida has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The saida could not be saved. Please, try again.'));
        }
        $compradores = $this->Saidas->Compradores->find('list', ['limit' => 200]);
        $tipos = $this->Saidas->Tipos->find('list', ['limit' => 200]);
        $formasPagamentos = $this->Saidas->FormasPagamentos->find('list', ['limit' => 200]);
        $users = $this->Saidas->Users->find('list', ['limit' => 200]);
        $contas = $this->Saidas->Contas->find('list', ['limit' => 200]);
        $this->set(compact('saida', 'compradores', 'tipos', 'formasPagamentos', 'users', 'contas'));
    }


    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $saida = $this->Saidas->get($id);
        if ($this->Saidas->delete($saida)) {

            $conta = $this->Contas->find()->where(['id' => $saida->conta_id])->first();
            $conta->valor = ($conta->valor - $saida->valor);
            $this->Contas->save($conta);

            $this->Flash->success(__('The saida has been deleted.'));
        } else {
            $this->Flash->error(__('The saida could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
