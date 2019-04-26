<div class="row">
    <div class="entradas col-lg-12 col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= h($entrada->id) ?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Nome</th>
                        <td><?= h($entrada->nome) ?></td>
                    </tr>
                    <tr>
                        <th>Formas Pagamento</th>
                        <td><?= $entrada->has('formas_pagamento') ? $this->Html->link($entrada->formas_pagamento->id, ['controller' => 'FormasPagamentos', 'action' => 'view', $entrada->formas_pagamento->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th>Conta</th>
                        <td><?= $entrada->has('conta') ? $this->Html->link($entrada->conta->id, ['controller' => 'Contas', 'action' => 'view', $entrada->conta->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th>Id</th>
                        <td><?= $this->Number->format($entrada->id) ?></td>
                    </tr>
                    <tr>
                        <th>Valor</th>
                        <td><?= $this->Number->format($entrada->valor) ?></td>
                    </tr>
                    <tr>
                        <th>Parcela</th>
                        <td><?= $this->Number->format($entrada->parcela) ?></td>
                    </tr>
                    <tr>
                        <th>Dizimo</th>
                        <td><?= $this->Number->format($entrada->dizimo) ?></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td><?= $this->Number->format($entrada->status) ?></td>
                    </tr>
                    <tr>
                        <th>Data</th>
                        <td><?= h($entrada->data) ?></tr>
                    </tr>
                    <tr>
                        <th>Created</th>
                        <td><?= h($entrada->created) ?></tr>
                    </tr>
                    <tr>
                        <th>Modified</th>
                        <td><?= h($entrada->modified) ?></tr>
                    </tr>
                </table>
                <div class="row">
                    <h4>Obs</h4>
                    <?= $this->Text->autoParagraph(h($entrada->obs)); ?>
                </div>
            </div>
        </div>
    </div>
