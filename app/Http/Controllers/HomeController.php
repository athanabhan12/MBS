<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tim;
use App\Models\Hospital;
use App\Models\FB;
use App\Models\Home;
use App\Models\NonGoverment;
use App\Models\Education;
use App\Models\Goverment;
use DB;

class HomeController extends Controller
{
    public function index() 
    {
        $tim            = Tim::all();      
        $education      = Education::all();
        $fb             = FB::all();
        $goverment      = Goverment::all();
        $hospital       = Hospital::all();
        $nongoverment   = NonGoverment::all();
        return view('user/home', 
        compact('tim',
                'education',
                'fb',
                'goverment',
                'hospital',
                'nongoverment'
        ));
    }
}
