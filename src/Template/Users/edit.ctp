<div class="row">
    <div class="users col-lg-12 col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= 'Edit User' ?></h3>
            </div>
            <div class="box-body">
                <?= $this->Form->create($user) ?>
                <fieldset>
                    <?php
                    echo $this->Form->control('username');
                    echo $this->Form->control('password', ['value' => '']);
                    ?>
                </fieldset>
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
