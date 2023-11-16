<?php

namespace App\Http\Controllers;

use App\Models\FB;
use App\Models\Tim;
use App\Models\Hospital;
use App\Models\Education;
use App\Models\Goverment;
use App\Models\NonGoverment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produk;

class IndexController extends Controller
{
    public function index()
    {
        // $jumlah_pelanggan       = Tim::count();      
        // $jumlah_pelanggan       = Education::count();
        // $jumlah_pelanggan       = FB::count();
        // $jumlah_pelanggan       = Goverment::count();
        // $jumlah_pelanggan       = Hospital::count();
        // $jumlah_pelanggan       = NonGoverment::count();
        return view('admin/index', [
            'teams'  => Tim::count(),      
            'educations'  => Education::count(),
            'facebooks'  => FB::count(),
            'governments'  => Goverment::count(),
            'hospitals'  => Hospital::count(),
            'non_governments'  => NonGoverment::count(),
            'products_count' => Produk::count(),
            'products' => Produk::where('id_categories', '1')->get(),
        ]);
    }
}
