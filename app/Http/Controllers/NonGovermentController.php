<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NonGoverment;

class NonGovermentController extends Controller
{
    public function index() 
    {
        $nongoverment = NonGoverment::all();
        return view('admin/non_goverment')->with('nongoverment', $nongoverment);
    }
    public function create()
    {
        return view('admin/tambah_nongoverment');
    }
    public function store(Request $request)
    {
        $nongoverment                                    = new NonGoverment();
        $nongoverment->nama_nongoverment                 = $request->nama_nongoverment;
        $nongoverment->alamat                            = $request->alamat;

        $nongoverment->save();

        return redirect('non_goverment');
    }
    public function edit($id)
    {
        $nongoverment = NonGoverment::whereId($id)->first();
        return view('admin/edit-nongoverment')->with('nongoverment', $nongoverment);
    }
    public function update(Request $request, $id)
    {
        $nongoverment                                    = NonGoverment::find($id);
        $nongoverment->nama_nongoverment                 = $request->nama_nongoverment;
        $nongoverment->alamat                            = $request->alamat;

        $nongoverment->save();

        return redirect('non_goverment');
    }
}
