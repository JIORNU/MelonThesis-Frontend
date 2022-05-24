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
    <?php echo $__env->make('components.Navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div id="content">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <?php echo $__env->make('components.Footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
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

    
    .centered {
        position: relative;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }
</style><?php /**PATH /var/www/MelonNew/resources/views/layouts/default.blade.php ENDPATH**/ ?>