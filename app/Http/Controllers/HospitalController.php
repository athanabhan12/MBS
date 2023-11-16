<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospital;

class HospitalController extends Controller
{
    public function index() 
    {
        $hospital = Hospital::all();
        return view('admin/hospital')->with('hospital', $hospital);
    }
    public function create()
    {
        return view('admin/tambah_hospital');
    }
    public function store(Request $request)
    {
        $hospital                                    = new Hospital();
        $hospital->nama_hospital                     = $request->nama_hospital;
        $hospital->alamat                            = $request->alamat;

        $hospital->save();

        return redirect('hospital');
    }
    public function edit($id)
    {
        $hospital = Hospital::whereId($id)->first();
        return view('admin/edit-hospital')->with('hospital', $hospital);
    }
    public function update(Request $request, $id)
    {
        $hospital                                    = Hospital::find($id);
        $hospital->nama_hospital                     = $request->nama_hospital;
        $hospital->alamat                            = $request->alamat;

        $hospital->save();

        return redirect('hospital');
    }
}
