<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FB;

class FBController extends Controller
{
    public function index() 
    {
        $fb = FB::all();
        return view('admin/FB')->with('fb', $fb);
    }
    public function create()
    {
        return view('admin/tambah_fb');
    }
    public function store(Request $request)
    {
        $fb                                    = new FB();
        $fb->nama_finance                      = $request->nama_finance;
        $fb->alamat                            = $request->alamat;

        $fb->save();

        return redirect('FB');
    }
    public function edit($id)
    {
        $fb = FB::whereId($id)->first();
        return view('admin/edit-fb')->with('fb', $fb);
    }
    public function update(Request $request, $id)
    {
        $fb                                    = FB::find($id);
        $fb->nama_finance                      = $request->nama_finance;
        $fb->alamat                            = $request->alamat;

        $fb->save();

        return redirect('FB');
    }
}
