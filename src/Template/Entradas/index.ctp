<div class="row">
    <div class="entradas col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <div class="title-btn-add" style="display: flex; justify-content: space-between; align-items: center;">
                    <h3 class="box-title">Entradas</h3>
                    <?= $this->Html->link(__('Adicionar'), ['action' => 'add'], ['class' => 'text-right btn btn-primary btn-sm']) ?>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('nome') ?></th>
                        <th><?= $this->Paginator->sort('valor') ?></th>
                        <th><?= $this->Paginator->sort('parcela') ?></th>
                        <th><?= $this->Paginator->sort('data') ?></th>
                        <th><?= $this->Paginator->sort('dizimo') ?></th>
                        <th><?= $this->Paginator->sort('formas_pagamento_id') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($entradas as $entrada): ?>
                        <tr>
                            <td><?= $this->Number->format($entrada->id) ?></td>
                            <td><?= h($entrada->nome) ?></td>
                            <td><?= $this->MyHtml->money($entrada->valor) ?></td>
                            <td><?= $this->Number->format($entrada->parcela) ?></td>
                            <td><?= $this->MyHtml->data($entrada->data) ?></td>
                            <td><?= $this->MyHtml->dizimo($entrada->dizimo) ?></td>
                            <td><?= $entrada->has('formas_pagamento') ? $this->Html->link($entrada->formas_pagamento->nome, ['controller' => 'FormasPagamentos', 'action' => 'view', $entrada->formas_pagamento->id]) : '' ?></td>
                            <td class="actions" style="white-space:nowrap">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $entrada->id], ['class' => 'btn btn-default btn-xs']) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $entrada->id], ['class' => 'btn btn-primary btn-xs']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $entrada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entrada->id), 'class' => 'btn btn-danger btn-xs']) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="paginator text-center">
                    <ul class="pagination">
                        <?= $this->Paginator->prev('&laquo; ' . __('previous'), ['escape' => false]) ?>
                        <?= $this->Paginator->numbers(['escape' => false]) ?>
                        <?= $this->Paginator->next(__('next') . ' &raquo;', ['escape' => false]) ?>
                    </ul>
                    <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} records out of
                    {{count}} total, starting on record {{start}}, ending on {{end}}')) ?></p>
                </div>
            </div>
        </div>
    </div>
</div>