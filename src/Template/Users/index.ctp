<div class="row">
    <div class="users col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <div class="title-btn-add" style="display: flex; justify-content: space-between; align-items: center;">
                    <h3 class="box-title">Users</h3>
                    <?= $this->Html->link(__('Adicionar'), ['action' => 'add'], ['class' => 'text-right btn btn-primary btn-sm']) ?>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('username') ?></th>
                        <th><?= $this->Paginator->sort('created') ?></th>
                        <th><?= $this->Paginator->sort('modified') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $this->Number->format($user->id) ?></td>
                            <td><?= h($user->username) ?></td>
                            <td><?= h($user->created) ?></td>
                            <td><?= h($user->modified) ?></td>
                            <td class="actions" style="white-space:nowrap">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $user->id], ['class' => 'btn btn-default btn-xs']) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], ['class' => 'btn btn-primary btn-xs']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'btn btn-danger btn-xs']) ?>
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