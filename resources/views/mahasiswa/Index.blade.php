@extends('mahasiswa.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2><center>Web CRUD Data Mahasiswa</center<h2>
        </div>
            <a class="btn btn-info" href="{{route('mahasiswa.create')}}">Create Data</a>
        <br><br>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif

<table class="table table-secondary">
    <tr>
    <th>No</th>
    <th>Foto</th>
    <th>NIM</th>
    <th>Nama Mahasiswa</th>
    <th>Jenis Kelamin</th>
    <th>Alamat</th>
    <th>Kota</th>
    <th>Email</th>
    <th width="280px">Opsi</th>
    </tr>
    @foreach ($mahasiswa as $mhs)
        <tr>
            <td>{{++$i}}</td>
            <td><img src="/image/{{$mhs->foto}}" width="100px"></td>
            <td>{{$mhs->nim}}</td>
            <td>{{$mhs->namamhs}}</td>
            <td>{{$mhs->jk}}</td>
            <td>{{$mhs->alamat}}</td>
            <td>{{$mhs->kota}}</td>
            <td>{{$mhs->email}}</td>
            <td>
                <form action="{{route('mahasiswa.destroy',$mhs->id)}}" method="POST">
                <a class="btn btn-secondary" href="{{route('mahasiswa.show',$mhs->id)}}">Tampilkan</a>
                <a class="btn btn-info" href="{{route('mahasiswa.edit',$mhs->id)}}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

{!! $mahasiswa->links() !!}

@endsection