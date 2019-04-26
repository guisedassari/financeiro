<div class="row">
    <div class="contas col-lg-12 col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= h($conta->id) ?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Nome</th>
                        <td><?= h($conta->nome) ?></td>
                    </tr>
                    <tr>
                        <th>User</th>
                        <td><?= $conta->has('user') ? $this->Html->link($conta->user->username, ['controller' => 'Users', 'action' => 'view', $conta->user->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th>Id</th>
                        <td><?= $this->Number->format($conta->id) ?></td>
                    </tr>
                    <tr>
                        <th>Valor</th>
                        <td><?= $this->Number->format($conta->valor) ?></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td><?= $this->Number->format($conta->status) ?></td>
                    </tr>
                    <tr>
                        <th>Created</th>
                        <td><?= h($conta->created) ?></tr>
                    </tr>
                    <tr>
                        <th>Modified</th>
                        <td><?= h($conta->modified) ?></tr>
                    </tr>
                </table>
                <div class="related">
                    <?php if (!empty($conta->entradas)): ?>
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
                            <?php foreach ($conta->entradas as $entradas): ?>
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
