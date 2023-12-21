@extends('mahasiswa.layouts.master-layouts')

@section('title')
    Daftar Kegiatan Asrama
@endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')
    @component('mahasiswa.common-components.breadcrumb')
        @slot('title')
            Daftar Kegiatan Asrama
        @endslot
        @slot('title_li')
            Daftar Kegiatan Asrama
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="button-items d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{ route('mahasiswa-kegiatan-asrama-create')}}" type="button"
                            class="btn btn-outline-primary waves-effect waves-light">
                            <i class="mdi mdi-plus-thick font-size-16 align-middle mr-2"></i> Add Data
                        </a>
                    </div>
                    <br>

                    <h4 class="card-title">Daftar Kegiatan Asrama</h4>
                    <br>
                    <div style="overflow: scroll">
                        <table class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Kegiatan</th>
                                    <th>Penyelenggara</th>
                                    <th>Waktu</th>
                                    <th>Tempat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kegiatans as $index => $kegiatan)
                                    <tr>
                                        <td>{{ $index + $kegiatans->firstItem() }}</td>
                                        <td>{{ $kegiatan->nama_kegiatan }}</td>
                                        <td>{{ $kegiatan->penyelenggara }}</td>
                                        <td>{{ date('d-m-Y', strtotime($kegiatan->waktu)) }}</td>
                                        <td>{{ $kegiatan->tempat }}</td>
                                        <td>
                                            <form action="/mahasiswa-kegiatan-asrama-delete/{{ $kegiatan->id }}"
                                                method="POST">
                                                <a href="/mahasiswa-kegiatan-asrama-detail/{{ $kegiatan->id }}"
                                                    class="btn btn-primary btn-action" data-toggle="tooltip" data-placement="top" title="Detail"><i
                                                        class="far fa-eye"></i></a>
                                                {{--  <a href="/mahasiswa-kegiatan-asrama-edit/{{ $kegiatan->id }}"
                                                    class="btn btn-secondary btn-action" data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                        class="fas fa-pencil-alt"></i></a>  --}}
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-action" data-toggle="tooltip" data-placement="top" title="Delete"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        Jumlah Data: {{$kegiatans->total()}}
                        <br/>
                        <br/>
                        {{$kegiatans->links()}}
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <div id='calendar'></div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="form-action-update" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form id="form-action" method="PUT">
                @csrf

                <div class="modal-content">
                    <div class="modal-header">
                        <input type="hidden" name="event_id" id="event_id" value="">
                        <h5 class="modal-title">KEGIATAN ASRAMA</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <h5>NAMA KEGIATAN</h5>
                                    <input type="text" name="NAMA_KEGIATAN" readonly>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <h5>TUJUAN</h5>
                                    <input type="text" name="TUJUAN" readonly  >
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <h5>PENYELENGGARA</h5>
                                    <input type="text" name="PENYELENGGARA" readonly>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <h5>JENIS KEGIATAN</h5>
                                    <input type="text" name="JENIS_KEGIATAN" readonly>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <h5>TANGGAL</h5>
                                    <input type="text" name="WAKTU" readonly>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <h5>KETERANGAN</h5>
                                    <input type="text" name="KETERANGAN" readonly  class="form-control datepicker">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <img type="text" name="fotonya" src="" width="200" height="auto">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    {{-- <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" name="delete" role="switch" id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Delete</label>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button> --}}
                    </div>
                </div>
            </form>
        </div>
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
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js'></script>

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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                    },
                initialView: 'dayGridMonth',
                themeSystem: 'bootstrap5',
                events: {
        url: `{{ route('event.mahasiswa')}}`,
        color: 'blue',
        textColor: 'black'
    },
                editable: true,
                eventClick: function (info) {
    // Show the modal
    $('#form-action-update').modal('show');
    // Set form values based on event data
    var startDate = new Date(info.event.start);
    var endDate = new Date(info.event.end);
    var dateOnly = startDate.toISOString().split('T')[0];
    var endnya = endDate.toISOString().split('T')[0];

    // $('input[name="strat_timeupdate"]').val(info.event.extendedProps.event_start_time);
    $('input[name="NAMA_KEGIATAN"]').val(info.event.title);
    $('input[name="TUJUAN"]').val(info.event.extendedProps.tujuan);
    $('input[name="PENYELENGGARA"]').val(info.event.extendedProps.penyelenggara);
    $('input[name="JENIS_KEGIATAN"]').val(info.event.extendedProps.jenis_kegiatan);
    $('input[name="WAKTU"]').val(dateOnly);
    $('input[name="KETERANGAN"]').val(info.event.extendedProps.keterangan);
    $('img[name="fotonya"]').attr('src', 'data_file_kegiatan/' + info.event.extendedProps.file);
    }

            });
            calendar.render();
        });

    </script>

@endsection
@section('script')


@endsection
