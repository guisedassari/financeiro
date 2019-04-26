<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Eposter | Einstein</title>
    <!-- select2 -->
    <?= $this->Html->css('/plugins/admin/select2/dist/css/select2.min.css') ?>
    <!-- Bootstrap 3.3.7 -->
    <?= $this->Html->css('/plugins/admin/bootstrap/dist/css/bootstrap.min.css') ?>
    <!-- Font Awesome -->
    <?= $this->Html->css('/plugins/admin/font-awesome/css/font-awesome.min.css') ?>
    <!-- Ionicons -->
    <?= $this->Html->css('/plugins/admin/Ionicons/css/ionicons.min.css') ?>
    <!-- Theme style -->
    <?= $this->Html->css('admin/AdminLTE.min.css') ?>
    <!-- folder instead of downloading all of them to reduce the load. -->
    <?= $this->Html->css('/plugins/admin/skins/_all-skins.min.css') ?>
    <!-- Morris chart -->
    <?= $this->Html->css('/plugins/admin/morris.js/morris.css') ?>
    <!-- jvectormap -->
    <?= $this->Html->css('/plugins/admin/jvectormap/jquery-jvectormap.css') ?>
    <!-- Date Picker -->
    <?= $this->Html->css('/plugins/admin/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') ?>
    <!-- Daterange picker -->
    <?= $this->Html->css('/plugins/admin/bootstrap-daterangepicker/daterangepicker.css') ?>
    <!-- bootstrap wysihtml5 - text editor -->
    <?php //echo $this->Html->css('/plugins/admin/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>
    <!-- Alerts personalizados -->
    <?= $this->Html->css('/plugins/admin/jquery-confirm-v3.3.0/jquery-confirm-master/dist/jquery-confirm.min.css') ?>
    <!-- Google Font -->
    <?= $this->Html->css('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic') ?>
    <!-- Meu css -->
    <?= $this->fetch('css') ?>
    <?= $this->Html->css('admin/style.css') ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">
    <header class="main-header">
        <?= $this->element('Admin/menu-top'); ?>
    </header>
    <aside class="main-sidebar">
        <section class="sidebar">
            <?= $this->element('Admin/menu-left'); ?>
        </section>
    </aside>
    <div class="content-wrapper">
        <?= $this->fetch('content') ?>
    </div>
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 3.0.0
        </div>
        <strong>Desenvolvido por <a href="http://www.limaocravo.net" target="_blank">Limão Cravo | Estudio
                Criativo</a>.</strong> Todos os direitos reservados.
    </footer>
</div>

<!-- jQuery 3 -->
<?php echo $this->Html->script('/plugins/admin/jquery/dist/jquery.min.js') ?>
<!-- jQuery UI 1.11.4 -->
<?php echo $this->Html->script('/plugins/admin/jquery-ui/jquery-ui.min.js') ?>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<?php echo $this->Html->script('/plugins/admin/bootstrap/dist/js/bootstrap.min.js') ?>
<!-- Morris.js charts -->
<?php echo $this->Html->script('/plugins/admin/raphael/raphael.min.js') ?>
<?php echo $this->Html->script('/plugins/admin/morris.js/morris.min.js') ?>
<!-- Sparkline -->
<?php echo $this->Html->script('/plugins/admin/jquery-sparkline/dist/jquery.sparkline.min.js') ?>
<!-- jvectormap -->
<?php echo $this->Html->script('/plugins/admin/jvectormap/jquery-jvectormap.js') ?>
<!-- jQuery Knob Chart -->
<?php echo $this->Html->script('/plugins/admin/jquery-knob/dist/jquery.knob.min.js') ?>
<!-- daterangepicker -->
<?php echo $this->Html->script('/plugins/admin/moment/min/moment.min.js') ?>
<?php echo $this->Html->script('/plugins/admin/bootstrap-daterangepicker/daterangepicker.js') ?>
<!-- datepicker -->
<?php echo $this->Html->script('/plugins/admin/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') ?>
<!-- select2 -->
<?php echo $this->Html->script('/plugins/admin/select2/dist/js/select2.full.min.js') ?>
<!-- Bootstrap WYSIHTML5 -->
<?php
//echo $this->Html->script('/plugins/admin/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')
?>
<!-- Alerts personalizados -->
<?php echo $this->Html->script('/plugins/admin/jquery-confirm-v3.3.0/jquery-confirm-master/dist/jquery-confirm.min.js') ?>
<!-- Slimscroll -->
<?php echo $this->Html->script('/plugins/admin/jquery-slimscroll/jquery.slimscroll.min.js') ?>
<!-- FastClick -->
<?php echo $this->Html->script('/plugins/admin/fastclick/lib/fastclick.js') ?>
<!-- AdminLTE App -->
<?php echo $this->Html->script('admin/adminlte.min.js') ?>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<?php echo $this->Html->script('admin/pages/dashboard.js') ?>
<!-- AdminLTE for demo purposes -->
<?php echo $this->Html->script('admin/demo.js') ?>

<?= $this->fetch('script') ?>
<script>
    $('.select2').select2();
</script>
</body>

</html>