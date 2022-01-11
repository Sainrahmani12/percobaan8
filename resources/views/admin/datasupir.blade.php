@extends('master')
@section('content')

<h1 class="text-center dt-mobil">Data Supir</h1>

<div class="header-body container">
        <div class="row align-items-center py-4"></div>
                <table class="table align-items-center table-dark">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="sort" data-sort="name">Nama</th>
                            <th scope="col" class="sort" data-sort="budget">Alamat</th>
                            <th scope="col" class="sort" data-sort="status">Umur</th>
                            <th scope="col" class="sort" data-sort="status">Foto</th>
                            <th scope="col" class="sort" data-sort="status">Action</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        @foreach($supir as $s)
                        <tr>
                            <td>{{$s->nama}}</td>
                            <td>{{$s->alamat}} </td>
                            <td>{{$s->umur}}</td>
                            <td><img src="{{url('storage/' .$s->foto)}}" width="75px" alt=""></td>
                            <td>
                                <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#modalsupir{{$s->id}}"> <i class="fas fa-pen ms-2"></i></button>

                                <!-- Modal -->
                                <div class="modal fade" id="modalsupir{{$s->id}}" tabindex="-1" role="dialog" aria-labelledby="modalmobilLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalsupirLabel">Data Supir</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('editsupir', $s->id)}}" enctype="multipart/form-data" method="POST">
                                                @csrf
                                                @method('put')
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Nama Supir</label>
                                                    <input type="text" name="nama" value="{{ $s->nama}}" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Alamat</label>
                                                    <input type="text" name="alamat" value="{{ $s->alamat }}" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Umur</label>
                                                    <input type="text" name="umur" value="{{$s->umur}}" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Foto Supir</label>
                                                    <input type="file" name="foto" value="{{ $s->foto }}" class="form-control">
                                                </div>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            <!-- endmodal -->

                                <form action="/hapusupir/{{$s->id}}" method="POST">
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
                    <a href="{{route('nambahsupir')}}"><button type="button" class="btn btn-success">Create</button></a>
            </div>
@endsection