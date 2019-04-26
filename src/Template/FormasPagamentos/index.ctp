<div class="row">
    <div class="formasPagamentos col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <div class="title-btn-add" style="display: flex; justify-content: space-between; align-items: center;">
                    <h3 class="box-title">Formas Pagamentos</h3>
                    <?= $this->Html->link(__('Adicionar'), ['action' => 'add'], ['class' => 'text-right btn btn-primary btn-sm']) ?>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('nome') ?></th>
                        <th><?= $this->Paginator->sort('status') ?></th>
                        <th><?= $this->Paginator->sort('created') ?></th>
                        <th><?= $this->Paginator->sort('modified') ?></th>
                        <th><?= $this->Paginator->sort('user_id') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($formasPagamentos as $formasPagamento): ?>
                        <tr>
                            <td><?= $this->Number->format($formasPagamento->id) ?></td>
                            <td><?= h($formasPagamento->nome) ?></td>
                            <td><?= $this->MyHtml->status($formasPagamento->status) ?></td>
                            <td><?= $this->MyHtml->dataHora($formasPagamento->created) ?></td>
                            <td><?= $this->MyHtml->dataHora($formasPagamento->modified) ?></td>
                            <td><?= $formasPagamento->has('user') ? $this->Html->link($formasPagamento->user->username, ['controller' => 'Users', 'action' => 'view', $formasPagamento->user->id]) : '' ?></td>
                            <td class="actions" style="white-space:nowrap">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $formasPagamento->id], ['class' => 'btn btn-default btn-xs']) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $formasPagamento->id], ['class' => 'btn btn-primary btn-xs']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $formasPagamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $formasPagamento->id), 'class' => 'btn btn-danger btn-xs']) ?>
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