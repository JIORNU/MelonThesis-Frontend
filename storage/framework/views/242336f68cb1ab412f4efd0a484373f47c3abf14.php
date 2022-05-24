
<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">แก้ไขข้อมูลส่วนตัว</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
                    <li class="breadcrumb-item active">แก้ไขข้อมูลส่วนตัว</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">

        <div class="d-flex justify-content-center">
            <div class="card cardedit" style="width:700px; height: 612px;border-radius:12px;box-shadow:2px 2px 5px rgb(0 0 0 / 40%);">

                <div class="card-body">
                    <form id="editprofile" action="<?php echo e(route('editteacherprofile')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex justify-content-center mb-3 mt-3">
                                    <input class="profile" accept="image/*" name="profile" type='file' id="profile" style="width:150px;height: 150px;" />

                                    <div class="card" style="border-radius:100%; height:150px; width: 150px; z-index:1; ">
                                        <img id="imgpreview" src="/uploads/profileimg/<?php echo e(auth()->user()->profileimg); ?>" alt="" style="border-radius:100%;width:100%;height:100%;box-shadow:2px 2px 5px rgb(0 0 0 / 40%);">
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="col-1">
                                <div class="text-end ">
                                    <a class="btn edit" name="id"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg>
                                    </a>
                                </div>
                            </div> -->

                            <div class="row pl-5 pr-5">

                                <div class="col-12 mb-2">
                                    <label class="labels">ชื่อจริง</label>
                                    <input name="name" value="<?php echo e(auth()->user()->name); ?>" type="text" class="form-control" style="width:" placeholder="" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>

                                <div class="col-12 mb-2">
                                    <label class="labels">นามสกุล</label>
                                    <input name="lastname" value="<?php echo e(auth()->user()->lastname); ?>" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>



                                <div class="col-12 mb-2 ">
                                    <label class="labels">อีเมล</label>
                                    <input name="email" value="<?php echo e(auth()->user()->email); ?>" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>

                                <div class="col-12 mb-2 ">
                                    <label class="labels">เบอร์โทรศัพท์</label>
                                    <input name="phone" value="<?php echo e(auth()->user()->phone); ?>" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                            </div>

                        </div>
                    </form>

                    <div class="row">
                        <div class="col-12 mt-4 text-center">
                            <button class="submit btn btn-success">ยืนยัน</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

<style>
    .profile {
        position: absolute;
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        outline: none;
        z-index: 2;
        opacity: 0;
    }
</style>

<script>
    $(document).ready(function() {

        $(document).on('change', ".profile", function() {
            $('#imgpreview').attr('src', URL.createObjectURL(event.target.files[0]));
            $('#imgpreview').show()
        })
        $(document).on('click', ".submit", function() {
            $('#editprofile').submit()
        })

    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.teacher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/MelonNew/resources/views/teacher/teacherdashboard.blade.php ENDPATH**/ ?>