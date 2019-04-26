<div class="users form large-4 large-centered columns content">
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Entrar') ?></legend>
        <?php
        echo $this->Form->control('username');
        echo $this->Form->control('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Entrar')) ?>
    <?= $this->Form->end() ?>
</div>
