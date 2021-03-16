@extends('backend.layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{$count_day}}</h3>

                    <p>Thống kê yêu cầu theo ngày</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>{{$count_month}}</h3>

                    <p>Thống kê yêu cầu theo tháng</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-8">
            <div id="chart_div" style="  "></div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        {{--google.charts.load('current', {'packages':['corechart']});--}}
        {{--google.charts.setOnLoadCallback(drawChart);--}}

        {{--function drawChart() {--}}

        {{--    var data = google.visualization.arrayToDataTable([--}}
        {{--        {!! $count !!}--}}
        {{--    ]);--}}

        {{--    var options = {--}}
        {{--        title: 'My Daily Activities'--}}
        {{--    };--}}

        {{--    var chart = new google.visualization.PieChart(document.getElementById('piechart'));--}}

        {{--    chart.draw(data, options);--}}
        {{--}--}}

        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawVisualization);

        function drawVisualization() {
            // Some raw data (not necessarily accurate)
            var data = google.visualization.arrayToDataTable([

                {!! $count !!}

            ]);

            var options = {
                title : 'Biểu đồ loại sản phẩm được yêu cầu trong tháng ',
                vAxis: {title: 'Số lượng'},
                hAxis: {title: 'Tháng'},
                seriesType: 'bars',
                // series: {5: {type: 'line'}}
            };

            var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
@endsection

