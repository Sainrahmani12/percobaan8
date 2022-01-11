@extends('master')
@section('content')
<div class="header-body container">
    <h1 class="text-center dt-mobil">Add Driver</h1>
        <form class="container mb-3 w-50" action="{{route('addsupir')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="sewa">
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Umur</label>
            <input type="text" name="umur" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Foto</label>
            <input type="file" name="foto" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
        </div>
        </form>

    </div>
</div>

@endsection