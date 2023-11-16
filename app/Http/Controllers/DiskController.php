<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disk;
use Illuminate\View\View;

class DiskController extends Controller
{
    public function index() 
    {
        $disk = Disk::all();
        return view('admin/disk')->with('disk', $disk);
    }
    public function create()
    {
        return view('admin/tambah_disk');
    }
    public function store(Request $request)
    {
        $disk                                    = new Disk;
        $disk->nama_disk                         = $request->nama_disk;
        $disk->deskripsi                         = $request->deskripsi;
        $disk->fungsi                            = $request->fungsi;
        if($request->file('image')) {
            $disk['image'] = $request->file('image')->store('post-images');
        }
        $disk->save();

        return redirect('disk');
    }
    public function edit($id)
    {
        $disk = Disk::whereId($id)->first();
        // var_dump($disk);die;
        return view('admin/edit-disk')->with('disk', $disk);
    }
    public function update(Request $request, $id)
    {
        $disk                                    = Disk::find($id);
        $disk->nama_disk                          = $request->nama_disk;
        $disk->deskripsi                         = $request->deskripsi;
        $disk->fungsi                            = $request->fungsi;

        $disk->save();
       

        return redirect('disk');
    }
    public function hapus($id){
        $disk = Disk::find($id);
        $disk->delete();
        // var_dump($disk);die;
        return redirect('disk');
    }
    public function detail(string $id): View
    {
        $disk = Disk::findOrFail($id);
        return view('admin/detail_disk', compact('disk'));
    }
}
