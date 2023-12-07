<?php

namespace App\Http\Controllers;


use App\Models\Produk;
use App\Models\Categories;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ProdukController extends Controller
{
    //CCTV
    public function product_cctv(Request $request)
    {
        return view('admin/cctv', [
            'products_cctv' => Produk::where('id_categories', '1')->get(),
        ]);
    }
    public function create_cctv()
    {
         $produk = Categories::all();
         return view('admin/tambah_cctv', compact('produk'));
    }
    public function store_cctv(Request $request)
    {
        $produk                                    = new Produk;
        $produk->id_categories                     = $request->id_categories;
        $produk->nama_produk                       = $request->nama_produk;
        $produk->deskripsi                         = $request->deskripsi;
        $produk->spesifikasi                       = $request->spesifikasi;
        if($request->file('image')) {
            $produk['image'] = $request->file('image')->store('post-images');
        }
        if($request->file('image1')) {
            $produk['image1'] = $request->file('image1')->store('post-images');
        }
        if($request->file('image2')) {
            $produk['image2'] = $request->file('image2')->store('post-images');
        }
        $produk->save();
         
        return redirect('cctv');
    }
    public function edit_cctv($id)
    {
        $produk = Produk::whereId($id)->first();
        // var_dump($cctv);die;
        return view('admin/edit-cctv')->with('produk', $produk);
    }
    public function update_cctv(Request $request, $id)
    {
        $produk                                    = Produk::find($id);
        $produk->nama_produk                       = $request->nama_produk;
        $produk->deskripsi                         = $request->deskripsi;
        $produk->spesifikasi                       = $request->spesifikasi;

        $produk->save();
        
        return redirect('cctv');
    }
    public function delete_cctv($id)
    {
        $produk = Produk::find($id);
        $produk->delete();
        // var_dump($cctv);die;
        return redirect('cctv');
    }

    public function detail_cctv(string $id): View
    {
        $produk = Produk::findOrFail($id);
        return view('admin/detail_cctv', compact('produk'));
    }


    //LAPTOP
    public function product_laptop()
    {
        return view('admin/laptop', [
            'products_laptop' => Produk::where('id_categories', '2')->get(),
        ]);
    }
    public function create_laptop()
    {
         $produk = Categories::all();
         return view('admin/tambah_laptop', compact('produk'));
    }
    public function store_laptop(Request $request)
    {
        $produk                                    = new Produk;
        $produk->id_categories                     = $request->id_categories;
        $produk->nama_produk                       = $request->nama_produk;
        $produk->deskripsi                         = $request->deskripsi;
        $produk->spesifikasi                       = $request->spesifikasi;
        if($request->file('image')) {
            $produk['image'] = $request->file('image')->store('post-images');
        }
        if($request->file('image1')) {
            $produk['image1'] = $request->file('image1')->store('post-images');
        }
        if($request->file('image2')) {
            $produk['image2'] = $request->file('image2')->store('post-images');
        }
        $produk->save();

        return redirect('laptop');
    }
    public function edit_laptop($id)
    {
        $produk = Produk::whereId($id)->first();
        // var_dump($produk);die;
        return view('admin/edit-laptop')->with('produk', $produk);
    }
    public function update_laptop(Request $request, $id)
    {
        $produk                                    = Produk::find($id);
        $produk->nama_produk                       = $request->nama_produk;
        $produk->deskripsi                         = $request->deskripsi;
        $produk->spesifikasi                       = $request->spesifikasi;

        $produk->save();
       
        return redirect('laptop');
    }
    public function hapus_laptop($id){
        $produk = Produk::find($id);
        $produk->delete();
        // var_dump($produk);die;
        return redirect('laptop');
    }
    public function detail_laptop(string $id): View
    {
        $produk = Produk::findOrFail($id);
        return view('admin/detail_laptop', compact('produk'));
    }


    //NETWORKING
    public function product_networking()
    {
        return view('admin/networking', [
            'products_networking' => Produk::where('id_categories', '3')->get(),
        ]);
    }
    public function create_networking()
    {
        $produk = Categories::all();
        return view('admin/tambah_networking', compact('produk'));
    }
    public function store_networking(Request $request)
    {
        $produk                                    = new Produk;
        $produk->id_categories                     = $request->id_categories;
        $produk->nama_produk                       = $request->nama_produk;
        $produk->deskripsi                         = $request->deskripsi;
        $produk->spesifikasi                       = $request->spesifikasi;
        if($request->file('image')) {
            $produk['image'] = $request->file('image')->store('post-images');
        }
        if($request->file('image1')) {
            $produk['image1'] = $request->file('image1')->store('post-images');
        }
        if($request->file('image2')) {
            $produk['image2'] = $request->file('image2')->store('post-images');
        }
        $produk->save();

        return redirect('networking');
    }
    public function edit_networking($id)
    {
        $produk = Produk::whereId($id)->first();
        // var_dump($produk);die;
        return view('admin/edit-networking')->with('produk', $produk);
    }
    public function update_networking(Request $request, $id)
    {
        $produk                                    = Produk::find($id);
        $produk->nama_produk                       = $request->nama_produk;
        $produk->deskripsi                         = $request->deskripsi;
        $produk->spesifikasi                       = $request->spesifikasi;

        $produk->save();
       

        return redirect('networking');
    }
    public function hapus_networking($id){
        $produk = Produk::find($id);
        $produk->delete();
        // var_dump($produk);die;
        return redirect('networking');
    }
    public function detail_networking(string $id): View
    {
        $produk = Produk::findOrFail($id);
        return view('admin/detail_networking', compact('produk'));
    }


    //PC
    public function product_pc()
    {
        return view('admin/pc', [
            'products_pc' => Produk::where('id_categories', '4')->get(),
        ]);
    }
    public function create_pc()
    {
        $produk = Categories::all();
        return view('admin/tambah_pc', compact('produk'));
    }
    public function store_pc(Request $request)
    {
        $produk                                    = new Produk;
        $produk->id_categories                     = $request->id_categories;
        $produk->nama_produk                       = $request->nama_produk;
        $produk->deskripsi                         = $request->deskripsi;
        $produk->spesifikasi                       = $request->spesifikasi;
        if($request->file('image')) {
            $produk['image'] = $request->file('image')->store('post-images');
        }
        if($request->file('image1')) {
            $produk['image1'] = $request->file('image1')->store('post-images');
        }
        if($request->file('image2')) {
            $produk['image2'] = $request->file('image2')->store('post-images');
        }
        $produk->save();

        return redirect('pc');
    }
    public function edit_pc($id)
    {
        $produk = Produk::whereId($id)->first();
        // var_dump($produk);die;
        return view('admin/edit-pc')->with('produk', $produk);
    }
    public function update_pc(Request $request, $id)
    {
        $produk                                    = Produk::find($id);
        $produk->nama_produk                       = $request->nama_produk;
        $produk->deskripsi                         = $request->deskripsi;
        $produk->spesifikasi                       = $request->spesifikasi;

        $produk->save();
       

        return redirect('pc');
    }
    public function hapus_pc($id){
        $produk = Produk::find($id);
        $produk->delete();
        // var_dump($produk);die;
        return redirect('pc');
    }
    public function detail_pc(string $id): View
    {
        $produk = Produk::findOrFail($id);
        return view('admin/detail_pc', compact('produk'));
    }


    //Printer   
    public function product_printer()
    {
        return view('admin/printer', [
            'products_printer' => Produk::where('id_categories', '5')->get(),
        ]);
    }
    public function create_printer()
    {
        $produk = Categories::all();
        return view('admin/tambah_printer', compact('produk'));
    }
    public function store_printer(Request $request)
    {
        $produk                                    = new Produk;
        $produk->id_categories                     = $request->id_categories;
        $produk->nama_produk                       = $request->nama_produk;
        $produk->deskripsi                         = $request->deskripsi;
        $produk->spesifikasi                       = $request->spesifikasi;
        if($request->file('image')) {
            $produk['image'] = $request->file('image')->store('post-images');
        }
        if($request->file('image1')) {
            $produk['image1'] = $request->file('image1')->store('post-images');
        }
        if($request->file('image2')) {
            $produk['image2'] = $request->file('image2')->store('post-images');
        }
        $produk->save();

        return redirect('printer');
    }
    public function edit_printer($id)
    {
        $produk = Produk::whereId($id)->first();
        // var_dump($produk);die;
        return view('admin/edit-printer')->with('produk', $produk);
    }
    public function update_printer(Request $request, $id)
    {
        $produk                                    = Produk::find($id);
        $produk->nama_produk                       = $request->nama_produk;
        $produk->deskripsi                         = $request->deskripsi;
        $produk->spesifikasi                       = $request->spesifikasi;

        $produk->save();
       

        return redirect('printer');
    }
    public function hapus_printer($id){
        $produk = Produk::find($id);
        $produk->delete();
        // var_dump($produk);die;
        return redirect('printer');
    }
    public function detail_printer(string $id): View
    {
        $produk = Produk::findOrFail($id);
        return view('admin/detail_printer', compact('produk'));
    }


    //SECURITY SYSTEM   
    public function product_security_system()
    {
        return view('admin/security_system', [
            'products_security_system' => Produk::where('id_categories', '6')->get(),
        ]);
    }
    public function create_security_system()
    {
        $produk = Categories::all();
        return view('admin/tambah_security_system', compact('produk'));
    }
    public function store_security_system(Request $request)
    {
        $produk                                    = new Produk;
        $produk->id_categories                     = $request->id_categories;
        $produk->nama_produk                       = $request->nama_produk;
        $produk->deskripsi                         = $request->deskripsi;
        $produk->spesifikasi                       = $request->spesifikasi;
        if($request->file('image')) {
            $produk['image'] = $request->file('image')->store('post-images');
        }
        if($request->file('image1')) {
            $produk['image1'] = $request->file('image1')->store('post-images');
        }
        if($request->file('image2')) {
            $produk['image2'] = $request->file('image2')->store('post-images');
        }
        $produk->save();

        return redirect('security_system');
    }
    public function edit_security_system($id)
    {
        $produk = Produk::whereId($id)->first();
        // var_dump($produk);die;
        return view('admin/edit_security_system')->with('produk', $produk);
    }
    public function update_security_system(Request $request, $id)
    {
        $produk                                    = Produk::find($id);
        $produk->nama_produk                       = $request->nama_produk;
        $produk->deskripsi                         = $request->deskripsi;
        $produk->spesifikasi                       = $request->spesifikasi;

        $produk->save();
       

        return redirect('security_system');
    }
    public function hapus_security_system($id){
        $produk = Produk::find($id);
        $produk->delete();
        // var_dump($produk);die;
        return redirect('security_system', compact('produk'));
    }
    public function detail_security_system(string $id): View
    {
        $produk = Produk::findOrFail($id);
        return view('admin/detail_security_system', compact('produk'));
    }   


    //SERVER   
    public function product_server()
    {
        return view('admin/server', [
            'products_server' => Produk::where('id_categories', '7')->get(),
        ]);
    }
    public function create_server()
    {
        $produk = Categories::all();
        return view('admin/tambah_server', compact('produk'));
    }
    public function store_server(Request $request)
    {
        $produk                                    = new Produk;
        $produk->id_categories                     = $request->id_categories;
        $produk->nama_produk                       = $request->nama_produk;
        $produk->deskripsi                         = $request->deskripsi;
        $produk->spesifikasi                       = $request->spesifikasi;
        if($request->file('image')) {
            $produk['image'] = $request->file('image')->store('post-images');
        }
        if($request->file('image1')) {
            $produk['image1'] = $request->file('image1')->store('post-images');
        }
        if($request->file('image2')) {
            $produk['image2'] = $request->file('image2')->store('post-images');
        }
        $produk->save();

        return redirect('server');
    }
    public function edit_server($id)
    {
        $produk = Produk::whereId($id)->first();
        // var_dump($produk);die;
        return view('admin/edit_server')->with('produk', $produk);
    }
    public function update_server(Request $request, $id)
    {
        $produk                                    = Produk::find($id);
        $produk->nama_produk                       = $request->nama_produk;
        $produk->deskripsi                         = $request->deskripsi;
        $produk->spesifikasi                       = $request->spesifikasi;

        $produk->save();
       

        return redirect('server');
    }
    public function hapus_server($id){
        $produk = Produk::find($id);
        $produk->delete();
        // var_dump($produk);die;
        return redirect('server');
    }
    public function detail_server(string $id): View
    {
        $produk = Produk::findOrFail($id);
        return view('admin/detail_server', compact('produk'));
    }


    //SERVICES   
    public function product_services()
    {
        return view('admin/services', [
            'products_services' => Produk::where('id_categories', '8')->get(),
        ]);
    }
    public function create_services()
    {
        $produk = Categories::all();
        return view('admin/tambah_services', compact('produk'));
    }
    public function store_services(Request $request)
    {
        $produk                                    = new Produk;
        $produk->id_categories                     = $request->id_categories;
        $produk->nama_produk                       = $request->nama_produk;
        $produk->deskripsi                         = $request->deskripsi;
        $produk->spesifikasi                       = $request->spesifikasi;
        if($request->file('image')) {
            $produk['image'] = $request->file('image')->store('post-images');
        }
        if($request->file('image1')) {
            $produk['image1'] = $request->file('image1')->store('post-images');
        }
        if($request->file('image2')) {
            $produk['image2'] = $request->file('image2')->store('post-images');
        }
        $produk->save();

        return redirect('services');
    }
    public function edit_services($id)
    {
        $produk = Produk::whereId($id)->first();
        // var_dump($produk);die;
        return view('admin/edit-services')->with('produk', $produk);
    }
    public function update_services(Request $request, $id)
    {
        $produk                                    = Produk::find($id);
        $produk->nama_produk                       = $request->nama_produk;
        $produk->deskripsi                         = $request->deskripsi;
        $produk->spesifikasi                       = $request->spesifikasi;

        $produk->save();
       

        return redirect('services');
    }
    public function hapus_services($id){
        $produk = Produk::find($id);
        $produk->delete();
        // var_dump($produk);die;
        return redirect('services');
    }
    public function detail_services(string $id): View
    {
        $produk = Produk::findOrFail($id);
        return view('admin/detail_services', compact('produk'));
    }


    //SOFTWARE   
    public function product_software()
    {
        return view('admin/software', [
            'products_software' => Produk::where('id_categories', '9')->get(),
        ]);
    }
    public function create_software()
    {
        $produk = Categories::all();
        return view('admin/tambah_software', compact('produk'));
    }
    public function store_software(Request $request)
    {
        $produk                                    = new Produk;
        $produk->id_categories                     = $request->id_categories;
        $produk->nama_produk                       = $request->nama_produk;
        $produk->deskripsi                         = $request->deskripsi;
        $produk->spesifikasi                       = $request->spesifikasi;
        if($request->file('image')) {
            $produk['image'] = $request->file('image')->store('post-images');
        }
        if($request->file('image1')) {
            $produk['image1'] = $request->file('image1')->store('post-images');
        }
        if($request->file('image2')) {
            $produk['image2'] = $request->file('image2')->store('post-images');
        }
        $produk->save();

        return redirect('software');
    }
    public function edit_software($id)
    {
        $produk = Produk::whereId($id)->first();
        // var_dump($produk);die;
        return view('admin/edit-software')->with('produk', $produk);
    }
    public function update_software(Request $request, $id)
    {
        $produk                                    = Produk::find($id);
        $produk->nama_produk                       = $request->nama_produk;
        $produk->deskripsi                         = $request->deskripsi;
        $produk->spesifikasi                       = $request->spesifikasi;

        $produk->save();
       

        return redirect('software');
    }
    public function hapus_software($id){
        $produk = Produk::find($id);
        $produk->delete();
        // var_dump($produk);die;
        return redirect('software');
    }
    public function detail_software(string $id): View
    {
        $produk = Produk::findOrFail($id);
        return view('admin/detail_software', compact('produk'));
    }


    //ISP   
    public function product_isp()
    {
        return view('admin/isp', [
            'products_isp' => Produk::where('id_categories', '10')->get(),
        ]);
    }
    public function create_isp()
    {
        $produk = Categories::all();
        return view('admin/tambah_isp', compact('produk'));
    }
    public function store_isp(Request $request)
    {
        $produk                                    = new Produk;
        $produk->id_categories                     = $request->id_categories;
        $produk->nama_produk                       = $request->nama_produk;
        $produk->deskripsi                         = $request->deskripsi;
        $produk->spesifikasi                       = $request->spesifikasi;
        if($request->file('image')) {
            $produk['image'] = $request->file('image')->store('post-images');
        }
        if($request->file('image1')) {
            $produk['image1'] = $request->file('image1')->store('post-images');
        }
        if($request->file('image2')) {
            $produk['image2'] = $request->file('image2')->store('post-images');
        }
        $produk->save();

        return redirect('isp');
    }
    public function edit_isp($id)
    {
        $produk = Produk::whereId($id)->first();
        // var_dump($produk);die;
        return view('admin/edit-isp')->with('produk', $produk);
    }
    public function update_isp(Request $request, $id)
    {
        $produk                                    = Produk::find($id);
        $produk->nama_produk                       = $request->nama_produk;
        $produk->deskripsi                         = $request->deskripsi;
        $produk->spesifikasi                       = $request->spesifikasi;

        $produk->save();
       

        return redirect('isp');
    }
    public function hapus_isp($id){
        $produk = Produk::find($id);
        $produk->delete();
        // var_dump($produk);die;
        return redirect('isp');
    }
    public function detail_isp(string $id): View
    {
        $produk = Produk::findOrFail($id);
        return view('admin/detail_isp', compact('produk'));
    }


    //STORAGE   
    public function product_disk()
    {
        return view('admin/disk', [
            'products_disk' => Produk::where('id_categories', '11')->get(),
        ]);
    }
    public function create_disk()
    {
        $produk = Categories::all();
        return view('admin/tambah_disk', compact('produk'));
    }
    public function store_disk(Request $request)
    {
        $produk                                    = new Produk;
        $produk->id_categories                     = $request->id_categories;
        $produk->nama_produk                       = $request->nama_produk;
        $produk->deskripsi                         = $request->deskripsi;
        $produk->spesifikasi                       = $request->spesifikasi;
        if($request->file('image')) {
            $produk['image'] = $request->file('image')->store('post-images');
        }
        if($request->file('image1')) {
            $produk['image1'] = $request->file('image1')->store('post-images');
        }
        if($request->file('image2')) {
            $produk['image2'] = $request->file('image2')->store('post-images');
        }
        $produk->save();

        return redirect('disk');
    }
    public function edit_disk($id)
    {
        $produk = Produk::whereId($id)->first();
        // var_dump($produk);die;
        return view('admin/edit-disk')->with('produk', $produk);
    }
    public function update_disk(Request $request, $id)
    {
        $produk                                    = Produk::find($id);
        $produk->nama_produk                       = $request->nama_produk;
        $produk->deskripsi                         = $request->deskripsi;
        $produk->spesifikasi                       = $request->spesifikasi;

        $produk->save();
       

        return redirect('disk');
    }
    public function hapus_disk($id){
        $produk = Produk::find($id);
        $produk->delete();
        // var_dump($produk);die;
        return redirect('disk');
    }
    public function detail_disk(string $id): View
    {
        $produk = Produk::findOrFail($id);
        return view('admin/detail_disk', compact('produk'));
    }


    //SAN SWITCH   
    public function product_san_switch()
    {
        return view('admin/san_switch', [
            'products_san_switch' => Produk::where('id_categories', '12')->get(),
        ]);
    }
    public function create_san_switch()
    {
        $produk = Categories::all();
        return view('admin/tambah_san_switch', compact('produk'));
    }
    public function store_san_switch(Request $request)
    {
        $produk                                    = new Produk;
        $produk->id_categories                     = $request->id_categories;
        $produk->nama_produk                       = $request->nama_produk;
        $produk->deskripsi                         = $request->deskripsi;
        $produk->spesifikasi                       = $request->spesifikasi;
        if($request->file('image')) {
            $produk['image'] = $request->file('image')->store('post-images');
        }
        if($request->file('image1')) {
            $produk['image1'] = $request->file('image1')->store('post-images');
        }
        if($request->file('image2')) {
            $produk['image2'] = $request->file('image2')->store('post-images');
        }
        $produk->save();

        return redirect('san_switch');
    }
    public function edit_san_switch($id)
    {
        $produk = Produk::whereId($id)->first();
        // var_dump($produk);die;
        return view('admin/edit-san_switch')->with('produk', $produk);
    }
    public function update_san_switch(Request $request, $id)
    {
        $produk                                    = Produk::find($id);
        $produk->nama_produk                       = $request->nama_produk;
        $produk->deskripsi                         = $request->deskripsi;
        $produk->spesifikasi                       = $request->spesifikasi;

        $produk->save();
       

        return redirect('san_switch');
    }
    public function hapus_san_switch($id){
        $produk = Produk::find($id);
        $produk->delete();
        // var_dump($produk);die;
        return redirect('san_switch');
    }
    public function detail_san_switch(string $id): View
    {
        $produk = Produk::findOrFail($id);
        return view('admin/detail_san_switch', compact('produk'));
    }


}
