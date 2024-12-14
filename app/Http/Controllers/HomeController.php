<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['menu'] = \App\Models\Menu::latest()->get();

        $query = \App\Models\pesanan::latest();
        $query->whereBetween('created_at', [now()->startOfMonth(), now()->endOfMonth()]);
        $data['jual'] = $query->get();

        $penjualan = \App\Models\Menu::
        whereIn('kategori', ['minuman-kopi', 'minuman-teh', 'minuman-milkshake','minuman-others', 'makanan', 'lainnya'])  // Filter by status
        ->selectRaw('kategori, count(id) as total')
        ->groupBy('kategori')
        ->get();
        
        $data['penjualan'] = $penjualan;

        $query = \App\Models\Pengeluaran::latest();
        $query->whereBetween('created_at', [now()->startOfMonth(), now()->endOfMonth()]);
        $data['keluar'] = $query->get();


        return view('admin_index', $data);
    }
}
