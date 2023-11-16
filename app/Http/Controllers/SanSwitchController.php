<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SanSwitch;
use Illuminate\View\View;

class SanSwitchController extends Controller
{
    public function index() 
    {
        $san_switch = SanSwitch::all();
        return view('admin/san_switch')->with('san_switch', $san_switch);
    }
    public function create()
    {
        return view('admin/tambah_san_switch');
    }
    public function store(Request $request)
    {
        $san_switch                                    = new SanSwitch;
        $san_switch->nama_san_switch                   = $request->nama_san_switch;
        $san_switch->deskripsi                         = $request->deskripsi;
        $san_switch->fungsi                            = $request->fungsi;
        if($request->file('image')) {
            $san_switch['image'] = $request->file('image')->store('post-images');
        }
        $san_switch->save();

        return redirect('san_switch');
    }
    public function edit($id)
    {
        $san_switch = SanSwitch::whereId($id)->first();
        // var_dump($san_switch);die;
        return view('admin/edit-san_switch')->with('san_switch', $san_switch);
    }
    public function update(Request $request, $id)
    {
        $san_switch                                    = SanSwitch::find($id);
        $san_switch->nama_san_switch                          = $request->nama_san_switch;
        $san_switch->deskripsi                         = $request->deskripsi;
        $san_switch->fungsi                            = $request->fungsi;

        $san_switch->save();
       

        return redirect('san_switch');
    }
    public function hapus($id){
        $san_switch = SanSwitch::find($id);
        $san_switch->delete();
        // var_dump($san_switch);die;
        return redirect('san_switch');
    }
    public function detail(string $id): View
    {
        $san_switch = SanSwitch::findOrFail($id);
        return view('admin/detail_san_switch', compact('san_switch'));
    }
}
