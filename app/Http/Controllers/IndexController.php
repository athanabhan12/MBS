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
use App\Models\Project;
use App\Models\Partner;

class IndexController extends Controller
{
    public function index()
    {
        
        return view('admin/index', [

            'products_count' => Produk::count(),
            'projects_count' => Project::count(),
            'partner_count' => Partner::count(),
            // 'products' => Produk::where('id_categories', '1')->get(),
        ]);
    }
}
