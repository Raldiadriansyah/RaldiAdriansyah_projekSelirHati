<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateMenuRequest;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        $query = \App\Models\Menu::latest();

        if ($request->has('kategori') && $request->kategori) {

            if ($request->kategori == 'minuman') {
                $query->where('kategori', 'like', 'minuman-%');
            } else {
                $query->where('kategori', $request->kategori);
            }
        }
        $data['menu'] = $query->paginate(10);
        $data['kategori'] = $request->kategori ?? 'Semua';
        return view('/Menu/Menu_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/Menu/Menu_Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->validate(rules: [
            'nama' => 'required',
            'harga' => 'required:numeric',
            'kategori' => 'required|in:minuman-kopi,minuman-teh,minuman-milkshake,minuman-others,makanan,lainnya',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:5120',
            'stok' => 'required|in:Tersedia,Kosong',
            'admin_id' => 'nullable',
        ]);
        $requestData['admin_id'] = auth()->id();
        $menu = new \App\Models\Menu();
        $menu->fill(attributes: $requestData);
        $menu->foto = $request->file('foto')->store('Menu', 'public');
        $menu->save();
        flash(message: 'Menu Berhasil Ditambahkan')->success();
        return redirect('/Menu');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['menu'] = \App\Models\Menu::findOrFail($id);
        return view('/Menu/Menu_Update', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $requestData = $request->validate([
            'nama' => 'required',
            'harga' => 'required:numeric',
            'kategori' => 'required|in:minuman-kopi,minuman-teh,minuman-milkshake,minuman-others,makanan,lainnya',
            'foto' => 'image|mimes:jpeg,png,jpg|max:5120|nullable',
            'stok' => 'required|in:Tersedia,Kosong',
        ]);
        $menu = \App\Models\Menu::findOrFail($id);
        $menu->fill($requestData);
        if ($request->hasFile('foto')) {
            Storage::delete($menu->foto);
            $menu->foto = $request->file('foto')->store('Menu', 'public');
        }
        $menu->save();
        flash('Data Menu sudah di Ubah')->success();
        return redirect('/Menu');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu = \App\Models\Menu::findOrFail($id);
        if ($menu->foto != null && Storage::exists($menu->foto)) {
            Storage::delete($menu->foto);
        }
        $menu->delete();
        flash('Data Menu Dihapus')->success();
        return back();
    }
}
