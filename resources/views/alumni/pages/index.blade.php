@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Data Alumni Asrama</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <a href="/alumni-create" class="btn btn-icon icon-left btn-success"><i class="fas fa-plus"></i> Tambah Data</a>
            </div>
        </div>
        <div class="card card-primary col-12 col-md-12 col-lg-12" style="overflow: scroll;">
           
            <div class="row">
            </div>
            <table class="table table-bordered table-striped table-hover" id="data-alumni">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Foto</th>
                        <th>Nama Lengkap</th>
                        <th>Asrama</th>
                        <th>Tahun Masuk</th>
                        <th>Tahun Keluar</th>
                        <th>Pekerjaan Saat ini</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td><img src="{{ url ('/uploads/avatars/'.$user->avatar)}}" class="avatar img-circle" style="width:50px; height:50px;"></td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->asrama}}</td>
                        <td>{{$user->tahun_masuk}}</td>
                        <td>{{$user->tahun_keluar}}</td>
                        <td>{{$user->pekerjaan}}</td>
                        <td>                           
                            <form action="/alumni-delete/{{$user->id}}" method="POST">
                                <a href="/alumni-detail/{{$user->id}}" class="btn btn-icon btn-secondary btn-action btn-sm" data-toggle="tooltip" title="" data-original-title="Detail" ><i class="fas fa-info"></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-action btn-sm" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>       
                    @endforeach
                </tbody>
            </table>
        </div> 
    </div>
</section>
@endsection