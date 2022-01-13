<body>
    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <div>
        <a href="{{route('images.create')}}">Tambah</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($images as $image)
                <tr>
                    <td>{{ $loop->iteration }}.</td>
                    <td><img src="{{ $image->image }}" width="150px"></td>
                    <td>
                        <a href="{{ route('images.edit', $image) }}">Ubah</a>
                        
                        <div style="margin-left:10px; float: right;">
                            <form action="{{ route('images.destroy', $image) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" >Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>