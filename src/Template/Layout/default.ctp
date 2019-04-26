<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Eposter | Einstein</title>
    <!-- select2 -->
    <?= $this->Html->css('/plugins/select2/dist/css/select2.min.css') ?>
    <!-- Bootstrap 3.3.7 -->
    <?= $this->Html->css('/plugins/bootstrap/dist/css/bootstrap.min.css') ?>
    <!-- Font Awesome -->
    <?= $this->Html->css('/plugins/font-awesome/css/font-awesome.min.css') ?>
    <!-- Ionicons -->
    <?= $this->Html->css('/plugins/Ionicons/css/ionicons.min.css') ?>
    <!-- Theme style -->
    <?= $this->Html->css('AdminLTE.min.css') ?>
    <!-- folder instead of downloading all of them to reduce the load. -->
    <?= $this->Html->css('/plugins/skins/_all-skins.min.css') ?>
    <!-- Morris chart -->
    <?= $this->Html->css('/plugins/morris.js/morris.css') ?>
    <!-- jvectormap -->
    <?= $this->Html->css('/plugins/jvectormap/jquery-jvectormap.css') ?>
    <!-- Date Picker -->
    <?= $this->Html->css('/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') ?>
    <!-- Daterange picker -->
    <?= $this->Html->css('/plugins/bootstrap-daterangepicker/daterangepicker.css') ?>
    <!-- bootstrap wysihtml5 - text editor -->
    <?php
    ?>
    <!-- Alerts personalizados -->
    <?= $this->Html->css('/plugins/jquery-confirm-v3.3.0/jquery-confirm-master/dist/jquery-confirm.min.css') ?>
    <!-- Google Font -->
    <?= $this->Html->css('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic') ?>
    <!-- Meu css -->
    <?= $this->fetch('css') ?>
    <?= $this->Html->css('style.css') ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">
    <header class="main-header">
        <?= $this->element('menu-top'); ?>
    </header>
    <aside class="main-sidebar">
        <section class="sidebar">
            <?= $this->element('menu-left'); ?>
        </section>
    </aside>
    <div class="content-wrapper">
        <?= $this->fetch('content') ?>
    </div>
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 3.0.0
        </div>
        <strong>Desenvolvido por Guilherme Sedassari Todos os direitos reservados.
    </footer>
</div>

<!-- jQuery 3 -->
<?php echo $this->Html->script('/plugins/jquery/dist/jquery.min.js') ?>
<!-- jQuery UI 1.11.4 -->
<?php echo $this->Html->script('/plugins/jquery-ui/jquery-ui.min.js') ?>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<?php echo $this->Html->script('/plugins/bootstrap/dist/js/bootstrap.min.js') ?>
<!-- Morris.js charts -->
<?php echo $this->Html->script('/plugins/raphael/raphael.min.js') ?>
<?php echo $this->Html->script('/plugins/morris.js/morris.min.js') ?>
<!-- Sparkline -->
<?php echo $this->Html->script('/plugins/jquery-sparkline/dist/jquery.sparkline.min.js') ?>
<!-- jvectormap -->
<?php echo $this->Html->script('/plugins/jvectormap/jquery-jvectormap.js') ?>
<!-- jQuery Knob Chart -->
<?php echo $this->Html->script('/plugins/jquery-knob/dist/jquery.knob.min.js') ?>
<!-- daterangepicker -->
<?php echo $this->Html->script('/plugins/moment/min/moment.min.js') ?>
<?php echo $this->Html->script('/plugins/bootstrap-daterangepicker/daterangepicker.js') ?>
<!-- datepicker -->
<?php echo $this->Html->script('/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') ?>
<!-- select2 -->
<?php echo $this->Html->script('/plugins/select2/dist/js/select2.full.min.js') ?>
<!-- Bootstrap WYSIHTML5 -->
<?php
//echo $this->Html->script('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')
?>

<!-- Alerts personalizados -->
<?php echo $this->Html->script('/plugins/jquery-confirm-v3.3.0/jquery-confirm-master/dist/jquery-confirm.min.js') ?>
<!-- Slimscroll -->
<?php echo $this->Html->script('/plugins/jquery-slimscroll/jquery.slimscroll.min.js') ?>
<!-- FastClick -->
<?php echo $this->Html->script('/plugins/fastclick/lib/fastclick.js') ?>
<!-- AdminLTE App -->
<?php echo $this->Html->script('adminlte.min.js') ?>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<?php echo $this->Html->script('pages/dashboard.js') ?>
<!-- AdminLTE for demo purposes -->
<?php echo $this->Html->script('demo.js') ?>

<?= $this->fetch('script') ?>
<script>
    $('.select2').select2();
</script>
</body>

</html>