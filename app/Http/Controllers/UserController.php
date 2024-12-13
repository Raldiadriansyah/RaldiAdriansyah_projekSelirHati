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
        flash('Data Dihapus')->success();
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
        flash('Data Menu sudah di Ubah')->success();
        return back();
    }
}
