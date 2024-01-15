<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; 

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $pengguna = User::all();
        return view('admin/pengguna')->with('penggunas', $pengguna);
    }
    public function create()
    {
        return view('admin/tambah_pengguna');
    }
    public function store(Request $request)
    {
       $validatedData = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email:dns|unique:users',
        'password' => 'required|min:5|max:255'

       ]);

       $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('pengguna')->with('success', 'Penambahan Data Berhasil');
    }

    public function edit($id)
    {
        $pengguna = User::whereId($id)->first();
        // var_dump($cctv);die;
        return view('admin/edit-user')->with('pengguna', $pengguna);
    }
    public function update(Request $request, $id)
    {
        $pengguna                                    = User::find($id);
        $pengguna->name                              = $request->name;
        $pengguna->email                             = $request->email;
        $pengguna->password                          = $request->password;

        $pengguna['password'] = Hash::make($pengguna['password']);

        $pengguna->save();
        
        return redirect('cctv');
    }

    public function delete($id)
    {
        $pengguna = User::find($id);
        $pengguna->delete();
        // var_dump($cctv);die;
        return redirect('cctv');
    }
}
