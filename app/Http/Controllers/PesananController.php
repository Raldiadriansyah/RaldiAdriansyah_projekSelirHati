<?php

namespace App\Http\Controllers;

use App\Models\pesanan;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatepesananRequest;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $makanan = \App\Models\Menu::latest()->where('kategori', 'makanan')->get();
        $lainnya = \App\Models\Menu::latest()->where('kategori', 'lainnya')->get();
        $kopi = \App\Models\Menu::latest()->where('kategori', 'minuman-kopi')->get();
        $teh = \App\Models\Menu::latest()->where('kategori', 'minuman-teh')->get();
        $milk = \App\Models\Menu::latest()->where('kategori', 'minuman-milkshake')->get();
        $others = \App\Models\Menu::latest()->where('kategori', 'minuman-others')->get();

        $data['makanan'] = $makanan;
        $data['lainnya'] = $lainnya;
        $data['kopi'] = $kopi;
        $data['teh'] = $teh;
        $data['milk'] = $milk;
        $data['others'] = $others;
        return view('/Customer/Customer_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/Customer/customer_index  ');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->validate([
            'menu_id' => 'required|exists:menus,id',
            'admin_id' => 'nullable',
            'nama' => 'required|string|max:255',
            'jumlah' => 'required|numeric|min:1',
            'harga' => 'required|numeric',
            'total' => 'nullable',
            'status' => 'nullable',
        ]);
        $requestData['total'] = $requestData['jumlah'] * $requestData['harga'];
        $requestData['admin_id'] = auth()->id();
        $requestData['status'] = $requestData['status'] ?? 'baru';
        $pesanan = new \App\Models\pesanan();
        $pesanan->fill($requestData);
        $pesanan->save();
        if ($pesanan) {
            session()->flash('success', 'Pesanan berhasil dibuat!');
        } else {
            session()->flash('error', 'Terjadi kesalahan, pesanan gagal dibuat!');
        }
        return back();
    }
    

    /**
     * Display the specified resource.
     */
    public function show(pesanan $pesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['menu'] = \App\Models\pesanan::findOrFail($id);
        return view('/Penjualan/pesanan_Update', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            $requestData = $request->validate([
            'menu_id' => 'required|exists:menus,id',
            'admin_id' => 'nullable',
            'jumlah' => 'required|numeric',
            'harga' => 'required|numeric',
            'total' => 'nullable',
            'status' => 'nullable',
        ]);
        $requestData['total'] = $requestData['jumlah'] * $requestData['harga'];
        $pesanan = \App\Models\pesanan::findOrFail($id);
        $pesanan->update($requestData);
        if ($pesanan) {
            session()->flash('success', 'Pesanan berhasil diubah!');
        } else {
            session()->flash('error', 'Terjadi kesalahan, Pesanan gagal diubah!');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pesanan = \App\Models\pesanan::findOrFail($id);
        $pesanan->delete();
        if ($pesanan) {
            session()->flash('success', 'Pesanan berhasil dihapus!');
        } else {
            session()->flash('error', 'Terjadi kesalahan, Pesanan gagal dihapus!');
        }
        return back();
    }
}
