<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatePengeluaranRequest;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = \App\Models\Pengeluaran::latest();
        $query->whereBetween('created_at', [now()->startOfMonth(), now()->endOfMonth()]);
        $data['pengeluaran'] = $query->get();
        return view('/Pengeluaran/pengeluaran_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/Pengeluaran/pengeluaran_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->validate(rules: [
            'nama' => 'required',
            'harga' => 'required|numeric',
            'jumlah' => 'required|numeric',
            'total' => 'nullable',
            'admin_id' => 'nullable',
        ]);
        $requestData['admin_id'] = auth()->id();
        $requestData['total'] = $requestData['jumlah'] * $requestData['harga'];
        $pengeluaran = new \App\Models\Pengeluaran();
        $pengeluaran->fill($requestData);
        $pengeluaran->save();
        if ($pengeluaran) {
            session()->flash('success', 'Data berhasil ditambahkan!');
        } else {
            session()->flash('error', 'Terjadi kesalahan, Data gagal ditambahkan!');
        }
        return redirect('/Pengeluaran');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengeluaran $pengeluaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengeluaran $pengeluaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            $requestData = $request->validate([
                'nama' => 'required',
                'harga' => 'required|numeric',
                'jumlah' => 'required|numeric',
                'total' => 'nullable',
                'admin_id' => 'nullable',
        ]);
        $requestData['total'] = $requestData['jumlah'] * $requestData['harga'];
        $requestData['admin_id'] = auth()->id();
        $pengeluaran = \App\Models\Pengeluaran::findOrFail($id);
        $pengeluaran->update($requestData);
        if ($pengeluaran) {
            session()->flash('success', 'Data berhasil diubah!');
        } else {
            session()->flash('error', 'Terjadi kesalahan, Data gagal diubah!');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pesanan = \App\Models\Pengeluaran::findOrFail($id);
        $pesanan->delete();
        if ($pesanan) {
            session()->flash('success', 'Data berhasil dihapus!');
        } else {
            session()->flash('error', 'Terjadi kesalahan, Data gagal dihapus!');
        } 
        return back();
    }
}
