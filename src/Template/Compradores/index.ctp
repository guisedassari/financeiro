<div class="row">
    <div class="compradores col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Compradores</h3>
                <div class="text-right">
                    <?= $this->Html->link(__('Adicionar'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
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
                    <?php foreach ($compradores as $compradore): ?>
                        <tr>
                            <td><?= $this->Number->format($compradore->id) ?></td>
                            <td><?= h($compradore->nome) ?></td>
                            <td><?= $this->MyHtml->status($compradore->status) ?></td>
                            <td><?= $this->MyHtml->dataHora($compradore->created) ?></td>
                            <td><?= $this->MyHtml->dataHora($compradore->modified) ?></td>
                            <td><?= $compradore->has('user') ? $this->Html->link($compradore->user->username, ['controller' => 'Users', 'action' => 'view', $compradore->user->id]) : '' ?></td>
                            <td class="actions" style="white-space:nowrap">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $compradore->id], ['class' => 'btn btn-default btn-xs']) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $compradore->id], ['class' => 'btn btn-primary btn-xs']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $compradore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $compradore->id), 'class' => 'btn btn-danger btn-xs']) ?>
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