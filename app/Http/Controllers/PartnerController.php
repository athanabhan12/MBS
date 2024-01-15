<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Jenis;
use Illuminate\Http\Request;
use DB;

class PartnerController extends Controller
{
    public function index_partner()
    {
        $partners = Partner::all();
        return view('admin/partner')->with('partners', $partners);
    }
    public function create_partner()
    {
         $partners = Jenis::all();
         return view('admin/tambah_partner', compact('partners'));
    }
    public function store_partner(Request $request)
    {
        $partners                                     = new Partner;
        $partners->id_partner                         = $request->id_partner;
        $partners->nama_partner                       = $request->nama_partner;
        if($request->file('gambar')) {
            $partners['gambar'] = $request->file('gambar')->store('post-images');
        }
        $partners->save();
         
        return redirect('partner');
    }
    public function edit_partner($id)
    {
        $partners = Partner::whereId($id)->first();
        return view('admin/edit-partner')->with('partners', $partners);
    }
    public function update_partner(Request $request, $id)
    {
        $partners                                    = Partner::find($id);
        $partners->nama_partner                      = $request->nama_partner;
        $partners->gambar                            = $request->gambar;

        $partners->save();
        
        return redirect('partner');
    }
    public function delete_partner(Request $request, $id)
    {
        $project = Partner::find($id);
        $project->delete();
        // var_dump($cctv);die;
        return redirect('partner');
    }
}
