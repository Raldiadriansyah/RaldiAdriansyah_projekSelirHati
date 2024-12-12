<?php

namespace App\Http\Controllers;


use App\Models\pesanan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index(Request $request)
    {
        $query = \App\Models\pesanan::latest();

        if ($request->has('status') && $request->status) {
            $query->where('status', $request->status);
        } else {
            $query->where('status', 'baru');
        }
        $data['pesanan'] = $query->paginate(10);
        $data['status'] = $request->status ?? 'baru';
        return view('/Penjualan/Pesanan', $data);
    }
    public function update(Request $request, string $id)
    {
        //
    }
}
