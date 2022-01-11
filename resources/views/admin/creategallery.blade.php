@extends('master')
@section('content')

<div class="header-body container sewa">
<form action="" enctype="multipart/form-data" method="POST">
<div class="mb-3 container">
            <label class="form-label">Foto</label>
            <input type="file" name="foto" class="form-control">
            <button type="submit" class="btn btn-success mt-3">Submit</button>
</div>
</form>
</div>

@endsection