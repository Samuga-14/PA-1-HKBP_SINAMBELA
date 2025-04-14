<?php
namespace App\Http\Controllers;

use App\Models\BeritaGereja;
use Illuminate\Http\Request;

class BeritaGerejaController extends Controller
{
    public function index()
    {
        $data = BeritaGereja::all();
        return view('berita.index', compact('data'));
    }

    public function create()
    {
        return view('berita.create');
    }

    public function store(Request $request)
    {
        BeritaGereja::create($request->all());
        return redirect()->route('berita.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function show($id)
    {
        $item = BeritaGereja::findOrFail($id);
        return view('berita.show', compact('item'));
    }

    public function edit($id)
    {
        $item = BeritaGereja::findOrFail($id);
        return view('berita.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = BeritaGereja::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('berita.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        BeritaGereja::destroy($id);
        return redirect()->route('berita.index')->with('success', 'Data berhasil dihapus');
    }
}
