<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Produk::all();
        return view('user/produk', compact('barang'));
    }
    //HALAMAN CCTV
    public function index_cctv(Request $request)
    {
        return view('user/cctv_user', [
            'cctv_user' => Produk::where('id_categories', '1')->get(),
        ]);
    }
    public function detail_cctv_user(string $id): View
    {
        $cctv_user = Produk::findOrFail($id);
        return view('user/detail_cctv_user', compact('cctv_user'));
    }
    //HALAMAN LAPTOP
    public function index_laptop(Request $request)
    {
        return view('user/laptop_user', [
            'laptop_user' => Produk::where('id_categories', '2')->get(),
        ]);
    }
    public function detail_laptop_user(string $id): View
    {
        $laptop_user = Produk::findOrFail($id);
        return view('user/detail_laptop_user', compact('laptop_user'));
    }
    //HALAMAN NETWORKING
    public function index_network(Request $request)
    {
        return view('user/network_user', [
            'network_user' => Produk::where('id_categories', '3')->get(),
        ]);
    }
    public function detail_network_user(string $id): View
    {
        $network_user = Produk::findOrFail($id);
        return view('user/detail_network_user', compact('network_user'));
    }
    //HALAMAN PC
    public function index_pc(Request $request)
    {
        return view('user/pc_user', [
            'pc_user' => Produk::where('id_categories', '4')->get(),
        ]);
    }
    public function detail_pc_user(string $id): View
    {
        $pc_user = Produk::findOrFail($id);
        return view('user/detail_pc_user', compact('pc_user'));
    }
    //HALAMAN PRINTER
    public function index_printer(Request $request)
    {
        return view('user/printer_user', [
            'printer_user' => Produk::where('id_categories', '5')->get(),
        ]);
    }
    public function detail_printer_user(string $id): View
    {
        $pc_user = Produk::findOrFail($id);
        return view('user/detail_printer_user', compact('printer_user'));
    }
    //HALAMAN SECURITY SYSTEM
    public function index_security_system(Request $request)
    {
        return view('user/security_system_user', [
            'security_system_user' => Produk::where('id_categories', '6')->get(),
        ]);
    }
    public function detail_security_system_user(string $id): View
    {
        $security_system_user = Produk::findOrFail($id);
        return view('user/detail_security_system_user', compact('security_system_user'));
    }
    //HALAMAN SERVER
    public function index_server(Request $request)
    {
        return view('user/server_user', [
            'server_user' => Produk::where('id_categories', '7')->get(),
        ]);
    }
    public function detail_server_user(string $id): View
    {
        $server_user = Produk::findOrFail($id);
        return view('user/detail_server_user', compact('server_user'));
    }
    //HALAMAN SERVICES
    public function index_services(Request $request)
    {
        return view('user/services_user', [
            'services_user' => Produk::where('id_categories', '8')->get(),
        ]);
    }
    public function detail_services_user(string $id): View
    {
        $services_user = Produk::findOrFail($id);
        return view('user/detail_services_user', compact('services_user'));
    }
    //HALAMAN SOFTWARE
    public function index_software(Request $request)
    {
        return view('user/software_user', [
            'software_user' => Produk::where('id_categories', '9')->get(),
        ]);
    }
    public function detail_software_user(string $id): View
    {
        $software_user = Produk::findOrFail($id);
        return view('user/detail_software_user', compact('software_user'));
    }
    //HALAMAN ISP
    public function index_isp(Request $request)
    {
        return view('user/isp_user', [
            'isp_user' => Produk::where('id_categories', '10')->get(),
        ]);
    }
    public function detail_isp_user(string $id): View
    {
        $isp_user = Produk::findOrFail($id);
        return view('user/detail_isp_user', compact('isp_user'));
    }
    //HALAMAN STORAGE
    public function index_disk(Request $request)
    {
        return view('user/disk_user', [
            'disk_user' => Produk::where('id_categories', '11')->get(),
        ]);
    }
    public function detail_disk_user(string $id): View
    {
        $disk_user = Produk::findOrFail($id);
        return view('user/detail_disk_user', compact('disk_user'));
    }
    //HALAMAN SAN SWITCH
    public function index_san_switch(Request $request)
    {
        return view('user/san_switch_user', [
            'san_switch_user' => Produk::where('id_categories', '12')->get(),
        ]);
    }
    public function detail_san_switch_user(string $id): View
    {
        $san_switch_user = Produk::findOrFail($id);
        return view('user/detail_san_switch_user', compact('san_switch_user'));
    }
}
