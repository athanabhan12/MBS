<?php

namespace App\Http\Controllers;

use App\Models\Sertifikasi;
use Illuminate\Http\Request;

class SertifikasiController extends Controller
{
    public function index_sertifikasi()
    {
        $sertifikasi = Sertifikasi::all();
        return view('admin/sertifikasi')->with('sertifikasi', $sertifikasi);
    }
    public function create_sertifikasi()
    {
         $sertifikasi = Sertifikasi::all();
         return view('admin/tambah_sertifikasi', compact('sertifikasi'));
    }
    public function store_sertifikasi(Request $request)
    {
        $sertifikasi                                     = new Sertifikasi;
        $sertifikasi->nama_sertifikat                    = $request->nama_sertifikat;
        if($request->file('image')) {
            $sertifikasi['image'] = $request->file('image')->store('post-images');
        }
        $sertifikasi->save();
         
        return redirect('sertifikasi');
    }
    public function edit_sertifikasi($id)
    {
        $sertifikasi = Sertifikasi::whereId($id)->first();
        return view('admin/edit-sertifikasi')->with('sertifikasi', $sertifikasi);
    }
    public function update_sertifikasi(Request $request, $id)
    {
        $sertifikasi                                    = Sertifikasi::find($id);
        $sertifikasi->nama_sertifikat                   = $request->nama_sertifikat;
        $sertifikasi->image                             = $request->image;

        $sertifikasi->save();
        
        return redirect('sertifikasi');
    }
    public function delete_sertifikasi($id)
    {
        $sertifikasi = Sertifikasi::find($id);
        $sertifikasi->delete();
        // var_dump($cctv);die;
        return redirect('sertifikasi');
    }
}
