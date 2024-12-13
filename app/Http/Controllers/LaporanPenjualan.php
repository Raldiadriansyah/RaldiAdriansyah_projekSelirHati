<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanPenjualan extends Controller
{
    public function index(Request $request){
        $models = \App\Models\pesanan::query();
        $models->where('status', 'selesai');
        if ($request->filled('tanggal_mulai')){
            $models->whereDate('created_at', '>=', $request->tanggal_mulai);
        }
        if ($request->filled('tanggal_akhir')){
            $models->whereDate('created_at', '<=', $request->tanggal_akhir);
        }
        $data['models'] = $models->latest()->get();
        return view('/LaporanPenjualan/laporan_penjualan_index', $data);
    }
    public function create()
    {
        return view('/LaporanPenjualan/laporan_penjualan_create');
    }
}
