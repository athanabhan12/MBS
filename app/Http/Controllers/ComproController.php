<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compro;

class ComproController extends Controller
{
    public function index_compro()
    {
        $compro = Compro::all();
        return view('admin/compro')->with('compro', $compro);
    }
    public function create_compro()
    {
         $compro = Compro::all();
         return view('admin/tambah_compro', compact('compro'));
    }
    public function store_compro(Request $request)
    {
        $compro                                 = new Compro;
        $compro->nama_compro                    = $request->nama_compro;
        $compro->save();
         
        return redirect('compro');
    }
    public function edit_compro($id)
    {
        $compro = Compro::whereId($id)->first();
        return view('admin/edit-compro')->with('compro', $compro);
    }
    public function update_compro(Request $request, $id)
    {
        $compro                                    = Compro::find($id);
        $compro->nama_compro                       = $request->nama_compro;

        $compro->save();
        
        return redirect('compro');
    }
    public function delete_compro($id)
    {
        $compro = Compro::find($id);
        $compro->delete();
        // var_dump($cctv);die;
        return redirect('compro');
    }
}
