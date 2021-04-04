@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <h3>Biodata Mahasiswa</h3>
            </div>
            <div class="col-lg-2">
                <a class="btn btn-md btn-primary" href="{{route('mhs.create')}}">Create New</a>
            </div>
        </div>  
        <br/>
        @if($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{"$message"}}</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <br/>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Mahasiswa</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Usia</th>
                            <th scope="col">Alamat</th>
                            <th scope="col" rowspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($mahasiswas as $item)
                        <tr>
                            <th scope="row">{{++$i}}.</th>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->Gender}}</td>
                            <td>{{$item->usia}}</td>
                            <td>{{$item->alamat}}</td>
                            <td>
                                <form action="{{route('mhs.destroy', $item->id)}}" method="post">
                                    <a class="btn btn-sm btn-primary" href="{{route('mhs.show',$item->id)}}">Show</a>
                                    <a class="btn btn-sm btn-warning" href="{{route('mhs.edit',$item->id)}}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
               
                {!! $mahasiswas->links() !!}
            </div>
        </div>
    </div>  
    @endsection  