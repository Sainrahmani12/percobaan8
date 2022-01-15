@extends('master')
@section('content')

<div class="header-body container">
    <h1 class="text-center dt-mobil">Identitas Peminjam</h1>
    <div class="row align-items-center py-4"></div>
    <table class="table align-items-center table-dark">
        <thead class="thead-dark">
            <tr>
                <th scope="col" class="sort" data-sort="name">No</th>
                <th scope="col" class="sort" data-sort="name">Nik</th>
                <th scope="col" class="sort" data-sort="budget">Nama Peminjam</th>
                <th scope="col" class="sort" data-sort="budget">Nama Mobil</th>
                <th scope="col" class="sort" data-sort="status">Jaminan</th>
                <th scope="col" class="sort" data-sort="status">Supir</th>
                <th scope="col" class="sort" data-sort="status">Foto Peminjam</th>
                <th scope="col" class="sort" data-sort="status">Action</th>
            </tr>
        </thead>
        <tbody class="list">
            @foreach ($identitas as $i)
            <tr>
                <td>{{$i->id}}</td>
                <td>{{$i->nik}}</td>
                <td>{{$i->user->name}}</td>
                <td>{{$i->datamobil->nama_mobil}}</td>
                <td>{{$i->jaminan}}</td>
                <td>{{$i->supir?->nama}}</td>
                <td><img src="{{ $i->foto_peminjam }}" width="75" alt=""></td>
                <td>
                    <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#modalidentitas{{$i->id}}"><i class="fas fa-pen ms-2"></i></button>

                    <!-- Modal -->
                    <div class="modal fade" id="modalidentitas{{$i->id}}" tabindex="-1" role="dialog" aria-labelledby="modalidentitasLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalidentitasLabel">Identitas</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('ngedit', $i->id)}}" enctype="multipart/form-data" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nama Peminjam</label>
                                            <input type="text" name="user_id" value="{{$i->user->name}}" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Nama Mobil</label>
                                            <select class="form-select form-control input-fixed" name="datamobil_id" required>
                                                <option value selected="">--Pilih Mobil--</option>
                                                @foreach($mobil as $m)
                                                <option value="{{$m->id}}">{{$m->nama_mobil}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Jaminan</label>
                                            <input type="text" name="jaminan" value="{{$i->jaminan}}" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Supir</label>
                                            <select class="form-select form-control input-fixed" name="supir_id" required>
                                                <option value selected="">--Pilih Supir--</option>
                                                @foreach($supir as $s)
                                                <option value="{{$s->id}}">{{$s->nama}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Peminjaman</label>
                                            <input type="date" name="peminjaman" class="form-control">
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Pengembalian</label>
                                            <input type="date" name="pengembalian" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Foto Peminjam</label>
                                            <input type="file" name="foto_peminjam" value="{{ $i->foto_peminjam }}" class="form-control">
                                        </div>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- endmodal -->
                    <form action="/hapus/{{$i->id}}" method="POST">
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
</div>
</div>

@endsection