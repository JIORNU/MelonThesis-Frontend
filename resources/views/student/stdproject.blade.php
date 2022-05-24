@extends('layouts.student')
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
                    <div class="col-6 p-3">
                        <h4>บันทึกข้อมูลเพาะปลูก</h4>
                    </div>

                    <div class="col-6 p-3 d-flex justify-content-end">
                        <h4>สถานะ : กำลังบันทึกข้อมูลการเจริญเติบโต</h4>
                        <!-- <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#addprojectModal">สร้างกิจกรรม</button> -->
                    </div>
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
                                                    <option value="กรีนเน็ต">กรีนเน็ต</option>
                                                    <option value="ฮามิกัว">ฮามิกัว</option>
                                                    <option value="อินทนนท์">อินทนนท์</option>
                                                </select>
                                            </div>
                                            <div class="col-3 ">
                                                <input type="text" name="plot" placeholder="แปลง" style="width: 100%">
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center mt-4">
                                            <div class="col-3">
                                                <input type="text" name="colum" placeholder="แถว" style="width: 100%">
                                            </div>
                                            <div class="col-3">
                                                <input type="text" name="treenumber" placeholder="ต้นที่" style="width: 100%">
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

                    </div>
                </div>
                <div class="d-flex justify-content-center mb-2">
                    <div class="card mt-4" style="width: 1000px;z-index:1">
                        <table id="table_select" data-toggle="table" data-height="400" data-side-pagination="server" data-pagination="true" data-page-size="All" data-query-params="searchQueryParams_invsetment" data-url="{{route('stdqueryprojects') }}" data-method="get">
                            <thead>
                                <tr class="tr_style">
                                    <th data-field="id" class="th-2 font-table-modal "><label class="modal-header-f justify-content-center d-flex">รายการ</th>
                                    <th data-field="projectname" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">ชื่อกิจกรรม</th>
                                    <th data-field="species" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">สายพันธุ์</th>
                                    <th data-field="plot" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">แปลง</th>
                                    <th data-field="colum" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">แถว</th>
                                    <th data-field="treenumber" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">ต้นที่</th>
                                    <th data-field="dateproject" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">วัน/เดือน/ปี</th>
                                    <!-- <th data-field="button" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">จัดการข้อมูล</th> -->

                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 
    <div class="d-flex justify-content-center ">
        <div class="card mt-5 mb-5">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <p>บันทึกข้อมูลเพาะปลูก</p>
                    </div> -->

    <!-- <div class="col-6 d-flex justify-content-end">
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#addprojectModal">สร้างโปรเจ็ค</button>
                </div> -->
    {{-- modal add project --}}
    <!-- <div class="modal fade" id="addprojectModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                    <option value="" disabled selected>เลือกสายพันธุ์</option>
                                                    <option value="ไข่ทองคำ">ไข่ทองคำ</option>
                                                    <option value="กรีเนต(Green net Melon)">กรีเนต(Green net Melon)</option>
                                                    <option value="แตงฮามิกัว(Hamigua melon)">แตงฮามิกัว(Hamigua melon)</option>
                                                    <option value="อินทนนท์(Inthanon RZ F1)">อินทนนท์(Inthanon RZ F1)</option>
                                                </select>
                                            </div>
                                            <div class="col-3 ">
                                                <input type="text" name="plot" placeholder="แปลง" style="width: 100%">
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center mt-4">
                                            <div class="col-3">
                                                <input type="text" name="colum" placeholder="แถว" style="width: 100%">
                                            </div>
                                            <div class="col-3">
                                                <input type="text" name="treenumber" placeholder="ต้นที่" style="width: 100%">
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
                </div> -->
    <!-- <div class="row mt-3"> -->
    <!-- <div class="col-2"> -->
    <!-- <form class="d-flex justify-content-center ">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    </form> -->
    <!-- </div> -->
    <!-- <div class="col-6">
                        <form class="d-flex justify-content-center ">
                            <input class="form-control me-2" type="search" placeholder="ค้นหา" aria-label="Search">
                        </form>
                    </div> -->
    <!-- <div class="col-4">
                        <h4>สถานะ : พร้อมจำหน่าย</h4>
                    </div> -->
    <!-- </div> -->
    <!-- <div class="d-flex justify-content-center mb-2">
                    <div class="card mt-4" style="width: 1000px;z-index:1">
                        <table id="table_select" data-toggle="table" data-height="400" data-side-pagination="server" data-pagination="true" data-page-size="All" data-query-params="searchQueryParams_invsetment" data-url="{{route('stdqueryprojectssuccess') }}" data-method="get">
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
                </div> -->
    <!-- </div>
        </div>
    </div> -->

    <div class="modal fade" id="editprojectsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center " style="border:none">
                    <h5 class="modal-title" id="exampleModalLabel">บันทึกข้อมูลผู้ใช้</h5>

                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('editprojects') }}">
                        @csrf
                        <div class="row d-flex justify-content-center">
                            <div class="col-6">
                                <input type="text" name="projectname" id="projectname" placeholder="ชื่อโปรเจค" style="width: 100%">
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center mt-4">
                            <div class="col-3 ">
                                <select name="species" id="species" style="width: 100%">
                                    <option value="">สายพันธุ์</option>
                                    <option value="ไข่ทองคำ">ไข่ทองคำ</option>
                                    <option value="กรีนเนต">กรีเนต(Green net Melon)</option>
                                    <option value="แตงฮามิกัว">ฮามิกัว</option>
                                    <option value="อินทนนท์">อินทนนท์</option>
                                </select>
                            </div>
                            <div class="col-3 ">
                                <input type="text" name="plot" id="plot" placeholder="แปลง" style="width: 100%">
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center mt-4">
                            <div class="col-3">
                                <input type="text" name="colum" placeholder="แถว" id="colum" style="width: 100%">
                            </div>
                            <div class="col-3">
                                <input type="text" name="treenumber" placeholder="ต้นที่" id="treenumber" style="width: 100%">
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center mt-4">
                            <div class="col-6">
                                <input type="date" name="dateproject" style="width: 100%" id="dateproject">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <button name="id" type="submit" class="btn btn-primary mr-2">ตกลง</button>
                            <button class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<style>
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
                }

            );

            $(document).on('click', ".edit", function() {
                    var id = $(this).val() $.ajax({

                            type: "POST",
                            url: "queryeditprojects",
                            // datatype: 'json',
                            data: {
                                id: id
                            }

                            ,
                            success: function(response) {
                                var dataorder = Object.values(response) console.log(response) $('#editprojectsModal').find('#projectname').val(dataorder['0']['projectname']) $('#editprojectsModal').find('#species').val(dataorder['0']['species']) $('#editprojectsModal').find('#plot').val(dataorder['0']['plot']) $('#editprojectsModal').find('#colum').val(dataorder['0']['colum']) $('#editprojectsModal').find('#treenumber').val(dataorder['0']['treenumber']) $('#editprojectsModal').find('#dateproject').val(dataorder['0']['dateproject']) $('#editprojectsModal').find('.btn-primary').val(dataorder['0']['id'])
                            }
                        }

                    );

                }

            )
        }

    ) //    $(document).ready(function(){
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
</script>@endsection