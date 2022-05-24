

<?php $__env->startSection('content'); ?>

<head>
    <meta charset='utf-8' />

    <link rel='stylesheet' href="<?php echo e(URL::asset('assets/newcalendar/css/mobiscroll.javascript.min.css')); ?>" />
    <script src="<?php echo e(URL::asset('assets/newcalendar/js/mobiscroll.javascript.min.js')); ?>"></script>

    <!-- <link href='fullcalendar/css/main.css' rel='stylesheet' /> -->
    <!-- <script src='fullcalendar/css/main.js'></script> -->

</head>
<body>
    <div class="d-flex justify-content-center">
        <div class="container-fluid">
            <div mbsc-page class="demo-recurring-event-add-edit-dialog ">
                <div style="height:100%">
                    <div id="demo-add-delete-event"></div>
                    <div id="demo-add-popup">
                        <input type="text" name="" id="dataid" hidden>
                        <div class="mbsc-form-group">
                            <label>
                                Title
                                <input mbsc-input id="recurring-event-title">
                            </label>
                            <label>
                                Description
                                <textarea mbsc-textarea id="recurring-event-desc"></textarea>
                            </label>
                        </div>
                        <div class="mbsc-form-group">
                            <label>
                                All-day
                                <input mbsc-switch id="recurring-event-all-day" type="checkbox" />
                            </label>
                            <label>
                                เริ่ม
                                <input mbsc-input id="recurring-event-start-input" />
                            </label>
                            <label>
                                จบ
                                <input mbsc-input id="recurring-event-end-input" />
                            </label>
                            <div id="recurring-event-date" class="" ></div>
                            <label>
                                <input mbsc-input data-label="Repeats" data-dropdown="false" class="" id="recurring-event-repeat"  style=""/>
                            </label>
                            <div id="demo-custom-repeat-cont">
                                <div>
                                    <div mbsc-segmented-group>
                                        <label>
                                            Daily
                                            <input type="radio" mbsc-segmented name="custom-repeat-type" value="daily" checked>
                                        </label>
                                        <label>
                                            Weekly
                                            <input type="radio" mbsc-segmented name="custom-repeat-type" value="weekly">
                                        </label>
                                        <label>
                                            Monthly
                                            <input type="radio" mbsc-segmented name="custom-repeat-type" value="monthly">
                                        </label>
                                        <label>
                                            Yearly
                                            <input type="radio" mbsc-segmented name="custom-repeat-type" value="yearly">
                                        </label>
                                    </div>
                                    <div class="custom-repeat-settings" >
                                        Repeat every
                                        <label class="custom-repeat-input">
                                            <input id="custom-repeat-nr" min="1" mbsc-input data-input-style="outline" value="1" />
                                        </label>
                                        <span class="custom-repeat-text custom-repeat-daily">days</span>
                                        <span class="custom-repeat-text custom-repeat-weekly">weeks</span>
                                        <span class="custom-repeat-text custom-repeat-monthly">
                                            months on day
                                            <label class="custom-repeat-input custom-repeat-select-nr">
                                                <input id="custom-repeat-month-day" mbsc-input data-dropdown="true" data-input-style="outline" />
                                            </label>
                                        </span>
                                        <span class="custom-repeat-text custom-repeat-yearly">
                                            years on
                                            <label class="custom-repeat-input custom-repeat-select-month">
                                                <input mbsc-input id="custom-repeat-month-input" data-dropdown="true" data-input-style="outline" />
                                            </label>
                                            <label class="custom-repeat-input custom-repeat-select-nr">
                                                <input id="custom-repeat-year-day" mbsc-input data-dropdown="true" data-input-style="outline" />
                                            </label>
                                            <select id="custom-repeat-month" data-input-style="outline">
                                                <option value="1" selected>January</option>
                                                <option value="2">February</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">August</option>
                                                <option value="9">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                        </span>
                                        <p class="custom-repeat-desc custom-repeat-text custom-repeat-daily">The event will be repeated every day or every x days, depending on the value</p>
                                        <p class="custom-repeat-desc custom-repeat-text custom-repeat-weekly">The event will be repeated every x weeks on specific weekdays</p>
                                        <p class="custom-repeat-desc custom-repeat-text custom-repeat-monthly">The event will be repeated every x month on specific day of the month</p>
                                        <p class="custom-repeat-desc custom-repeat-text custom-repeat-yearly">The event will be repeated every x years on specific day of a specific month</p>
                                        <div class="custom-repeat-checkbox-cont custom-repeat-text custom-repeat-weekly">
                                            <label>
                                                <input mbsc-checkbox class="custom-repeat-weekdays" type="checkbox" value="SU" name="Sunday" checked>
                                                Sun
                                            </label>
                                            <label>
                                                <input mbsc-checkbox class="custom-repeat-weekdays" type="checkbox" value="MO" name="Monday">
                                                Mon
                                            </label>
                                            <label>
                                                <input mbsc-checkbox class="custom-repeat-weekdays" type="checkbox" value="TU" name="Tuesday">
                                                Tue
                                            </label>
                                            <label>
                                                <input mbsc-checkbox class="custom-repeat-weekdays" type="checkbox" value="WE" name="Wednesday">
                                                Wed
                                            </label>
                                            <label>
                                                <input mbsc-checkbox class="custom-repeat-weekdays" type="checkbox" value="TH" name="Thursday">
                                                Thu
                                            </label>
                                            <label>
                                                <input mbsc-checkbox class="custom-repeat-weekdays" type="checkbox" value="FR" name="Friday">
                                                Fri
                                            </label>
                                            <label>
                                                <input mbsc-checkbox class="custom-repeat-weekdays" type="checkbox" value="SA" name="Saturday">
                                                Sat
                                            </label>
                                        </div>

                                        <div>Stop condition</div>
                                        <div class="custom-condition-cont">
                                            <label>
                                                <input mbsc-radio type="radio" name="custom-repeat-condition" value="never" data-description="The event will repeat indefinitely" checked> Never stop
                                            </label>
                                            <label>
                                                <input mbsc-radio type="radio" name="custom-repeat-condition" value="until" data-description="The event will run until it reaches a specific date">
                                                Run until a specific date
                                                <label class="custom-repeat-input custom-specific-date">
                                                    <input id="custom-repeat-date" mbsc-input data-input-style="outline" placeholder="Select a date" />
                                                </label>
                                            </label>
                                            <label>
                                                <input mbsc-radio type="radio" name="custom-repeat-condition" value="count" data-description="The event will repeat until it reaches a certain amount of occurrences">
                                                Run until it reaches
                                                <label class="custom-repeat-input">
                                                    <input id="custom-repeat-until" mbsc-input min="1" data-input-style="outline" value="1" />
                                                </label> occurrences
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                    <div class="text-center" style="font-size: 30px;">สถานะ: <label id="status" for=""></label></div>
                                    <div class="text-center" style="font-size: 30px;">นักศึกษา: <label id="stdname" for=""></label></div>
                            <label style="display: none;">
                                Show as busy
                                <input id="recurring-event-status-busy" mbsc-segmented type="radio" name="recurring-event-status" value="busy">
                            </label>
                            <label style="display: none;">
                                Show as free
                                <input id="recurring-event-status-free" mbsc-segmented type="radio" name="recurring-event-status" value="free">
                            </label>
                            <div class="mbsc-button-group d-none">
                                <button class="mbsc-button-block" id="recurring-event-delete" mbsc-button data-color="danger" data-variant="outline">Delete event</button>
                            </div>
                            <!-- <div class="d-flex justify-content-center">
                                <div class="col-6 mt-2">
                                    <select class="form-select" name="stdname" id="stdname" style="width: 100%;height:2rem;">
                                        <option value="" disabled selected>เลือกนักศึกษา</option>
                                        <?php $__currentLoopData = $student; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->name); ?>"><?php echo e($item->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
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
    $(document).ready(function() {
        $(document).on('click', ".btnsave", function() {
            var title = $('#recurring-event-title').val()
            var detail = $('#recurring-event-desc').val()
            if (detail == "") {
                var detail = "-"
            }
            var allday = 0
            if ($("#recurring-event-all-day").prop('checked') == true) {
                var allday = 1
            }
            var startdate = $('#recurring-event-start-input').val()
            var startdate = startdate.replace(/\s/g, '-')
            var startdate = startdate.replace(/\//g, '-')
            var enddate = $('#recurring-event-end-input').val()
            var enddate = enddate.replace(/\s/g, '-')
            var enddate = enddate.replace(/\//g, '-')
            var daily = $('#recurring-event-repeat').val()
            var enddatesplit = enddate.split("-");
            var startdatesplit = startdate.split("-");
            if (allday == 1) {
                enddate = enddatesplit[2] + "-" + enddatesplit[1] + "-" + enddatesplit[0]
                startdate = startdatesplit[2] + "-" + startdatesplit[1] + "-" + startdatesplit[0]
            } else {
                enddate = enddatesplit[2] + "-" + enddatesplit[1] + "-" + enddatesplit[0] + "T" + enddatesplit[3]
                startdate = startdatesplit[2] + "-" + startdatesplit[1] + "-" + startdatesplit[0] + "T" + startdatesplit[3]
            }
            $.ajax({
                type: "get",
                url: "addevent",
                datatype: 'text',
                data: {
                    "_token": "<?php echo e(csrf_token()); ?>",
                    title: title,
                    detail: detail,
                    allday: allday,
                    startdate: startdate,
                    enddate: enddate,
                },
                success: function(response) {
                    // alert('success')
                    // var datacalender = Object.values(response)
                    Swal.fire({
                        title: 'บันทึกสำเร็จ',
                        icon: 'success',
                        confirmButtonText: 'ยืนยัน'
                    })

                }
            });
        })

        $(document).on('click', ".mbsc-schedule-event", function() {
            
            var id = $(this).data("id")
            calender = <?php echo json_encode($calender, 15, 512) ?>;
         
            for(var i=0;i<calender.length;i++){
                if(calender[i]['id'] == id){
                    $('#status').empty().append(calender[i]['status'])
                    $('#stdname').empty().append(calender[i]['studentname'])
                    break
                }
                
            }
            $('#dataid').val(id)
            
            
        })

        $(document).on('click', "#recurring-event-delete", function() {
            var id = $('#dataid').val()
            $.ajax({
                type: "get",
                url: "deleteevent",
                datatype: 'text',
                data: {
                    "_token": "<?php echo e(csrf_token()); ?>",
                    id: id,

                },
                success: function(response) {
                    // alert('success')
                    // var datacalender = Object.values(response)
                    Swal.fire({
                        title: 'ลบสำเร็จ',

                        icon: 'success',
                        confirmButtonText: 'ยืนยัน'
                    })

                }
            });
        })
        $(document).on('click',".btnsuccess",function(){
            var startdate = $('#recurring-event-start-input').val()
            startdate= startdate.split("/");
            var year = startdate[2].split(" ")
            var datadate = year[0]+startdate[1]+startdate[0]
            var today = "<?php echo e(date('Ymd')); ?>"
            var stdname = $('#stdname').text()
            var name =  "<?php echo e(auth()->user()->name); ?>"
            dayck = today-datadate

          
            // var startdate = startdate.replace(/\s/g, '-')
            // var startdate = startdate.replace(/\//g, '-')
            console.log(stdname)
            
            var id = $('#dataid').val()
            if(dayck >= 0 && stdname == name){
 $.ajax({
                type: "get",
                url: "successevent",
                datatype: 'text',
                data: {
                    "_token": "<?php echo e(csrf_token()); ?>",
                    id: id,

                },
                success: function(response) {
                    popup.close();
                    // alert('success')
                    // var datacalender = Object.values(response)
                    Swal.fire({
                        title: 'สำเร็จ',

                        icon: 'success',
                        confirmButtonText: 'ยืนยัน'
                    })

                }
            });
            }else if(stdname != name){
                popup.close();
                Swal.fire({
                        title: 'คุณไม่ได้รับมอบหมายงานนี้',

                        icon: 'warning',
                        confirmButtonText: 'ยืนยัน'
                    })
            }else if (dayck < 0){
                popup.close();
                Swal.fire({
                        title: 'ยังไม่ถึงวันที่กำหนด',

                        icon: 'warning',
                        confirmButtonText: 'ยืนยัน'
                    })
            }
           
        })
    })
    mobiscroll.setOptions({
        locale: mobiscroll.localeTh, // Specify language like: locale: mobiscroll.localePl or omit setting to use default
        theme: 'ios', // Specify theme like: theme: 'ios' or omit setting to use default
        themeVariant: 'light' // More info about themeVariant: https://docs.mobiscroll.com/5-14-1/javascript/eventcalendar#opt-themeVariant
    });
    var oldEvent;
    var tempEvent = {};
    var deleteEvent;
    var restoreEvent;
    var customDate;
    var calendar;
    var addEditPopup;
    var eventDate;
    var titleInput = document.getElementById('recurring-event-title');
    var descriptionTextarea = document.getElementById('recurring-event-desc');
    var allDaySwitch = document.getElementById('recurring-event-all-day');
    var freeSegmented = document.getElementById('recurring-event-status-free');
    var busySegmented = document.getElementById('recurring-event-status-busy');
    var deleteButton = document.getElementById('recurring-event-delete');
    var customRepeat = document.getElementById('demo-custom-repeat-cont');
    var repeat = document.getElementById('recurring-event-repeat');
    var until = document.getElementById('custom-repeat-until');
    var repeatNr = document.getElementById('custom-repeat-nr');
    var repeatData = [{
        value: 'norepeat',
        text: 'Does not repeat'
    },];
    var select;
    var monthSelect;
    var monthDaySelect;
    var yearDaySelect;
    var datePickerResponsive = {
        medium: {
            controls: ['calendar'],
            touchUi: false
        }
    };
    var selectResponsive = {
        xsmall: {
            touchUi: true
        },
        small: {
            touchUi: false
        }
    };
    var datetimePickerResponsive = {
        medium: {
            controls: ['calendar', 'time'],
            touchUi: false
        }
    };
    calender = <?php echo json_encode($calender, 15, 512) ?>;
    console.log(calender)
    var myData = calender
    // var myData = [{
    //     id: 1,
    //     start: '2022-02-23T13:00',
    //     end:  '2022-02-23T13:30',
    //     title: 'Lunch @ Butcher\'s',
    //     description: '',
    //     allDay: true,
    //     free: true,
    //     color: '#26c57d'
    // }, {
    //     id: 2,
    //     start: '2022-02-26T15:00',
    //     end: '2022-02-26T16:00',
    //     title: 'General orientation',
    //     description: '',
    //     allDay: false,
    //     free: false,
    //     color: '#fd966a'
    // }, {
    //     id: 3,
    //     start: '2022-02-25T18:00',
    //     end: '2022-02-25T22:00',
    //     title: 'Dexter BD',
    //     description: '',
    //     allDay: false,
    //     free: true,
    //     color: '#37bbe4'
    // }, {
    //     id: 4,
    //     start: '2022-02-27',
    //     end: '2022-02-28',
    //     title: 'Stakeholder mtg.',
    //     description: '',
    //     allday: true,
    //     free: false,
    //     color: '#d00f0f'
    // }];
    var days = [{
        name: 'Sunday',
        short: 'SU',
    }, {
        name: 'Monday',
        short: 'MO',
    }, {
        name: 'Tuesday',
        short: 'TU',
    }, {
        name: 'Wednesday',
        short: 'WE',
    }, {
        name: 'Thursday',
        short: 'TH',
    }, {
        name: 'Friday',
        short: 'FR',
    }, {
        name: 'Saturday',
        short: 'SA',
    }];
    var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    var daySelect;
    var repeatType = document.querySelectorAll('input[name=custom-repeat-type]');

    // set dates by selected date
    function updateOptionDates() {
        var d = new Date(tempEvent.start);
        var weekday = d.getDay();
        var monthday = d.getDate();
        var newData = repeatData.slice(0);

        for (var i = 0; i < newData.length; ++i) {
            var item = newData[i];
            switch (item.value) {
                case 'weekly':
                    item.text = 'Weekly on ' + days[weekday].name;
                    break;
                case 'monthly':
                    item.text = 'Monthly on day ' + monthday;
                    break;
                case 'yearly':
                    item.text = 'Annually on ' + months[d.getMonth()] + ' ' + monthday;
                    break;
            }
        }
        select.setOptions({
            data: newData
        });
    }
    // popuplate data for months
    function populateMonthDays(month, selectInst) {
        var options = '';
        var days = [31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        var newValues = [];

        for (var i = 1; i <= days[month - 1]; i++) {
            newValues.push(i.toString());
        }
        selectInst.setOptions({
            data: newValues
        });
    }

    // change text depending on the chosen repeat type 
    function updateContent(type) {
        document.querySelectorAll('.custom-repeat-text').forEach(function(elm) {
            if (elm.classList.contains('custom-repeat-' + type)) {
                elm.style.display = 'inline-block';
            } else {
                elm.style.display = 'none';
            }
        });
    }

    // set text for custom option
    function setCustomText(recurring) {
        setTimeout(function() {
            var type = document.querySelector('input[name=custom-repeat-type]:checked').value;
            var condition = document.querySelector('input[name=custom-repeat-condition]:checked').value;
            var interval = +repeatNr.value;
            var weekDayNames = [];
            var rec;
            var customText;

            document.querySelectorAll('.custom-repeat-weekdays:checked').forEach(function(elm) {
                weekDayNames.push(elm.name);
            });

            switch (type) {
                case 'daily':
                    customText = interval > 1 ? ('Every ' + interval + ' days') : 'Daily';
                    break;
                case 'weekly':
                    customText = interval > 1 ? ('Every ' + interval + ' weeks') : 'Weekly';
                    customText += ' on ' + weekDayNames.join(', ');
                    break;
                case 'monthly':
                    customText = interval > 1 ? ('Every ' + interval + ' months') : 'Monthly';
                    customText += ' on day ' + monthDaySelect.getVal();
                    break;
                case 'yearly':
                    customText = interval > 1 ? ('Every ' + interval + ' years') : 'Annualy';
                    customText += ' on ' + document.querySelector('.custom-repeat-month option:selected').textContent + ' ' + yearDaySelect.getVal();
                    break;
            }

            switch (condition) {
                case 'until':
                    customText += ' until ' + mobiscroll.util.datetime.formatDate('MMMM D, YYYY', new Date(customDate.getVal()));
                    break;
                case 'count':
                    customText += ', ' + until.value + ' times';
                    break;
            }

            if (recurring && recurring.interval) {
                var newData = repeatData.slice(0);
                newData.push({
                    value: 'custom-value',
                    text: customText
                })
                select.setOptions({
                    data: newData
                });
                select.setVal('custom-value');
            }
        });
    }

    // set custom values to default
    function resetCustomValues() {
        mobiscroll.getInst(document.querySelector('input[name=custom-repeat-type][value="daily"]')).checked = true;
        repeatNr.value = 1;
        mobiscroll.getInst(document.querySelector('input[name=custom-repeat-condition][value="never"]')).checked = true;
        until.value = 1;
        monthSelect.setVal(1);
        monthDaySelect.setVal(1)
        yearDaySelect.setVal(1);
        document.querySelectorAll('.custom-repeat-weekdays').forEach(function(elm) {
            mobiscroll.getInst(elm).checked = elm.value === 'SU';
        });
        select.setVal('norepeat');
        showHideCustom();
    }

    function setCustomSettings() {
        var rec;
        var selected = select.getVal();

        if (selected === 'custom' || selected === 'custom-value') {
            // save custom recurring option when the popup is closed
            var type = document.querySelector('input[name=custom-repeat-type]:checked').value;
            var condition = document.querySelector('input[name=custom-repeat-condition]:checked').value;
            var weekDays = [];
            var customText;

            document.querySelectorAll('.custom-repeat-weekdays:checked').forEach(function(elm) {
                weekDays.push(elm.value);
            });

            rec = {
                repeat: type,
                interval: +repeatNr.value
            };

            switch (type) {
                case 'weekly':
                    rec.weekDays = weekDays.join(',');
                    break;
                case 'monthly':
                    rec.day = monthDaySelect.getVal();
                    break;
                case 'yearly':
                    rec.day = yearDaySelect.getVal();
                    rec.month = monthSelect.getVal();
                    break;
            }

            switch (condition) {
                case 'until':
                    rec.until = customDate.getVal();
                    break;
                case 'count':
                    rec.count = +$until.val();
                    break;
            }

            tempEvent.recurring = rec;
        }
    }

    function showHideCustom() {
        setTimeout(function() {
            if (select.getVal() !== 'custom' && select.getVal() !== 'custom-value') {
                customRepeat.style.display = 'none';
            } else {
                customRepeat.style.display = 'block';
            }
        });
    }

    function navigateTo(date) {
        var rec = tempEvent.recurring;
        var stDate = new Date(tempEvent.start);
        var d = date || stDate;
        var nextYear = 0;

        // navigate the calendar to the correct view
        if (rec && rec.repeat === 'yearly') {
            if (d.getMonth() + 1 > +rec.month && d.getDay() > +rec.day) {
                nextYear = 1;
            }
            calendar.navigate(new Date(stDate.getFullYear() + nextYear, rec.month - 1, rec.day));
        } else {
            calendar.navigate(stDate);
        }
    }

    function createAddPopup(elm) {
        // hide delete button inside add popup
        deleteButton.style.display = 'none';

        deleteEvent = true;
        restoreEvent = false;

        // set popup header text and buttons for adding
        popup.setOptions({
            headerText: 'New event', // More info about headerText: https://docs.mobiscroll.com/5-14-1/javascript/eventcalendar#opt-headerText
            buttons: ['cancel', { // More info about buttons: https://docs.mobiscroll.com/5-14-1/javascript/eventcalendar#opt-buttons
                text: 'Success',
                keyCode: 'enter',
                handler: function() {
                    setCustomSettings();

                    calendar.updateEvent({
                        id: tempEvent.id,
                        title: tempEvent.title,
                        description: tempEvent.description,
                        allDay: tempEvent.allDay,
                        start: tempEvent.start,
                        end: tempEvent.end,
                        color: tempEvent.color,
                        recurring: tempEvent.recurring
                    });

                    // navigate the calendar to the correct view
                    navigateTo();

                    deleteEvent = false;
                    popup.close();
                },
                cssClass: 'mbsc-popup-button-primary btnsave d-none '
            }]
        });

        // fill popup with a new event data
        mobiscroll.getInst(titleInput).value = tempEvent.title;
        mobiscroll.getInst(descriptionTextarea).value = '';
        mobiscroll.getInst(allDaySwitch).checked = true;
        eventDate.setVal([tempEvent.start, tempEvent.end]);
        mobiscroll.getInst(busySegmented).checked = true;
        eventDate.setOptions({
            controls: ['date'],
            responsive: datePickerResponsive
        });

        // set anchor for the popup
        popup.setOptions({
            anchor: elm
        });

        updateOptionDates();
        resetCustomValues();

        popup.open();
    }

    function createEditPopup(args) {
        var ev = args.event;

        // show delete button inside edit popup
        deleteButton.style.display = 'block';

        deleteEvent = false;
        restoreEvent = true;

        // set popup header text and buttons for editing
        popup.setOptions({
            headerText: 'Edit event', // More info about headerText: https://docs.mobiscroll.com/5-14-1/javascript/eventcalendar#opt-headerText
            buttons: ['cancel', { // More info about buttons: https://docs.mobiscroll.com/5-14-1/javascript/eventcalendar#opt-buttons
                text: 'Success',
                keyCode: 'enter',
                cssClass: 'mbsc-popup-button-primary btnsuccess '
            }]
        });

        // fill popup with the selected event data
        mobiscroll.getInst(titleInput).value = ev.title || '';
        mobiscroll.getInst(descriptionTextarea).value = ev.description || '';
        mobiscroll.getInst(allDaySwitch).checked = ev.allDay || false;
        eventDate.setVal([ev.start, ev.end]);

        if (ev.free) {
            mobiscroll.getInst(freeSegmented).checked = true;
        } else {
            mobiscroll.getInst(busySegmented).checked = true;
        }

        // change range settings based on the allDay
        eventDate.setOptions({
            controls: ev.allDay ? ['date'] : ['datetime'],
            responsive: ev.allDay ? datePickerResponsive : datetimePickerResponsive
        });

        // set anchor for the popup
        popup.setOptions({
            anchor: args.domEvent.currentTarget
        });

        // set repeat type from recurring rule
        var repeatType,
            rec = ev.recurring;

        if (rec) {
            if (rec.interval) {
                var condition;

                repeatType = 'custom-value';

                mobiscroll.getInst(document.querySelector('input[name=custom-repeat-type][value=' + rec.repeat + ']')).checked = true;

                repeatNr.value = rec.interval;

                if (rec.until) {
                    condition = 'until';
                } else if (rec.count) {
                    condition = 'count';
                } else {
                    condition = 'never';
                }

                mobiscroll.getInst(document.querySelector('input[name=custom-repeat-condition][value=' + condition + ']')).checked = true;

                if (rec.weekDays) {
                    var weekD = rec.weekDays.split(',')
                    document.querySelectorAll('.custom-repeat-weekdays').forEach(function(elm) {
                        if (weekD.indexOf(elm.value) > 0) {
                            mobiscroll.getInst(elm).checked = true;
                        }
                    });
                }

                if (rec.day) {
                    if (rec.repeat === 'yearly') {
                        yearDaySelect.setVal(rec.day);
                        if (rec.month) {
                            monthSelect.setVal(rec.month);
                        }
                    } else {
                        monthDaySelect.setVal(rec.day)
                    }
                }
                updateContent(rec.repeat);
            } else if (rec.weekDays === 'MO,TU,WE,TH,FR') {
                repeatType = 'weekday';
            } else {
                repeatType = rec.repeat;
            }
        } else {
            repeatType = 'norepeat';
            resetCustomValues();
        }

        select.setVal(repeatType);
        updateOptionDates();
        showHideCustom();

        popup.open();
    }

    updateContent('daily');

    var calendar = mobiscroll.eventcalendar('#demo-add-delete-event', {
        clickToCreate: 'double', // More info about clickToCreate: https://docs.mobiscroll.com/5-14-1/javascript/eventcalendar#opt-clickToCreate
        dragToCreate: true, // More info about dragToCreate: https://docs.mobiscroll.com/5-14-1/javascript/eventcalendar#opt-dragToCreate
        dragToMove: true, // More info about dragToMove: https://docs.mobiscroll.com/5-14-1/javascript/eventcalendar#opt-dragToMove
        dragToResize: true, // More info about dragToResize: https://docs.mobiscroll.com/5-14-1/javascript/eventcalendar#opt-dragToResize
        view: { // More info about view: https://docs.mobiscroll.com/5-14-1/javascript/eventcalendar#opt-view
            schedule: {
                type: 'week'
            }
        },
        data: myData, // More info about data: https://docs.mobiscroll.com/5-14-1/javascript/eventcalendar#opt-data
        onEventClick: function(args) { // More info about onEventClick: https://docs.mobiscroll.com/5-14-1/javascript/eventcalendar#event-onEventClick
            var event = args.event.original ? args.event.original : args.event;

            oldEvent = Object.assign({}, event);
            tempEvent = Object.assign({}, event);

            setCustomText(event.recurring);

            if (!popup.isVisible()) {
                createEditPopup(args);
            }
        },
        onEventCreated: function(args) { // More info about onEventCreated: https://docs.mobiscroll.com/5-14-1/javascript/eventcalendar#event-onEventCreated
            popup.close();
            // store temporary event
            tempEvent = Object.assign({}, args.event);
            createAddPopup(args.target);
        }
    });

    var popup = mobiscroll.popup('#demo-add-popup', {
        display: 'bottom', // Specify display mode like: display: 'bottom' or omit setting to use default
        contentPadding: false,
        fullScreen: true,
        scrollLock: false,
        height: 500, // More info about height: https://docs.mobiscroll.com/5-14-1/javascript/eventcalendar#opt-height
        onClose: function() { // More info about onClose: https://docs.mobiscroll.com/5-14-1/javascript/eventcalendar#event-onClose
            var newData = repeatData.slice(0);
            select.setOptions({
                data: newData.filter(function(item) {
                    return item.value !== 'custom-value';
                })
            });
            if (deleteEvent) {
                calendar.removeEvent(tempEvent);
            } else if (restoreEvent) {
                calendar.updateEvent(oldEvent);
            }
        },
        responsive: { // More info about responsive: https://docs.mobiscroll.com/5-14-1/javascript/eventcalendar#opt-responsive
            medium: {
                display: 'anchored', // Specify display mode like: display: 'bottom' or omit setting to use default
                width: 510, // More info about width: https://docs.mobiscroll.com/5-14-1/javascript/eventcalendar#opt-width
                fullScreen: false,
                touchUi: false
            }
        }
    });

    titleInput.addEventListener('input', function(ev) {
        // update current event's title
        tempEvent.title = ev.target.value;
    });

    descriptionTextarea.addEventListener('change', function(ev) {
        // update current event's title
        tempEvent.description = ev.target.value;
    });

    allDaySwitch.addEventListener('change', function() {
        var checked = this.checked
        // change range settings based on the allDay
        eventDate.setOptions({
            controls: checked ? ['calendar'] : ['calendar', 'time'],
            responsive: checked ? datePickerResponsive : datetimePickerResponsive
        });

        // update current event's allDay property
        tempEvent.allDay = checked;
    });

    var eventDate = mobiscroll.datepicker('#recurring-event-date', {
        controls: ['calendar'],
        select: 'range',
        startInput: '#recurring-event-start-input',
        endInput: '#recurring-event-end-input',
        showRangeLabels: false,
        touchUi: true,
        responsive: datePickerResponsive, // More info about responsive: https://docs.mobiscroll.com/5-14-1/javascript/eventcalendar#opt-responsive
        onChange: function(args) {
            var date = args.value;

            // update event's start date
            tempEvent.start = date[0];
            tempEvent.end = date[1];
            updateOptionDates();
        }
    });

    document.querySelectorAll('input[name=event-status]').forEach(function(elm) {
        elm.addEventListener('change', function() {
            // update current event's free property
            tempEvent.free = mobiscroll.getInst(freeSegmented).checked;
        });
    });

    deleteButton.addEventListener('click', function() {
        // delete current event on button click
        calendar.removeEvent(oldEvent);
        popup.close();
    });

    repeatType.forEach(function(elm) {
        elm.addEventListener('change', function(ev) {
            updateContent(ev.target.value);
        });
    });

    select = mobiscroll.select('#recurring-event-repeat', {
        data: repeatData, // More info about data: https://docs.mobiscroll.com/5-14-1/javascript/eventcalendar#opt-data
        responsive: selectResponsive, // More info about responsive: https://docs.mobiscroll.com/5-14-1/javascript/eventcalendar#opt-responsive
        onChange: function(event, inst) {
            var d = new Date(tempEvent.start)
            var weekday = d.getDay();
            var monthday = d.getDate();

            // set recurring option
            switch (event.value) {
                case 'daily':
                    tempEvent.recurring = {
                        repeat: 'daily'
                    };
                    break;
                case 'weekly':
                    tempEvent.recurring = {
                        repeat: 'weekly',
                        weekDays: days[weekday].short // More info about weekDays: https://docs.mobiscroll.com/5-14-1/javascript/eventcalendar#opt-weekDays
                    };
                    break;
                case 'monthly':
                    tempEvent.recurring = {
                        repeat: 'monthly',
                        day: monthday
                    };
                    break;
                case 'yearly':
                    tempEvent.recurring = {
                        repeat: 'yearly',
                        day: monthday,
                        month: d.getMonth() + 1
                    };
                    break;
                case 'weekday':
                    tempEvent.recurring = {
                        repeat: 'weekly',
                        weekDays: 'MO,TU,WE,TH,FR' // More info about weekDays: https://docs.mobiscroll.com/5-14-1/javascript/eventcalendar#opt-weekDays
                    };
                    break;
                case 'custom':
                case 'custom-value':
                    updateContent(document.querySelector('input[name=custom-repeat-type]:checked').value);
                    customDate.setVal(d);
                    customRepeat.style.display = 'block';
                    break;
                default:
                    tempEvent.recurring = null;
            }

            showHideCustom();
        }
    });

    monthSelect = mobiscroll.select('#custom-repeat-month', {
        responsive: selectResponsive, // More info about responsive: https://docs.mobiscroll.com/5-14-1/javascript/eventcalendar#opt-responsive
        inputElement: document.getElementById('custom-repeat-month-input'),
        onChange: function(event, inst) {
            populateMonthDays(+event.value, yearDaySelect)
        }
    });

    monthDaySelect = mobiscroll.select('#custom-repeat-month-day', {
        responsive: selectResponsive, // More info about responsive: https://docs.mobiscroll.com/5-14-1/javascript/eventcalendar#opt-responsive
        maxWidth: 80
    });

    yearDaySelect = mobiscroll.select('#custom-repeat-year-day', {
        responsive: selectResponsive, // More info about responsive: https://docs.mobiscroll.com/5-14-1/javascript/eventcalendar#opt-responsive
        maxWidth: 80
    });

    populateMonthDays(1, monthDaySelect);
    populateMonthDays(1, yearDaySelect);
    monthDaySelect.setVal('1');
    yearDaySelect.setVal('1');

    customDate = mobiscroll.datepicker('#custom-repeat-date', {
        controls: ['calendar'],
        display: 'anchored',
        touchUi: false,
        dateFormat: 'YYYY-MM-DD', // More info about dateFormat: https://docs.mobiscroll.com/5-14-1/javascript/eventcalendar#localization-dateFormat
        returnFormat: 'iso8601',
        onOpen: function() {
            document.querySelector('input[name=custom-repeat-condition][value=until]').click();
        }
    });

    until.addEventListener('click', function() {
        document.querySelector('input[name=custom-repeat-condition][value=count]').click();
    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.student', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/MelonNew/resources/views/events/calendar.blade.php ENDPATH**/ ?>