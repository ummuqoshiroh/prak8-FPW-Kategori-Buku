@extends('app')

@section('content')
    <h1>Edit Buku</h1>

    <form action="/buku/{{ $buku->id }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Judul</label>
            <input type="text" name="judul" value="{{ $buku->judul }}" required>
        </div>

        <div>
            <label>Pengarang</label>
            <input type="text" name="pengarang" value="{{ $buku->pengarang }}" required>
        </div>

        <div>
            <label>Penerbit</label>
            <input type="text" name="penerbit" value="{{ $buku->penerbit }}" required>
        </div>

        <div>
            <button type="submit">Update</button>
            <a href="/buku"><button type="button">Batal</button></a>
        </div>
    </form>
@endsection
