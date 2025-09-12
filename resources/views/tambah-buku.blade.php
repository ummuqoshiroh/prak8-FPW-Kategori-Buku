@extends('app')


@section('content')
    <h1>Welcome To Tambah Buku Page</h1>
    <form action="/simpan-buku" method="post">
        @csrf
        <div>
            <label for="">Judul</label>
            <input type="text" name="judul">
        </div>
        <div>
            <label for="">Pengarang</label>
            <input type="text" name="pengarang">
        </div>
        <div>
            <label for="">Penerbit</label>
            <input type="text" name="penerbit">
        </div>
        <div>
            <button type="Submit">Simpan</button>
        </div>
    </form>
@endsection
