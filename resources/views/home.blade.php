@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Welcome</strong> 
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                You are logged in!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        </div>

        <div class="col-lg-12 mb-3">
            <h3>
                My Fitur
            </h3>
        </div>

        <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Management Data</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Data Mahasiswa</h6>
                    <p class="card-text">Untuk menambahkan data dan edit serta delete data mahasiswa</p>
                    <a href="{{route('mhs.index')}}" class="card-link">Go to</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
