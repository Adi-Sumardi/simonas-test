@extends('alumni.layouts.master')

@section('css')
    <link href="{{ URL::asset('/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')

    @component('alumni.common-components.breadcrumb')
         @slot('title') Dashboard   @endslot
         @slot('title_li') Welcome to SIMONAS Dashboard   @endslot
     @endcomponent

    <div class="row">
        <div class="col-8">
            <h5>Overview</h5>
            <div class="row">
                <div class="col-6">
                    <div class="card" style="background: linear-gradient(135deg, #007BFF, #0056b3);">
                        <div class="card-body text-white">
                            <div class="media">
                                <div class="media-body">
                                    <div class="font-size-16">Total Alumni</div>
                                </div>
                            </div>
                            <h4 class="text-white">100 tes</h4>
                            <div class="row">
                                <div class="col-7">
                                    <p class="mb-0"><span class="text-success mr-2">  <i class="mdi mdi-arrow-up"></i> </span></p>
                                </div>
                                <div class="col-5 align-self-center">
                                    <div class="progress progress-sm">
                                        <div class="" role="progressbar" style="width: 62%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <div class="font-size-16">Alumni Tahun ini</div>
                                </div>
                            </div>
                            <h4>100</h4>
                            <div class="row">
                                <div class="col-7">
                                    <p class="mb-0"><span class="text-success mr-2">  <i class="mdi mdi-arrow-up"></i> </span></p>
                                </div>
                                <div class="col-5 align-self-center">
                                    <div class="progress progress-sm">
                                        <div class="" role="progressbar" style="width: 62%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <div class="font-size-16">Alumni</div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-12">
                                    <div id="imageCarousel" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="row">
                                                    <div class="col text-center"> <!-- Menggunakan class "text-center" di sini -->
                                                        <img src="images/users/avatar-2.jpg" alt="" class="avatar-md mx-auto rounded-circle">
                                                        <p style="font-size: 14px;">Nama 1</p>
                                                    </div>
                                                    <div class="col text-center">
                                                        <img src="images/users/avatar-2.jpg" alt="" class="avatar-md mx-auto rounded-circle">
                                                        <p style="font-size: 14px;">Nama 2</p>
                                                    </div>
                                                    <div class="col text-center">
                                                        <img src="images/users/avatar-2.jpg" alt="" class="avatar-md mx-auto rounded-circle">
                                                        <p style="font-size: 14px;">Nama 3</p>
                                                    </div>
                                                    <div class="col text-center">
                                                        <img src="images/users/avatar-2.jpg" alt="" class="avatar-md mx-auto rounded-circle">
                                                        <p style="font-size: 14px;">Nama 4</p>
                                                    </div>
                                                    <div class="col text-center">
                                                        <img src="images/users/avatar-2.jpg" alt="" class="avatar-md mx-auto rounded-circle">
                                                        <p style="font-size: 14px;">Nama 5</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Tambahkan item-item tambahan sesuai kebutuhan -->
                                        </div>
                                        <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-4">
            <h5>Total Alumni</h5>
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body">
                            <h4 class="card-title mb-4 mt-2"> </h4>
                        </div>
                    </div>

                    <div>
                        <div class="pb-3 border-bottom ">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <p>ASGJ</p>
                                    <h4 class="mb-0"> </h4>
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
                                    <p>ASG</p>
                                    <h4 class="mb-0"> </h4>
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
                                    <p class="mb-2">AWS</p>
                                    <h4 class="mb-0"> </h4>
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
                                    <p class="mb-2">ASPURI</p>

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
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Statistik Lulusan per Tahun</h4>

                    <div id="column_chart" class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="container" style="height: 500px; min-width: 310px; max-width: 800px; margin: 0 auto;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">PENDIDIKAN</h4>

                    <div id="pendidikan" class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Sebaran wilayah</h4>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Wilayah</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>11</td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>13</td>
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>14</td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>15</td>
                            </tr>
                            <tr>
                                <td>Herrod Chandler</td>
                                <td>16</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Kelompok Pekerjaan</h4>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;"
                        class="table table-hover mb-0">
                        <thead>
                            <tr style="background: linear-gradient(135deg, #007BFF, #0056b3);">
                                <th style="color: white; font-weight: bold; text-align: center;">Jenis Pekerjaan</th>
                                <th style="color: white; font-weight: bold; text-align: center;">Jumlah</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>11</td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>13</td>
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>14</td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>15</td>
                            </tr>
                            <tr>
                                <td>Herrod Chandler</td>
                                <td>16</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Tabel Usia</h4>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr style="background: linear-gradient(135deg, #007BFF, #0056b3);">
                                <th style="color: white; font-weight: bold; text-align: center;">22-30</th>
                                <th style="color: white; font-weight: bold; text-align: center;">30-35</th>
                                <th style="color: white; font-weight: bold; text-align: center;">35-40</th>
                                <th style="color: white; font-weight: bold; text-align: center;">40-50</th>
                                <th style="color: white; font-weight: bold; text-align: center;">50-60</th>
                                <th style="color: white; font-weight: bold; text-align: center;">60-70</th>
                                <th style="color: white; font-weight: bold; text-align: center;">diatas 70</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td style="text-align: center;">10</td>
                                <td style="text-align: center;">32</td>
                                <td style="text-align: center;">20</td>
                                <td style="text-align: center;">17</td>
                                <td style="text-align: center;">20</td>
                                <td style="text-align: center;">23</td>
                                <td style="text-align: center;">1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection

@section('script')
        <!-- plugin js -->
        <script src="{{ URL::asset('libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Required datatable js -->
        <script src="{{ URL::asset('/libs/datatables/datatables.min.js')}}"></script>
        <script src="{{ URL::asset('/libs/jszip/jszip.min.js')}}"></script>
        <script src="{{ URL::asset('/libs/pdfmake/pdfmake.min.js')}}"></script>

        <!-- Datatable init js -->
        <script src="{{ URL::asset('/js/pages/datatables.init.js')}}"></script>

        <!-- jquery.vectormap map -->
        <script src="{{ URL::asset('libs/jquery-vectormap/jquery-vectormap.min.js')}}"></script>

        <!-- Calendar init -->
        <script src="{{ URL::asset('js/pages/dashboard.init.js')}}"></script>

        <!-- apexcharts -->
        <script src="{{URL::asset('/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- apexcharts init -->
        <script src="{{URL::asset('/js/pages/apexcharts.init.js')}}"></script>

        <script src="https://code.highcharts.com/maps/highmaps.js"></script>
        <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            (async () => {
                const topology = await fetch(
                    'https://code.highcharts.com/mapdata/countries/id/id-all.topo.json'
                ).then(response => response.json());

                const data = [
                    ['id-3700', 10], ['id-ac', 11], ['id-jt', 12], ['id-be', 13],
                    ['id-bt', 14], ['id-kb', 15], ['id-bb', 16], ['id-ba', 17],
                    ['id-ji', 18], ['id-ks', 19], ['id-nt', 20], ['id-se', 21],
                    ['id-kr', 22], ['id-ib', 23], ['id-su', 24], ['id-ri', 25],
                    ['id-sw', 26], ['id-ku', 27], ['id-la', 28], ['id-sb', 29],
                    ['id-ma', 30], ['id-nb', 31], ['id-sg', 32], ['id-st', 33],
                    ['id-pa', 34], ['id-jr', 35], ['id-ki', 36], ['id-1024', 37],
                    ['id-jk', 38], ['id-go', 39], ['id-yo', 40], ['id-sl', 41],
                    ['id-sr', 42], ['id-ja', 43], ['id-kt', 44]
                ];

                Highcharts.mapChart('container', {
                    chart: {
                        map: topology
                    },
                    title: {
                        text: 'Sebaran Wilayah'
                    },
                    subtitle: {
                        text: 'Source map: <a href="http://code.highcharts.com/mapdata/countries/id/id-all.topo.json">Indonesia</a>'
                    },
                    mapNavigation: {
                        enabled: true,
                        buttonOptions: {
                            verticalAlign: 'bottom'
                        }
                    },
                    colorAxis: {
                        min: 0
                    },
                    series: [{
                        data: data,
                        name: 'Data Alumni',
                        states: {
                            hover: {
                                color: '#BADA55'
                            }
                        },
                        dataLabels: {
                            enabled: true,
                            format: '{point.name}'
                        }
                    }]
                });
            })();
        });
    </script>


    <script>
        // pie chart total
        var options = {
            chart: {
                height: 490,
                type: 'pie',
            },
            series: [120, 57, 35, 25],
            labels: ["S1", "S2", "S3", "Guru Besar"],
            colors: ["#A8E9FF", "#5BD6FF", "#00BBF9", "#0089B7"],
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
            document.querySelector("#pendidikan"),
            options
        );

        chart.render();
    </script>

@endsection
