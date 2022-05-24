@extends('layouts.teacher')
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'ชื่อโปรเจคซ้ำ',
    })
</script>

@endif
<div class="container">
    <div class="d-flex justify-content-center ">
        <div class="card mt-5">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h4>บันทึกข้อมูลเพาะปลูก</h4>
                    </div>

                    <div class="col-6 d-flex justify-content-end">
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#addprojectModal">สร้างกิจกรรม</button>
                    </div>
                    {{-- modal add project --}}
                    <div class="modal fade" id="addprojectModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">

                            <div class="modal-content">

                                <div class="modal-header  d-flex justify-content-center" style="background: linear-gradient(275deg, rgba(137, 181, 175, 1) 0%, rgba(150, 199, 193, 1) 26%, rgba(208, 202, 178, 1) 97%);color:black;>
                                <h5 class=" modal-title" id="exampleModalLabel">สร้างกิจกรรม</h5>

                                </div>
                                <form id="formaddproject" method="POST" action="{{route('intoproject')}}">
                                    @csrf
                                    <div class="modal-body text-center">

                                        <div class="row d-flex justify-content-center">
                                            <div class="col-6">
                                                <input class="itemadd" type="text" name="projectname" placeholder="ชื่อโปรเจค" style="width: 100%">
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center mt-4">
                                            <div class="col-3 ">
                                                <select class="itemadd" name="species" id="species" style="width: 100%">
                                                    <option value="">สายพันธุ์</option>
                                                    <option value="ไข่ทองคำ">ไข่ทองคำ</option>
                                                    <option value="กรีนเน็ต">กรีนเน็ต</option>
                                                    <option value="ฮามิกัว">ฮามิกัว</option>
                                                    <option value="อินทนนท์">อินทนนท์</option>
                                                </select>
                                            </div>
                                            <div class="col-3 ">
                                                <input class="itemadd" type="number" name="plot" placeholder="แปลง"  style="width: 100%">
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center mt-4">
                                            <div class="col-3">
                                                <input class="itemadd" type="number" name="colum" placeholder="แถว"   style="width: 100%" >
                                            </div>
                                            <div class="col-3">
                                                <input class="itemadd" type="number" name="treenumber" placeholder="ต้นที่"    style="width: 100%" >
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center mt-4">
                                            <div class="col-6">
                                                <input class="itemadd" type="date" name="dateproject" style="width: 100%">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center mt-4">
                                            <button type="button" class="btn btn-primary mr-2 addprojectsubmit">ตกลง</button>
                                            <a class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</a>
                                        </div>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                    {{-- --}}
                </div>
                <div class="row mt-3">
                    <div class="col-2">
                        <!-- <form class="d-flex justify-content-center ">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    </form> -->
                    </div>
                    <div class="col-4">
                        <!-- <form class="d-flex justify-content-center ">
                            <input class="form-control me-2" type="search" placeholder="ค้นหา" aria-label="Search">
                        </form> -->
                    </div>
                    <div class="col-6">
                        <h4>สถานะ : กำลังบันทึกข้อมูลการเจริญเติบโต</h4>
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-2">
                    <div class="card mt-4" style="width: 1000px;z-index:1">
                        <table id="table_select" data-toggle="table" data-height="400" data-side-pagination="server" data-pagination="true" data-page-size="All" data-query-params="searchQueryParams_invsetment" data-url="{{route('teacherqueryprojects') }}" data-method="get">
                            <thead>
                                <tr class="tr_style">
                                    <th data-field="id" class="th-2 font-table-modal "><label class="modal-header-f justify-content-center d-flex">รายการ</th>
                                    <th data-field="projectname" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">ชื่อกิจกรรม</th>
                                    <th data-field="species" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">สายพันธุ์</th>
                                    <th data-field="plot" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">แปลง</th>
                                    <th data-field="colum" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">แถว</th>
                                    <th data-field="treenumber" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">ต้นที่</th>
                                    <th data-field="dateproject" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">วัน/เดือน/ปี</th>
                                    <th data-field="button" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">จัดการข้อมูล</th>


                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center ">
        <div class="card mt-5 mb-5">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h4>บันทึกข้อมูลเพาะปลูก</h4>
                    </div>
                    <!-- <div class="col-6 d-flex justify-content-end">
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#addprojectModal">สร้างโปรเจ็ค</button>
                </div> -->
                    {{-- modal add project --}}
                    <div class="modal fade" id="addprojectModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">

                            <div class="modal-content">

                                <div class="modal-header  d-flex justify-content-center" style="background: linear-gradient(275deg, rgba(137, 181, 175, 1) 0%, rgba(150, 199, 193, 1) 26%, rgba(208, 202, 178, 1) 97%);color:black;">
                                    <h5 class=" modal-title" id="exampleModalLabel">สร้างโปรเจค</h5>

                                </div>
                                <form method="POST" action="{{route('intoproject')}}">
                                    @csrf
                                    <div class="modal-body text-center">

                                        <div class="row d-flex justify-content-center">
                                            <div class="col-6">
                                                <input type="text" name="projectname" placeholder="ชื่อโปรเจค" style="width: 100%">
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center mt-4">
                                            <div class="col-3 ">
                                                <select name="species" id="species" style="width: 100%">
                                                    <option value="">สายพันธุ์</option>
                                                    <option value="ไข่ทองคำ">ไข่ทองคำ</option>
                                                    <option value="กรีเนต">กรีเนต</option>
                                                    <option value="แตงฮามิกัว">แตงฮามิกัว</option>
                                                    <option value="อินทนนท์">อินทนนท์</option>
                                                </select>
                                            </div>
                                            <div class="col-3 ">
                                                <input type="number" name="plot" placeholder="แปลง" style="width: 100%">
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center mt-4">
                                            <div class="col-3">
                                                <input type="number" name="colum" placeholder="แถว" style="width: 100%">
                                            </div>
                                            <div class="col-3">
                                                <input type="number" name="treenumber" placeholder="ต้นที่" style="width: 100%">
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center mt-4">
                                            <div class="col-6">
                                                <input type="date" name="dateproject" style="width: 100%">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center mt-4">
                                            <button type="submit" class="btn btn-primary mr-2">ตกลง</button>
                                            <a class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</a>
                                        </div>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                    {{-- --}}
                </div>
                <div class="row mt-3">
                    <div class="col-2">
                        <!-- <form class="d-flex justify-content-center ">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    </form> -->
                    </div>
                    <div class="col-4">
                        <!-- <form class="d-flex justify-content-center ">
                            <input class="form-control me-2" type="search" placeholder="ค้นหา" aria-label="Search">
                        </form> -->
                    </div>
                    <div class="col-6">
                        <h4>สถานะ : เสร็จสิ้น</h4>
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-2">
                    <div class="card mt-4" style="width: 1000px;z-index:1">
                        <table id="table_select" data-toggle="table" data-height="400" data-side-pagination="server" data-pagination="true" data-page-size="All" data-query-params="searchQueryParams_invsetment" data-url="{{route('teacherqueryprojectssuccess') }}" data-method="get">
                            <thead>
                                <tr class="tr_style">
                                    <th data-field="id" class="th-2 font-table-modal "><label class="modal-header-f justify-content-center d-flex">รายการ</th>
                                    <th data-field="projectname" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">ชื่อกิจกรรม</th>
                                    <th data-field="species" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">สายพันธุ์</th>
                                    <th data-field="plot" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">แปลง</th>
                                    <th data-field="colum" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">แถว</th>
                                    <th data-field="treenumber" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">ต้นที่</th>
                                    <th data-field="dateproject" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">วัน/เดือน/ปี</th>
                                    <th data-field="button" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">จัดการข้อมูล</th>

                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editprojectsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center " style="background: linear-gradient(275deg, rgba(137, 181, 175, 1) 0%, rgba(150, 199, 193, 1) 26%, rgba(208, 202, 178, 1) 97%);color:black;">
                    <h5 class="modal-title" id="exampleModalLabel">แก้ไขกิจกรรม</h5>

                </div>
                <div class="modal-body">
                    <form class="formmodal" method="POST" action="{{'editprojects'}}">
                        @csrf
                        <div class="row d-flex justify-content-center">
                            <div class="col-6">
                                <input type="text" class="ipmodal" name="projectname" id="projectname" placeholder="ชื่อโปรเจค" style="width: 100%">
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center mt-4">
                            <div class="col-3 ">
                                {{-- <select name="species" class="ipmodal" class="editspecies" id="species" style="width: 100%">
                                    <option value="" selected>สายพันธุ์</option>
                                    <option value="ไข่ทองคำ">ไข่ทองคำ</option>
                                    <option value="กรีเนต">กรีเนต</option>
                                    <option value="แตงฮามิกัว">ฮามิกัว</option>
                                    <option value="อินทนนท์">อินทนนท์</option>
                                </select> --}}
                                <select name="species" id="custom-repeat-month" class="editspecies" data-input-style="outline">
                                    <option value="" selected>สายพันธุ์</option>
                                    <option value="ไข่ทองคำ">ไข่ทองคำ</option>
                                    <option value="กรีเนต">กรีเนต</option>
                                    <option value="แตงฮามิกัว">ฮามิกัว</option>
                                    <option value="อินทนนท์">อินทนนท์</option>
                                </select>
                            </div>
                            <div class="col-3 ">
                                <input type="text" name="plot" class="ipmodal" id="plot" placeholder="แปลง" style="width: 100%">
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center mt-4">
                            <div class="col-3">
                                <input type="text" name="colum" class="ipmodal" placeholder="แถว" id="colum" style="width: 100%">
                            </div>
                            <div class="col-3">
                                <input type="text" name="treenumber" class="ipmodal" placeholder="ต้นที่" id="treenumber" style="width: 100%">
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center mt-4">
                            <div class="col-6">
                                <input type="date" name="dateproject" class="ipmodal" style="width: 100%" id="dateproject">
                                <input type="text" name="id" class="id" style="width: 100%" hidden>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <button  type="button" class="btn btn-primary mr-2 submitmodal">ตกลง</button>
                            <button class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>




    {{-- modalgenqr --}}

    <!-- Modal -->
    <div class="modal fade" id="qrModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">สร้างคิวอาร์โค้ด</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <img id="qrimg" src="" alt="" style="width: 100%;height:100%">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                    <form method="POST" action="{{route('downloadqr')}}" enctype="multipart/form-data">
                        @csrf
                        <button name="id" type="submit" type="button" class="btn btn-primary dnbtn">ดาว์นโหลด png</button>
                    </form>

                </div>
            </div>
        </div>
    </div>






</div>
<style>
    .alertbd{
        border: 3px solid red;
    }
    .page-list {
    visibility: hidden;
}
#datatable .bootstrap-table.bootstrap5 .float-left {
    display: none;
}
.pagination-info {
      visibility: hidden;
  }
</style>
<script>
    $(document).ready(function() {


        $(document).on('click',".submitmodal",function(){
           var specie = $('#editprojectsModal').find('.editspecies').val()
     
           if(specie != null && specie != "" && specie != "สายพันธุ์"){
                $('.formmodal').submit()
           }
            else{
                Swal.fire({
                        title: 'กรุณาเลือกสายพันธ์',

                        icon: 'error',
                        confirmButtonText: 'ยืนยัน'
                    })
                   }
            })




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
                url: "queryeditprojects",
                // datatype: 'json',
                data: {
                    id: id
                },
                success: function(response) {
                    var dataorder = Object.values(response)
                    console.log(response)
                    $('#editprojectsModal').find('#projectname').val(dataorder['0']['projectname'])
                    $('#editprojectsModal').find('#editspecies').val(dataorder['0']['species'])
                    $('#editprojectsModal').find('#plot').val(dataorder['0']['plot'])
                    $('#editprojectsModal').find('#colum').val(dataorder['0']['colum'])
                    $('#editprojectsModal').find('#treenumber').val(dataorder['0']['treenumber'])
                    $('#editprojectsModal').find('#dateproject').val(dataorder['0']['dateproject'])
                    $('#editprojectsModal').find('.id').val(dataorder['0']['id'])

                }
            });

        })




        $(document).on('click', ".genqr", function() {
            var genqrval = $(this).val()
            $.ajax({
                type: "post",
                url: "genqr",
                datatype: 'text',
                data: {
                    id: genqrval
                },
                success: function(response) {

                    $('#qrModal').find('#qrimg').prop("src", "uploads/qr/" + response + ".png");
                    $('#qrModal').find('.dnbtn').val(genqrval)
                }
            });

        })

        $(document).on('click', ".exceldl", function() {
            var projectid = $(this).val()
            $.ajax({
                type: "get",
                url: "exportExcel",
                datatype: 'text',
                data: {
                    id: projectid
                },
                success: function(response) {
                    window.open('https://melonrmutttest.xyz/exportExcel?id=' + projectid, '_blank');
                }
            });
        })
        $(document).on('click', ".addprojectsubmit", function() {
            var checkip = []

            $('.itemadd').each(function() {
                var val = $(this).val()
                if (val == "") {
                    $(this).addClass('alertip')
                    checkip.push("false")
                }
            });
            if (checkip.includes('false') == false) {
                $('#formaddproject').submit()
            }
        })


        $(document).on('keyup', "input", function() {
            $(this).removeClass('alertip')
        })
        $(document).on('change', "select,input", function() {
            $(this).removeClass('alertip')
        })
        // $(document).on('click',".dnbtn",function(){
        //     var dnbtnval = $(this).val()
        //     $.ajax({
        //                 type: "post",
        //                 url: "downloadqr",
        //                 datatype: 'text',
        //                 data: {
        //                     id: dnbtnval
        //                 },
        //                 success: function(response) {                   
        //                     console.log('success')
        //                 }
        //             });
        // })


    })


    //    $(document).ready(function(){
    //     $.ajaxSetup({
    //             headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //             }
    //         });
    // $(document).on('click',".edit",function(){
    // var id = $(this).val()
    // $.ajax({ 
    //                 type: "POST",
    //                 url: "queryeditprojects",
    //                 // datatype: 'json',
    //                 data: {
    //                     id: id
    //                 },
    //                 success: function(response) {
    //                     var dataorder = Object.values(response)
    //                     $('#editprojectsModal').find('#projectname').val(dataorder['0']['projectname'])
    //                     $('#editprojectsModal').find('#species').val(dataorder['0']['species'])
    //                     $('#editprojectsModal').find('#plot').val(dataorder['0']['plot'])
    //                     $('#editprojectsModal').find('#colum').val(dataorder['0']['colum'])
    //                     $('#editprojectsModal').find('#treenumber').val(dataorder['0']['treenumber'])
    //                     $('#editprojectsModal').find('#dateproject').val(dataorder['0']['dateproject'])
    //                     $('#editprojectsModal').find('.btn-primary').val(dataorder['0']['id'])

    //                 }
    //             });






    //     })



    //    })
</script>
@endsection