<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('Edit {0}', ['Formas Pagamento']), ['action' => 'edit', $formasPagamento->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Delete {0}', ['Formas Pagamento']), ['action' => 'delete', $formasPagamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $formasPagamento->id)]) ?> </li>
                <li><?= $this->Html->link(__('List {0}', ['Formas Pagamentos']), ['action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Formas Pagamento']), ['action' => 'add']) ?> </li>
                <li><?= $this->Html->link(__('List {0}', ['Users']), ['controller' => 'Users', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['User']), ['controller' => 'Users', 'action' => 'add']) ?> </li>
                <li><?= $this->Html->link(__('List {0}', ['Entradas']), ['controller' => 'Entradas', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Entrada']), ['controller' => 'Entradas', 'action' => 'add']) ?> </li>
            </ul>
        </div>
    </div>
    <div class="formasPagamentos col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= h($formasPagamento->id) ?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Nome</th>
                        <td><?= h($formasPagamento->nome) ?></td>
                    </tr>
                    <tr>
                        <th>User</th>
                        <td><?= $formasPagamento->has('user') ? $this->Html->link($formasPagamento->user->username, ['controller' => 'Users', 'action' => 'view', $formasPagamento->user->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th>Id</th>
                        <td><?= $this->Number->format($formasPagamento->id) ?></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td><?= $this->Number->format($formasPagamento->status) ?></td>
                    </tr>
                    <tr>
                        <th>Created</th>
                        <td><?= h($formasPagamento->created) ?></tr>
                    </tr>
                    <tr>
                        <th>Modified</th>
                        <td><?= h($formasPagamento->modified) ?></tr>
                    </tr>
                </table>
                <div class="related">
                    <?php if (!empty($formasPagamento->entradas)): ?>
                        <h4><?= __('Related {0}', ['Entradas']) ?></h4>
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Valor</th>
                                <th>Parcela</th>
                                <th>Data</th>
                                <th>Obs</th>
                                <th>Dizimo</th>
                                <th>Formas Pagamento Id</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th>Modified</th>
                                <th>Conta Id</th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($formasPagamento->entradas as $entradas): ?>
                                <tr>
                                    <td><?= h($entradas->id) ?></td>
                                    <td><?= h($entradas->nome) ?></td>
                                    <td><?= h($entradas->valor) ?></td>
                                    <td><?= h($entradas->parcela) ?></td>
                                    <td><?= h($entradas->data) ?></td>
                                    <td><?= h($entradas->obs) ?></td>
                                    <td><?= h($entradas->dizimo) ?></td>
                                    <td><?= h($entradas->formas_pagamento_id) ?></td>
                                    <td><?= h($entradas->status) ?></td>
                                    <td><?= h($entradas->created) ?></td>
                                    <td><?= h($entradas->modified) ?></td>
                                    <td><?= h($entradas->conta_id) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Entradas', 'action' => 'view', $entradas->id]) ?>

                                        <?= $this->Html->link(__('Edit'), ['controller' => 'Entradas', 'action' => 'edit', $entradas->id]) ?>

                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Entradas', 'action' => 'delete', $entradas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entradas->id)]) ?>

                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
