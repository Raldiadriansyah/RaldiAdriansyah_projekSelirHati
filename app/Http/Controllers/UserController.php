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
}
