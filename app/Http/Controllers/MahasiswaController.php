<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
    $mahasiswas = \App\Models\Mahasiswa::all();
    return view('mahasiswa.index', compact('mahasiswas'));
    }

   public function store(Request $request)
{
    $request->validate([
        'nim' => 'required|unique:mahasiswas',
        'nama' => 'required',
        'jurusan' => 'required',
    ]);

    \App\Models\Mahasiswa::create([
        'nim' => $request->nim,
        'nama' => $request->nama,
        'jurusan' => $request->jurusan,
    ]);

    return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil ditambahkan!'); 
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}