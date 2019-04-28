<div class="row">
    <?php
    //debug($qtdeCompras);
    ?>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3><?= $totalGeral->totalGeral ?></h3>

                <p>Total Geral</p>
            </div>
            <div class="icon">
                R$
            </div>
        </div>
    </div>
    <?php foreach ($contas as $conta): ?>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3><?= ($conta->valor); ?></h3>

                    <p><?= ($conta->nome); ?></p>
                </div>
                <div class="icon">
                    <i class="fa fa-usd" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3><?= $qtdeCompras->qtde_compras; ?></h3>

                <p>Qtde Compras</p>
            </div>
            <div class="icon">
                <i class="fa fa-usd" aria-hidden="true"></i>
            </div>
        </div>
    </div>

</div>