<div class="row">
    <div class="tipos col-lg-12 col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= 'Add Tipo' ?></h3>
            </div>
            <div class="box-body">
                <?= $this->Form->create($tipo) ?>
                <fieldset>
                    <?php
                    echo $this->Form->control('nome');
                    echo $this->MyForm->status('status');
                    ?>
                </fieldset>
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
