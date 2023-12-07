@extends('alumni.layouts.master')

@section('title') Dashboard @endsection

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
                                    <div class="font-size-16"> Total Alumni
                                    </div>
                                </div>
                            </div>
                            <h4 class="text-white">{!!$jumlahtotal!!} </h4>
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
                            <h4>{!!$jumlahtotalTahunIni!!} </h4>
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

                                    <style>
                                        .carousel-inner {
                                            display: flex;
                                            flex-wrap: nowrap;
                                            overflow-x: auto;
                                        }

                                        .carousel-item {
                                            flex: 0 0 auto;
                                            width: 100%; /* Setiap item menempati 100% lebar */
                                            box-sizing: border-box; /* Hindari adanya padding dan margin memengaruhi lebar item */
                                        }

                                        .carousel-row {
                                            display: flex;
                                            justify-content: space-between;
                                        }
                                    </style>

                                    <div id="imageCarousel" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            @foreach($users->chunk(5) as $key => $chunk)
                                                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                                    <div class="carousel-row">
                                                        @foreach($chunk as $user)
                                                            <div class="col text-center">
                                                                <img src="{{ asset('images/' .$user->foto)}}" alt="" class="avatar-md mx-auto rounded-circle">
                                                                <p style="font-size: 14px;">{{ $user->nama }}</p>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endforeach
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
                                    <h4 class="mb-0"></h4>
                                </div>
                                <div class="col-4">
                                    <div class="text-right">
                                        <div><h4 class="mb-0">{!!$ASGJ!!}</h4>
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
                                            <h4 class="mb-0">{!!$ASG!!}</h4>
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
                                            <h4 class="mb-0">{!!$AWS!!}</h4>
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
                                            <h4 class="mb-0">{!!$ASPURI!!}</h4>
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
                const userData = {!! json_encode($users) !!};
const mappedData = [];
const countBantenUsers = userData.filter(user => user.id_province === 'BANTEN').length;
const RIAU = userData.filter(user => user.id_province === 'RIAU').length;
const countJakarta = userData.filter(user => user.id_province === 'DKI JAKARTA').length;
const SUMATERAUTARA = userData.filter(user => user.id_province === 'SUMATERA UTARA').length;
const SUMATERABARAT = userData.filter(user => user.id_province === 'SUMATERA BARAT').length;
const JAWABARAT = userData.filter(user => user.id_province === 'JAWA BARAT').length;
const ACEH = userData.filter(user => user.id_province === 'NANGGROE ACEH DARUSSALAM (NAD)').length;
const KEPULAUANRIAU = userData.filter(user => user.id_province === 'KEPULAUAN RIAU').length;
const SUMATERASELATAN = userData.filter(user => user.id_province === 'SUMATERA SELATAN').length;
const BANGKABELITUNG = userData.filter(user => user.id_province === 'BANGKA BELITUNG').length;
const LAMPUNG = userData.filter(user => user.id_province === 'LAMPUNG').length;
const JAMBI = userData.filter(user => user.id_province === 'JAMBI').length;
const BENGKULU = userData.filter(user => user.id_province === 'BENGKULU').length;
const JAWATENGAH = userData.filter(user => user.id_province === 'JAWA TENGAH').length;
const DIYOGYAKARTA = userData.filter(user => user.id_province === 'DI YOGYAKARTA').length;
const JAWATIMUR = userData.filter(user => user.id_province === 'JAWA TIMUR').length;
const KALIMANTANSELATAN = userData.filter(user => user.id_province === 'KALIMANTAN SELATAN').length;
const KALIMANTANTENGAH = userData.filter(user => user.id_province === 'KALIMANTAN TENGAH').length;
const KALIMANTANTIMUR = userData.filter(user => user.id_province === 'KALIMANTAN TIMUR').length;
const KALIMANTANUTARA = userData.filter(user => user.id_province === 'KALIMANTAN UTARA').length;
const KALIMANTANBARAT = userData.filter(user => user.id_province === 'KALIMANTAN BARAT').length;
const BALI = userData.filter(user => user.id_province === 'BALI').length;
const NUSATENGGARABARAT = userData.filter(user => user.id_province === 'NUSA TENGGARA BARAT (NTB)').length;
const NUSATENGGARATIMUR = userData.filter(user => user.id_province === 'NUSA TENGGARA TIMUR (NTT)').length;
const SULAWESISELATAN = userData.filter(user => user.id_province === 'SULAWESI SELATAN').length;
const SULAWESIBARAT = userData.filter(user => user.id_province === 'SULAWESI BARAT').length;
const SULAWESITENGGARA = userData.filter(user => user.id_province === 'SULAWESI TENGGARA').length;
const SULAWESITENGAH = userData.filter(user => user.id_province === 'SULAWESI TENGAH').length;
const SULAWESIUTARA = userData.filter(user => user.id_province === 'SULAWESI UTARA').length;
const GORONTALO = userData.filter(user => user.id_province === 'GORONTALO').length;
const MALUKU = userData.filter(user => user.id_province === 'MALUKU').length;
const MALUKUUTARA = userData.filter(user => user.id_province === 'MALUKU UTARA').length;
const PAPUA = userData.filter(user => user.id_province === 'PAPUA').length;
const PAPUABARAT = userData.filter(user => user.id_province === 'PAPUA BARAT').length;



                const data = [
                    ['id-3700', 10], ['id-ac', ACEH], ['id-jt', JAWATENGAH], ['id-be', BENGKULU],
                    ['id-bt', countBantenUsers], ['id-kb', KALIMANTANBARAT], ['id-bb', BANGKABELITUNG], ['id-ba', BALI],
                    ['id-ji', JAWATIMUR], ['id-ks', KALIMANTANSELATAN], ['id-nt', NUSATENGGARATIMUR], ['id-se', SULAWESISELATAN],
                    ['id-kr', KEPULAUANRIAU], ['id-ib', PAPUABARAT], ['id-su', SUMATERAUTARA], ['id-ri', RIAU],
                    ['id-sw', SULAWESIUTARA], ['id-ku', KALIMANTANUTARA], ['id-la', MALUKUUTARA], ['id-sb', SUMATERABARAT],
                    ['id-ma', MALUKU], ['id-nb', NUSATENGGARABARAT], ['id-sg', SULAWESISELATAN], ['id-st', SULAWESITENGAH],
                    ['id-pa', PAPUA], ['id-jr', JAWABARAT ], ['id-ki', KALIMANTANTIMUR], ['id-1024', LAMPUNG],
                    ['id-jk', countJakarta], ['id-go', GORONTALO], ['id-yo',DIYOGYAKARTA ], ['id-sl', SUMATERASELATAN],
                    ['id-sr', SULAWESIBARAT], ['id-ja', JAMBI], ['id-kt', KALIMANTANTENGAH]
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
const userData = {!! json_encode($AlumniPendidikan) !!};
const S1 = userData.filter(user => user.gelar === 'S1').length;
const S2 = userData.filter(user => user.gelar === 'S2').length;
const S3 = userData.filter(user => user.gelar === 'S3').length;
const Guruesar = userData.filter(user => user.gelar === 'Guru Besar').length;

        var options = {
            chart: {
                height: 490,
                type: 'pie',
            },
            series: [S1, S2, S3, Guruesar],
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
