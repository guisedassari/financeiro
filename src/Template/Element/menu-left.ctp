<!-- Sidebar user panel -->
<div class="user-panel">

    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Minha Navegação</li>
        <li>
            <?=
            $this->Html->link(
                '<i class="fa fa-users" aria-hidden="true"></i> <span>Usuarios</span>',
                ['controller' => 'Users', 'action' => 'index'],
                ['escape' => false]
            );
            ?>
        </li>
        <li>
            <?=
            $this->Html->link(
                '<i class="fa fa-users" aria-hidden="true"></i> <span>Tipos</span>',
                ['controller' => 'Tipos', 'action' => 'index'],
                ['escape' => false]
            );
            ?>
        </li>

    </ul>