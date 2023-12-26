@extends('super.layouts.master')

@section('title')
    List Warga Asrama
@endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @component('super.common-components.breadcrumb')
        @slot('title')
        List Warga Asrama
        @endslot
        @slot('title_li')
        List Warga Asrama
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card bg-gradient" style="background: linear-gradient(90deg, #c0fff3, #0095ff);">
                <div class="card-body">
                    <div class="button-items d-flex justify-content-center">
                        <button id="super-warga-asgj" name="super-warga-asgj" class="btn btn-primary waves-effect waves-light btn-category" data-category="Asrama Sunan Gunung Jati">ASGJ</button>
                        <button id="super-warga-asg"  name="super-warga-asg" class="btn btn-primary waves-effect waves-light btn-category" data-category="Asrama Sunan Giri">ASG</button>
                        <button id="super-warga-aws"  name="super-warga-aws" class="btn btn-primary waves-effect waves-light btn-category" data-category="Asrama Wali Songo">AWS</button>
                        <button id="super-warga-aspuri" name="super-warga-aspuri" class="btn btn-primary waves-effect waves-light btn-category" data-category="Asrama Putri">ASPURI</button>

                        <div class="d-flex align-items-center ms-2">
                            <select class="form-select btn btn-primary waves-effect waves-light" name="date_filter" id="date_filter">
                                <option value="all">All Dates</option>
                                <option value="today">Today</option>
                                <option value="yesterday">Yesterday</option>
                                <option value="this_week">This Week</option>
                                <option value="last_week">Last Week</option>
                                <option value="this_month">This Month</option>
                                <option value="last_month">Last Month</option>
                                <option value="this_year">This Year</option>
                                <option value="last_year">Last Year</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h4 class="card-title">List Warga</h4>
                    <div style="overflow: scroll; overflow-x: auto;">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Foto</th>
                                    <th>Nama</th>
                                    <th>Asrama</th>
                                    <th>Status Warga</th>
                                    <th>Universitas</th>
                                    <th>Jurusan</th>
                                    <th>Semester</th>
                                    <th>Ipk</th>
                                    <th>Jumlah Kegiatan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr class="user-row" data-category="{{$user->asrama}}">
                                    <td>foto</td>
                                    <td>{{$user->name}}<br></td>
                                    <td>{{$user->asrama}}<br></td>
                                    <td>{{$user->status_warga}}</td>
                                    <td>{{$user->universitas}}</td>
                                    <td>{{$user->fakultas}}</td>
                                    <td>@foreach ($user->ipks as $ipk)
                                        {{ $ipk->semester}}<br>
                                    @endforeach</td>
                                    <td>@foreach ($user->ipks as $ipk)
                                    {{ $ipk->ip}}<br>
                                @endforeach</td>
                                    <td id="totalActivities_{{ $user->id }}"></td>
                                    <td>
                                        <a href="/super-warga-asrama-detail/{{ $user->id }}" class="btn btn-primary btn-action" data-toggle="tooltip" data-placement="top" title="Detail">
                                            <i class="far fa-eye"></i>
                                        </a>
                                        <button class="btn btn-primary btn-action" data-toggle="tooltip" data-placement="top" title="Detail" onclick="showDetailModal({{ $user->id }})">
                                           modal
                                        </button>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
    <!-- end row -->
    <!-- Modal -->
    <div class="modal fade" id="modal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog " role="document" style="max-width: 90%; margin: 1.75rem auto;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Kegiatan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="akademik-tab" data-toggle="tab" href="#akademik{{ $user->id }}" role="tab">Akademik</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="leadership-tab" data-toggle="tab" href="#leadership{{ $user->id }}" role="tab">Leadership</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="leadership-tab" data-toggle="tab" href="#karakter{{ $user->id }}" role="tab">Karakter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="leadership-tab" data-toggle="tab" href="#kreatif{{ $user->id }}" role="tab">Kreativitas</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- Akademik Tab -->
                        <div class="tab-pane active" id="akademik{{ $user->id }}" role="tabpanel">
                            <table class="table table-striped table-bordered dt-responsive nowrap" id="modalBodyAkademik_{{ $user->id }}">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kegiatan</th>
                                        <th>Waktu</th>
                                        <th>Tempat</th>
                                        <th>Uraian Kegiatan</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Data Akademik -->
                                </tbody>
                            </table>
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-end" id="paginationModalBodyAkademik_{{ $user->id }}"></ul>
                            </nav>
                        </div>

                        <!-- Leadership Tab -->
                        <div class="tab-pane" id="leadership{{ $user->id }}" role="tabpanel">
                            <table class="table table-striped" id="modalBodyLeadership_{{ $user->id }}">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kegiatan</th>
                                        <th>Waktu</th>
                                        <th>Tempat</th>
                                        <th>Uraian Kegiatan</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Data Leadership -->
                                </tbody>
                            </table>
                        </div>
                         <!-- Karakter Tab -->
                        <div class="tab-pane" id="karakter{{ $user->id }}" role="tabpanel">
                            <table class="table table-striped" id="modalBodykarakter_{{ $user->id }}">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kegiatan</th>
                                        <th>Waktu</th>
                                        <th>Tempat</th>
                                        <th>Uraian Kegiatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Data karakter -->
                                </tbody>
                            </table>
                        </div>
                        <!-- kreatif Tab -->
                        <div class="tab-pane" id="kreatif{{ $user->id }}" role="tabpanel">
                            <table class="table table-striped" id="modalBodykreatif_{{ $user->id }}">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kegiatan</th>
                                        <th>Waktu</th>
                                        <th>Tempat</th>
                                        <th>Uraian Kegiatan</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Data kreatif -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>

            </div>
        </div>
    </div>





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

    <script>
        $(document).ready(function () {
            // ...

            // Mengatur event handler untuk tombol-tombol pagination pada Akademik Tab
            $('#paginationModalBodyAkademik_{{ $user->id }}').on('click', 'a', function (e) {
                e.preventDefault();
                $('#modalBodyAkademik_{{ $user->id }}').DataTable().page($(this).data('page')).draw('page');
            });

            // Mengatur event handler untuk tombol-tombol pagination pada Leadership Tab
            $('#paginationModalBodyLeadership_{{ $user->id }}').on('click', 'a', function (e) {
                e.preventDefault();
                $('#modalBodyLeadership_{{ $user->id }}').DataTable().page($(this).data('page')).draw('page');
            });

            // ... mengatur event handler lainnya ...
        });
    </script>

<script>
    $(document).ready(function () {
        var totalActivities = {{ $user->akademiks->count() + $user->leaderships->count() + $user->karakters->count() + $user->kreatifs->count() }};
            document.getElementById('totalActivities_{{ $user->id }}').innerText = totalActivities;
            $('select[name="date_filter"]').on('change', function ()
            {
                                    var selectedDateFilter = $(this).val();
                                    var userId = {{ $user->id }};
                                    $.ajax({
                                        type: 'GET',
                                        url: '/get-data-by-date/' + userId,
                                        data: { date_filter: selectedDateFilter },
                                        success: function (data) {
                                            console.log(data.akademiks);
                                            $('#totalActivities_' + userId).text(data.totalActivities);
                                        },
                                        error: function (error) {
                                            console.error('Error:', error);
                                        }
                });
            });

        $('.btn-category').on('click', function () {
            var category = $(this).data('category');
            // Sembunyikan semua baris tabel
            $('.user-row').hide();
            // Tampilkan hanya baris dengan kategori yang sesuai
            $('.user-row[data-category="' + category + '"]').show();
        });
    });
</script>
<!-- Tambahkan di dalam bagian <script> Anda -->
    <script>
        function showDetailModal(userId) {
            var selectedDateFilter = $("#date_filter").val();

            $.ajax({
                type: 'GET',
                url: '/get-data-by-date/' + userId,
                data: { date_filter: selectedDateFilter },
                success: function (data) {
                    // Bersihkan isi tabel sebelum menambahkan data baru
                    $('#modalBodyAkademik_' + userId + ' tbody').empty();
                    $('#modalBodyLeadership_' + userId + ' tbody').empty();
                    $('#modalBodykarakter_' + userId + ' tbody').empty();
                    $('#modalBodykreatif_' + userId + ' tbody').empty();

                    // Tambahkan data ke tabel
                    addDataToTable(data.akademiks, 'modalBodyAkademik_' + userId);
                    addDataToTable(data.kreatifs, 'modalBodykreatif_' + userId);
                    addDataToTable(data.karakters, 'modalBodykarakter_' + userId);
                    addDataToTable(data.leaderships, 'modalBodyLeadership_' + userId);
                    initializeDataTables(userId);
                    $('#modal' + userId).modal('show');
                },
                error: function (error) {
                    console.error('Error:', error);
                }
            });
        }

        function addDataToTable(dataArray, tableId) {
            var jumlah = 0;
            dataArray.forEach(function (item) {
                jumlah++;
                var modalContent = `
                    <tr>
                        <td>${jumlah}</td>
                        <td>${item.kegiatan}</td>
                        <td>${new Date(item.waktu).toLocaleDateString()}</td>
                        <td>${item.tempat}</td>
                        <td>${item.keterangan}</td>
                    </tr>
                `;
                $('#' + tableId + ' tbody').append(modalContent);
            });
        }

        function initializeDataTables(userId) {
            if (!$.fn.DataTable.isDataTable('#modalBodyAkademik_' + userId)) {
                $('#modalBodyAkademik_' + userId).DataTable({
                    "paging": true,
                    "lengthChange": true,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                });
            }

            if (!$.fn.DataTable.isDataTable('#modalBodyLeadership_' + userId)) {
                $('#modalBodyLeadership_' + userId).DataTable({
                    "paging": true,
                    "lengthChange": true,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                });
            }
            if (!$.fn.DataTable.isDataTable('#modalBodykarakter_' + userId)) {
                $('#modalBodykarakter_' + userId).DataTable({
                    "paging": true,
                    "lengthChange": true,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                });
            }

            if (!$.fn.DataTable.isDataTable('#modalBodykreatif_' + userId)) {
                $('#modalBodykreatif_' + userId).DataTable({
                    "paging": true,
                    "lengthChange": true,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                });
            }
}

    </script>



@endsection
