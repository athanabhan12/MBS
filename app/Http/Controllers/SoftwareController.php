<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Software;
use Illuminate\View\View;

class SoftwareController extends Controller
{
    public function index() 
    {
        $software = Software::all();
        return view('admin/software')->with('software', $software);
    }
    public function create()
    {
        return view('admin/tambah_software');
    }
    public function store(Request $request)
    {
        $software                                    = new Software;
        $software->nama_software                         = $request->nama_software;
        $software->deskripsi                         = $request->deskripsi;
        $software->fungsi                            = $request->fungsi;
        if($request->file('image')) {
            $software['image'] = $request->file('image')->store('post-images');
        }
        $software->save();

        return redirect('software');
    }
    public function edit($id)
    {
        $software = Software::whereId($id)->first();
        // var_dump($software);die;
        return view('admin/edit-software')->with('software', $software);
    }
    public function update(Request $request, $id)
    {
        $software                                    = Software::find($id);
        $software->nama_software                         = $request->nama_software;
        $software->deskripsi                         = $request->deskripsi;
        $software->fungsi                            = $request->fungsi;

        $software->save();
       

        return redirect('software');
    }
    public function hapus($id){
        $software = Software::find($id);
        $software->delete();
        // var_dump($software);die;
        return redirect('software');
    }
    public function detail(string $id): View
    {
        $software = Software::findOrFail($id);
        return view('admin/detail_software', compact('software'));
    }
}
