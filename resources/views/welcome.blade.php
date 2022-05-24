@extends ('layouts.user')

@section ('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script> -->


<div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" style="border-radius:12px; box-shadow:2px 2px 5px rgb(0 0 0 / 40%);">
            <div class=" carousel-item active">
                <img src="{{asset('assets/img/banner/1.jpg')}}" class="d-block w-100" style="height: 500px;" alt="...">
            </div>
            <div class=" carousel-item">
                <img src="{{asset('assets/img/banner/2.jpg')}}" class="d-block w-100" style="height: 500px;" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/banner/3.jpg')}}" class="d-block w-100" style="height: 500px;" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/banner/4.jpg')}}" class="d-block w-100" style="height: 500px;" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="mt-5">
                <h4 class="text-center">ยินดีต้อนรับสู่ MONLEY</h4>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-6">
            <img src="{{asset('assets/img/address/collage.jpg')}}" class="d-block w-100" style="height:400px; border-radius:12px;box-shadow:2px 2px 5px rgb(0 0 0 / 40%);" alt="...">
        </div>
        <div class="col-6">
            <h5> สถานที่ มหาวิทยาลัยเทคโนโลยีราชมงคลธัญบุรี ศูนย์รังสิต
                ตั้งอยู่ ถนน พหลโยธิน 87 ซอย2 ตำบล ประชาธิปัตย์
                อำเภอธัญบุรี จ.ปทุมธานี 12130</h5>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-6 ">
            <h5> ภาพตัวอย่าง แปลงที่ใช้เพาะปลูก สาขาการผลิตพืช
                คณะเทคโนโลยีเกษตร มหาวิทยาลัยเทคโนโลยีราชมงคลธัญบุรี
            </h5>
        </div>
        <div class="col-6">
            <img src="{{asset('assets/img/address/faculty.jpg')}}" class="d-block w-100" style="height:400px; border-radius:12px;box-shadow:2px 2px 5px rgb(0 0 0 / 40%);" alt="...">
        </div>
    </div>


</div>
@endsection