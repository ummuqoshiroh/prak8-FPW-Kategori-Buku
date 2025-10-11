<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Kebutuhan; 

class BukuController extends Controller
{
    public function index()
    {
        $dataBuku = Buku::all();
        $dataKebutuhan = class_exists(Kebutuhan::class) ? Kebutuhan::all() : collect();

        return view('buku', [
            'data' => $dataBuku,
            'kebutuhan' => $dataKebutuhan
        ]);
    }

    public function create()
    {
        return view('tambah-buku');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'pengarang' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
        ]);

        Buku::create($request->only(['judul','pengarang','penerbit']));

        return redirect('/buku')->with('success', 'Buku berhasil ditambahkan!');
    }

    public function storeKebutuhan(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'jumlah' => 'required|integer',
            'keterangan' => 'nullable|string|max:255',
        ]);

        if (class_exists(Kebutuhan::class)) {
            Kebutuhan::create($request->only(['nama_barang','jumlah','keterangan']));
        }

        return redirect('/buku')->with('success', 'Kebutuhan berhasil ditambahkan!');
    }

    // EDIT Buku
public function edit($id)
{
    $buku = Buku::findOrFail($id);
    return view('edit-buku', compact('buku'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'judul' => 'required|string|max:255',
        'pengarang' => 'required|string|max:255',
        'penerbit' => 'required|string|max:255',
    ]);

    $buku = Buku::findOrFail($id);
    $buku->update($request->all());

    return redirect('/buku')->with('success', 'Buku berhasil diupdate!');
}

public function destroy($id)
{
    $buku = Buku::findOrFail($id);
    $buku->delete();

    return redirect('/buku')->with('success', 'Buku berhasil dihapus!');
}

// EDIT Kebutuhan
public function editKebutuhan($id)
{
    $item = Kebutuhan::findOrFail($id);
    return view('edit-kebutuhan', compact('item'));
}

public function updateKebutuhan(Request $request, $id)
{
    $request->validate([
        'nama_barang' => 'required|string|max:255',
        'jumlah' => 'required|integer',
        'keterangan' => 'nullable|string|max:255',
    ]);

    $item = Kebutuhan::findOrFail($id);
    $item->update($request->all());

    return redirect('/buku')->with('success', 'Kebutuhan berhasil diupdate!');
}

public function destroyKebutuhan($id)
{
    $item = Kebutuhan::findOrFail($id);
    $item->delete();

    return redirect('/buku')->with('success', 'Kebutuhan berhasil dihapus!');
}


}
