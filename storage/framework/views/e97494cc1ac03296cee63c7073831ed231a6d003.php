<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <!-- <?php echo e(config('app.Name','AdminDashboard')); ?> -->
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('vendors/plugins/fontawesome-free/css/all.min.css')); ?> ">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?php echo e(asset('vendors/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo e(asset('vendors/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo e(asset('vendors/plugins/jqvmap/jqvmap.min.css')); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('vendors/dist/css/adminlte.min.css')); ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo e(asset('vendors/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo e(asset('vendors/plugins/daterangepicker/daterangepicker.css')); ?>">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo e(asset('vendors/plugins/summernote/summernote-bs4.min.css')); ?>">
</head>
    
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- 1.TOP Menu -->
        <?php echo $__env->make('layouts.topMenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- 2.Left Menu -->
        <?php echo $__env->make('layouts.leftMenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- 3. Main Content (Body) -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <?php echo $__env->yieldContent('content'); ?>
            </section>
        </div>

        <!-- 4.Right Menu -->
        <?php echo $__env->make('layouts.rightMenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- 5.Footer -->
        <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?php echo e(asset('vendors/plugins/jquery/jquery.min.js')); ?>"></script>

    <!-- Bootstrap 4 -->
    <script src="<?php echo e(asset('vendors/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

    <!-- AdminLTE App -->
    <script src="<?php echo e(asset('vendors/dist/js/adminlte.js')); ?>"></script>

</body>

</html><?php /**PATH /var/www/MelonNew/resources/views/layouts/dashboard.blade.php ENDPATH**/ ?>