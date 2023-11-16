<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goverment;

class GovermentController extends Controller
{
    public function index() 
    {
        $goverment = Goverment::all();
        return view('admin/goverment')->with('goverment', $goverment);
    }
    public function create()
    {
        return view('admin/tambah_goverment');
    }
    public function store(Request $request)
    {
        $goverment                                    = new Goverment();
        $goverment->nama_goverment                    = $request->nama_goverment;
        $goverment->alamat                            = $request->alamat;

        $goverment->save();

        return redirect('goverment');
    }
    public function edit($id)
    {
        $goverment = Goverment::whereId($id)->first();
        return view('admin/edit-goverment')->with('goverment', $goverment);
    }
    public function update(Request $request, $id)
    {
        $goverment                                    = Goverment::find($id);
        $goverment->nama_goverment                    = $request->nama_goverment;
        $goverment->alamat                            = $request->alamat;

        $goverment->save();

        return redirect('goverment');
    }
}
