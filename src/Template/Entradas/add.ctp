<div class="row">
    <div class="entradas col-lg-12 col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= 'Add Entrada' ?></h3>
            </div>
            <div class="box-body">
                <?= $this->Form->create($entrada) ?>
                <?= $this->Form->hidden('user_id', ['value' => $userInfo['id']]); ?>
                <fieldset>
                    <div class="col-md-6">
                        <?= $this->Form->control('nome'); ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->MyForm->money('valor'); ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->control('parcela'); ?>
                    </div>
                    <div class="col-md-3">
                        <label>Data</label>
                        <?= $this->MyForm->data('data'); ?>
                    </div>
                    <div class="col-md-12">
                        <?= $this->Form->control('obs'); ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->control('formas_pagamento_id', ['options' => $formasPagamentos]); ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->MyForm->status('status'); ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->control('conta_id', ['options' => $contas]); ?>
                    </div>


                </fieldset>
                <div class="col-md-12 ">
                    <div class="pull-right">
                        <?= $this->Form->button(__('Submit', ['class' => ''])) ?>
                    </div>
                </div>

                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
