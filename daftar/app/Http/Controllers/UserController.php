<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $req){
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = '';
        $user->role = 'user';
        $user->jurusan = $req->jurusan;
        $user->nomor_wa = $req->nomor_wa;
        $user->alasan = $req->alasan;
        $user->save();

        return response()->json([
            'status' => 'berhasil',
            'data'  => $user
        ], 200);
    }
}
