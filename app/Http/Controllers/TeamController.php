<?php

namespace App\Http\Controllers;

use App\Models\Tim;
use Illuminate\Http\Request;
use Illuminate\View\View;
use DB;


class TeamController extends Controller
{
    public function index() 
    {
        $tims = Tim::all();
        return view('admin/team')->with('tims', $tims);
    }
    public function create()
    {
        return view('admin/tambah_team');
    }
    public function store(Request $request)
    {
        $tims                                    = new Tim;
        $tims->nama                              = $request->nama;
        $tims->jabatan                           = $request->jabatan;
        $tims->whatsapp                          = $request->whatsapp;
        $tims->instagram                         = $request->instagram;
        if($request->file('image')) {
            $tims['image'] = $request->file('image')->store('post-images');
        }
        $tims->save();

        return redirect('team');
    }
    public function edit($id)
    {
        $tims = Tim::whereId($id)->first();
        return view('admin/edit-team')->with('tims', $tims);
    }
    public function update(Request $request, $id)
    {
        $tims                                    = Tim::find($id);
        $tims->nama                              = $request->nama;
        $tims->jabatan                           = $request->jabatan;
        $tims->whatsapp                          = $request->whatsapp;
        $tims->instagram                         = $request->instagram;
        if($request->file('image')) {
            $tims['image'] = $request->file('image')->store('post-images');
        }

        $tims->save();

        return redirect('team');
    }
    public function hapus($id){
        $tims = Tim::find($id);
        $tims->delete();
        // var_dump($tims);die;
        return redirect('team');
    }
    public function detail(string $id): View
    {
        $tims = Tim::findOrFail($id);

        return view('admin/detail_team', compact('tims'));
    }
}
