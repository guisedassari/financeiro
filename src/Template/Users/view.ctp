<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('Edit {0}', ['User']), ['action' => 'edit', $user->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Delete {0}', ['User']), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
                <li><?= $this->Html->link(__('List {0}', ['Users']), ['action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['User']), ['action' => 'add']) ?> </li>
                <li><?= $this->Html->link(__('List {0}', ['Compradores']), ['controller' => 'Compradores', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Comprador']), ['controller' => 'Compradores', 'action' => 'add']) ?> </li>
                <li><?= $this->Html->link(__('List {0}', ['Contas']), ['controller' => 'Contas', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Conta']), ['controller' => 'Contas', 'action' => 'add']) ?> </li>
                <li><?= $this->Html->link(__('List {0}', ['Formas Pagamentos']), ['controller' => 'FormasPagamentos', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Formas Pagamento']), ['controller' => 'FormasPagamentos', 'action' => 'add']) ?> </li>
                <li><?= $this->Html->link(__('List {0}', ['Saidas']), ['controller' => 'Saidas', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Saida']), ['controller' => 'Saidas', 'action' => 'add']) ?> </li>
            </ul>
        </div>
    </div>
    <div class="users col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= h($user->username) ?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Username</th>
                        <td><?= h($user->username) ?></td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td><?= h($user->password) ?></td>
                    </tr>
                    <tr>
                        <th>Id</th>
                        <td><?= $this->Number->format($user->id) ?></td>
                    </tr>
                    <tr>
                        <th>Created</th>
                        <td><?= h($user->created) ?></tr>
                    </tr>
                    <tr>
                        <th>Modified</th>
                        <td><?= h($user->modified) ?></tr>
                    </tr>
                </table>
                <div class="related">
                    <?php if (!empty($user->compradores)): ?>
                        <h4><?= __('Related {0}', ['Compradores']) ?></h4>
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th>Modified</th>
                                <th>User Id</th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($user->compradores as $compradores): ?>
                                <tr>
                                    <td><?= h($compradores->id) ?></td>
                                    <td><?= h($compradores->nome) ?></td>
                                    <td><?= h($compradores->status) ?></td>
                                    <td><?= h($compradores->created) ?></td>
                                    <td><?= h($compradores->modified) ?></td>
                                    <td><?= h($compradores->user_id) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Compradores', 'action' => 'view', $compradores->id]) ?>

                                        <?= $this->Html->link(__('Edit'), ['controller' => 'Compradores', 'action' => 'edit', $compradores->id]) ?>

                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Compradores', 'action' => 'delete', $compradores->id], ['confirm' => __('Are you sure you want to delete # {0}?', $compradores->id)]) ?>

                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    <?php endif; ?>
                </div>
                <div class="related">
                    <?php if (!empty($user->contas)): ?>
                        <h4><?= __('Related {0}', ['Contas']) ?></h4>
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Valor</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th>Modified</th>
                                <th>User Id</th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($user->contas as $contas): ?>
                                <tr>
                                    <td><?= h($contas->id) ?></td>
                                    <td><?= h($contas->nome) ?></td>
                                    <td><?= h($contas->valor) ?></td>
                                    <td><?= h($contas->status) ?></td>
                                    <td><?= h($contas->created) ?></td>
                                    <td><?= h($contas->modified) ?></td>
                                    <td><?= h($contas->user_id) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Contas', 'action' => 'view', $contas->id]) ?>

                                        <?= $this->Html->link(__('Edit'), ['controller' => 'Contas', 'action' => 'edit', $contas->id]) ?>

                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contas', 'action' => 'delete', $contas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contas->id)]) ?>

                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    <?php endif; ?>
                </div>
                <div class="related">
                    <?php if (!empty($user->formas_pagamentos)): ?>
                        <h4><?= __('Related {0}', ['Formas Pagamentos']) ?></h4>
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th>Modified</th>
                                <th>User Id</th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($user->formas_pagamentos as $formasPagamentos): ?>
                                <tr>
                                    <td><?= h($formasPagamentos->id) ?></td>
                                    <td><?= h($formasPagamentos->nome) ?></td>
                                    <td><?= h($formasPagamentos->status) ?></td>
                                    <td><?= h($formasPagamentos->created) ?></td>
                                    <td><?= h($formasPagamentos->modified) ?></td>
                                    <td><?= h($formasPagamentos->user_id) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'FormasPagamentos', 'action' => 'view', $formasPagamentos->id]) ?>

                                        <?= $this->Html->link(__('Edit'), ['controller' => 'FormasPagamentos', 'action' => 'edit', $formasPagamentos->id]) ?>

                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'FormasPagamentos', 'action' => 'delete', $formasPagamentos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $formasPagamentos->id)]) ?>

                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    <?php endif; ?>
                </div>
                <div class="related">
                    <?php if (!empty($user->saidas)): ?>
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
                            <?php foreach ($user->saidas as $saidas): ?>
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
