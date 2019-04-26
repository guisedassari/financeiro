<div class="row">
    <div class="compradores col-lg-12 col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= h($compradore->id) ?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Nome</th>
                        <td><?= h($compradore->nome) ?></td>
                    </tr>
                    <tr>
                        <th>User</th>
                        <td><?= $compradore->has('user') ? $this->Html->link($compradore->user->username, ['controller' => 'Users', 'action' => 'view', $compradore->user->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th>Id</th>
                        <td><?= $this->Number->format($compradore->id) ?></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td><?= $this->Number->format($compradore->status) ?></td>
                    </tr>
                    <tr>
                        <th>Created</th>
                        <td><?= h($compradore->created) ?></tr>
                    </tr>
                    <tr>
                        <th>Modified</th>
                        <td><?= h($compradore->modified) ?></tr>
                    </tr>
                </table>
            </div>
        </div>
    </div>
