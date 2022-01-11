@extends('master')
@section('content')
<div class="header-body container">
    <h1 class="text-center dt-mobil">Create Data Mobil</h1>
        <form class="container mb-3 w-50" action="{{route('tambahdata')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="sewa">
        <div class="mb-3">
            <label class="form-label">Nama Mobil</label>
            <input type="text" name="nama_mobil" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Nopol Mobil</label>
            <input type="text" name="nopol_mobil" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Warna Mobil</label>
            <input type="text" name="warna_mobil" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Harga Sewa</label>
            <input type="text" name="harga_sewa" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Gambar Mobil</label>
            <input type="file" name="gambar_mobil" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
        </div>
        </form>

    </div>
</div>

@endsection