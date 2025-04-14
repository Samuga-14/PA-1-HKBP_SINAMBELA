<?php

namespace App\Http\Controllers;

use App\Models\WartaJemaat;
use Illuminate\Http\Request;

class WartaJemaatController extends Controller
{
    public function index()
    {
        $data = WartaJemaat::all();
        return view('warta.index', compact('data'));
    }

    public function create()
    {
        return view('warta.create');
    }

    public function store(Request $request)
    {
        WartaJemaat::create($request->all());
        return redirect()->route('warta.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function show($id)
    {
        $item = WartaJemaat::findOrFail($id);
        return view('warta.show', compact('item'));
    }

    public function edit($id)
    {
        $item = WartaJemaat::findOrFail($id);
        return view('warta.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = WartaJemaat::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('warta.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        WartaJemaat::destroy($id);
        return redirect()->route('warta.index')->with('success', 'Data berhasil dihapus');
    }
}