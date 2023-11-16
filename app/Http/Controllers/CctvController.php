<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cctv;
use illuminate\View\View;
use Illuminate\Support\Str;

class CctvController extends Controller
{
    public function index() 
    {
        $cctv = Cctv::all();
        return view('admin/cctv')->with('cctv', $cctv);
    }
    public function create()
    {
        return view('admin/tambah_cctv');
    }
    public function store(Request $request)
    {
        $cctv                                    = new Cctv;
        $cctv->nama_cctv                         = $request->nama_cctv;
        $cctv->deskripsi                         = $request->deskripsi;
        $cctv->fungsi                            = $request->fungsi;
        if($request->file('image')) {
            $cctv['image'] = $request->file('image')->store('post-images');
        }
        $cctv->save();

        return redirect('cctv');
    }
    public function edit($id)
    {
        $cctv = Cctv::whereId($id)->first();
        // var_dump($cctv);die;
        return view('admin/edit-cctv')->with('cctv', $cctv);
    }
    public function update(Request $request, $id)
    {
        $cctv                                    = Cctv::find($id);
        $cctv->nama_cctv                         = $request->nama_cctv;
        $cctv->deskripsi                         = $request->deskripsi;
        $cctv->fungsi                            = $request->fungsi;

        $cctv->save();
       

        return redirect('cctv');
    }
    public function hapus($id){
        $cctv = Cctv::find($id);
        $cctv->delete();
        // var_dump($cctv);die;
        return redirect('cctv');
    }
    public function detail(string $id): View
    {
        $cctv = Cctv::findOrFail($id);
        return view('admin/detail_cctv', compact('cctv'));
    }
}
