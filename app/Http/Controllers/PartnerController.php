<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use DB;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        return view('admin/partner')->with('partners', $partners);
    }
}
