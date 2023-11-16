<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PC;
use Illuminate\View\View;

class PCController extends Controller
{
    public function index() 
    {
        $pc = PC::all();
        return view('admin/pc')->with('pc', $pc);
    }
    public function create()
    {
        return view('admin/tambah_pc');
    }
    public function store(Request $request)
    {
        $pc                                    = new PC;
        $pc->nama_komputer                     = $request->nama_komputer;
        $pc->deskripsi                         = $request->deskripsi;
        $pc->fungsi                            = $request->fungsi;
        if($request->file('image')) {
            $pc['image'] = $request->file('image')->store('post-images');
        }
        $pc->save();

        return redirect('pc');
    }
    public function edit($id)
    {
        $pc = PC::whereId($id)->first();
        // var_dump($pc);die;
        return view('admin/edit-pc')->with('pc', $pc);
    }
    public function update(Request $request, $id)
    {
        $pc                                    = PC::find($id);
        $pc->nama_pc                           = $request->nama_pc;
        $pc->deskripsi                         = $request->deskripsi;
        $pc->fungsi                            = $request->fungsi;

        $pc->save();
       

        return redirect('pc');
    }
    public function hapus($id){
        $pc = PC::find($id);
        $pc->delete();
        // var_dump($pc);die;
        return redirect('pc');
    }
    public function detail(string $id): View
    {
        $pc = PC::findOrFail($id);
        return view('admin/detail_pc', compact('pc'));
    }
}
