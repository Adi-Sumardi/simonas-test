@extends('super.layouts.master')

@section('title') Dashboard @endsection

@section('content')

    @component('super.common-components.breadcrumb')
         @slot('title') Dashboard   @endslot
         @slot('title_li') Welcome to SIMONAS Dashboard   @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="avatar-sm font-size-20 mr-3">
                            <span class="avatar-title bg-soft-info text-primary rounded">
                                {{$jumlah_warga_asgj}}
                                </span>
                        </div>
                        <div class="media-body">
                            <h4 class="card-title mb-4 mt-2">DATA WARGA ASGJ</h4>
                        </div>
                    </div>

                    <div>
                        <div class="pb-3 border-bottom mt-2">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <p class="mb-2">Warga Percobaan</p>
                                    <h4 class="mb-0">{{$jumlah_warga_percobaan_asgj}}</h4>
                                </div>
                                <div class="col-4">
                                    <div class="text-right">
                                        <div>
                                            <i class="mdi mdi-account-supervisor-outline text-secondary ml-1"></i>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-3 border-bottom mt-2">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <p class="mb-2">Pengurus</p>
                                    <h4 class="mb-0">{{$jumlah_warga_pengurus_asgj}}</h4>
                                </div>
                                <div class="col-4">
                                    <div class="text-right">
                                        <div>
                                            <i class="mdi mdi-account-supervisor-outline text-secondary ml-1"></i>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-3 border-bottom mt-2">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <p class="mb-2">Warga Tetap</p>
                                    <h4 class="mb-0">{{$jumlah_warga_tetap_asgj}}</h4>
                                </div>
                                <div class="col-4">
                                    <div class="text-right">
                                        <div>
                                            <i class="mdi mdi-account-supervisor-outline text-secondary ml-1"></i>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-3 border-bottom mt-2">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <p class="mb-2">Kapasitas Ideal</p>

                                </div>
                                <div class="col-4">
                                    <div class="text-right">
                                        <div>
                                            <h4 class="mb-0">16</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3">
            <div class="card">
                <div class="card-body">

                    <div class="media">
                        <div class="avatar-sm font-size-20 mr-3">
                            <span class="avatar-title bg-soft-info text-primary rounded">
                                    {{$jumlah_warga_asg}}
                                </span>
                        </div>
                        <div class="media-body">
                            <h4 class="card-title mb-4 mt-2">DATA WARGA ASG</h4>
                        </div>
                    </div>

                    <div>
                        <div class="pb-3 border-bottom mt-2">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <p class="mb-2">Warga Percobaan</p>
                                    <h4 class="mb-0">{{$jumlah_warga_percobaan_asg}}</h4>
                                </div>
                                <div class="col-4">
                                    <div class="text-right">
                                        <div>
                                            <i class="mdi mdi-account-supervisor-outline text-secondary ml-1"></i>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-3 border-bottom mt-2">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <p class="mb-2">Pengurus</p>
                                    <h4 class="mb-0">{{$jumlah_warga_pengurus_asg}}</h4>
                                </div>
                                <div class="col-4">
                                    <div class="text-right">
                                        <div>
                                            <i class="mdi mdi-account-supervisor-outline text-secondary ml-1"></i>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-3 border-bottom mt-2">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <p class="mb-2">Warga Tetap</p>
                                    <h4 class="mb-0">{{$jumlah_warga_tetap_asg}}</h4>
                                </div>
                                <div class="col-4">
                                    <div class="text-right">
                                        <div>
                                            <i class="mdi mdi-account-supervisor-outline text-secondary ml-1"></i>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-3 border-bottom mt-2">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <p class="mb-2">Kapasitas Ideal</p>

                                </div>
                                <div class="col-4">
                                    <div class="text-right">
                                        <div>
                                            <h4 class="mb-0">36</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3">
            <div class="card">
                <div class="card-body">

                    <div class="media">
                        <div class="avatar-sm font-size-20 mr-3">
                            <span class="avatar-title bg-soft-info text-primary rounded">
                                    {{$jumlah_warga_aws}}
                                </span>
                        </div>
                        <div class="media-body">
                            <h4 class="card-title mb-4 mt-2">DATA WARGA AWS</h4>
                        </div>
                    </div>

                    <div>
                        <div class="pb-3 border-bottom mt-2">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <p class="mb-2">Warga Percobaan</p>
                                    <h4 class="mb-0">{{$jumlah_warga_percobaan_aws}}</h4>
                                </div>
                                <div class="col-4">
                                    <div class="text-right">
                                        <div>
                                            <i class="mdi mdi-account-supervisor-outline text-secondary ml-1"></i>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-3 border-bottom mt-2">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <p class="mb-2">Pengurus</p>
                                    <h4 class="mb-0">{{$jumlah_warga_pengurus_aws}}</h4>
                                </div>
                                <div class="col-4">
                                    <div class="text-right">
                                        <div>
                                            <i class="mdi mdi-account-supervisor-outline text-secondary ml-1"></i>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-3 border-bottom mt-2">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <p class="mb-2">Warga Tetap</p>
                                    <h4 class="mb-0">{{$jumlah_warga_tetap_aws}}</h4>
                                </div>
                                <div class="col-4">
                                    <div class="text-right">
                                        <div>
                                            <i class="mdi mdi-account-supervisor-outline text-secondary ml-1"></i>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-3 border-bottom mt-2">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <p class="mb-2">Kapasitas Ideal</p>

                                </div>
                                <div class="col-4">
                                    <div class="text-right">
                                        <div>
                                            <h4 class="mb-0">32</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3">
            <div class="card">
                <div class="card-body">

                    <div class="media">
                        <div class="avatar-sm font-size-20 mr-3">
                            <span class="avatar-title bg-soft-info text-primary rounded">
                                    {{$jumlah_warga_aspuri}}
                                </span>
                        </div>
                        <div class="media-body">
                            <h4 class="card-title mb-4 mt-2">DATA WARGA ASPURI</h4>
                        </div>
                    </div>

                    <div>
                        <div class="pb-3 border-bottom mt-2">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <p class="mb-2">Warga Percobaan</p>
                                    <h4 class="mb-0">{{$jumlah_warga_percobaan_aspuri}}</h4>
                                </div>
                                <div class="col-4">
                                    <div class="text-right">
                                        <div>
                                            <i class="mdi mdi-account-supervisor-outline text-secondary ml-1"></i>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-3 border-bottom mt-2">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <p class="mb-2">Pengurus</p>
                                    <h4 class="mb-0">{{$jumlah_warga_pengurus_aspuri}}</h4>
                                </div>
                                <div class="col-4">
                                    <div class="text-right">
                                        <div>
                                            <i class="mdi mdi-account-supervisor-outline text-secondary ml-1"></i>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-3 border-bottom mt-2">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <p class="mb-2">Warga Tetap</p>
                                    <h4 class="mb-0">{{$jumlah_warga_tetap_aspuri}}</h4>
                                </div>
                                <div class="col-4">
                                    <div class="text-right">
                                        <div>
                                            <i class="mdi mdi-account-supervisor-outline text-secondary ml-1"></i>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-3 border-bottom mt-2">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <p class="mb-2">Kapasitas Ideal</p>

                                </div>
                                <div class="col-4">
                                    <div class="text-right">
                                        <div>
                                            <h4 class="mb-0">20</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Statistik </h4>
                        <div id="statis_tikwarga" class="apex-charts" dir="ltr"></div>
                    </div>
                </div>
            </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Data Warga Asrama</h4>

                    <div id="data_warga" class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Data Alumni Asrama</h4>

                    <div id="data_alumni" class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Data Warga Asrama</h4>

                    <div id="data_warga" class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Data Alumni Asrama</h4>

                    <div id="data_alumni" class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Kegiatan Asrama Terakhir:</h4>
                    <div style="overflow: scroll">

                        <div style="overflow: scroll">
                            <div class="table-responsive">
                                <table class="table table-centered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Waktu</th>
                                            <th scope="col">Kegiatan</th>
                                            <th scope="col">Penyelenggara</th>
                                            <th scope="col">Tempat</th>
                                            <th scope="col">Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_kegiatan as $item)

                                        <tr>
                                            <td>{{date('d-m-Y', strtotime($item->waktu))}}</td>
                                            <td>{{$item->nama_kegiatan}}</td>
                                            <td>{{$item->penyelenggara}}</td>
                                            <td>{{$item->tempat}}</td>
                                            <td>{{$item->keterangan}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$data_kegiatan->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection

@section('script')
    <!-- plugin js -->
    <script src="{{ URL::asset('libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- jquery.vectormap map -->
    <script src="{{ URL::asset('libs/jquery-vectormap/jquery-vectormap.min.js')}}"></script>

    <!-- Calendar init -->
    <script src="{{ URL::asset('js/pages/dashboard.init.js')}}"></script>

    <!-- apexcharts -->
    <script src="{{URL::asset('/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- apexcharts init -->
    <script src="{{URL::asset('/js/pages/apexcharts.init.js')}}"></script>

    <script>
        // Donut chart Data Alumni

        var options = {
            chart: {
                height: 320,
                type: 'donut',
            },
            series: [{{$data_alumni_asgj}}, {{$data_alumni_asg}}, {{$data_alumni_aws}}, {{$data_alumni_aspuri}}],
            labels: ["Alumni ASGJ", "Alumni ASG", "Alumni AWS", "Alumni ASPURI"],
            colors: ["#45cb85", "#3b5de7","#ff715b", "#0caadc"],
            legend: {
                show: true,
                position: 'bottom',
                horizontalAlign: 'center',
                verticalAlign: 'middle',
                floating: false,
                fontSize: '14px',
                offsetX: 0,
            },
            responsive: [{
                breakpoint: 600,
                options: {
                    chart: {
                        height: 240
                    },
                    legend: {
                        show: false
                    },
                }
            }]

        }

        var chart = new ApexCharts(
            document.querySelector("#data_alumni"),
            options
        );

        chart.render();
    </script>

    <script>
        // pie chart total
        var options = {
            chart: {
                height: 320,
                type: 'pie',
            },
            series: [{{ $jumlah_warga_asgj }}, {{ $jumlah_warga_asg }}, {{ $jumlah_warga_aws }}, {{ $jumlah_warga_aspuri }}],
            labels: ["Warga ASGJ", "Warga ASG", "Warga AWS", "Warga ASPURI"],
            colors: ["#45cb85", "#3b5de7", "#ff715b", "#eeb902"],
            legend: {
                show: true,
                position: 'bottom',
                horizontalAlign: 'center',
                verticalAlign: 'middle',
                floating: false,
                fontSize: '14px',
                offsetX: 0,
            },
            responsive: [{
                breakpoint: 600,
                options: {
                    chart: {
                        height: 240
                    },
                    legend: {
                        show: false
                    },
                }
            }]

        }

        var chart = new ApexCharts(
            document.querySelector("#data_warga"),
            options
        );

        chart.render();
    </script>
@endsection
