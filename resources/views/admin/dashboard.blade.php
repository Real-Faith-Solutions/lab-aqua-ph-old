@extends('layout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="text-gray-800">Dashboard</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content my-3">
    <div class="container-fluid" style="color: white;">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        @foreach ($data['items'] as $group)
            @foreach ($group['group_values'] as $item)
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box {{ $item['color'] ?? '' }} p-3 mx-1 my-2">
                    <div class="inner">
                        <h3>{{ number_format($item['value']) ?? 0 }}</h3>

                        <p>{{ $item['label'] ?? '' }}</p>
                    </div>
                    {{-- <div class="icon">
                        <i class="fa fa-users"></i>
                    </div> --}}
                    <!--<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>-->
                </div>
                </div>
                <!-- ./col -->
            @endforeach
        @endforeach
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->

<center class="m-5">
    <div>
      <h1 class="text-gray-800">Widgets & Reports</h1>
    </div>
</center>

<!-- CLIENT WIDGETS -->
<section class="content my-3">
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-6 col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">{!! $data['charts'][2]['group_headers'] !!}</h6>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="chartSMPCity"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Area Chart -->
            <div class="col-xl-6 col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">{!! $data['charts'][3]['group_headers'] !!}</h6>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="chartSMPParameter"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CLIENT WIDGETS -->
<section class="content my-3">
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-6 col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">{!! $data['charts'][4]['group_headers'] !!}</h6>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="chartSMPParameterCn"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Area Chart -->
            <div class="col-xl-6 col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">{!! $data['charts'][5]['group_headers'] !!}</h6>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="chartSMPHpcRemarksCity"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CLIENT WIDGETS -->
<section class="content my-3">
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-6 col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">{!! $data['charts'][6]['group_headers'] !!}</h6>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="chartSMPTcRemarksCity"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="content my-3">
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="row">

            <!-- Pie Chart -->
            <div class="col-xl-5 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">{!! $data['charts'][0]['group_headers'] !!}</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie pt-4 pb-2">
                            <canvas id="chartClientTypes"></canvas>
                        </div>
                    </div>
                    @php
                        $array = array('blue', 'green', 'red');
                    @endphp

                    <div class="mt-4 text-center small text-black">
                        <span class="mr-2">                                
                            <i class="fas fa-circle text-info"></i> Walk-In Clients
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-success"></i> Regular Clients
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-primary"></i> Clients
                        </span>
                    </div>

                    {{-- <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    @for ($i = 0; $i < count($data['charts'][0]['labels']); $i++)
                        
                        <div style="color: white;  background-color: {{ $array[$i]; }}; margin: -5px; padding: 2px 3px;">
                            {!! $data['charts'][0]['labels'][$i] !!}: {!! $data['charts'][0]['values'][$i] !!}
                        </div>
                        <div style="margin-left: -70px; font-weight:bold;"></div>
                    @endfor
                    </div> --}}
                </div>
            </div>


            <!-- Area Chart -->
            <div class="col-xl-7 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Total Request</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="chartEarnings"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="content my-3">
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-6 col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Service Volume Overview</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="chartVolume"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-6 col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">{!! $data['charts'][1]['group_headers'] !!}</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie pt-4 pb-2">
                            <canvas id="chartLabAcceptanceStatus"></canvas>
                        </div>
                        <div class="mt-4 text-center small text-black">
                        <span class="mr-2">                                
                            <i class="fas fa-circle text-info"></i> Lab Rejected
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-success"></i> Lab Accepted
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-primary"></i>  Lab Tests
                        </span>
                    </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script type="text/javascript">
    pieChart('chartClientTypes', {!! json_encode($data['charts'][0]['labels']) !!}, {!! json_encode($data['charts'][0]['values']) !!});
    pieChart('chartLabAcceptanceStatus', {!! json_encode($data['charts'][1]['labels']) !!}, {!! json_encode($data['charts'][0]['values']) !!});

    barChart('chartEarnings', ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep' , 'Oct', 'Nov', 'Dec'],
     ['52', '13', '35', '75', '64', '54', '82', '64', '14', '37', '97', '54'], 100, '');
    barChart('chartVolume', ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep' , 'Oct', 'Nov', 'Dec'],
     ['20', '23', '40', '20', '23', '40', '20', '23', '40', '50', '63', '70'], 80, '');
    barChart('chartSMPCity', {!! json_encode($data['charts'][2]['labels']) !!}, {!! json_encode($data['charts'][2]['values']) !!}, {!! json_encode(($data['charts'][2]['values'][0] ?? 0) + 2) !!}, '');
    barChart('chartSMPParameter', {!! json_encode($data['charts'][3]['labels']) !!}, {!! json_encode($data['charts'][3]['values']) !!}, {!! json_encode(($data['charts'][3]['values'][0] ?? 0) + 2) !!}, '');
    barChart('chartSMPParameterCn', {!! json_encode($data['charts'][4]['labels']) !!}, {!! json_encode($data['charts'][4]['values']) !!}, {!! json_encode(($data['charts'][4]['values'][0] ?? 0) + 2) !!}, '');
    barChart('chartSMPHpcRemarksCity', {!! json_encode($data['charts'][5]['labels']) !!}, {!! json_encode($data['charts'][5]['values']) !!}, {!! json_encode(($data['charts'][5]['values'][0] ?? 0) + 2) !!}, '');
    barChart('chartSMPTcRemarksCity', {!! json_encode($data['charts'][6]['labels']) !!}, {!! json_encode($data['charts'][6]['values']) !!}, {!! json_encode(($data['charts'][6]['values'][0] ?? 0) + 2) !!}, '');


</script>
@endsection
