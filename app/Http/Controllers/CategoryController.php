<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Tipe;

class CategoryController extends Controller
{
    //PRODUK
    public function index_produk()
    {
        $produk = Categories::all();
        return view('admin/produk')->with('produks', $produk);
    }
    public function create_produk()
    {
         $produk = Categories::all();
         return view('admin/tambah_produk', compact('produk'));
    }
    public function store_produk(Request $request)
    {
        $produk                                    = new Categories;
        $produk->category                          = $request->category;
        $produk->save();
         
        return redirect('produk');
    }
    public function edit_produk($id)
    {
        $produk = Categories::whereId($id)->first();
        // var_dump($cctv);die;
        return view('admin/edit-produk')->with('produk', $produk);
    }
    public function update_produk(Request $request, $id)
    {
        $produk                                    = Categories::find($id);
        $produk->category                          = $request->category;

        $produk->save();
        
        return redirect('produk');
    }
    public function delete_produk($id)
    {
        $produk = Categories::find($id);
        $produk->delete();
        // var_dump($cctv);die;
        return redirect('produk');
    }
    //PROJECT_REFERENCE
    public function index_project()
    {
        $project = Tipe::all();
        return view('admin/project')->with('project', $project);
    }
    public function create_project()
    {
         $project = Tipe::all();
         return view('admin/tambah_project', compact('project'));
    }
    public function store_project(Request $request)
    {
        $project                                    = new Tipe;
        $project->jenis_klien                       = $request->jenis_klien;
        $project->save();
         
        return redirect('project');
    }
    public function edit_project($id)
    {
        $project = Tipe::whereId($id)->first();
        // var_dump($cctv);die;
        return view('admin/edit-project')->with('project', $project);
    }
    public function update_project(Request $request, $id)
    {
        $project                                    = Tipe::find($id);
        $project->jenis_klien                       = $request->jenis_klien;

        $project->save();
        
        return redirect('project');
    }
    public function delete_project($id)
    {
        $project = Tipe::find($id);
        $project->delete();
        // var_dump($cctv);die;
        return redirect('project');
    }
}
