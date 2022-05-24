
<?php $__env->startSection('content'); ?>

<head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.2/dist/chart.min.js"></script>
</head>

<div class="container">
    <div class="row mb-5">
        <!-- left content -->
        <div class="col-2 ml-5">

            <div class="dropdown">
                <select class="test" name="species" id="species" style="width: 100%">
                  <?php $__currentLoopData = $project; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option class="opt"  value="<?php echo e($item->projectname); ?>"><?php echo e($item->projectname); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                </select>
            </div>
        </div>

        <div class="col-4">
            
        </div>
        <!-- left content ./ -->

        <!-- right content -->
        <div class="col-2">

            <div class="dropdown">
                <select class="test1" name="species" id="species" style="width: 100%">
                  <?php $__currentLoopData = $project; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option class="opt"  value="<?php echo e($item->projectname); ?>"><?php echo e($item->projectname); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                </select>
            </div>
        </div>

        <div class="col-2">
        <div class="dropdown">
                <select name="species" id="species" style="width: 100%">
                <option value="" disabled selected>เลือกเดือนที่เพาะปลูก</option>
                    <!-- <option value="ไข่ทองคำ">ไข่ทองคำ</option>
                    <option value="กรีเนต(Green net Melon)">กรีเนต(Green net Melon)</option>
                    <option value="แตงฮามิกัว(Hamigua melon)">แตงฮามิกัว(Hamigua melon)</option>
                    <option value="อินทนนท์(Inthanon RZ F1)">อินทนนท์(Inthanon RZ F1)</option> -->
                </select>

            </div>
        </div>
        <!-- end right content -->
    </div>
    <div class="row">
        <div class="col-6 chart1">
            <canvas id="myChart1" width="400" height="400"></canvas>
        </div>
        <div class="col-6 chart2">
            <canvas id="myChart2" width="400" height="400"></canvas>
        </div>
    </div>
</div>
<script>

var datagraph
var datagraph2
function chart1()
{
    var data = $('.test').val()
    $.ajax({
        type: "Get",
        async: false,
        url: "graphdata",
        data: {
            projectname: data
        },
        // datatype: 'json',
        success: function(data) {
         datagraph = Object.values(data)
         const ctx1 = document.getElementById('myChart1').getContext('2d');
       const myChart1 = new Chart(ctx1, {
    type: 'bar',
    data: {
        labels: datagraph[1]
        datasets: [{
            label: 'ต้น1',
            data: datagraph[0],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },

    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
         


        }
    });
}
function chart2()
{
    var data = $('.test1').val()
    $.ajax({
        type: "Get",
        async: false,
        url: "graphdata",
        data: {
            projectname: data
        },
        // datatype: 'json',
        success: function(data) {
        datagraph2 = Object.values(data)
         const ctx2 = document.getElementById('myChart2').getContext('2d');
       const myChart2 = new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: datagraph2[1]
        datasets: [{
            label: 'ต้น1',
            data: datagraph2[0],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },

    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
         


        }
    });
}

chart1()
chart2()
$(document).on('change',".test",function(){
    $('#myChart1').remove();
$('.chart1').append('<canvas id="myChart1" width="400" height="400"></canvas>');
    chart1()
   
  
})
$(document).on('change',".test1",function(){
    $('#myChart2').remove();
$('.chart2').append('<canvas id="myChart2" width="400" height="400"></canvas>');
    chart2()
   
  
})
    // var datanum = []
    // console.log(datagraph)
    //Chart-1

 
    // Charts-2
    // const ctx2 = document.getElementById('myChart2').getContext('2d');
    // const myChart2 = new Chart(ctx2, {
    //     type: 'bar',
    //     data: {
    //         labels: ['ความสูงต้น (ซม.)', 'ความกว้างใบ (ซม.)', 'จำนวนข้อ (ข้อ)', 'คลอโรฟิลล์ (ML)', 'จำนวนใบ (ใบ)', 'ความกว้างผล (ซม.)', 'ค่าความหวาน (บริกซ์)', 'น้ำหนักผล (กก.)'],
    //         datasets: [{
    //             label: 'ต้น2',
    //             data: [12, 19, 3, 0.5, 2, 3],
    //             backgroundColor: [
    //                 'rgba(255, 99, 132, 0.2)',
    //                 'rgba(54, 162, 235, 0.2)',
    //                 'rgba(255, 206, 86, 0.2)',
    //                 'rgba(75, 192, 192, 0.2)',
    //                 'rgba(153, 102, 255, 0.2)',
    //                 'rgba(255, 159, 64, 0.2)'
    //             ],
    //             borderColor: [
    //                 'rgba(255, 99, 132, 1)',
    //                 'rgba(54, 162, 235, 1)',
    //                 'rgba(255, 206, 86, 1)',
    //                 'rgba(75, 192, 192, 1)',
    //                 'rgba(153, 102, 255, 1)',
    //                 'rgba(255, 159, 64, 1)'
    //             ],
    //             borderWidth: 1
    //         }]
    //     },

    //     options: {
    //         scales: {
    //             y: {
    //                 beginAtZero: true
    //             }
    //         }
    //     }
    // });
</script>
<style scoped>
    .wrapper {
        margin-top: 7rem;
        height: 75vh;
    }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.student', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/MelonNew/resources/views/student/stdgraph.blade.php ENDPATH**/ ?>