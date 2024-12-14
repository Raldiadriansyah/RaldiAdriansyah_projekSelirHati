<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanPengeluaran extends Controller
{
    public function index(Request $request){
        $models = \App\Models\Pengeluaran::query();
        if ($request->filled('tanggal_mulai')){
            $models->whereDate('created_at', '>=', $request->tanggal_mulai);
        }
        if ($request->filled('tanggal_akhir')){
            $models->whereDate('created_at', '<=', $request->tanggal_akhir);
        }
        $data['models'] = $models->latest()->get();
        return view('/LaporanPengeluaran/laporan_pengeluaran_index', $data);
    }
    public function create()
    {
        return view('/LaporanPengeluaran/laporan_pengeluaran_create');
    }
}
