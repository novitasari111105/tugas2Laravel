<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Anggota;
use App\Models\Petugas;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function content(){
        $buku = Buku::all();
        $anggota = Anggota::all();
        $petugas = Petugas::all();
        return view('content',compact(['buku','anggota','petugas']));
        //dd($buku);
    }
    
        //
    

    /**
     * Show the form for creating a new resource.
     */
    public function master(){
        return view('template.master');

    }
      
    }