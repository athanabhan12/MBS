<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SecuritySystem;

class SecuritySystemController extends Controller
{
    public function index() 
    {
        $securitysystem = SecuritySystem::all();
        return view('admin/security_system')->with('securitysystem', $securitysystem);
    }
    public function create()
    {
        return view('admin/tambah_securitysystem');
    }
    public function store(Request $request)
    {
        $securitysystem                                    = new SecuritySystem;
        $securitysystem->nama_securitysystem               = $request->nama_securitysystem;
        $securitysystem->deskripsi                         = $request->deskripsi;
        $securitysystem->fungsi                            = $request->fungsi;
        if($request->file('image')) {
            $securitysystem['image'] = $request->file('image')->store('post-images');
        }
        $securitysystem->save();

        return redirect('security_system');
    }
    public function edit($id)
    {
        $securitysystem = SecuritySystem::whereId($id)->first();
        // var_dump($securitysystem);die;
        return view('admin/edit-securitysystem')->with('securitysystem', $securitysystem);
    }
    public function update(Request $request, $id)
    {
        $securitysystem                                    = SecuritySystem::find($id);
        $securitysystem->nama_securitysystem               = $request->nama_securitysystem;
        $securitysystem->deskripsi                         = $request->deskripsi;
        $securitysystem->fungsi                            = $request->fungsi;

        $securitysystem->save();
       

        return redirect('security_system');
    }
    public function hapus($id){
        $securitysystem = SecuritySystem::find($id);
        $securitysystem->delete();
        // var_dump($securitysystem);die;
        return redirect('securitysystem');
    }
    public function detail($id)
    {
        $securitysystem = SecuritySystem::all();
        return view('admin/detail_securitysystem')->with('securitysystem', $securitysystem);
    }
}
