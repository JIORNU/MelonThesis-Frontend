<?php $__env->startSection('content'); ?>

<div class="container">
    <!-- <div class="row">
        <div class="col-6" style="padding-left: 17.5rem;">
            <div class="card cardheader" style="border: none; background: none;">
                <p class="headerpage text-center">บันทึก</p>
            </div>
        </div>
        <div class="col-6">
            <p class="text-center">ข้อมูลการปลูกเมลอน</p>
        </div>
    </div>
    <div class="row">
        <div class="col-5" style="padding-left: 15.8rem;">
            <button class="iconbut" data-btn="adddata">
                <p class="text-start"><svg xmlns="http://www.w3.org/2000/svg" style="color:green" width="20" height="20" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                    </svg>เพิ่มข้อมูล</p>
            </button>
        </div>
        <div class="col-7">
            <p class="text-left">บันทึกข้อมูลเพาะปลูก</p>
        </div>
        <div class="col-12" style="padding-left: 15.8rem;">
            <a href="" class="back">
                <p class="text-left"><svg xmlns="http://www.w3.org/2000/svg" style="color:gray" width="20" height="20" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                        <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                    </svg>กลับไปหน้าโฟล์เดอร์</p>
            </a>
        </div>
    </div> -->
    <div class="row mt-4 mb-4 ml-0 mr-0">
        <div class="col-lg-4">
            <h4 class="c-grey">เพิ่มข้อมูลเพาะปลูก</h4>
        </div>
        <div class="col-lg-8">
            <div class="d-flex justify-content-end">

                <button type="button" class="btn btn-primary iconbut " data-btn="addtata" data-toggle="modal" data-target="#myModal">
                    เพิ่มข้อมูล
                </button>
            </div>
        </div>
    </div>


    <table id="table">
        <thead>
            <tr>
                <th data-field="id">ลำดับ</th>
                <th data-field="Mname">พันธุ์ไม้</th>
                <th data-field="date">วันที่</th>
                <th data-field="time">เวลา</th>
                <th data-field="edit">แก้ไข / ลบ</th>

            </tr>
        </thead>
    </table>
    <!--  Modal input primary topic-->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="margin-top:15rem;">

            <div class="modal-content">
                <div class="modal-header" style="background: #4fbfa8;">
                    <h5 style="color:white">เพิ่มพันธุ์เมลอน</h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">

                    <!-- <div class="row">
                        <div class="col-lg-3">
                            <p class="text-end">พันธุ์เมลอน : </p>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="ms-2 text-center" style="height: 25px; width:250px; border-radius:5px;">
                        </div>

                    </div> -->
                    <form action="" method="POST">
                        <div class="form-group">
                            <input id="primary-melon" class="form-control" type="text" placeholder="สายพันธุ์เมลอน">
                        </div>
                    </form>
                </div>
                <div class="modal-footer d-flex justify-content-center">

                    <button type="button" class="btn btn-primary">ยืนยัน</button>
                    <button type="button" class="btn btn-secondary CloseModal" data-dismiss="modal">ปิด</button>
                </div>

            </div>
        </div>
    </div>
</div>
<style>
    * {
        box-sizing: border-box;
    }

    #table td {
        text-align: center;
    }

    .th-inner {
        text-align: center;
    }

    .centered {
        position: relative;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    .colitem {

        background: white;
        border: none;
        border-bottom: 1px solid black;
        border-top: 1px solid black;
        border-right: 1px solid black;
        border-left: 1px solid black;
    }

    /* .iconbut {
        text-decoration: none;
        background: none;
        border: none;
    } */

    .headerpage {
        border-bottom: 3px solid black;

    }

    .cardheader {
        width: 50px;

    }

    .back:hover {
        text-decoration: none;
        text-underline: none;


    }
</style>
<script>
    $(document).ready(function() {

    })

    $(document).on('click', ".iconbut", function() {
        var type = $(this).data('btn')

        if (type == "adddata") {
            $('#exampleModal').modal('toggle')
        }

    })
    $(document).on('click', ".CloseModal", function() {
        $(this).closest('#exampleModal').modal('hide')
    })

    var $table = $('#table')

    $(function() {
        var data = [{
                'id': 0,
                'Mname': 'Item 0',
                'date': '12/01/2564',
                'time': '08:00 น.'
            },
            {
                'id': 1,
                'Mname': 'Item 1',
                'date': '01/01/2564',
                'time': '10:00 น.'
            },
            {
                'id': 2,
                'Mname': 'Item 2',
                'date': '13/01/2564',
                'time': '11:00 น.'
            },
        ]
        $table.bootstrapTable({
            data: data
        })
    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/MelonNew/resources/views/admin/admindetail.blade.php ENDPATH**/ ?>