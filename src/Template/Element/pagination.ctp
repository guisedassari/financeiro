<ul class="pagination">
    <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
    <?= $this->Paginator->prev('< ' . __('anterior')) ?>
    <?= $this->Paginator->numbers() ?>
    <?= $this->Paginator->next(__('Próximo') . ' >') ?>
    <?= $this->Paginator->last(__('último') . ' >>') ?>
</ul>
<p>
    <?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} registro (s) de {{count}} total')]) ?>
</p>