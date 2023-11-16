<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller
{
    public function index() 
    {
        $education = Education::all();
        return view('admin/education')->with('education', $education);
    }
    public function create()
    {
        return view('admin/tambah_education');
    }
    public function store(Request $request)
    {
        $education                                    = new Education();
        $education->nama_education                    = $request->nama_education;
        $education->alamat                            = $request->alamat;
        $education->save();

        return redirect('education');
    }
    public function edit($id)
    {
        $education = Education::whereId($id)->first();
        return view('admin/edit-education')->with('education', $education);
    }
    public function update(Request $request, $id)
    {
        $education                                    = Education::find($id);
        $education->nama_education                    = $request->nama_education;
        $education->alamat                            = $request->alamat;
        
        $education->save();

        return redirect('education');
    }
}
