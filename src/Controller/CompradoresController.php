<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Compradores Controller
 *
 * @property \App\Model\Table\CompradoresTable $Compradores
 *
 * @method \App\Model\Entity\Comprador[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CompradoresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $compradores = $this->paginate($this->Compradores);

        $this->set(compact('compradores'));
    }

    /**
     * View method
     *
     * @param string|null $id Comprador id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $comprador = $this->Compradores->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('comprador', $comprador);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $compradores = $this->Compradores->newEntity();
        if ($this->request->is('post')) {
            $compradores = $this->Compradores->patchEntity($compradores, $this->request->getData());
            if ($this->Compradores->save($compradores)) {
                $this->Flash->success(__('The compradores has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The compradores could not be saved. Please, try again.'));
        }
        $users = $this->Compradores->Users->find('list', ['limit' => 200]);
        $this->set(compact('compradores', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Comprador id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $comprador = $this->Compradores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $comprador = $this->Compradores->patchEntity($comprador, $this->request->getData());
            if ($this->Compradores->save($comprador)) {
                $this->Flash->success(__('The comprador has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The comprador could not be saved. Please, try again.'));
        }
        $users = $this->Compradores->Users->find('list', ['limit' => 200]);
        $this->set(compact('comprador', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Comprador id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $comprador = $this->Compradores->get($id);
        if ($this->Compradores->delete($comprador)) {
            $this->Flash->success(__('The comprador has been deleted.'));
        } else {
            $this->Flash->error(__('The comprador could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
