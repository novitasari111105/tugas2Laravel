<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $anggota = DB::table('anggota')->get();
        return view('anggota.index', compact('anggota'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anggota.anggota');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'kode_anggota'=> 'required',
            'nama_anggota'=> 'required',
            'jk_anggota'=> 'required',
            'jurusan_anggota'=> 'required',
            'no_telp_anggota'=> 'required|numeric|min10',
            'alama_anggotat'=> 'required'
        ]);

        $query=DB::table('anggota')->insert([
            'kode_anggota'=>$request['kode'],
            'nama_anggota'=>$request['nama'],
            'jk_anggota'=>$request['jk'],
            'jurusan_anggota'=>$request['jurusan'],
            'no_telp_anggota'=>$request['telp'],
            'alamat_anggota'=>$request['alamat'],
        ]);

        return redirect()->route('anggota.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $anggotas = DB::table('anggotas')->where('id',$id)->get();
        return view('anggota.show',compact('anggota'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $anggota = DB::table('anggotas')->where('id',$id)->get();
        return view('anggota.edit', compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'kode'=> 'required',
            'nama'=> 'required',
            'jk'=> 'required',
            'jurusan'=> 'required',
            'telp'=> 'required|numeric|min10',
            'alamat'=> 'required'
        ]);

        $query=DB::table('anggotas')->where('id',$id) ->update ([
            'kode_anggota'=>$request['kode'],
            'nama_anggota'=>$request['nama'],
            'jk_anggota'=>$request['jk'],
            'jurusan_anggota'=>$request['jurusan'],
            'no_telp_anggota'=>$request['telp'],
            'alamat_anggota'=>$request['alamat'],
        ]);

        return redirect()->route('anggota.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $anggota = DB::table('anggotas')->where('id',$id)->delete();
        return redirect()->route('anggota.index');
    }
}
