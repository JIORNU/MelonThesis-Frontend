<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- add - css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/bootstrap/css/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/bootstrap/css/bootstrap.css')); ?>" />
    <!-- add - javascript -->
    <script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.js"></script>
    <script src="<?php echo e(asset('assets/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/bootstrap/js/bootstrap.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/jquery/jquery-3.6.0.min.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <!-- add bootstrap_table -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/bootstrap-table-master/dist/bootstrap-table.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/bootstrap-table-master/dist/bootstrap-table.min.css')); ?>">
    <script src="<?php echo e(asset('assets/bootstrap-table-master/dist/bootstrap-table.min.js')); ?>"></script>
    <title>Default</title>
</head>
<body>
    <div id="content">
        <div class="container">
            <div class="container login-box">
                <div class="row">
                    <div class=" col-lg-6 left-content">
                        <div class="login-header-left pt-5">
                            <h4 style="text-align: center; color:#FFD07F">AGR | RMUTT</h4>
                            <h4 style="text-align: center;color:#FDA65D">Dashboard</h4>
                            <!-- // underline -->
                            <div class="underline"></div>
                        </div>
                    </div>
                           
                     <div class=" col-lg-6 right-content">
                        <div class="login-header-right pt-5">
                            <h3 style="text-align: center ;color:#FFEDDA;text-shadow: 2px 2px 5px rgb(0 0 0 / 40%);">ยินดีต้อนรับ</h3>
                        </div>
                        <div class="login-body p-5">
                            <form action="<?php echo e(route('login')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="form-group mb-5">
                                    <input id="user" type="text" name="username" placeholder="ชื่อผู้ใช้" class="form-control" />
                                </div>
                                <div class="form-group mb-5">
                                    <input id="password" type="password" name="password" placeholder="รหัสผ่าน" class="form-control" />
                                </div>
                                <p class="text-center">
                                    <button class="btn btn-primary" style="background-color:#FFD07F; 
                                    border-color:#FFD07F ; color:#E26A2C;box-shadow:2px 2px 5px rgb(0 0 0 / 40%); ">
                                        <i class="fa fa-sign-in"></i> เข้าสู่ระบบ
                                    </button>
                                </p>
                            </form>
                            <p class="text-center text-muted"></p>
                            <p class="text-center text-muted">
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</body>
<style>
    *,
    ::after,
    ::before {
        box-sizing: border-box;
        margin: 0;
    }

    .body {
        font-size: 1rem;
        font-weight: 400px;
        line-height: 1.5;
        color: black;
        background-color: #f0f0f0;

    }

    .center {
        position: relative;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    /*id=content set background color and height */
    #content {
        padding: 12px;
        width: 100%;
        min-height: 100vh;
        justify-content: center;
        display: flex;
        flex-wrap: wrap;
        align-items: center;

        background: linear-gradient(135deg, #F6D9BA 60%, #D6BC9C 100%);
    }

    /* < !-- login-box background --> */
    .login-box {
        border-radius: 10px;
        /* background-color: #854728D7; */
        box-shadow: 2px 2px 5px rgb(0 0 0 / 40%);
        overflow: hidden;
    }

    /* background left-content*/
    .left-content {
        /* background-color: #854728D7; */
        background-color: #a52626de;
        position: relative;
    }

    /*backgorund right-content */

    .right-content {
        background: linear-gradient(135deg, #FDA55D 0%, #f35587 100%);
        position: relative
    }

    /*-------------------------------------------- */


    /*underline*/
    .underline {
        margin-left: 24%;
        margin-top: 25px;
        border-bottom: 2.5px solid #FFD07F;
        width: 50%;
        margin-bottom: 20px;
    }
</style>

</html><?php /**PATH /var/www/MelonNew/resources/views/admin/adminrmutt.blade.php ENDPATH**/ ?>