<?php

namespace App\Http\Controllers;

use App\Models\Cctv;
use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ProdukController extends Controller
{
    public function product_cctv()
    {
        return view('admin/cctv', [
            'products_cctv' => Produk::where('id_categories', '1')->get(),
        ]);
    }
    public function create_cctv()
    {
         return view('admin/tambah_cctv');
    }
    public function store_cctv(Request $request)
    {
        $produk                                    = new Produk;
        $produk->nama_produk                       = $request->nama_produk;
        $produk->deskripsi                         = $request->deskripsi;
        $produk->spesifikasi                       = $request->spesifikasi;
        if($request->file('image')) {
            $produk['image'] = $request->file('image')->store('post-images');
        }
        $produk->save();
         
        return redirect('admin/cctv');
    }
}
