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
                        <th><?= $this->Paginator->sort('forma_pagamento') ?></th>
                        <th><?= $this->Paginator->sort('Conta') ?></th>
                        <th><?= $this->Paginator->sort('status') ?></th>
                        <th><?= $this->Paginator->sort('Criado em') ?></th>
                        <th><?= $this->Paginator->sort('Modificado em') ?></th>
                        <th class="actions"><?= __('Descrição') ?></th>
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
                            <td><?= $entrada->formas_pagamento->nome ?></td>
                            <td><?= $entrada->conta->nome ?></td>
                            <td><?= $this->MyHtml->status($entrada->status) ?></td>
                            <td><?= $this->MyHtml->data($entrada->created) ?></td>
                            <td><?= $this->MyHtml->data($entrada->modified) ?></td>
                            <td><?= $this->MyHtml->description($entrada->obs, $entrada->id) ?></td>
                        </tr>
                    <?php endforeach; ?>
                    <tr class="text-center">
                        <td colspan="6">
                            <strong>Total Recebido</strong>
                        </td>
                        <td colspan="6" style="font-size: 18px;">
                            <strong><?= $this->MyHtml->money($totalEntradaMensal->totalMensal) ?></strong>
                        </td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
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
                        <th><?= $this->Paginator->sort('Forma Pagamento') ?></th>
                        <th><?= $this->Paginator->sort('Conta') ?></th>
                        <th><?= $this->Paginator->sort('data_compra') ?></th>
                        <th><?= $this->Paginator->sort('status') ?></th>
                        <th><?= $this->Paginator->sort('Criado em') ?></th>
                        <th><?= $this->Paginator->sort('Modificado em') ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($saidas as $saida): ?>
                        <tr>
                            <td><?= h($saida->nome) ?></td>
                            <td><?= $this->MyHtml->money($saida->valor) ?></td>
                            <td><?= $saida->compradore->nome ?></td>
                            <td><?= $this->Number->format($saida->parcela) ?></td>
                            <td><?= $this->Number->format($saida->total_parcelas) ?></td>
                            <td><?= $saida->tipo->nome ?></td>
                            <td><?= $saida->formas_pagamento->nome ?></td>
                            <td><?= $saida->conta->nome ?></td>
                            <td><?= $this->MyHtml->data($saida->data_compra) ?></td>
                            <td><?= $this->MyHtml->status($saida->status) ?></td>
                            <td><?= $this->MyHtml->data($saida->created) ?></td>
                            <td><?= $this->MyHtml->data($saida->modified) ?></td>
                        </tr>
                    <?php endforeach; ?>
                    <tr class="text-center">
                        <td colspan="6">
                            <strong>Total de Saida</strong>
                        </td>
                        <td colspan="6" style="font-size: 18px;">
                            <strong><?= $this->MyHtml->money($totalSaidaMensal->totalMensal) ?></strong>
                        </td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>