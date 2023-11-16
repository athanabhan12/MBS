<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use Illuminate\View\View;

class ServicesController extends Controller
{
    public function index() 
    {
        $services = Services::all();
        return view('admin/services')->with('services', $services);
    }
    public function create()
    {
        return view('admin/tambah_services');
    }
    public function store(Request $request)
    {
        $services                                    = new Services;
        $services->nama_services                     = $request->nama_services;
        $services->deskripsi                         = $request->deskripsi;
        $services->fungsi                            = $request->fungsi;
        if($request->file('image')) {
            $services['image'] = $request->file('image')->store('post-images');
        }
        $services->save();

        return redirect('services');
    }
    public function edit($id)
    {
        $services = services::whereId($id)->first();
        // var_dump($services);die;
        return view('admin/edit-services')->with('services', $services);
    }
    public function update(Request $request, $id)
    {
        $services                                    = Services::find($id);
        $services->nama_services                     = $request->nama_services;
        $services->deskripsi                         = $request->deskripsi;
        $services->fungsi                            = $request->fungsi;

        $services->save();
       

        return redirect('services');
    }
    public function hapus($id){
        $services = Services::find($id);
        $services->delete();
        // var_dump($services);die;
        return redirect('services');
    }
    public function detail(string $id): View
    {
        $services = Services::findOrFail($id);
        return view('admin/detail_services', compact('services'));
    }
}
