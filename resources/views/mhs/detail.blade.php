@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h3>
                Show Biodata {{$mahasiswas->nama}}
            </h3>
        </div>
    </div>
</div>

<div class="container">

<form action="{{route('mhs.store')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-sm-8">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama : </label>
                <input name="nama" value="{{$mahasiswas->nama}}" type="text" class="form-control" readonly>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="form-group">
                <label for="exampleInputEmail1">Gender : </label>
                <input name="Gender" value="{{$mahasiswas->Gender}}" type="text" class="form-control" readonly>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="form-group">
                <label for="exampleInputEmail1">Usia : </label>
                <input name="usia" value="{{$mahasiswas->usia}}" type="text" class="form-control" readonly>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="form-group">
                <label for="exampleInputEmail1">Alamat : </label>
                <textarea name="alamat" class="form-control" rows="3" readonly>{{$mahasiswas->alamat}}
                </textarea>
            </div>
        </div>
        <div class="col-md-12">
            <a href="{{route('mhs.index')}}" class="btn btn-sm btn-success">Back</a>
        </div>
    </div>
</form>

</div>

@endsection