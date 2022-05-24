@extends('layouts.teacher')
@section('content')
<div class="container" style="">
    @if ($message = Session::get('success'))
    <script>
        Swal.fire(
            'Success',
            '',
            'success'
        )
    </script>
    @endif
    <div class="d-flex justify-content-center ">
        <div class="card mt-5" style="width:950px;border:none;">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <p style="font-weight:bolder">จัดการผู้ใช้</p>
                    </div>
                    <div class="col-6 d-flex justify-content-center ">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adduserModal">
                            เพิ่มผู้ใช้
                        </button>
                    </div>
                </div>
                <div class="card mt-4" style="width: auto;z-index:1">
                    <table id="table_select" data-toggle="table" data-height="400" data-side-pagination="server" data-pagination="true" data-page-size="All" data-query-params="searchQueryParams_invsetment" data-url="{{route('queryuser') }}" data-method="get">
                        <thead>
                            <tr class="tr_style">
                                <th data-field="id" class="th-2 font-table-modal "><label class="modal-header-f justify-content-center d-flex">ลำดับ</th>
                                <th data-field="name" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">ชื่อผู้ใช้งาน</th>
                                <th data-field="username" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">ชื่อจริง</th>
                                <th data-field="phone" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">เบอร์โทร</th>
                                <th data-field="email" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">อีเมล</th>
                                <th data-field="button" class="th-2 font-table-modal"><label class="modal-header-f justify-content-center d-flex">จัดการข้อมูล</th>

                            </tr>
                        </thead>
                    </table>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="adduserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header d-flex justify-content-center" style="background: linear-gradient(275deg, rgba(137, 181, 175, 1) 0%, rgba(150, 199, 193, 1) 26%, rgba(208, 202, 178, 1) 97%);color:black;>
                                <h5 class=" modal-title" id="exampleModalLabel">เพิ่มข้อมูลผู้ใช้</h5>
                            </div>
                            <div class="modal-body">
                                <div class="d-flex justify-content-center">
                                    <div class="row">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="form-group row d-flex justify-content-center">
                                                <div class="col-md-12">
                                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="ชื่อผู้ใช้" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                                    @error('username')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row d-flex justify-content-center">
                                                <div class="col-md-12">
                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="ชื่่อจริง" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row d-flex justify-content-center">
                                                <div class="col-md-12">
                                                    <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" placeholder="นามสกุล" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
                                                    @error('lastname')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row d-flex justify-content-center">
                                                <div class="col-md-12">
                                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="เบอร์โทร" value="{{ old('phone') }}" required autocomplete="phone">
                                                    @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex justify-content-center">
                                                <div class="col-md-12">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="อีเมลล์" value="{{ old('email') }}" required autocomplete="email">
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex justify-content-center">
                                                <div class="col-md-12">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="รหัสผ่าน(ขั้นต่ำ8ตัว)" name="password" required autocomplete="new-password">
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex justify-content-center">
                                                <div class="col-md-12">
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="ยืนยันรหัสผ่าน" required autocomplete="new-password">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex justify-content-left">
                                                <div class="col-md-3 ml-3 mr-5 text-center">
                                                    <button type="submit" class="btn btn-primary">
                                                        ยืนยัน
                                                    </button>
                                                </div>
                                                <div class="col-md-3 text-center">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- --}}


                {{-- modal edit --}}

                <!-- Modal -->
                <div class="modal fade" id="edituserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header d-flex justify-content-center " style="border:none">
                                <h5 class="modal-title" id="exampleModalLabel">บันทึกข้อมูลผู้ใช้</h5>

                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ route('edituser') }}">
                                    @csrf
                                    <div class="form-group row d-flex justify-content-center">
                                        <div class="col-md-12">
                                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="ชื่อผู้ใช้" value="{{ old('username') }}" autocomplete="username" autofocus>
                                            @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row d-flex justify-content-center">
                                        <div class="col-md-12">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="ชื่่อจริง" value="{{ old('name') }}" autocomplete="name" autofocus>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row d-flex justify-content-center">
                                        <div class="col-md-12">
                                            <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" placeholder="นามสกุล" value="{{ old('lastname') }}" autocomplete="lastname" autofocus>
                                            @error('lastname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row d-flex justify-content-center">
                                        <div class="col-md-12">
                                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="เบอร์โทร" value="{{ old('phone') }}" autocomplete="phone">
                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex justify-content-center">
                                        <div class="col-md-12">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="อีเมลล์" value="{{ old('email') }}" autocomplete="email">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex justify-content-center">
                                        <div class="col-md-3 text-center">
                                            <button type="submit" name="id" class="btn btn-primary">
                                                ยืนยัน
                                            </button>
                                        </div>
                                        <div class="col-md-3 text-center">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- --}}
            </div>
        </div>
    </div>





</div>
<style>
 
    body {
        height: 100vh;
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
                url: "queryedit",
                // datatype: 'json',
                data: {
                    id: id
                },
                success: function(response) {
                    var dataorder = Object.values(response)
                    $('#edituserModal').find('#username').val(dataorder['0']['username'])
                    $('#edituserModal').find('#name').val(dataorder['0']['name'])
                    $('#edituserModal').find('#lastname').val(dataorder['0']['lastname'])
                    $('#edituserModal').find('#phone').val(dataorder['0']['phone'])
                    $('#edituserModal').find('#email').val(dataorder['0']['email'])
                    $('#edituserModal').find('.btn-primary').val(dataorder['0']['id'])

                }
            });

        })


    })
</script>

@endsection