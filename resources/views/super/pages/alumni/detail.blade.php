@extends('super.layouts.master')

@section('title') Profile @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
   
    @component('super.common-components.breadcrumb')
         @slot('title') Profile  @endslot
         @slot('li_1') Pages  @endslot
     @endcomponent


                    <!-- start row -->
                    <div class="row">
                        <div class="col-md-12 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="profile-widgets py-3">

                                        <div class="text-center">
                                            <div class="">
                                                <img src="/images/users/avatar-2.jpg" alt="" class="rounded avatar-lg">
                                                <div class="online-circle"><i class="fas fa-circle text-success"></i></div>
                                            </div>

                                            <div class="mt-4">

                                                <ui class="list-inline social-source-list">
                                                    <li class="list-inline-item">
                                                        <div class="avatar-xs">
                                                            <span class="avatar-title rounded-circle">
                                                                    <i class="mdi mdi-facebook"></i>
                                                                </span>
                                                        </div>
                                                    </li>

                                                    <li class="list-inline-item">
                                                        <div class="avatar-xs">
                                                            <span class="avatar-title rounded-circle bg-info">
                                                                    <i class="mdi mdi-twitter"></i>
                                                                </span>
                                                        </div>
                                                    </li>

                                                    <li class="list-inline-item">
                                                        <div class="avatar-xs">
                                                            <span class="avatar-title rounded-circle bg-danger">
                                                                <i class="mdi mdi-google-plus"></i>
                                                            </span>
                                                        </div>
                                                    </li>

                                                    <li class="list-inline-item">
                                                        <div class="avatar-xs">
                                                            <span class="avatar-title rounded-circle bg-pink">
                                                                <i class="mdi mdi-instagram"></i>
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ui>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Personal Information</h5>

                                    <div class="mt-3">
                                        <p class="font-size-12 text-muted mb-1">Nama Lengkap</p>
                                        <h6 class="">{{$alumni->gelar_depan}}. {{$alumni->nama}}, {{$alumni->gelar_belakang}}</h6>
                                    </div>

                                    <div class="mt-3">
                                        <p class="font-size-12 text-muted mb-1">Tanggal lahir</p>
                                        <h6 class="">{{$alumni->tanggal_lahir}}</h6>
                                    </div>

                                    <div class="mt-3">
                                        <p class="font-size-12 text-muted mb-1">Alumni Asrama</p>
                                        <h6 class="">{{$alumni->asal_asrama}}</h6>
                                    </div>

                                    <div class="mt-3">
                                        <p class="font-size-12 text-muted mb-1">Email Address</p>
                                        <h6 class="">{{$alumni->email}}</h6>
                                    </div>

                                    <div class="mt-3">
                                        <p class="font-size-12 text-muted mb-1">Phone number</p>
                                        <h6 class="">{{$alumni->no_whatsapp}}</h6>
                                    </div>

                                    <div class="mt-3">
                                        <p class="font-size-12 text-muted mb-1">Address</p>
                                        <h6 class="">{{$alumni->alamat_domisili}}</h6>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="col-md-12 col-xl-9">
                            <div class="row">

                                <div class="col-md-12 col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-4">Data Lengkap Alumni</h4>

                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label">Provinsi Asal</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" value="{{$alumni->provinsi_asal}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label">Alamat Domisili</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" value="{{$alumni->alamat_domisili}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label">Alamat Jalan</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" value="{{$alumni->alamat_jalan}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label">Kota</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" value="{{$alumni->kota}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label">Provinsi</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" value="{{$alumni->provinsi}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label">Kode POS</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" value="{{$alumni->kode_pos}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label">Tahun Masuk Asrama</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" value="{{$alumni->tahun_masuk_asrama}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label">Tahun Keluar Asrama</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" value="{{$alumni->tahun_keluar_asrama}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label">Pengalaman Organisasi</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" value="{{$alumni->pengalaman_organisasi}}" readonly></input>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label">Pendidikan Terakhir</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" value="{{$alumni->pendidikan_terakhir}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label">Kampus S-1</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" value="{{$alumni->kampus_s1}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label">Jurusan S-1</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" value="{{$alumni->jurusan_s1}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label">Kampus S-2</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" value="{{$alumni->kampus_s2}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label">Jurusan S-2</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" value="{{$alumni->jurusan_s2}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label">Kampus S-3</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" value="{{$alumni->kampus_s3}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label">Jurusan S-3</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" value="{{$alumni->jurusan_s3}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label">Pengalaman Pekerjaan</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" value="{{$alumni->pengalaman_pekerjaan}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label">Pekerjaan Sekarang</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" value="{{$alumni->pekerjaan_sekarang}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label">Bidang Pekerjaan</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" value="{{$alumni->bidang_pekerjaan}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label">Bidang Keahlian</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" value="{{$alumni->bidang_keahlian}}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </fieldset>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="d-print-none">
                                <div class="float-right">
                                    <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light"><i class="fa fa-print"></i> Print</a>
                                </div>
                            </div>
                        </div>
                            
                    </div>

            <!-- end row -->
    @endsection

    @section('script')

    <!-- Required datatable js -->
    <script src="{{ URL::asset('/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/libs/pdfmake/pdfmake.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ URL::asset('/js/pages/datatables.init.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ URL::asset('/libs/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{ URL::asset('/js/pages/profile.init.js')}}"></script>

    <!-- apexcharts init -->
    <script src="{{URL::asset('/js/pages/apexcharts.init.js')}}"></script>


    @endsection