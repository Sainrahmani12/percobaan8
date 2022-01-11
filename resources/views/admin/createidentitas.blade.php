@extends('master')
@section('content')
<div class="header-body container">
    <h1 class="text-center dt-mobil">Create Identity</h1>
        <form class="container mb-3 w-50" action="{{route('dataid')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="sewa">
        <div class="mb-3">
            <label class="form-label">Nama Mobil</label>
            <input type="text" name="datamobil_id" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Jaminan</label>
            <input type="text" name="jaminan" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Supir</label>
            <input type="text" name="supir_id" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-label">Tanggal Peminjaman</label>
            <input class="form-control" name="peminjaman">
        </div>
        <div class="form-group">
            <label class="form-label">Tanggal Pengembalian</label>
            <input class="form-control" name="pengembalian">
        </div>
        <div class="mb-3">
            <label class="form-label">Foto Peminjam</label>
            <input type="file" name="foto_peminjam" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
        </div>
        </form>

    </div>
</div>

@endsection