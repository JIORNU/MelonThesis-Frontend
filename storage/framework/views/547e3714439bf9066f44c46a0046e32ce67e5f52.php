<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo e(asset ('/assets/adminlte/plugins/fontawesome-free/css/all.min.css')); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset ('/assets/adminlte/dist/css/adminlte.min.css')); ?>">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- REQUIRED SCRIPTS -->

    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <link rel="stylesheet" href="<?php echo e(asset('assets/bootstrap/css/bootstrap-icons.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/bootstrap-table-master/dist/bootstrap-table.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/bootstrap-table-master/dist/bootstrap-table.min.css')); ?>">

    <!-- <link rel="stylesheet" href="<?php echo e(asset('assets/bootstrap/css/bootstrap.css')); ?>"> -->
    <!-- <link rel="stylesheet" href="<?php echo e(asset('assets/bootstrap/css/bootstrap.min.css')); ?>"> -->
    <!-- <script src="<?php echo e(asset('assets/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script> -->
    <!-- <script src="<?php echo e(asset('assets/bootstrap/js/popper.min.js')); ?>"></script> -->
    <script src="<?php echo e(asset('assets/bootstrap/js/bootstrap.min.js')); ?>"></script>


    <!-- jQuery -->
    <script src="<?php echo e(asset ('/assets/adminlte/plugins/jquery/jquery.min.js')); ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo e(asset ('/assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo e(asset ('/assets/adminlte/dist/js/adminlte.min.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/bootstrap-table-master/dist/bootstrap-table.min.js')); ?>"></script>

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper" style="background:#f4f6f9;">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <!-- <a href="index3.html" class="nav-link">Home</a> -->
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <!-- <a href="#" class="nav-link">Contact</a> -->
                </li>
            </ul>

            <!-- Right navbar links -->

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="assets/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">ระบบจัดการฟาร์ม</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-4 d-flex">
                    <div class="image">
                        <img id="imgpreview" src="/uploads/profileimg/<?php echo e(auth()->user()->profileimg); ?>" alt="" style="border-radius:100%;width:100%;max-width:33px;max-height:33px;height:100%;box-shadow:2px 2px 5px rgb(0 0 0 / 40%);height:auto;width:1.8rem;">
                    </div>
                    <div class="info">
                        <a href="teacherdashboard" class="d-block"><?php echo e(auth()->user()->name); ?>&nbsp;<?php echo e(auth()->user()->lastname); ?></a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->

                <!-- <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div> -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <!-- <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Starter Pages
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Active Page</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Inactive Page</p>
                                    </a>
                                </li>
                            </ul>
                        </li> -->


                        <li class="nav-item mt-3">
                            <a href="/addmember" class="nav-link">
                                <i class="fas fa-user-plus mr-2" aria-hidden="true"></i>
                                <p>จัดการผู้ใช้</p>
                            </a>
                        </li>

                        <li class="nav-item mt-3">
                            <a href="/addproject" class="nav-link">
                                <i class="fas fa-book-medical mr-2"></i>
                                <p>บันทึกข้อมูลเมลอน</p>
                            </a>
                        </li>

                        <li class="nav-item mt-3">
                            <a href="/teachercalendar" class="nav-link">
                                <i class="fas fa-calendar-alt mr-2"></i>
                                <p>ปฏิทิน</p>
                            </a>
                        </li>

                        <li class="nav-item mt-3">
                            <a href="/teachergraph" class="nav-link">
                                <i class="fas fa-chart-bar mr-2"></i>
                                <p>กราฟ</p>
                            </a>
                        </li>

                        <li class="nav-item mt-3">

                            <form method="POST" class="nav-link" action="<?php echo e(route('logout')); ?>">
                     
                                    <button style="border: none; background: none; color:white; margin-left:-5px;color:#c2c7d0;">
                                        <i class="fa fa-sign-out-alt mr-2"></i>
                                        <p>ออกจากระบบ</p>
                                    </button>



                                    <?php echo csrf_field(); ?>
                         
                            </form>

                        </li>



                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                ARG
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2021 <a href="https://www.rmutt.ac.th">RMUTT@</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

</body>
<style scoped>
    /* form.nav-link :hover{
        color: white;
    } */
</style>

</html><?php /**PATH /var/www/MelonNew/resources/views/layouts/teacher.blade.php ENDPATH**/ ?>