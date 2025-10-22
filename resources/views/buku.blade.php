@extends('app')

@section('content')
    <h1>Welcome To Buku Page</h1>
    <div>
        <a href="/tambah-buku"><button>Tambah Buku</button></a>
    </div>
    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($data as $buku)
            <tr>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->pengarang }}</td>
                <td>{{ $buku->penerbit }}</td>
                <td>{{ $buku->kategoriBuku->nama_kategori ?? '-' }}</td>
                <td>
                    <a href="/buku/{{ $buku->id }}/edit"><button>Edit</button></a>
                    <form action="/buku/{{ $buku->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
           @endforeach
        </tbody>
    </table>

    <hr>
    <h2>Daftar Kebutuhan Kost</h2>

    <form action="/simpan-kebutuhan" method="POST">
        @csrf
        <div>
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" required>
        </div>
        <div>
            <label>Jumlah</label>
            <input type="number" name="jumlah" required>
        </div>
        <div>
            <label>Keterangan</label>
            <input type="text" name="keterangan">
        </div>
        <div>
            <button type="submit">Tambah Kebutuhan</button>
        </div>
    </form>

    <br>
    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kebutuhan as $item)
                <tr>
                    <td>{{ $item->nama_barang }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>{{ $item->keterangan }}</td>
                    <td>
                        <a href="/kebutuhan/{{ $item->id }}/edit"><button>Edit</button></a>
                        <form action="/kebutuhan/{{ $item->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin hapus kebutuhan ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
