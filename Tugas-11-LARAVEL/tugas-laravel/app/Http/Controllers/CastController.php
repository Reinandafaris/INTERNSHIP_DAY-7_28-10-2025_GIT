<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use Illuminate\Http\Request;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $casts = Cast::all();
        return view('cast.index', compact('casts'));
    }

    public function create()
    {
        return view('cast.create');
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama' => 'required|min:3',
            'umur' => 'required|integer',
            'bio' => 'required',
        ]);

        Cast::create([
            'nama' => $request->input('nama'),
            'umur' => $request->input('umur'),
            'bio' => $request->input('bio'),
        ]);

        return redirect('/cast')->with('success', 'Data cast berhasil ditambahkan!');
    }

    public function show($id)
    {
        $cast = Cast::find($id);
        return view('cast.show', compact('cast'));
    }

    public function edit($id)
    {
        $cast = Cast::find($id);
        return view('cast.edit', compact('cast'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|min:3',
            'umur' => 'required|integer',
            'bio' => 'required',
        ]);

        $cast = Cast::find($id);
        $cast->update([
            'nama' => $request->input('nama'),
            'umur' => $request->input('umur'),
            'bio' => $request->input('bio'),
        ]);

        return redirect('/cast')->with('success', 'Data cast berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $cast = Cast::find($id);
        $cast->delete();

        return redirect('/cast')->with('success', 'Data cast berhasil dihapus!');
    }
}
