<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tim;
use App\Models\Partner;
use App\Models\Project;
use App\Models\Sertifikasi;
use DB;

class HomeController extends Controller
{
    public function index() 
    {
        $tim        = Tim::all();   
        $sertifikat = Sertifikasi::all();        
        
        //EDUCATION
        $tipeId = 1;

        $education = Project::whereHas('tipes', function ($query) use ($tipeId) {
            $query->where('id', $tipeId);
        })->get();

        //FINANCE & BANKING
        $tipeId = 2;

        $fb = Project::whereHas('tipes', function ($query) use ($tipeId) {
            $query->where('id', $tipeId);
        })->get();
        //GOVERMENT
        $tipeId = 3;

        $goverment = Project::whereHas('tipes', function ($query) use ($tipeId) {
            $query->where('id', $tipeId);
        })->get();
        //NONGOVERMENT
        $tipeId = 4;

        $non_goverment = Project::whereHas('tipes', function ($query) use ($tipeId) {
            $query->where('id', $tipeId);
        })->get();

        //HOSPITAL
        $tipeId = 5;

        $hospital = Project::whereHas('tipes', function ($query) use ($tipeId) {
            $query->where('id', $tipeId);
        })->get();

        $tipeId = 1;

        $ecommerce = Partner::whereHas('jenis', function ($query) use ($tipeId) {
            $query->where('id', $tipeId);
        })->get();

        $tipeId = 2;

        $produk = Partner::whereHas('jenis', function ($query) use ($tipeId) {
            $query->where('id', $tipeId);
        })->get();

        return view('/user/home', compact('tim','education','fb','goverment','non_goverment','hospital','ecommerce','produk','sertifikat'));
    }
}
