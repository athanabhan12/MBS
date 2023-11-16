<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Isp;
use Illuminate\View\View;

class ISPController extends Controller
{
    public function index() 
    {
        $isp = Isp::all();
        return view('admin/isp')->with('isp', $isp);
    }
    public function create()
    {
        return view('admin/tambah_isp');
    }
    public function store(Request $request)
    {
        $isp                                    = new Isp;
        $isp->nama_isp                          = $request->nama_isp;
        $isp->deskripsi                         = $request->deskripsi;
        $isp->fungsi                            = $request->fungsi;
        if($request->file('image')) {
            $isp['image'] = $request->file('image')->store('post-images');
        }
        $isp->save();

        return redirect('isp');
    }
    public function edit($id)
    {
        $isp = Isp::whereId($id)->first();
        // var_dump($isp);die;
        return view('admin/edit-isp')->with('isp', $isp);
    }
    public function update(Request $request, $id)
    {
        $isp                                    = Isp::find($id);
        $isp->nama_isp                          = $request->nama_isp;
        $isp->deskripsi                         = $request->deskripsi;
        $isp->fungsi                            = $request->fungsi;

        $isp->save();
       

        return redirect('isp');
    }
    public function hapus($id){
        $isp = Isp::find($id);
        $isp->delete();
        // var_dump($isp);die;
        return redirect('isp');
    }
    public function detail(string $id): View
    {
        $isp = Isp::findOrFail($id);
        return view('admin/detail_isp', compact('isp'));
    }
}
