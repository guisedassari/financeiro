<div class="row">
    <div class="compradores col-lg-12 col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= 'Add Comprador' ?></h3>
            </div>
            <div class="box-body">
                <?= $this->Form->create($compradores) ?>
                <fieldset>
                    <?php
                    echo $this->Form->control('nome');
                    echo $this->MyForm->status('status');
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    ?>
                </fieldset>
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
