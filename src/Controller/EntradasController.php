<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Entradas Controller
 *
 * @property \App\Model\Table\EntradasTable $Entradas
 *
 * @method \App\Model\Entity\Entrada[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EntradasController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Contas');
    }

    public function index()
    {
        $this->paginate = [
            'contain' => ['FormasPagamentos', 'Contas']
        ];
        $entradas = $this->paginate($this->Entradas);

        $this->set(compact('entradas'));
    }

    /**
     * View method
     *
     * @param string|null $id Entrada id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $entrada = $this->Entradas->get($id, [
            'contain' => ['FormasPagamentos', 'Contas']
        ]);

        $this->set('entrada', $entrada);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $entrada = $this->Entradas->newEntity();
        if ($this->request->is('post')) {
            $entrada = $this->Entradas->patchEntity($entrada, $this->request->getData());
            $entrada->valor = $this->Auxiliar->convertMoneyForMySql($this->request->getData('valor'));
            if ($this->Entradas->save($entrada)) {

                $conta = $this->Contas->find()->where(['id' => $entrada->conta_id])->first();
                $conta->valor = ($conta->valor + $entrada->valor);
                $this->Contas->save($conta);

                $this->Flash->success(__('The entrada has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The entrada could not be saved. Please, try again.'));
        }
        $formasPagamentos = $this->Entradas->FormasPagamentos->find('list', ['limit' => 200]);
        $contas = $this->Entradas->Contas->find('list', ['limit' => 200]);
        $this->set(compact('entrada', 'formasPagamentos', 'contas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Entrada id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $entrada = $this->Entradas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $entrada = $this->Entradas->patchEntity($entrada, $this->request->getData());
            $entrada->valor = $this->Auxiliar->convertMoneyForMySql($this->request->getData('valor'));
            if ($this->Entradas->save($entrada)) {

                $conta = $this->Contas->find()->where(['id' => $entrada->conta_id])->first();
                $conta->valor = ($conta->valor - $this->request->getData('valor_antigo'));
                $conta->valor = ($conta->valor + $entrada->valor);
                $this->Contas->save($conta);

                $this->Flash->success(__('The entrada has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The entrada could not be saved. Please, try again.'));
        }
        $formasPagamentos = $this->Entradas->FormasPagamentos->find('list', ['limit' => 200]);
        $contas = $this->Entradas->Contas->find('list', ['limit' => 200]);
        $this->set(compact('entrada', 'formasPagamentos', 'contas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Entrada id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $entrada = $this->Entradas->get($id);
        if ($this->Entradas->delete($entrada)) {

            $conta = $this->Contas->find()->where(['id' => $entrada->conta_id])->first();
            $conta->valor = ($conta->valor - $entrada->valor);
            $this->Contas->save($conta);

            $this->Flash->success(__('The entrada has been deleted.'));
        } else {
            $this->Flash->error(__('The entrada could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
