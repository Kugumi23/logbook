<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\visitors;


class visitorsController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nama_teknisi'      => 'required|string|max:50',
            'nama_vendor'       => 'required|string|in:TELKOM,ICONNET,BIZNET',
            'keterangan'        => 'required|string|max:150'
        ]);

        $visitors = new Visitors();
        $visitors->nama_teknisi = $validasi['nama_teknisi'];
        $visitors->nama_vendor = $validasi['nama_vendor'];
        $visitors->waktu_kedatangan = Carbon::now('Asia/Pontianak');
        $visitors->waktu_kepulangan = null;
        $visitors->keterangan = $validasi['keterangan'];
        $visitors->save();

        return redirect()->route('visitors.index')->with('success', 'Data telah tersimpan');
    }

    public function create()
    {
        return view('logbook');
    }

    public function showAll()
    {
        $result = visitors::whereNotNull('waktu_kepulangan')->get();
        return view('history', ['visitors' => $result]);
    }

    public function foredit()
    {
        $result = visitors::all();
        return view('progress', ['visitors' => $result]);
    }

    public function update(Request $request)
    {
        $id_teknisi = $request->id_teknisi;
        $result = visitors::where('id', $id_teknisi)
            ->update([
                'waktu_kepulangan' => Carbon::now('Asia/Pontianak'),
            ]);
        if ($result) {
            return redirect()->route('visitors.index')->with('success', 'Data telah di upadate');
        } else {
            return redirect()->route('visitors.index')->with('error', 'Data gagal diupdate');
        }
    }
}
