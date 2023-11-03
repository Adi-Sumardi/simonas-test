@extends('super.layouts.master')

@section('title')
    List Alumni Asrama
@endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @component('super.common-components.breadcrumb')
        @slot('title')
        List Alumni Asrama
        @endslot
        @slot('title_li')
        List Alumni Asrama
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-sm-6 col-md-4 col-xl-3">
            <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title mt-0">Import Data Asset</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('super-alumni-asrama-import')}}" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="file" name="file" required="required">
                                    </div>
                                </div>
                                <div class="button-items d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="submit" class="btn btn-primary" id="sa-position">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="button-items d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{ route('super-alumni-asrama-create')}}" type="button"
                            class="btn btn-outline-primary waves-effect waves-light">
                            <i class="mdi mdi-plus-thick font-size-16 align-middle mr-2"></i> Add Data
                        </a>
                        <a href="{{ route('super-alumni-asrama-export')}}" type="button"
                            class="btn btn-outline-secondary waves-effect waves-light">
                            <i class="mdi mdi-file-export-outline font-size-16 align-middle mr-2"></i> Export Data
                        </a>
                        <button type="button"
                            class="btn btn-outline-success waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center">
                            <i class="mdi mdi-file-import-outline font-size-16 align-middle mr-2" data-toggle="modal" data-target=".bs-example-modal-center"></i> Import Data
                        </button>
                        {{--  <a href="{{ route('super-alumni-asrama-import')}}" type="button"
                            class="btn btn-outline-success waves-effect waves-light">
                            <i class="mdi mdi-file-import-outline font-size-16 align-middle mr-2"></i> Import Data
                        </a>  --}}
                    </div>
                    <br>

                    <h4 class="card-title">List Alumni Asrama</h4>
                    <div style="overflow: scroll">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Foto</th>
                                    <th>Nama</th>
                                    <th>Asrama</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alumnis as $alumni)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td><img src="{{ url ('/uploads/avatars/'.$alumni->avatar)}}" class="avatar img-circle" style="width:auto; height:50px;"></td>
                                        <td>{{$alumni->nama}}</td>
                                        <td>{{$alumni->asal_asrama}}</td>
                                        <td>
                                            <a href="/super-alumni-asrama-detail/{{ $alumni->id }}"
                                                class="btn btn-primary btn-action" data-toggle="tooltip" data-placement="top" title="Detail"><i
                                                    class="far fa-eye"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{--  <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Foto</th>
                                    <th>Nama</th>
                                    <th>Asrama</th>
                                    <th>tgl masuk</th>
                                    <th>tgl keluar</th>
                                    <th>alamat sekarang</th>
                                    <th>pekerjaan</th>
                                    <th>universitas</th>
                                    <th>fakultas</th>
                                    <th>prodi</th>
                                    <th>angkatan</th>
                                    <th>tgl seminar</th>
                                    <th>tgl skripsi</th>
                                    <th>tgl wisuda</th>
                                    <th>nik</th>
                                    <th>alamat asal</th>
                                    <th>no telp</th>
                                    <th>asal sekolah</th>
                                    <th>tgl lahir</th>
                                    <th>prestasi</th>
                                    <th>organisasi</th>
                                    <th>nama ayah</th>
                                    <th>nama ibu</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alumnis as $alumni)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td><img src="{{ url ('/uploads/avatars/'.$alumni->avatar)}}" class="avatar img-circle" style="width:auto; height:50px;"></td>
                                        <td>{{$alumni->name}}</td>
                                        <td>{{$alumni->asrama}}</td>
                                        <td>{{$alumni->tgl_masuk}}</td>
                                        <td>{{$alumni->tgl_keluar}}</td>
                                        <td>{{$alumni->alamat_sekarang}}</td>
                                        <td>{{$alumni->pekerjaan}}</td>
                                        <td>{{$alumni->universitas}}</td>
                                        <td>{{$alumni->fakultas}}</td>
                                        <td>{{$alumni->prodi}}</td>
                                        <td>{{$alumni->angkatan}}</td>
                                        <td>{{$alumni->tgl_seminar}}</td>
                                        <td>{{$alumni->tgl_skripsi}}</td>
                                        <td>{{$alumni->tgl_wisuda}}</td>
                                        <td>{{$alumni->nik}}</td>
                                        <td>{{$alumni->alamat}}</td>
                                        <td>{{$alumni->no_telp}}</td>
                                        <td>{{$alumni->asal_sekolah}}</td>
                                        <td>{{$alumni->tgl_lahir}}</td>
                                        <td>{{$alumni->prestasi}}</td>
                                        <td>{{$alumni->organisasi}}</td>
                                        <td>{{$alumni->nama_ayah}}</td>
                                        <td>{{$alumni->nama_ibu}}</td>
                                        <td>
                                            <a href="/super-alumni-asrama-detail/{{ $alumni->id }}"
                                                class="btn btn-primary btn-action" data-toggle="tooltip" data-placement="top" title="Detail"><i
                                                    class="far fa-eye"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>  --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
@endsection

@section('script')
    <!-- plugin js -->
    <script src="{{ URL::asset('libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- jquery.vectormap map -->
    <script src="{{ URL::asset('libs/jquery-vectormap/jquery-vectormap.min.js') }}"></script>

    <!-- Calendar init -->
    <script src="{{ URL::asset('js/pages/dashboard.init.js') }}"></script>

    <!-- Sweet Alerts js -->
    <script src="{{ URL::asset('/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- Sweet alert init js-->
    <script src="{{ URL::asset('/js/pages/sweet-alerts.init.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ URL::asset('/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/libs/pdfmake/pdfmake.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ URL::asset('/js/pages/datatables.init.js') }}"></script>
@endsection
