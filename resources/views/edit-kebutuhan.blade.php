@extends('app')

@section('content')
    <h1>Edit Kebutuhan</h1>

    <form action="/kebutuhan/{{ $item->id }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" value="{{ $item->nama_barang }}" required>
        </div>

        <div>
            <label>Jumlah</label>
            <input type="number" name="jumlah" value="{{ $item->jumlah }}" required>
        </div>

        <div>
            <label>Keterangan</label>
            <input type="text" name="keterangan" value="{{ $item->keterangan }}">
        </div>

        <div>
            <button type="submit">Update</button>
            <a href="/buku"><button type="button">Batal</button></a>
        </div>
    </form>
@endsection
