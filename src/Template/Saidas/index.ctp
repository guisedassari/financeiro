<div class="row">
    <div class="saidas col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <div class="title-btn-add" style="display: flex; justify-content: space-between; align-items: center;">
                    <h3 class="box-title">Saidas</h3>
                    <?= $this->Html->link(__('Adicionar'), ['action' => 'add'], ['class' => 'text-right btn btn-primary btn-sm']) ?>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('nome') ?></th>
                        <th><?= $this->Paginator->sort('valor') ?></th>
                        <th><?= $this->Paginator->sort('comprador_id') ?></th>
                        <th><?= $this->Paginator->sort('parcela') ?></th>
                        <th><?= $this->Paginator->sort('Total Parcelas') ?></th>
                        <th><?= $this->Paginator->sort('tipo_id') ?></th>
                        <th><?= $this->Paginator->sort('data_compra') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($saidas as $saida): ?>
                        <tr>
                            <td><?= h($saida->nome) ?></td>
                            <td><?= $this->MyHtml->money($saida->valor) ?></td>
                            <td><?= $saida->has('comprador') ? $this->Html->link($saida->comprador->nome, ['controller' => 'Compradores', 'action' => 'view', $saida->comprador->id]) : '' ?></td>
                            <td><?= $this->Number->format($saida->parcela) ?></td>
                            <td><?= $this->Number->format($saida->total_parcelas) ?></td>
                            <td><?= $saida->has('tipo') ? $this->Html->link($saida->tipo->nome, ['controller' => 'Tipos', 'action' => 'view', $saida->tipo->id]) : '' ?></td>
                            <td><?= $this->MyHtml->data($saida->data_compra) ?></td>
                            <td class="actions" style="white-space:nowrap">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $saida->id], ['class' => 'btn btn-default btn-xs']) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $saida->id], ['class' => 'btn btn-primary btn-xs']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $saida->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saida->id), 'class' => 'btn btn-danger btn-xs']) ?>
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