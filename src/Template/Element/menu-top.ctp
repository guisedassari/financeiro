<!-- Logo -->
<a href="index2.html" class="logo" style="background-color: #1A5596 !important;">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini">E</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg">Sistema Financeiro</span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" style="background-color: #1A5596 !important;">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">


            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                    <span class="hidden-xs"><?= $userInfo['username']; ?></span>
                </a>
                <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">

                        <p>
                            <?= $userInfo['username']; ?>
                            <?= date('m/Y', strtotime($userInfo['created'])); ?>
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-left">
                            <?php
                            echo $this->Html->link(
                                'Perfil',
                                ['controller' => 'users', 'action' => 'edit', $userInfo['id']],
                                ['class' => 'btn btn-default btn-flat']
                            );
                            ?>
                        </div>
                        <div class="pull-right">
                            <?php
                            echo $this->Html->link(
                                'Sair',
                                '/logout',
                                ['class' => 'btn btn-default btn-flat']
                            );
                            ?>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>