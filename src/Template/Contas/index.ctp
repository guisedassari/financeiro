<div class="row">
    <div class="contas col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Contas</h3>
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
                        <th><?= $this->Paginator->sort('valor') ?></th>
                        <th><?= $this->Paginator->sort('status') ?></th>
                        <th><?= $this->Paginator->sort('created') ?></th>
                        <th><?= $this->Paginator->sort('modified') ?></th>
                        <th><?= $this->Paginator->sort('user_id') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($contas as $conta): ?>
                        <tr>
                            <td><?= $this->Number->format($conta->id) ?></td>
                            <td><?= h($conta->nome) ?></td>
                            <td><?= $this->Number->format($conta->valor) ?></td>
                            <td><?= $this->MyHtml->status($conta->status) ?></td>
                            <td><?= $this->MyHtml->dataHora($conta->created) ?></td>
                            <td><?= $this->MyHtml->dataHora($conta->modified) ?></td>
                            <td><?= $conta->has('user') ? $this->Html->link($conta->user->username, ['controller' => 'Users', 'action' => 'view', $conta->user->id]) : '' ?></td>
                            <td class="actions" style="white-space:nowrap">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $conta->id], ['class' => 'btn btn-default btn-xs']) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $conta->id], ['class' => 'btn btn-primary btn-xs']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $conta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conta->id), 'class' => 'btn btn-danger btn-xs']) ?>
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