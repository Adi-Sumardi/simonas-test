@extends('alumni.layouts.master')

@section('title') Calender @endsection

@section('head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Schedule Tracker</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@endsection

@section('css')

    <link href="{{URL::asset('libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('libs/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('libs/bootstrap-touchspin/bootstrap-touchspin.min.css')}}" rel="stylesheet" />

@endsection

@section('content')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    @component('common-components.breadcrumb')
        @slot('title') Kegiatan @endslot
    @endcomponent

    <div class="container mt-5">
        {{-- For Search --}}
        <div class="row">

        </div>

        <div class="card">
            <div class="card-body">
                <div id='calendar'></div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form id="form-action" action="{{ $action }}" method="POST">
                @csrf
                @if(isset($data) && $data->id)
                    @method('PUT')
                @endif

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Input Kegiatan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <h5>TANGGAL AWAL</h5>
                                    <input type="text" name="start_date"  value="{{ isset($data) ? $data->start_date : request()->input('start_date') }}" class="form-control datepicker">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <h5>TANGGAL AKHIR</h5>
                                    <input type="text" name="end_date"  class="form-control datepicker">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <h5>START TIME</h5>
                                    <input type="text" name="strat_time"   class="form-control datepicker">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <h5>END START TIME</h5>
                                    <input type="text" name="end_strat_time"  class="form-control datepicker">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <textarea name="title" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="category" id="category-success" value="success" {{ (isset($data) && $data->category == 'success') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="category-success">Success</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="category" id="category-danger" value="danger" {{ (isset($data) && $data->category == 'danger') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="category-danger">Danger</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="category" id="category-warning" value="warning" {{ (isset($data) && $data->category == 'warning') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="category-warning">Warning</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="category" id="category-info" value="info" {{ (isset($data) && $data->category == 'info') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="category-info">Info</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" name="delete" role="switch" id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Delete</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
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



@endsection

@section('script')

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js'></script>
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
        url: `{{ route('event.listsuper')}}`,
        color: 'green',
        textColor: 'black'
    },

                editable: true,
                dateClick: function(info) {
                    var currentTime = new Date();
                    var hours = currentTime.getHours();
    var minutes = currentTime.getMinutes();
    var formattedTime = (hours < 10 ? '0' : '') + hours + ':' + (minutes < 10 ? '0' : '') + minutes;
    $('input[name="start_date"]').val(info.dateStr);
    $('input[name="end_date"]').val(info.dateStr);
    $('input[name="start_date"]').val(info.dateStr);
    $('input[name="end_strat_time"]').val(formattedTime);
    $('input[name="strat_time"]').val(formattedTime);
    $('#eventModal').modal('show');
    $('#form-action').on('submit', function(e) {
                            e.preventDefault()
                            const form = this
                            const formData = new FormData(form)
                            $.ajax({
                                url: form.action,
                                method: form.method,
                                data: formData,
                                processData: false,
                                contentType: false,
                                success: function (res) {
                                    $('#eventModal').modal('hide');
                                    calendar.refetchEvents()
                                }
                            })
                        })
                },
                eventRender: function (info) {
        // Mengatur warna latar belakang acara menjadi hijau
        info.el.style.backgroundColor = 'green';
    },
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
    // $('input[name="categoryupdate"]').prop('checked', false);
    // console.log("INPO",info.event.extendedProps)
    // var categoryValue = info.event.extendedProps.event_description.toLowerCase();
    // $('input[name="categoryupdate"][value="' + categoryValue + '"]').prop('checked', true);
    $('#form-action-update').off('submit').on('submit', function (e) {
        e.preventDefault();


var formAction = '/events1/' + info.event.id;

// // Create FormData object from the form
// var event_start_date = document.querySelector('input[name="start_dateupdate"]').value;
// var event_end_date = document.querySelector('input[name="end_dateupdate"]').value;
// var event_start_time = document.querySelector('input[name="strat_timeupdate"]').value;
// var event_end_time = document.querySelector('input[name="end_strat_timeupdate"]').value;
// var end_date = document.querySelector('input[name="end_dateupdate"]').value;
// var event_title = document.querySelector('textarea[name="event_title"]').value;
// var event_description = document.querySelector('input[name="categoryupdate"]:checked').value;
// var deleteCheckbox = document.querySelector('input[name="delete"]').checked;

// formData.append('event_start_date', event_start_date);
// formData.append('event_start_time',event_start_time);
// formData.append('event_end_date', event_end_date);
// formData.append('event_end_time', event_end_time);
// formData.append('event_title', event_title);
// formData.append('event_description', event_description);
// console.log(formData.append('event_title', event_title));

// console.log(formData)
var formData = new FormData(document.getElementById('form-action-update'));
        $.ajax({
            url: formAction,
            method: 'PUT',
            data:formData1,
            processData: false,
            contentType: false,
            headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
            success: function (res) {
                // Handle success (you may want to close the modal and refresh the calendar)
                $('#form-action-update').modal('hide');
                calendar.refetchEvents();
            },
            error: function (res) {
                // Handle error
                console.error('Error:', res);
            }
        });
    });
}

            });
            calendar.render();
        });

    </script>
    {{-- <script>
        const modal = $('#modal-action')
        const csrfToken = $('meta[name=csrf_token]').attr('content')

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            themeSystem: 'bootstrap5',
            events: `{{ route('events.list') }}`,
            editable: true,
            dateClick: function (info) {
                $.ajax({
                    url: `{{ route('events.create') }}`,
                    data: {
                        start_date: info.dateStr,
                        end_date: info.dateStr
                    },
                    success: function (res) {
                        modal.html(res).modal('show')
                        $('.datepicker').datepicker({
                            todayHighlight: true,
                            format: 'yyyy-mm-dd'
                        });

                        $('#form-action').on('submit', function(e) {
                            e.preventDefault()
                            const form = this
                            const formData = new FormData(form)
                            $.ajax({
                                url: form.action,
                                method: form.method,
                                data: formData,
                                processData: false,
                                contentType: false,
                                success: function (res) {
                                    modal.modal('hide')
                                    calendar.refetchEvents()
                                },
                                error: function (res) {

                                }
                            })
                        })
                    }
                })
            },
            eventClick: function ({event}) {
                $.ajax({
                    url: `{{ url('events') }}/${event.id}/edit`,
                    success: function (res) {
                        modal.html(res).modal('show')

                        $('#form-action').on('submit', function(e) {
                            e.preventDefault()
                            const form = this
                            const formData = new FormData(form)
                            $.ajax({
                                url: form.action,
                                method: form.method,
                                data: formData,
                                processData: false,
                                contentType: false,
                                success: function (res) {
                                    modal.modal('hide')
                                    calendar.refetchEvents()
                                }
                            })
                        })
                    }
                })
            },
            eventDrop: function (info) {
                const event = info.event
                $.ajax({
                    url: `{{ url('events') }}/${event.id}`,
                    method: 'put',
                    data: {
                        id: event.id,
                        start_date: event.startStr,
                        end_date: event.end.toISOString().substring(0, 10),
                        title: event.title,
                        category: event.extendedProps.category
                    },
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                        accept: 'application/json'
                    },
                    success: function (res) {
                        iziToast.success({
                            title: 'Success',
                            message: res.message,
                            position: 'topRight'
                        });
                    },
                    error: function (res) {
                        const message = res.responseJSON.message
                        info.revert()
                        iziToast.error({
                            title: 'Error',
                            message: message ?? 'Something wrong',
                            position: 'topRight'
                        });
                    }
                })
            },
            eventResize: function (info) {
                const {event} = info
                $.ajax({
                    url: `{{ url('events') }}/${event.id}`,
                    method: 'put',
                    data: {
                        id: event.id,
                        start_date: event.startStr,
                        end_date: event.end.toISOString().substring(0, 10),
                        title: event.title,
                        category: event.extendedProps.category
                    },
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                        accept: 'application/json'
                    },
                    success: function (res) {
                        iziToast.success({
                            title: 'Success',
                            message: res.message,
                            position: 'topRight'
                        });
                    },
                    error: function (res) {
                        const message = res.responseJSON.message
                        info.revert()
                        iziToast.error({
                            title: 'Error',
                            message: message ?? 'Something wrong',
                            position: 'topRight'
                        });
                    }
                })
            }


            });
            calendar.render();
        });

    </script> --}}


@endsection
