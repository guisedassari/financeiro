<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('Edit {0}', ['Saida']), ['action' => 'edit', $saida->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Delete {0}', ['Saida']), ['action' => 'delete', $saida->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saida->id)]) ?> </li>
                <li><?= $this->Html->link(__('List {0}', ['Saidas']), ['action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Saida']), ['action' => 'add']) ?> </li>
                <li><?= $this->Html->link(__('List {0}', ['Tipos']), ['controller' => 'Tipos', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Tipo']), ['controller' => 'Tipos', 'action' => 'add']) ?> </li>
                <li><?= $this->Html->link(__('List {0}', ['Users']), ['controller' => 'Users', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['User']), ['controller' => 'Users', 'action' => 'add']) ?> </li>
            </ul>
        </div>
    </div>
    <div class="saidas col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= h($saida->id) ?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Nome</th>
                        <td><?= h($saida->nome) ?></td>
                    </tr>
                    <tr>
                        <th>Tipo</th>
                        <td><?= $saida->has('tipo') ? $this->Html->link($saida->tipo->id, ['controller' => 'Tipos', 'action' => 'view', $saida->tipo->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th>Forma Pagamento Id</th>
                        <td><?= h($saida->forma_pagamento_id) ?></td>
                    </tr>
                    <tr>
                        <th>User</th>
                        <td><?= $saida->has('user') ? $this->Html->link($saida->user->username, ['controller' => 'Users', 'action' => 'view', $saida->user->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th>Id</th>
                        <td><?= $this->Number->format($saida->id) ?></td>
                    </tr>
                    <tr>
                        <th>Valor</th>
                        <td><?= $this->Number->format($saida->valor) ?></td>
                    </tr>
                    <tr>
                        <th>Comprador Id</th>
                        <td><?= $this->Number->format($saida->comprador_id) ?></td>
                    </tr>
                    <tr>
                        <th>Parcela</th>
                        <td><?= $this->Number->format($saida->parcela) ?></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td><?= $this->Number->format($saida->status) ?></td>
                    </tr>
                    <tr>
                        <th>Total Parcelas</th>
                        <td><?= $this->Number->format($saida->total_parcelas) ?></td>
                    </tr>
                    <tr>
                        <th>Data Compra</th>
                        <td><?= h($saida->data_compra) ?></tr>
                    </tr>
                    <tr>
                        <th>Modified</th>
                        <td><?= h($saida->modified) ?></tr>
                    </tr>
                    <tr>
                        <th>Created</th>
                        <td><?= h($saida->created) ?></tr>
                    </tr>
                    <tr>
                        <th>Data Pagamento</th>
                        <td><?= h($saida->data_pagamento) ?></tr>
                    </tr>
                </table>
                <div class="row">
                    <h4>Descricao</h4>
                    <?= $this->Text->autoParagraph(h($saida->descricao)); ?>
                </div>
            </div>
        </div>
    </div>
