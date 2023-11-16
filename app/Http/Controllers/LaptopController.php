<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laptop;
use Illuminate\View\View;

class LaptopController extends Controller
{
    public function index() 
    {
        $laptop = Laptop::all();
        return view('admin/laptop')->with('laptop', $laptop);
    }
    public function create()
    {
        return view('admin/tambah_laptop');
    }
    public function store(Request $request)
    {
        $laptop                                    = new Laptop;
        $laptop->nama_laptop                       = $request->nama_laptop;
        $laptop->deskripsi                         = $request->deskripsi;
        $laptop->fungsi                            = $request->fungsi;
        if($request->file('image')) {
            $laptop['image'] = $request->file('image')->store('post-images');
        }
        $laptop->save();

        return redirect('laptop');
    }
    public function edit($id)
    {
        $laptop = Laptop::whereId($id)->first();
        // var_dump($laptop);die;
        return view('admin/edit-laptop')->with('laptop', $laptop);
    }
    public function update(Request $request, $id)
    {
        $laptop                                    = Laptop::find($id);
        $laptop->nama_laptop                       = $request->nama_laptop;
        $laptop->deskripsi                         = $request->deskripsi;
        $laptop->fungsi                            = $request->fungsi;

        $laptop->save();
       

        return redirect('laptop');
    }
    public function hapus($id){
        $laptop = Laptop::find($id);
        $laptop->delete();
        // var_dump($laptop);die;
        return redirect('laptop');
    }
    public function detail(string $id): View
    {
        $laptop = Laptop::findOrFail($id);
        return view('admin/detail_laptop', compact('laptop'));
    }
}


