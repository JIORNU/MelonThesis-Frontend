
<?php $__env->startSection('content'); ?>
<div class="container ">
    <div class="card pt-5" style="background: none;border:none;">
        <div class="row d-flex justify-content-center">
            <div class="col-4 text-start">

                <h4>โรงเรือน1</h4>

            </div>
            <div class="col-4 text-center">
                <h4>พันธุ์เมลอนซกรีนเนต</h4>
            </div>
            <div class="col-4 text-end">
                <button type="button" class="btn btn-warning">เพิ่มข้อมูล</button>
            </div>
        </div>


        <div class="row mt-3 d-flex justify-content-center">
            <div class="col-4 text-start">
                <h4>โรงเรือน1</h4>
            </div>
            <div class="col-8">
                <form class="d-flex justify-content-start" style="padding-left:10%;">
                    <input class="form-control me-2" style="width: 300px;" type="search" placeholder="ค้นหา" aria-label="Search">
                </form>
            </div>

        </div>

        <div class="card mt-3">
            <div class="card-body">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th scope="col">ไอดี</th>
                            <th scope="col">ชื่อโปรเจค</th>
                            <th scope="col">สายพันธุ์</th>
                            <th scope="col">แปลง</th>
                            <th scope="col">แถว</th>
                            <th scope="col">ต้นที่</th>
                            <th scope="col">วัน/เดือน/ปี</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td style="text-align:center"><a href="">Mark</a></td>
                            <td style="text-align:center">Otto</td>
                            <td>@mdo</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <th scope="col">ต้นที่</th>
                            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg></td>
                            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                </svg></td>
                        </tr>

                    </tbody>
                </table>
                <div class="text-start">
                <button type="button" class="btn btn-success">เสร็จสิ้น</button>
            </div>
            </div>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.teacher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/MelonNew/resources/views/teacher/intoproject.blade.php ENDPATH**/ ?>