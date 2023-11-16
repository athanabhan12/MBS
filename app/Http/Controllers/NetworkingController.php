<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Networking;

class NetworkingController extends Controller
{
    public function index() 
    {
        $networking = Networking::all();
        return view('admin/networking')->with('networking', $networking);
    }
    public function create()
    {
        return view('admin/tambah_networking');
    }
    public function store(Request $request)
    {
        $networking                                    = new Networking;
        $networking->nama_network                      = $request->nama_network;
        $networking->deskripsi                         = $request->deskripsi;
        $networking->fungsi                            = $request->fungsi;
        if($request->file('image')) {
            $networking['image'] = $request->file('image')->store('post-images');
        }
        $networking->save();

        return redirect('networking');
    }
    public function edit($id)
    {
        $networking = Networking::whereId($id)->first();
        // var_dump($networking);die;
        return view('admin/edit-networking')->with('networking', $networking);
    }
    public function update(Request $request, $id)
    {
        $networking                                    = Networking::find($id);
        $networking->nama_networking                   = $request->nama_networking;
        $networking->deskripsi                         = $request->deskripsi;
        $networking->fungsi                            = $request->fungsi;

        $networking->save();
       

        return redirect('networking');
    }
    public function hapus($id){
        $networking = Networking::find($id);
        $networking->delete();
        // var_dump($networking);die;
        return redirect('networking');
    }
    public function detail($id)
    {
        $networking = Networking::all();
        return view('admin/detail_networking')->with('networking', $networking);
    }
}
