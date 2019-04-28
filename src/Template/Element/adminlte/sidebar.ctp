<section class="sidebar">

    <div class="user-panel">
        <div class="pull-left image">
            <?php
            echo $this->Html->image(
                '/img/c21f969b5f03d33d43e04f8f136e7682.png',
                ['class' => 'img-circle', "alt" => "User Image"]
            );
            ?>
        </div>
        <div class="pull-left info">
            <p><?= $userInfo['username'] ?></p>
            <!-- Status -->
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>

    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
        </div>
    </form>
    <ul class="sidebar-menu">
        <li class="header">NAVEGAÇÃO</li>
        <li class="active">
            <?=
            $this->Html->link(
                '<i class="fa fa-circle-thin" aria-hidden="true"></i> <span>Relatorios</span>',
                ['controller' => 'Relatorios', 'action' => 'index'],
                ['escape' => false]
            );
            ?>
        </li>
        <li>
            <?=
            $this->Html->link(
                '<i class="fa fa-circle-thin" aria-hidden="true"></i> <span>Relatorios Geral</span>',
                ['controller' => 'Relatorios', 'action' => 'relatorioGeral'],
                ['escape' => false]
            );
            ?>
        </li>
        <li>
            <?=
            $this->Html->link(
                '<i class="fa fa-circle-thin" aria-hidden="true"></i> <span>Usuarios</span>',
                ['controller' => 'Users', 'action' => 'index'],
                ['escape' => false]
            );
            ?>
        </li>
        <li>
            <?=
            $this->Html->link(
                '<i class="fa fa-circle-thin" aria-hidden="true"></i> <span>Entradas</span>',
                ['controller' => 'Entradas', 'action' => 'index'],
                ['escape' => false]
            );
            ?>
        </li>
        <li>
            <?=
            $this->Html->link(
                '<i class="fa fa-circle-thin" aria-hidden="true"></i> <span>Saidas</span>',
                ['controller' => 'Saidas', 'action' => 'index'],
                ['escape' => false]
            );
            ?>
        </li>
        <li>
            <?=
            $this->Html->link(
                '<i class="fa fa-circle-thin" aria-hidden="true"></i> <span>Contas</span>',
                ['controller' => 'Contas', 'action' => 'index'],
                ['escape' => false]
            );
            ?>
        </li>
        <li>
            <?=
            $this->Html->link(
                '<i class="fa fa-circle-thin" aria-hidden="true"></i> <span>Formas Pagamentos</span>',
                ['controller' => 'FormasPagamentos', 'action' => 'index'],
                ['escape' => false]
            );
            ?>
        </li>
        <li>
            <?=
            $this->Html->link(
                '<i class="fa fa-circle-thin" aria-hidden="true"></i> <span>Tipos</span>',
                ['controller' => 'Tipos', 'action' => 'index'],
                ['escape' => false]
            );
            ?>
        </li>
        <li>
            <?=
            $this->Html->link(
                '<i class="fa fa-circle-thin" aria-hidden="true"></i> <span>Compradores</span>',
                ['controller' => 'Compradores', 'action' => 'index'],
                ['escape' => false]
            );
            ?>
        </li>
    </ul>
</section>
