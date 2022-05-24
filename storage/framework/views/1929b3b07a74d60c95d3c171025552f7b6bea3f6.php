<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- add - css -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="<?php echo e(asset('assets/bootstrap/css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/bootstrap/css/bootstrap.min.css')); ?>">
    <!-- add - javascript -->
    <script src="<?php echo e(asset('assets/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/bootstrap/js/bootstrap.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/jquery/jquery-3.6.0.min.js')); ?>"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <title>Default</title>
</head>

<body>
    <?php echo $__env->make('components.Navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
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

    /*top-bar*/
    .row {
        display: flex;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }

    #top {
        background-color: #555;
        padding: 10px 0;
    }

    #top a {
        color: rgb(255, 255, 255);
    }

    /*ทำ responsive แนะนำโปรโมชั่น*/
    .ml-1,
    .mx-1 {
        margin-left: 0.25rem !important;
    }

    @media (min-width: 992px) {

        .mb-lg-0,
        .my-lg-0 {
            margin-bottom: 0 !important;
        }
    }

    /* แสดง | (ขีด) ระหว่าง เมนู topbar บนขวา*/
    #top ul.menu>li+li:before {
        content: '|\00a0';
        padding: 0 5px;
        color: #f8f9fa;
    }

    #top ul.menu {
        padding-top: 5px;
        margin: 0;
        font-size: 0.8rem;
        text-align: right;
    }

    #top ul.menu>li {
        margin-right: 0;
    }

    /* ปิดขีดเส้นใต้ link และเพิ่ม transition ขีดเส้นใต้หลังขี้ที่ link*/
    /* ======================================================
a:hover,
a :focus {
text-decoration: underline;
width: 100%;
height: 2px;
bottom: 0;
left: 0;
transition: all 0.3s ease-in-out;
} */

    a {
        text-decoration-line: none;
        position: relative;
    }

    a.top-link:hover:before {
        visibility: visible;
        transform: scaleX(1);
        bottom: -5px;
    }

    a.top-link:before {
        content: '';
        position: absolute;
        width: 100%;
        height: 2px;
        bottom: 0;
        left: 0;
        background-color: #fff;
        visibility: hidden;
        transform: scaleX(0);
        transition: all 0.3s ease-in-out;
        bottom: -5px;
    }


    /* LOGIN modal*/
    #top #login-modal .modal-header {
        background: #379392;
    }

    #top #login-modal .modal-header h5 {
        color: #fff;
    }

    #top #login-modal a {
        color: #379392;
    }

    #top #login-modal p {
        font-weight: 300;
        margin-bottom: 20px;
    }

    /* ==============================================*/
    /*navbar menu  ( under-topbar)*/
    img {
        width: 98px;
        /* height: 100px; */
    }

    .navbar {
        padding: 0 1rem;
    }

    .navbar .navbar-btn {
        margin-right: 10px;
    }

    .btn-primary {
        background-color: #4fbfa8;
        border-color: #4fbfa8;
    }

    .btn-primary:hover {
        background-color: #3aa18c;
        border-color: #3aa18c;
        transition: all 0.3s;
    }

    /*navbar dropdown*/

    .navbar {
        /* border-bottom: 1px solid #e6e6e6; */
        background-color: #cffff487;
        background: linear-gradient(275deg, rgba(137, 181, 175, 1) 0%, rgba(150, 199, 193, 1) 26%, rgba(208, 202, 178, 1) 97%);
        box-shadow: 2px 2px 5px rgb(0 0 0 / 40%);
    }

    .navbar .navbar-nav>.nav-item>.nav-link {
        text-transform: uppercase;
        letter-spacing: 0.1em;
        font-weight: 700;
        padding: 30px 15px !important;
        color: #555;
    }

    @media (max-width: 991.98px) {
        .navbar .navbar-nav>.nav-item>.nav-link {
            padding: 10px 15px !important;
        }
    }

    /* .navbar .navbar-nav > .nav-item > .nav-link:focus  */
    .navbar .navbar-nav>.nav-item>.nav-link.active,
    .navbar .navbar-nav>.nav-item>.nav-link:hover {
        background: #4fbfa9;
        color: rgb(51, 51, 51);
    }

    @media (max-width: 991.98px) {
        .navbar .dropdown-menu {
            position: relative !important;
            border: none;
        }
    }

    @media (min-width: 992px) {
        .navbar .dropdown:hover .dropdown-menu {
            display: block;
        }
    }

    .navbar .megamenu {
        padding: 30px !important;
        -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
    }

    @media (max-width: 991.98px) {
        .navbar .megamenu {
            padding: 15px !important;
            -webkit-box-shadow: none;
            box-shadow: none;
        }
    }

    .navbar .menu-large h5 {
        font-size: 1.125rem;
        font-weight: 400;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        padding-bottom: 10px;
        border-bottom: dotted 1px #555;
    }

    @media (max-width: 767.98px) {
        .navbar .menu-large h5 {
            font-size: 0.9rem;
        }
    }

    .navbar .menu-large ul {
        margin: 0;
        padding: 0;
    }

    .navbar .menu-large ul .nav-item {
        list-style-type: none;
        border-bottom: solid 1px #eee;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        padding: 4px 0;
    }

    .navbar .menu-large ul .nav-item a {
        color: #999;
        font-size: 0.738rem;
        display: block;
        padding: 0 !important;
        min-width: 10px;
    }

    .navbar .menu-large ul .nav-item a:hover {
        color: #4fbfa8 !important;
        text-decoration: none;
    }

    .navbar .menu-large .banner {
        margin-bottom: 10px;
    }

    .navbar #basket-overview {
        padding: 0;
    }

    .navbar .navbar-btn {
        color: #fff;
        margin-right: 10px;
    }

    .mr-auto,
    .mx-auto {
        margin-right: auto !important;
    }

    /* collapse search */
    #search {
        background: #ffff;
    }

    #search .container {
        text-align: right;
    }

    #search form {
        max-width: 500px;
        padding: 20px 0;
    }

    .ml-auto,
    .mx-auto {
        margin-left: auto !important;
    }

    /* Dropdown Menu */
    .dropdown-menu {
        border-radius: 1px;
        border: 1px solid rgba(0, 0, 0, 0.15);
    }
</style><?php /**PATH /var/www/MelonNew/resources/views/layouts/user.blade.php ENDPATH**/ ?>