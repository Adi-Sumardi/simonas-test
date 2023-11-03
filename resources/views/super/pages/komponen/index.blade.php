@extends('super.layouts.master')

@section('title')
    List Komponen Aspek Pengaderan 
@endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @component('super.common-components.breadcrumb')
        @slot('title')
        List Komponen Aspek Pengaderan
        @endslot
        @slot('title_li')
        List Komponen Aspek Pengaderan
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="button-items d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{ route('super-komponen-create')}}" type="button"
                            class="btn btn-outline-primary waves-effect waves-light">
                            <i class="mdi mdi-plus-thick font-size-16 align-middle mr-2"></i> Add Data
                        </a>
                    </div>
                    <br>

                    <h4 class="card-title">List Komponen Aspek Pengaderan</h4>
                    <div style="overflow: scroll">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kode</th>
                                    <th>Nama Komponen</th>
                                    <th>Aspek</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($komponens as $komponen)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$komponen->kode}}</td>
                                        <td>{{$komponen->nama_komponen}}</td>
                                        <td>{{$komponen->aspek}}</td>
                                        <td>
                                            <form action="/super-komponen-delete/{{ $komponen->id }}"
                                                method="POST">
                                                <a href="/super-komponen-edit/{{ $komponen->id }}"
                                                    class="btn btn-secondary btn-action"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-action"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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
