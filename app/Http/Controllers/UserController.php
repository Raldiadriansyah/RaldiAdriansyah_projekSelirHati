<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data['user'] = \App\Models\User::latest()->paginate(10);
        return view('/User/user_index', $data);
    }
    public function destroy(string $id)
    {
        $pesanan = \App\Models\User::findOrFail($id);
        $pesanan->delete();
        if ($pesanan) {
            session()->flash('success', 'Data berhasil dihapus!');
        } else {
            session()->flash('error', 'Terjadi kesalahan, Data gagal dihapus!');
        }
        return back();
    }
    public function update(Request $request, string $id)
    {
            $requestData = $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        $user = \App\Models\User::findOrFail($id);
        $user->update($requestData);
        if ($user) {
            session()->flash('success', 'Data berhasil diubah!');
        } else {
            session()->flash('error', 'Terjadi kesalahan, Data gagal diubah!');
        }
        return back();
    }
}
