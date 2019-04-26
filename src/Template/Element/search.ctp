<?= $this->Form->create(null, ['url' => ['controller' => 'Relatorios', 'action' => 'index'], 'class' => 'form-inline', 'method' => 'POST']) ?>
    <div class="form-group mb-5 mr-2">
        <?= $this->Form->control('mes', ['class' => 'form-control', 'style' => 'border-radius: 0px;', 'options' => [
            '' => 'Mes Atual',
            '01' => 'Janeiro',
            '02' => 'Fevereiro',
            '03' => 'Março',
            '04' => 'Abril',
            '05' => 'Maio',
            '06' => 'Junho',
            '07' => 'Julho',
            '08' => 'Agosto',
            '09' => 'Setembro',
            '10' => 'Outubro',
            '11' => 'Novembro',
            '12' => 'Dezembro',
        ]]); ?>
    </div>
    <div class="form-group mb-5 mr-2">
        <?= $this->Form->control('ano', ['class' => 'form-control', 'style' => 'border-radius: 0px;', 'options' => [
            '' => 'Ano Atual',
            '2019' => '2019',
            '2020' => '2020',
            '2021' => '2021',
            '2022' => '2022',
            '2023' => '2023',
            '2024' => '2024',
            '2025' => '2025',
        ]]); ?>
    </div>
<?= $this->Form->button(__('Pesquisar <i class="fas fa-search"></i>'), ['class' => 'btn btn-primary', 'style' => 'border-radius: 0px; margin-bottom: 27px;', 'escape' => false]) ?>
<?= $this->Form->end() ?>