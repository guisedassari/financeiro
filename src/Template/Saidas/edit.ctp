<div class="row">
    <div class="saidas col-lg-12 col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= 'Edit Saida' ?></h3>
            </div>
            <div class="box-body">
                <?= $this->Form->create($saida) ?>
                <?= $this->Form->hidden('user_id', ['value' => $userInfo['id']]); ?>
                <fieldset>
                    <div class="col-md-6">
                        <?php echo $this->Form->control('nome'); ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->MyForm->money('valor'); ?>
                        <?= $this->Form->hidden('valor_antigo', ['value' => $saida->valor]); ?>
                    </div>
                    <div class="col-md-3">
                        <?php echo $this->Form->control('comprador_id', ['options' => $compradores]); ?>
                    </div>
                    <div class="col-md-2">
                        <?php echo $this->Form->control('parcela'); ?>
                    </div>
                    <div class="col-md-3">
                        <?php echo $this->Form->control('tipo_id', ['options' => $tipos]); ?>
                    </div>
                    <div class="col-md-3">
                        <label>Data</label>
                        <?= $this->MyForm->data('data_compra'); ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->MyForm->status('status'); ?>
                    </div>
                    <div class="col-md-12">
                        <?php echo $this->Form->control('descricao'); ?>
                    </div>
                    <div class="col-md-3">
                        <?php echo $this->Form->control('forma_pagamento_id'); ?>
                    </div>
                    <div class="col-md-3">
                        <label>Data</label>
                        <?= $this->MyForm->data('data_pagamento'); ?>
                    </div>
                    <div class="col-md-2">
                        <?php echo $this->Form->control('total_parcelas'); ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->control('conta_id', ['options' => $contas]); ?>
                    </div>
                </fieldset>
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
