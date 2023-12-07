@extends('mentor.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Kegiatan Kreatifitas dan Wirausaha Warga Asrama</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="/mentor/penilaian/kreatif/asgj">ASGJ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/mentor/penilaian/kreatif/asg">ASG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/mentor/penilaian/kreatif/aws">AWS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/mentor/penilaian/kreatif/dqf">Asrama Putri</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card card-primary col-12 col-md-12 col-lg-12" style="overflow: scroll;">
           
            <div class="row">
            </div>
            <table class="table table-bordered table-striped table-hover" id="data-kreatif">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Warga</th>
                        <th>Kegiatan</th>
                        <th>Waktu</th>
                        <th>Nama Penilai</th>
                        <th>Nilai</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kreatifs as $index => $kreatif)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$kreatif->nama_warga}}</td>
                        <td>{{$kreatif->kegiatan}}</td>
                        <td>{{$kreatif->waktu}}</td>
                        <td>{{$kreatif->nama_penilai}}</td>
                        <td>{{$kreatif->nilai}}</td>
                        <td>                            
                            <a href="/mentor/penilaian/kreatif/detail/{{$kreatif->id}}" class="btn btn-icon btn-secondary btn-action btn-sm" data-toggle="tooltip" title="" data-original-title="Detail" ><i class="fas fa-info-circle"></i></a>
                            <a href="/mentor/penilaian/kreatif/edit/{{$kreatif->id}}" class="btn btn-icon btn-success btn-action btn-sm" data-toggle="tooltip" title="" data-original-title="Nilai" ><i class="fas fa-file-signature"></i></a>
                        </td>
                    </tr>       
                    @endforeach
                </tbody>
            </table>
        </div> 
    </div>
</section>
@endsection