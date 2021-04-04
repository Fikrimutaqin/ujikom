@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <h3>
                Edit Biodata
            </h3>
        </div>
    </div>
</div>

@if($errors->any())
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Upps!!</strong> terjadi kesalahan input data.<br/> 
        <ul>
            @foreach($errors  as $error)
            <li>
                {{$error}}
            </li>
            @endforeach
        </ul>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<div class="container">

<form action="{{route('mhs.update', $mahasiswa->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-sm-8">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama : </label>
                <input name="nama" type="text" class="form-control" value="{{$mahasiswa->nama}}">
            </div>
        </div>
        <div class="col-sm-8">
            <div class="form-group">
                <label for="exampleInputEmail1">Gender : </label>
                <input name="Gender" type="text" class="form-control" value="{{$mahasiswa->Gender}}">
            </div>
        </div>
        <div class="col-sm-8">
            <div class="form-group">
                <label for="exampleInputEmail1">Usia : </label>
                <input name="usia" type="text" class="form-control" value="{{$mahasiswa->usia}}">
            </div>
        </div>
        <div class="col-sm-8">
            <div class="form-group">
                <label for="exampleInputEmail1">Alamat : </label>
                <textarea name="alamat" class="form-control" rows="3">{{$mahasiswa->alamat}}
                </textarea>
            </div>
        </div>
        <div class="col-md-12">
            <a href="{{route('mhs.index')}}" class="btn btn-sm btn-success">Back</a>
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
    </div>
</form>

</div>

@endsection