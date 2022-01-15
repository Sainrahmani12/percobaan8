@extends('master')
@section('content')
<h1 class="text-center dt-mobil">Data Mobil</h1>
    <div class="header-body container">
        <div class="row align-items-center py-4"></div>
                <table class="table align-items-center table-dark">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="sort" data-sort="name">id</th>
                            <th scope="col" class="sort" data-sort="budget">Nama Mobil</th>
                            <th scope="col" class="sort" data-sort="status">Nopol Mobil</th>
                            <th scope="col" class="sort" data-sort="status">Warna Mobil</th>
                            <th scope="col" class="sort" data-sort="status">Harga Sewa</th>
                            <th scope="col" class="sort" data-sort="completion">Gambar Mobil</th>
                            <th scope="col" class="sort" data-sort="completion">Action</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        @foreach ($mobil as $m)
                        <tr>
                            <td>{{$m->id}}</td>
                            <td>{{$m->nama_mobil}}</td>
                            <td>{{$m->nopol_mobil}}</td>
                            <td>{{$m->warna_mobil}}</td>
                            <td>{{$m->hargasewa_mobil}}/hr</td>
                            <td><img src="{{ $m->gambar_mobil }}" width="100" ></td>
                            <td>
                               <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#modalmobil{{$m->id}}"><i class="fas fa-pen ms-2"></i></button>
                    
                               <!-- Modal -->
                                <div class="modal fade" id="modalmobil{{$m->id}}" tabindex="-1" role="dialog" aria-labelledby="modalmobilLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalmobilLabel">Data Mobil</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('editmobil', $m->id)}}" enctype="multipart/form-data" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Nama Mobil</label>
                                                    <input type="text" name="nama_mobil" value="{{ $m->nama_mobil }}" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Nopol Mobil</label>
                                                    <input type="text" name="nopol_mobil" value="{{ $m->nopol_mobil }}" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Warna Mobil</label>
                                                    <input type="text" name="warna_mobil" value="{{$m->warna_mobil}}" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Harga Sewa Mobil</label>
                                                    <input type="text" name="hargasewa_mobil" value="{{$m->hargasewa_mobil}}" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Gambar Mobil</label>
                                                    <input type="file" name="gambar_mobil" value="{{ $m->gambar_mobil }}" class="form-control">
                                                </div>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            <!-- endmodal -->

                                <form action="/delete/{{$m->id}}"method="POST">
                                @csrf
                                @method('delete')
                                <div class="mt-2">
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                </div>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                    <a href="{{route('create')}}"><button type="button" class="btn btn-success">Create</button></a>
            </div>

           
    
@endsection