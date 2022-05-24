@extends('layouts.student')

@section('content')

<head>
    <!-- {{$dataevent}} -->
    <meta charset='utf-8' />

    <link rel='stylesheet' href="{{URL::asset('assets/fullcalendar/css/main.css')}}" />
    <script src="{{URL::asset('assets/fullcalendar/js/main.js')}}"></script>

    <!-- <link href='fullcalendar/css/main.css' rel='stylesheet' /> -->
    <!-- <script src='fullcalendar/css/main.js'></script> -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var initialLocaleCode = 'en';
            var localeSelectorEl = document.getElementById('locale-selector');
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth'
                },
                initialDate: Date.now(),
                locale: initialLocaleCode,
                buttonIcons: false, // show the prev/next text
                weekNumbers: true,
                navLinks: true, // can click day/week names to navigate views
                editable: true,
                dayMaxEvents: true, // allow "more" link when too many events

            });

            calendar.render();

            // build the locale selector's options
            calendar.getAvailableLocaleCodes().forEach(function(localeCode) {
                var optionEl = document.createElement('option');
                optionEl.value = localeCode;
                optionEl.selected = localeCode == initialLocaleCode;
                optionEl.innerText = localeCode;
                localeSelectorEl.appendChild(optionEl);
            });

            // when the selected option changes, dynamically change the calendar option
            localeSelectorEl.addEventListener('change', function() {
                if (this.value) {
                    calendar.setOption('locale', this.value);
                }
            });

        });
    </script>
</head>

<body>
    <div class="d-flex justify-content-center">
        <div class="container">
            <div id='calendar'>
            </div>
        </div>
    </div>

    <!-- Modal -->

</body>
<div class="modal fade" id="modalcalender" tabindex="-1" aria-labelledby="modalcalender" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background: linear-gradient(275deg, rgba(137, 181, 175, 1) 0%, rgba(150, 199, 193, 1) 26%, rgba(208, 202, 178, 1) 97%);color:black;">
                <h5 class="modal-title" id="exampleModalLabel">สร้างกิจกรรม</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-between">
                    <input id="date" type="text" hidden>

                    <select name="event" id="events" style="width: 50%">
                        <option value="" disabled selected>เลือกกิจกรรม</option>
                        <option value="รดน้ำ">รดน้ำ</option>
                        <option value="ใส่ปุ๋ย">ใส่ปุ๋ย</option>
                        <option value="พันยาฆ่าแมลง">พ่นยาฆ่าแมลง</option>
                        <option value="เก็บเกี่ยว">เก็บเกี่ยว</option>

                    </select>
                    <!-- <input id="stdname" type="text" placeholder="ชื่อนักศึกษา"> -->

                    <div class="button-">
                        {{-- <button type="button" class="btn btn-primary modalcalendersubmit ms-2 me-0" style="width:100px;">ยืนยัน</button>
                        <button type="button" class="btn btn-danger modalcalenderdelete ms-0 me-2" style="width:55px;">ลบ</button> --}}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row" style="--bs-gutter-x:0.7rem;">
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-success modalcalendersuccess" style="width:80px;">สำเร็จ</button>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<style>
    .fc-daygrid-day-events {
        position: relative !important;
    }



    #top {
        background: #eee;
        border-bottom: 1px solid #ddd;
        padding: 0 10px;
        line-height: 40px;
        font-size: 12px;
    }

    #calendar {
        max-width: 1100px;
        margin: 40px auto;
        padding: 0 10px;
    }
</style>
<script>
    function eventsdata() {
        $('.fc-daygrid-day-events').empty()
        $.ajax({
            type: "get",
            url: "calendardata",
            // datatype: 'json',
            data: {
                "_token": "{{ csrf_token() }}",
            },
            success: function(response) {
                var button = "<button class='btn' style='z-index:2'>Delete</button>";
                var dataorder = Object.values(response)
                console.log(dataorder[0]['Date'])
                // console.log(response.length)
                for (var i = 0; i < response.length; i++) {
                    // $(".fc-daygrid-day").find("[data-datee='" + dataorder[i]['Date'] + "']").append('wow'); 
                    if (dataorder[i]['status'] == "success") {
                        var status = "<i class='bi bi-check-lg'></i>"
                    } else {
                        var status = "-"
                    }
                    $('*[data-date="' + dataorder[i]['Date'] + '"]').find('.fc-daygrid-day-events').empty().append(dataorder[i]['event'] + "(" + status + ")");
                    $('*[data-date="' + dataorder[i]['Date'] + '"]').find('.fc-daygrid-day-events').after('<div id="space">' + dataorder[i]['studentname'] + '</div>');
                }
            }
        });
    }
    $(document).ready(function() {
        var stddata;
        eventsdata()
        console.log(stddata)
        $(".fc-daygrid-day-frame").css("z-index", "1");


        $(document).on('click', ".fc-next-button ,.fc-prev-button", function() {
            eventsdata()
        })

        $(document).on('click', ".fc-daygrid-day-frame", function() {
            var date = $(this).closest('.fc-daygrid-day').data('date')
            $("#modalcalender").modal("toggle")
            $("#modalcalender").find('#date').val(date)



        })

        $(document).on('click', ".modalcalendersubmit", function() {
            var datecal = $("#modalcalender").find('#date').val()
            var event = $("#modalcalender").find('#events').val()
            var stdname = $("#modalcalender").find('#stdname').val()
            $.ajax({
                type: "get",
                url: "addevent",
                // datatype: 'json',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "date": datecal,
                    "event": event,

                },
                success: function(response) {
                    eventsdata()
                    $("#modalcalender").modal("toggle")
                }
            });
        })


        $(document).on('click', ".modalcalenderdelete", function() {

            var datecal = $("#modalcalender").find('#date').val()
            $.ajax({
                type: "get",
                url: "deleteevent",
                // datatype: 'json',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "date": datecal,
                },
                success: function(response) {
                    eventsdata()
                    $("#modalcalender").modal("toggle")
                }
            });

        })

        $(document).on('click', ".modalcalendersuccess", function() {
            var datecal = $("#modalcalender").find('#date').val()
            var datastd = @json($dataevent);
            var arraydate = []
            console.log(datastd)
            for (var i = 0; i < datastd.length; i++) {
                arraydate.push(datastd[i]['Date'])
            }
            if (arraydate.includes(datecal) == true) {
                $.ajax({
                    type: "get",
                    url: "successevent",
                    // datatype: 'json',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "date": datecal,
                    },
                    success: function(response) {
                        eventsdata()
                        $("#modalcalender").modal("toggle")
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'บันทึกสำเร็จ',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }
                });
            } else {
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: 'คุณไม่ได้รับมอบหมายงานนี้',
                    showConfirmButton: false,
                    timer: 1500
                })
            }
            console.log(arraydate)





        })
    })
</script>
@endsection