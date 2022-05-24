
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card mt-5 p-5">
            <div class="row">
                <div class="col-4">
                    <h5><?php echo e($project[0]->projectname); ?></h5>
                </div>
                <div class="col-4 d-flex justify-content-center">
                    <h5>พันเธุ์เมลอน : <?php echo e($project[0]->species); ?></h5>
                </div>
                <div class="col-4 d-flex justify-content-end">
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#teacheraddproject" style="font-size:1rem;">บันทึกข้อมูลเมล่อน</button>
                </div>
                <div class="modal fade" id="teacheraddproject" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header d-flex justify-content-center">
                                <h5 class="modal-title" id="teacheraddproject">บันทึกข้อมูล</h5>
                            </div>
                            <form id="formaddinfo" class="formmodal" method="POST" action="<?php echo e(route('addinfo')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="modal-body">
                                    <div class="row d-flex justify-content-center">
                                        <!-- <div class="col-6">
                                        <select class="selectType" name="species" id="" style="width: 100%">
                                            <option value="">สายพันธุ์</option>
                                            <option value="ไข่ทองคำ">ไข่ทองคำ</option>
                                            <option value="กรีเนต(Green net Melon)">กรีเนต(Green net Melon)</option>
                                            <option value="แตงฮามิกัว(Hamigua melon)">แตงฮามิกัว(Hamigua melon)</option>
                                            <option value="อินทนนท์(Inthanon RZ F1)">อินทนนท์(Inthanon RZ F1)</option>
                                        </select>
                                    </div> -->
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="" class="col-sm-12 col-form-label">ความกว้างใบ</label>
                                            <div class="input-group flex-nowrap">
                                                <input  name="leafwidth" type="text" class="form-control ipmodal" placeholder="ซม." aria-label="Username" aria-describedby="addon-wrapping">
                                            </div>
                                        </div>

                                        <div class="col-6">

                                            <label for="" class="col-sm-12 col-form-label">ความสูงต้น</label>
                                            <div class="input-group flex-nowrap">

                                                <input  name="heighttree" type="text" class="form-control ipmodal" placeholder="ซม." aria-label="Username" aria-describedby="addon-wrapping">
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="underline mt-3 mb-1"></div>
                                            <label for="" class="col-sm-12 col-form-label">จำนวนข้อ</label>
                                            <div class="input-group flex-nowrap">

                                                <input  name="numberofverses" type="text" class="form-control ipmodal" placeholder="ข้อ" aria-label="Username" aria-describedby="addon-wrapping">
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="underline mt-3 mb-1"></div>
                                            <label for="" class="col-sm-12 col-form-label">คลอโรฟิลล์</label>
                                            <div class="input-group flex-nowrap">

                                                <input  name="chlorophyll" type="text" class="form-control ipmodal" placeholder="ml" aria-label="Username" aria-describedby="addon-wrapping">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="underline mt-3 mb-1"></div>
                                            <label for="" class="col-sm-12 col-form-label">จำนวนใบ</label>
                                            <div class="input-group flex-nowrap">

                                                <input  name="numberofleaf" type="text" class="form-control ipmodal" placeholder="ใบ" aria-label="Username" aria-describedby="addon-wrapping">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="underline mt-3 mb-1"></div>
                                            <label for="" class="col-sm-12 col-form-label">ความกว้างผล</label>
                                            <div class="input-group flex-nowrap">

                                                <input  name="widthofyield" type="text" class="form-control ipmodal" placeholder="ซม." aria-label="Username" aria-describedby="addon-wrapping">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="underline mt-3 mb-1"></div>
                                            <label for="" class="col-sm-12 col-form-label">ค่าความหวาน</label>
                                            <div class="input-group flex-nowrap">

                                                <input  name="Brix" type="text" class="form-control ipmodal" placeholder="บริกซ์." aria-label="Username" aria-describedby="addon-wrapping">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="underline mt-3 mb-1"></div>
                                            <label for="" class="col-sm-12 col-form-label">น้ำหนักผล</label>
                                            <div class="input-group flex-nowrap">

                                                <input  name="weight" type="text" class="form-control ipmodal" placeholder="กก." aria-label="Username" aria-describedby="addon-wrapping">
                                            </div>
                                        </div>
                                        <input  name="projectid" type="text" value="<?php echo e($id); ?>" style="display: none;">
                                    </div>
                                </div>
                                <div class="modal-footer d-flex justify-content-center">
                                    <button name="id" type="button" class="btn btn-success submitaddinfo submitmodal">ยืนยัน</button>
                                    <button type="cancle" class="btn btn-danger" data-bs-dismiss="modal">ยกเลิก</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">

                </div>
                <div class="col-4 d-flex justify-content-center">
                    <!-- <input class="form-control me-2" type="search" style="width:300px;" placeholder="Search" aria-label="Search"> -->
                </div>
                <div class="col-4 d-flex justify-content-end">
                    <form method="post" action="<?php echo e(route('successproject')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <button name="id" type="submit" class="btn btn-success mt-1 submitsuccess" data-bs-toggle="modal" style="height:27px; width:80px;" data-bs-target="">เสร็จสิ้น</button>
                    </form>
                </div>
            </div>
            <div class="card mt-4">
                <table id="table" style="overflow-x:auto;" data-toggle="table" data-height="400" data-side-pagination="client" data-pagination="true" data-page-size="All" data-query-params="searchQueryParams_invsetment" data-ajax="ajaxRequest">
                    <thead>
                        <tr class="tr_style">
                            <th data-field="id" class="th-2 font-table-modal "><label class="modal-header-f justify-content-center d-flex">ลำดับ</th>
                            <th data-field="createat" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">วันลงบันทึก</th>
                            <th data-field="time" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">เวลา</th>
                            <!-- <th data-field="" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">สถานะ</th> -->
                            <th data-field="leafwidth" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">ความกว้างใบ</th>
                            <th data-field="chlorophyll" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">คลอโรฟิลล์</th>
                            <th data-field="numberofverses" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">จำนวนข้อ</th>
                            <th data-field="numberofleaf" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">จำนวนใบ</th>
                            <th data-field="widthofyield" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">ความกว้างผล </th>
                            <th data-field="weight" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">น้ำหนักผล</th>
                            <th data-field="Brix" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">ความหวาน</th>
                            <th data-field="heighttree" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">ความสูงต้น</th>
                            <th data-field="button" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">จัดการข้อมูล</th>
                        </tr>
                    </thead>
                </table>
            </div>


            <div class="modal fade" id="editstdaddproject" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header d-flex justify-content-center">
                            <h5 class="modal-title">แก้ไขข้อมูล</h5>

                        </div>
                        <form method="POST" action="<?php echo e(route('editinfo')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="modal-body">

                                <div class="row d-flex justify-content-center">
                                    <!-- <div class="col-6">
                                    <select class="selectType" id="species" name="species" id="species" style="width: 100%">
                                        <option value="">สายพันธุ์</option>

                                        <option value="ไข่ทองคำ">ไข่ทองคำ</option>
                                        <option value="กรีเนต(Green net Melon)">กรีเนต(Green net Melon)</option>
                                        <option value="แตงฮามิกัว(Hamigua melon)">แตงฮามิกัว(Hamigua melon)</option>
                                        <option value="อินทนนท์(Inthanon RZ F1)">อินทนนท์(Inthanon RZ F1)</option>
                                    </select>
                                </div> -->
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label for="" class="col-sm-12 col-form-label ">ความกว้างใบ</label>
                                        <div class="input-group flex-nowrap">

                                            <input name="leafwidth" id="leafwidth" type="text" class="form-control ipmodal" placeholder="ซม." aria-label="Username" aria-describedby="addon-wrapping" required>
                                        </div>
                                    </div>

                                    <div class="col-6">

                                        <label for="" class="col-sm-12 col-form-label">ความสูงต้น</label>
                                        <div class="input-group flex-nowrap">

                                            <input name="heighttree" id="heighttree" type="text" class="form-control ipmodal" placeholder="ซม." aria-label="Username" aria-describedby="addon-wrapping" required>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="underline mt-3 mb-1"></div>
                                        <label for="" class="col-sm-12 col-form-label">จำนวนข้อ</label>

                                        <div class="input-group flex-nowrap">

                                            <input name="numberofverses" id="numberofverses" type="text" class="form-control ipmodal" placeholder="ข้อ" aria-label="Username" aria-describedby="addon-wrapping" required>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="underline mt-3 mb-1"></div>
                                        <label for="" class="col-sm-12 col-form-label">คลอโรฟิลล์</label>
                                        <div class="input-group flex-nowrap">

                                            <input name="chlorophyll" id="chlorophyll" type="text" class="form-control ipmodal" placeholder="ml" aria-label="Username" aria-describedby="addon-wrapping" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="underline mt-3 mb-1"></div>

                                        <label for="" class="col-sm-12 col-form-label">จำนวนใบ</label>
                                        <div class="input-group flex-nowrap">

                                            <input name="numberofleaf" id="numberofleaf" type="text" class="form-control ipmodal" placeholder="ใบ" aria-label="Username" aria-describedby="addon-wrapping" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="underline mt-3 mb-1"></div>

                                        <label for="" class="col-sm-12 col-form-label">ความกว้างผล</label>
                                        <div class="input-group flex-nowrap">

                                            <input name="widthofyield" id="widthofyield" type="text" class="form-control ipmodal" placeholder="ซม." aria-label="Username" aria-describedby="addon-wrapping" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="underline mt-3 mb-1"></div>

                                        <label for="" class="col-sm-12 col-form-label">ค่าความหวาน</label>
                                        <div class="input-group flex-nowrap">

                                            <input name="Brix" id="Brix" type="text" class="form-control ipmodal" placeholder="บริกซ์." aria-label="Username" aria-describedby="addon-wrapping" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="underline mt-3 mb-1"></div>

                                        <label for="" class="col-sm-12 col-form-label">น้ำหนักผล</label>
                                        <div class="input-group flex-nowrap">

                                            <input name="weight" id="weight" type="text" class="form-control ipmodal" placeholder="กก." aria-label="Username" aria-describedby="addon-wrapping" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                                <button name="id" type="submit" class="btn btn-success">ยืนยัน</button>
                                <button type="cancle" class="btn btn-danger" data-bs-dismiss="modal">ยกเลิก</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var idinfo = '<?= $id ?>';
    $('.submitsuccess').val(idinfo)

    function ajaxRequest(params) {

        $.ajax({
            type: "Get",
            url: "queryinfo",
            data: {
                id: idinfo
            },
            // datatype: 'json',
            success: function(data) {

                params.success({
                    "rows": data
                })
            }
        });
    }

    $(document).on('click',".submitmodal",function(){
                var arrckip = []
                var thisbtn = $(this).closest('.formmodal').find('.ipmodal')

                $( thisbtn).each(function() {
                   var value = $(this).val()
                   if(value == ""){
                    arrckip.push('false')
                    $(this).addClass('alertbd')
                   }
                   
  });
  if(arrckip.includes('false') == true){
                    Swal.fire(
                     'กรุณากรอกข้อมูลให้ครบ',
                        '',
                        'error'
                        )
                   }else{
                       $('.formmodal').submit()
                   }
            })
            $(document).on('keyup',".ipmodal",function(){
                $(this).removeClass('alertbd')
            })
            $(document).on('keyup',".ipmodal",function(event){
                function phoneFormat() {
                phone = phone.replace(/[^0-9\.]/g, '');
                return phone;
            }
            var phone = $(this).val();
            phone = phoneFormat(phone);
            $(this).val(phone);;
            })

    $(document).ready(function() {


        function searchQueryParams_invsetment(params) {
            // console.log(params)
            params.fund_name = 'test_data';
            // console.log(params);
            return params; // body data
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).on('click', ".edit", function() {
            var id = $(this).val()

            $.ajax({
                type: "POST",
                url: "queryeditinfo",
                // datatype: 'json',
                data: {
                    id: id
                },
                success: function(response) {
                    var dataorder = Object.values(response)
                    console.log(response)
                    $('#editstdaddproject').find('#species').val(dataorder['0']['species'])
                    $('#editstdaddproject').find('#leafwidth').val(dataorder['0']['leafwidth'])
                    $('#editstdaddproject').find('#heighttree').val(dataorder['0']['heighttree'])
                    $('#editstdaddproject').find('#numberofverses').val(dataorder['0']['numberofverses'])
                    $('#editstdaddproject').find('#chlorophyll').val(dataorder['0']['chlorophyll'])
                    $('#editstdaddproject').find('#numberofleaf').val(dataorder['0']['numberofleaf'])
                    $('#editstdaddproject').find('#widthofyield').val(dataorder['0']['widthofyield'])
                    $('#editstdaddproject').find('#Brix').val(dataorder['0']['Brix'])
                    $('#editstdaddproject').find('#weight').val(dataorder['0']['weight'])
                    $('#editstdaddproject').find('.btn-success').val(dataorder['0']['id'])


                }
            });

        })

        // $(document).on('click', ".submitaddinfo", function() {
        //     var checkip = []

        //     $('.ipaddinfo').each(function() {
        //         var val = $(this).val()
        //         if (val == "") {
        //             $(this).addClass('alertip')
        //             checkip.push("false")
        //         }
        //     });
        //     if (checkip.includes('false') == false) {
        //         $('#formaddinfo').submit()
        //     }
        // })
        $(document).on('keyup', "input", function() {
            $(this).removeClass('alertip')
        })
    })
</script>
<style scoped>
     .alertbd{
        border: 3px solid red;
    }
    .selectType {
        border: 0;
        background-color: #62F3C355;
        box-shadow: 0 6px 12px rgb(0 0 0 / 18%);
        height: 3em;
        margin-top: 1rem;
        margin-bottom: 1rem;
    }

    .modal-header {
        background-color: #62F3C355;
    }

    .underline {
        height: 2px;
        border-width: 0;
        color: gray;
        background-color: #51A08555;
        box-shadow: 0px 2px 3px rgb(0 0 0 / 13%);

    }

    .alertip {
        border: 1px solid red;
    }
    .page-list {
    visibility: hidden;
}
#datatable .bootstrap-table.bootstrap5 .float-left {
    display: none;
}


#datatable .bootstrap-table.bootstrap5 .float-left {
    display: none;
}

#datatable .bootstrap-table.bootstrap5 .float-right {
    font-family: kanit-regular;
    /* font-size: 16px; /
    / font-weight: 300; */
    background-color: white;
    justify-content: center;
    float: none;
    height: 50px;
    margin-top: 4px;
}

#datatable .bootstrap-table.bootstrap5 .float-right ul {
    align-items: center;
}

#datatable .bootstrap-table.bootstrap5 .float-right ul li {
    padding: 5px;
}

#datatable .bootstrap-table.bootstrap5 .float-right ul li a {
    width: 28px;
    height: 28px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: transparent;
    border-color: transparent;
    color: #334e77;
    border-radius: 50%;
}

#datatable .bootstrap-table.bootstrap5 .float-right ul .active a {
    background-color: #334e77;
    color: #ffffff;
    border-radius: 50%;
}

#datatable .bootstrap-table.bootstrap5 .float-right ul .page-pre a,
#datatable .bootstrap-table.bootstrap5 .float-right ul .page-next a {
    background-color: transparent;
    border-color: transparent;
    border-radius: 0%;
    color: #334e77;
    width: auto;
    height: 28px;
}
.pagination-info {
      visibility: hidden;
  }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.teacher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/MelonNew/resources/views/teacher/teacherprojectinfo.blade.php ENDPATH**/ ?>