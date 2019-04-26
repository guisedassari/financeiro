<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Tipos Controller
 *
 * @property \App\Model\Table\TiposTable $Tipos
 *
 * @method \App\Model\Entity\Tipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TiposController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $tipos = $this->paginate($this->Tipos);

        $this->set(compact('tipos'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipo = $this->Tipos->get($id, [
            'contain' => ['Saidas']
        ]);

        $this->set('tipo', $tipo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipo = $this->Tipos->newEntity();
        if ($this->request->is('post')) {
            $tipo = $this->Tipos->patchEntity($tipo, $this->request->getData());
            if ($this->Tipos->save($tipo)) {
                $this->Flash->success(__('The tipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipo could not be saved. Please, try again.'));
        }
        $this->set(compact('tipo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipo = $this->Tipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipo = $this->Tipos->patchEntity($tipo, $this->request->getData());
            if ($this->Tipos->save($tipo)) {
                $this->Flash->success(__('The tipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipo could not be saved. Please, try again.'));
        }
        $this->set(compact('tipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipo = $this->Tipos->get($id);
        if ($this->Tipos->delete($tipo)) {
            $this->Flash->success(__('The tipo has been deleted.'));
        } else {
            $this->Flash->error(__('The tipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
