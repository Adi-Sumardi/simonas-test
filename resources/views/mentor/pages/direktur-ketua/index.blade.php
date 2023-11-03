@extends('mentor.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Data Asrama YAPI</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="/mentor/asrama/asgj">ASGJ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/mentor/asrama/asg">ASG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/mentor/asrama/aws">AWS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/mentor/asrama/dqf">Asrama Putri</a>
                    </li>
                </ul>
            </div>
        </div> 
        <div class="card card-primary col-12 col-md-12 col-lg-12" style="overflow: scroll;">
            
            <div class="row">
            </div>
            <table class="table table-bordered table-striped table-hover" id="data-asrama">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Asrama</th>
                        <th>Tahun Jabatan</th>
                        <th>Nama Direktur</th>
                        <th>Nama Ketua</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($asramas as $asrama)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$asrama->nama_asrama}}</td>
                        <td>{{$asrama->tahun_jabatan}}</td>
                        <td>{{$asrama->direktur}}</td>
                        <td>{{$asrama->ketua}}</td>
                        {{-- <td>                            
                            <a href="/asrama-edit/{{$asrama->id}}" class="btn btn-icon btn-primary btn-action" data-toggle="tooltip" title="" data-original-title="Edit" ><i class="fas fa-edit"></i></a>
                            <form action="/asrama-delete/{{$asrama->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                               <button type="submit" class="btn btn-danger btn-action" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td> --}}
                    </tr>       
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection