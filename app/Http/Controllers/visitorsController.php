<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\visitors;

class visitorsController extends Controller
{
    //
    public function index(){
        $visitors = visitors::all();
        return view('index');    
    }

    public function store(Request $request){
        $validasi = $request->validate([
            'nama_teknisi'      => 'required|string|max:50',
            'nama_vendor'       => 'required|string|in:TELKOM,ICONNET,BIZNET',
            'keterangan'        => 'required|string|max:150'
        ]);

        $visitors = new Visitors();
        $visitors->nama_teknisi = $validasi['nama_teknisi'];
        $visitors->nama_vendor = $validasi['nama_vendor'];
        $visitors->waktu_kedatangan = now();
        $visitors->waktu_kepulangan = null;
        $visitors->keterangan = $validasi['keterangan'];
        $visitors->save();
    }

    public function create(){
        return view('logbook');
    }
}
