<div class="row">
    <div class="contas col-lg-12 col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= 'Edit Conta' ?></h3>
            </div>
            <div class="box-body">
                <?= $this->Form->create($conta) ?>
                <fieldset>
                    <?php
                    echo $this->Form->input('nome');
                    echo $this->MyForm->money('valor', $conta->valor);
                    echo $this->MyForm->status('status');
                    echo $this->Form->input('user_id', ['options' => $users, 'empty' => true]);
                    ?>
                </fieldset>
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
