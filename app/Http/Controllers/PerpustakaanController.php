<?php

namespace App\Http\Controllers;

use App\Models\Perpustakaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerpustakaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //pencarian
        $search = $request->search;
        if(strlen($search)){
            $perpustakaan = Perpustakaan::where('kode_buku','like',"%$search%")
            ->orWhere('judul', 'like' , "%$search%")
            ->orWhere('jenis_buku', 'like' ,"%$search%")
            ->paginate(5);
        } else {
            $perpustakaan = DB::table('perpustakaan')->paginate(5);
        }
        //fungsi eloquent menampilkan data menggunakan pagination
        return view('perpustakaan.index', ['perpustakaan'=>$perpustakaan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('perpustakaan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_buku' => 'required',
            'judul' => 'required',
            'pengarang' => 'required',
            'jenis_buku' => 'required',
            'harga' => 'required',
            'qty' => 'required',
        ]);
        Perpustakaan::create($request->all());
        return redirect()->route('perpustakaan.index')
            ->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($kode_buku)
    {
        $Perpustakaan = Perpustakaan::find($kode_buku);
        return view('perpustakaan.detail', compact('Perpustakaan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($kode_buku)
    {
        $Perpustakaan = Perpustakaan::find($kode_buku);
        return view('perpustakaan.edit', compact('Perpustakaan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $kode_buku)
    {
        $request->validate([
            'kode_buku' => 'required',
            'judul' => 'required',
            'pengarang' => 'required',
            'jenis_buku' => 'required',
            'harga' => 'required',
            'qty' => 'required',
        ]);
        Perpustakaan::find($kode_buku)->update($request->all());
        return redirect()->route('perpustakaan.index')
            ->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($kode_buku)
    {
        Perpustakaan::find($kode_buku)->delete();
        return redirect()->route('perpustakaan.index')
            ->with('success', 'Data Berhasil Dihapus');
    }
}
