<!-- Logo -->
<a href="index2.html" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>A</b>LT</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Admin</b>LTE</span>
</a>

<!-- Header Navbar -->
<nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="hidden-xs"><?= $userInfo['username'] ?></span>
                </a>
                <ul class="dropdown-menu">
                    <!-- The user image in the menu -->
                    <li class="user-header">
                        <?php
                        echo $this->Html->image(
                            '/img/c21f969b5f03d33d43e04f8f136e7682.png',
                            ['class' => 'img-circle', "alt" => "User Image"]
                        );
                        ?>

                        <p>
                            <?= $userInfo['username'] ?>
                            <small><?= $userInfo['created'] ?></small>
                        </p>
                    </li>
                    <!-- Menu Body -->

                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-left">
                            <?=
                            $this->Html->link(
                                'Profile',
                                ['controller' => 'Users', 'action' => 'edit', $userInfo['id']],
                                ['escape' => false, 'class' => 'btn btn-default btn-flat']
                            );
                            ?>
                        </div>
                        <div class="pull-right">
                            <?=
                            $this->Html->link(
                                'Sair',
                                ['controller' => 'Users', 'action' => 'logout'],
                                ['escape' => false, 'class' => 'btn btn-default btn-flat']
                            );
                            ?>
                        </div>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</nav>
