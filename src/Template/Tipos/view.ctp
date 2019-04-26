<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('Edit {0}', ['Tipo']), ['action' => 'edit', $tipo->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Delete {0}', ['Tipo']), ['action' => 'delete', $tipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipo->id)]) ?> </li>
                <li><?= $this->Html->link(__('List {0}', ['Tipos']), ['action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Tipo']), ['action' => 'add']) ?> </li>
                <li><?= $this->Html->link(__('List {0}', ['Saidas']), ['controller' => 'Saidas', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Saida']), ['controller' => 'Saidas', 'action' => 'add']) ?> </li>
            </ul>
        </div>
    </div>
    <div class="tipos col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= h($tipo->id) ?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Nome</th>
                        <td><?= h($tipo->nome) ?></td>
                    </tr>
                    <tr>
                        <th>Id</th>
                        <td><?= $this->Number->format($tipo->id) ?></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td><?= $this->Number->format($tipo->status) ?></td>
                    </tr>
                    <tr>
                        <th>Created</th>
                        <td><?= h($tipo->created) ?></tr>
                    </tr>
                    <tr>
                        <th>Modified</th>
                        <td><?= h($tipo->modified) ?></tr>
                    </tr>
                </table>
                <div class="related">
                    <?php if (!empty($tipo->saidas)): ?>
                        <h4><?= __('Related {0}', ['Saidas']) ?></h4>
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Valor</th>
                                <th>Comprador Id</th>
                                <th>Parcela</th>
                                <th>Tipo Id</th>
                                <th>Data Compra</th>
                                <th>Status</th>
                                <th>Modified</th>
                                <th>Descricao</th>
                                <th>Forma Pagamento Id</th>
                                <th>Created</th>
                                <th>Data Pagamento</th>
                                <th>Total Parcelas</th>
                                <th>User Id</th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($tipo->saidas as $saidas): ?>
                                <tr>
                                    <td><?= h($saidas->id) ?></td>
                                    <td><?= h($saidas->nome) ?></td>
                                    <td><?= h($saidas->valor) ?></td>
                                    <td><?= h($saidas->comprador_id) ?></td>
                                    <td><?= h($saidas->parcela) ?></td>
                                    <td><?= h($saidas->tipo_id) ?></td>
                                    <td><?= h($saidas->data_compra) ?></td>
                                    <td><?= h($saidas->status) ?></td>
                                    <td><?= h($saidas->modified) ?></td>
                                    <td><?= h($saidas->descricao) ?></td>
                                    <td><?= h($saidas->forma_pagamento_id) ?></td>
                                    <td><?= h($saidas->created) ?></td>
                                    <td><?= h($saidas->data_pagamento) ?></td>
                                    <td><?= h($saidas->total_parcelas) ?></td>
                                    <td><?= h($saidas->user_id) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Saidas', 'action' => 'view', $saidas->id]) ?>

                                        <?= $this->Html->link(__('Edit'), ['controller' => 'Saidas', 'action' => 'edit', $saidas->id]) ?>

                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Saidas', 'action' => 'delete', $saidas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saidas->id)]) ?>

                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
