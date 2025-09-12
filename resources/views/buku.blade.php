@extends('app')

@section('content')
    <h1>Welcome To Buku Page</h1>
    <div>
        <a href="/tambah-buku"><button>Tambah Buku</button></a>
    </div>
    <table border="1">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($data as $buku )
            <tr>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->pengarang }}</td>
                <td>{{ $buku->penerbit }}</td>
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
            </tr>
        </thead>
        <tbody>
            @foreach($kebutuhan as $item)
                <tr>
                    <td>{{ $item->nama_barang }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>{{ $item->keterangan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
