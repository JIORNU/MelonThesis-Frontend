@extends('layouts.teacher')
@section('content')


<head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.2/dist/chart.min.js"></script>
</head>

<div class="container">
    <div class="row mb-5 mt-5">
        <!-- left content -->
        <div class="col-2 ml-5">

            <div class="dropdown">
                <select class="test" name="species" id="species" style="width: 100%">
                    @foreach ($project as $item)
                    <option class="opt" value="{{$item->projectname}}">{{$item->projectname}}</option>
                    @endforeach

                </select>
            </div>
        </div>

        <div class="col-3">
            <h5 >พันเธุ์เมลอน : <label for="" class="speciesname1"></label></h5>
        </div>
        <!-- left content ./ -->
        <div class="col-1">

        </div>
        <!-- right content -->
        <div class="col-2">

            <div class="dropdown">
                <select class="test1" name="species" id="species" style="width: 100%">
                    @foreach ($project as $item)
                    <option class="opt" value="{{$item->projectname}}">{{$item->projectname}}</option>
                    @endforeach

                </select>
            </div>
        </div>

        <div class="col-3">
            <h5 >พันเธุ์เมลอน : <label for="" class="speciesname2"></label></h5>
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

    function chart1() {
        var data = $('.test').val()
        var species = @json($speciesarr);
        $(".speciesname1").empty().append(species[data])
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
                console.log(datagraph)
                const ctx1 = document.getElementById('myChart1').getContext('2d');
                const myChart1 = new Chart(ctx1, {
                    type: 'line',
                    data: {
                        labels: datagraph[1],
                        datasets: [{
                            label: 'ความสูงต้น กราฟ 1',
                            data: datagraph[0],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                         
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                       
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

    function chart2() {
        var data = $('.test1').val()
        var species = @json($speciesarr);
        $(".speciesname2").empty().append(species[data])
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
                console.log(data)
                const ctx2 = document.getElementById('myChart2').getContext('2d');
                const myChart2 = new Chart(ctx2, {
                    type: 'line',
                    data: {
                        labels: datagraph2[1],
                        datasets: [{
                            label: 'ความสูงต้น กราฟ 2',
                            data: datagraph2[0],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',

                            ],
                            borderColor: [


                                'rgba(255, 206, 86, 1)',

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
    $(document).on('change', ".test", function() {
        $('#myChart1').remove();
        $('.chart1').append('<canvas id="myChart1" width="400" height="400"></canvas>');
        chart1()


    })
    $(document).on('change', ".test1", function() {
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

</style>
@endsection