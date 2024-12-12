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
        $data['pengeluaran'] = \App\Models\Pengeluaran::latest()->paginate(10);
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
        flash(message: 'Data Berhasil Ditambahkan')->success();
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
        flash('Data sudah di Ubah')->success();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pesanan = \App\Models\Pengeluaran::findOrFail($id);
        $pesanan->delete();
        flash('Data Pengeluaran Dihapus')->success();
        return back();
    }
}
