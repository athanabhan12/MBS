<?php


use App\Models\Tim;
use App\Models\Compro;
use App\Models\Partner;
use App\Models\Project;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SertifikasiController;
use App\Models\Sertifikasi;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $tim                    = Tim::all();
    $sertifikat             = Sertifikasi::all();
    $compro                 = Compro::all();
    $education              = Project::where('id_tipes', 1)->get();
    $fb                     = Project::where('id_tipes', 2)->get();
    $goverment              = Project::where('id_tipes', 3)->get();
    $non_goverment          = Project::where('id_tipes', 4)->get();
    $hospital               = Project::where('id_tipes', 5)->get();
    $ecommerce              = Partner::where('id_partner', 1)->get();
    $produk                 = Partner::where('id_partner', 2)->get();
    return view('user/home', compact('tim',
                                     'sertifikat', 
                                     'education', 
                                     'fb', 
                                     'goverment', 
                                     'non_goverment', 
                                     'hospital',
                                     'ecommerce',
                                     'produk',
    ));
});

//HALAMAN KHUSUS ADMIN
Route::get('/login',                                                        [LoginController::                 class, 'index'])->name('admin/login')->middleware('guest');
Route::post('/login',                                                       [LoginController::                 class, 'authenticate'])->name('admin/login');
Route::post('/logout',                                                      [LoginController::                 class, 'logout'])->name('admin/logout');
Route::get('/pengguna',                                                     [UserController::                  class, 'index'])->name('admin/pengguna')->middleware('auth');
//HALAMAN UTAMA
Route::get('/index',                                                        [IndexController::                 class, 'index'])->name('admin/index')->middleware('auth');
Route::get('/team',                                                         [TeamController::                  class, 'index'])->name('admin/team')->middleware('auth');
Route::get('/partner',                                                      [PartnerController::               class, 'index_partner'])->name('admin/partner')->middleware('auth');
Route::get('/sertifikasi',                                                  [SertifikasiController::           class, 'index_sertifikasi'])->name('admin/sertifikasi')->middleware('auth');

//HALAMAN HOME CATEGORY
Route::get('/produk',                                                       [CategoryController::              class, 'index_produk'])->name('admin/produk')->middleware('auth');
Route::get('/project',                                                      [CategoryController::              class, 'index_project'])->name('admin/project')->middleware('auth');

//HALAMAN HOME PROJECT REFERENCE
Route::get('/education',                                                    [ProjectController::               class, 'project_education'])->name('admin/education')->middleware('auth');
Route::get('/FB',                                                           [ProjectController::               class, 'project_fb'])->name('admin/FB')->middleware('auth');
Route::get('/goverment',                                                    [ProjectController::               class, 'project_goverment'])->name('admin/goverment')->middleware('auth');
Route::get('/non_goverment',                                                [ProjectController::               class, 'project_non_goverment'])->name('admin/non_goverment')->middleware('auth');
Route::get('/hospital',                                                     [ProjectController::               class, 'project_hospital'])->name('admin/hospital')->middleware('auth');

//HALAMAN HOME PRODUK
Route::get('/cctv',                                                         [ProdukController::                class, 'product_cctv'])->name('admin/cctv')->middleware('auth');
Route::get('/laptop',                                                       [ProdukController::                class, 'product_laptop'])->name('admin/laptop')->middleware('auth');
Route::get('/networking',                                                   [ProdukController::                class, 'product_networking'])->name('admin/networking')->middleware('auth');
Route::get('/pc',                                                           [ProdukController::                class, 'product_pc'])->name('admin/pc')->middleware('auth');
Route::get('/printer',                                                      [ProdukController::                class, 'product_printer'])->name('admin/printer')->middleware('auth');
Route::get('/security_system',                                              [ProdukController::                class, 'product_security_system'])->name('admin/security_system')->middleware('auth');
Route::get('/server',                                                       [ProdukController::                class, 'product_server'])->name('admin/server')->middleware('auth');
Route::get('/services',                                                     [ProdukController::                class, 'product_services'])->name('admin/services')->middleware('auth');
Route::get('/software',                                                     [ProdukController::                class, 'product_software'])->name('admin/software')->middleware('auth');
Route::get('/isp',                                                          [ProdukController::                class, 'product_isp'])->name('admin/isp')->middleware('auth');
Route::get('/disk',                                                         [ProdukController::                class, 'product_disk'])->name('admin/disk')->middleware('auth');
Route::get('/san_switch',                                                   [ProdukController::                class, 'product_san_switch'])->name('admin/san_switch')->middleware('auth');

//HALAMAN TEAM
Route::get('/team/create',                                                  [TeamController::                  class, 'create'])->middleware('auth');
Route::post('/team/store',                                                  [TeamController::                  class, 'store'])->middleware('auth');
Route::get('/team/edit-team/{id}',                                          [TeamController::                  class, 'edit'])->middleware('auth');
Route::post('/team/update/{id}',                                            [TeamController::                  class, 'update'])->middleware('auth');
Route::get('/team/hapus/{id}',                                              [TeamController::                  class, 'hapus'])->middleware('auth');
Route::get('/team/detail/{id}',                                             [TeamController::                  class, 'detail'])->middleware('auth');

//HALAMAN PARTNER
Route::get('partner/create_partner',                                        [PartnerController::               class, 'create_partner'])->middleware('auth');
Route::post('partner/store_partner',                                        [PartnerController::               class, 'store_partner'])->middleware('auth');
Route::get('partner/edit_partner/{id}',                                     [PartnerController::               class, 'edit_partner'])->middleware('auth');
Route::post('partner/update_partner/{id}',                                  [PartnerController::               class, 'update_partner'])->middleware('auth');
Route::get('partner/delete_partner/{id}',                                   [PartnerController::               class, 'delete_partner'])->middleware('auth');

//HALAMAN SERTIFIKASI
Route::get('sertifikasi/create_sertifikasi',                                [SertifikasiController::           class, 'create_sertifikasi'])->middleware('auth');
Route::post('sertifikasi/store_sertifikasi',                                [SertifikasiController::           class, 'store_sertifikasi'])->middleware('auth');
Route::get('sertifikasi/edit_sertifikasi/{id}',                             [SertifikasiController::           class, 'edit_sertifikasi'])->middleware('auth');
Route::post('sertifikasi/update_sertifikasi/{id}',                          [SertifikasiController::           class, 'update_sertifikasi'])->middleware('auth');
Route::get('sertifikasi/delete_sertifikasi/{id}',                           [SertifikasiController::           class, 'delete_sertifikasi'])->middleware('auth');

//HALAMAN EDUCATION
Route::get('/education/create_education',                                   [ProjectController::               class, 'create_education'])->middleware('auth');
Route::post('/education/store_education',                                   [ProjectController::               class, 'store_education'])->middleware('auth');
Route::get('/education/edit_education/{id}',                                [ProjectController::               class, 'edit_education'])->middleware('auth');
Route::post('/education/update_education/{id}',                             [ProjectController::               class, 'update_education'])->middleware('auth');
Route::get('/education/delete_education/{id}',                              [ProjectController::               class, 'delete_education'])->middleware('auth');

//HALAMAN FINANCE & BANKING
Route::get('/FB/create_fb',                                                 [ProjectController::               class, 'create_fb'])->middleware('auth');
Route::post('/FB/store_fb',                                                 [ProjectController::               class, 'store_fb'])->middleware('auth');
Route::get('/FB/edit_fb/{id}',                                              [ProjectController::               class, 'edit_fb'])->middleware('auth');
Route::post('/FB/update_fb/{id}',                                           [ProjectController::               class, 'update_fb'])->middleware('auth');
Route::get('/FB/delete_fb/{id}',                                            [ProjectController::               class, 'delete_fb'])->middleware('auth');

//HALAMAN GOVERMENT
Route::get('goverment/create_goverment',                                    [ProjectController::               class, 'create_goverment'])->middleware('auth');
Route::post('goverment/store_goverment',                                    [ProjectController::               class, 'store_goverment'])->middleware('auth');
Route::get('goverment/edit_goverment/{id}',                                 [ProjectController::               class, 'edit_goverment'])->middleware('auth');
Route::post('goverment/update_goverment/{id}',                              [ProjectController::               class, 'update_goverment'])->middleware('auth');
Route::get('goverment/delete_goverment/{id}',                               [ProjectController::               class, 'delete_goverment'])->middleware('auth');

//HALAMAN NON_GOVERMENT
Route::get('/non_goverment/create_non_goverment',                           [ProjectController::               class, 'create_non_goverment'])->middleware('auth');
Route::post('/non_goverment/store_non_goverment',                           [ProjectController::               class, 'store_non_goverment'])->middleware('auth');
Route::get('/non_goverment/edit_non_goverment/{id}',                        [ProjectController::               class, 'edit_non_goverment'])->middleware('auth');
Route::post('/non_goverment/update_non_goverment/{id}',                     [ProjectController::               class, 'update_non_goverment'])->middleware('auth');
Route::get('/non_goverment/delete_non_goverment/{id}',                      [ProjectController::               class, 'delete_non_goverment'])->middleware('auth');

//HALAMAN HOSPITAL
Route::get('/hospital/create_hospital',                                     [ProjectController::               class, 'create_hospital'])->middleware('auth');
Route::post('/hospital/store_hospital',                                     [ProjectController::               class, 'store_hospital'])->middleware('auth');
Route::get('/hospital/edit_hospital/{id}',                                  [ProjectController::               class, 'edit_hospital'])->middleware('auth');
Route::post('/hospital/update_hospital/{id}',                               [ProjectController::               class, 'update_hospital'])->middleware('auth');
Route::get('/hospital/delete_hospital/{id}',                                [ProjectController::               class, 'delete_hospital'])->middleware('auth');

//HALAMAN CCTV
Route::get('/cctv/create_cctv',                                             [ProdukController::                class, 'create_cctv'])->middleware('auth');
Route::post('/cctv/store_cctv',                                             [ProdukController::                class, 'store_cctv'])->middleware('auth');
Route::get('/cctv/edit_cctv/{id}',                                          [ProdukController::                class, 'edit_cctv'])->middleware('auth');
Route::post('/cctv/update_cctv/{id}',                                       [ProdukController::                class, 'update_cctv'])->middleware('auth');
Route::get('/cctv/delete_cctv/{id}',                                        [ProdukController::                class, 'delete_cctv'])->middleware('auth');
Route::get('/cctv/detail_cctv/{id}',                                        [ProdukController::                class, 'detail_cctv'])->middleware('auth');

//HALAAN LAPTOP
Route::get('/laptop/create_laptop',                                         [ProdukController::                class, 'create_laptop'])->middleware('auth');
Route::post('/laptop/store_laptop',                                         [ProdukController::                class, 'store_laptop'])->middleware('auth');
Route::get('/laptop/edit-laptop/{id}',                                      [ProdukController::                class, 'edit_laptop'])->middleware('auth');
Route::post('/laptop/update_laptop/{id}',                                   [ProdukController::                class, 'update_laptop'])->middleware('auth');
Route::get('/laptop/hapus_laptop/{id}',                                     [ProdukController::                class, 'hapus_laptop'])->middleware('auth');
Route::get('/laptop/detail_laptop/{id}',                                    [ProdukController::                class, 'detail_laptop'])->middleware('auth');

//HALAMAN NETWORKING
Route::get('/networking/create_networking',                                 [ProdukController::                class, 'create_networking'])->middleware('auth');
Route::post('/networking/store_networking',                                 [ProdukController::                class, 'store_networking'])->middleware('auth');
Route::get('/networking/edit_networking/{id}',                              [ProdukController::                class, 'edit_networking'])->middleware('auth');
Route::post('/networking/update_networking/{id}',                           [ProdukController::                class, 'update_networking'])->middleware('auth');
Route::get('/networking/hapus_networking/{id}',                             [ProdukController::                class, 'hapus_networking'])->middleware('auth');
Route::get('/networking/detail_networking/{id}',                            [ProdukController::                class, 'detail_networking'])->middleware('auth');
 
//HALAMAN PC
Route::get('/pc/create_pc',                                                 [ProdukController::                class, 'create_pc'])->middleware('auth');
Route::post('/pc/store_pc',                                                 [ProdukController::                class, 'store_pc'])->middleware('auth');
Route::get('/pc/edit_pc/{id}',                                              [ProdukController::                class, 'edit_pc'])->middleware('auth');
Route::post('/pc/update_pc/{id}',                                           [ProdukController::                class, 'update_pc'])->middleware('auth');
Route::get('/pc/hapus_pc/{id}',                                             [ProdukController::                class, 'hapus_pc'])->middleware('auth');
Route::get('/pc/detail_pc/{id}',                                            [ProdukController::                class, 'detail_pc'])->middleware('auth');
 
//HALAMAN PRINTER
Route::get('/printer/create_printer',                                       [ProdukController::                class, 'create_printer'])->middleware('auth');
Route::post('/printer/store_printer',                                       [ProdukController::                class, 'store_printer'])->middleware('auth');
Route::get('/printer/edit_printer/{id}',                                    [ProdukController::                class, 'edit_printer'])->middleware('auth');
Route::post('/printer/update_printer/{id}',                                 [ProdukController::                class, 'update_printer'])->middleware('auth');
Route::get('/printer/hapus_printer/{id}',                                   [ProdukController::                class, 'hapus_printer'])->middleware('auth');
Route::get('/printer/detail_printer/{id}',                                  [ProdukController::                class, 'detail_printer'])->middleware('auth');

//HALAMAN SECURITY_SYSTEM
Route::get('/security_system/create_security_system',                       [ProdukController::                class, 'create_security_system'])->middleware('auth');
Route::post('/security_system/store_security_system',                       [ProdukController::                class, 'store_security_system'])->middleware('auth');
Route::get('/security_system/edit_security_system/{id}',                    [ProdukController::                class, 'edit_security_system'])->middleware('auth');
Route::post('/security_system/update_security_system/{id}',                 [ProdukController::                class, 'update_security_system'])->middleware('auth');
Route::get('/security_system/hapus_security_system/{id}',                   [ProdukController::                class, 'hapus_security_system'])->middleware('auth');
Route::get('/security_system/detail_security_system/{id}',                  [ProdukController::                class, 'detail_security_system'])->middleware('auth');

//HALAMAN SERVER
Route::get('/server/create_server',                                         [ProdukController::                class, 'create_server'])->middleware('auth');
Route::post('/server/store_server',                                         [ProdukController::                class, 'store_server'])->middleware('auth');
Route::get('/server/edit_server/{id}',                                      [ProdukController::                class, 'edit_server'])->middleware('auth');
Route::post('/server/update_server/{id}',                                   [ProdukController::                class, 'update_server'])->middleware('auth');
Route::get('/server/hapus_server/{id}',                                     [ProdukController::                class, 'hapus_server'])->middleware('auth');
Route::get('/server/detail_server/{id}',                                    [ProdukController::                class, 'detail_server'])->middleware('auth');

//HALAMAN SERVICES
Route::get('/services/create_services',                                     [ProdukController::                class, 'create_services'])->middleware('auth');
Route::post('/services/store_services',                                     [ProdukController::                class, 'store_services'])->middleware('auth');
Route::get('/services/edit_services/{id}',                                  [ProdukController::                class, 'edit_services'])->middleware('auth');
Route::post('/services/update_services/{id}',                               [ProdukController::                class, 'update_services'])->middleware('auth');
Route::get('/services/hapus_services/{id}',                                 [ProdukController::                class, 'hapus_services'])->middleware('auth');
Route::get('/services/detail_services/{id}',                                [ProdukController::                class, 'detail_services'])->middleware('auth');

//HALAMAN SOFTWARE
Route::get('/software/create_software',                                     [ProdukController::                class, 'create_software'])->middleware('auth');
Route::post('/software/store_software',                                     [ProdukController::                class, 'store_software'])->middleware('auth');
Route::get('/software/edit_software/{id}',                                  [ProdukController::                class, 'edit_software'])->middleware('auth');
Route::post('/software/update_software/{id}',                               [ProdukController::                class, 'update_software'])->middleware('auth');
Route::get('/software/hapus_software/{id}',                                 [ProdukController::                class, 'hapus_software'])->middleware('auth');
Route::get('/software/detail_software/{id}',                                [ProdukController::                class, 'detail_software'])->middleware('auth');

//HALAMAN ISP
Route::get('/isp/create_isp',                                               [ProdukController::                class, 'create_isp'])->middleware('auth');
Route::post('/isp/store_isp',                                               [ProdukController::                class, 'store_isp'])->middleware('auth');
Route::get('/isp/edit_isp/{id}',                                            [ProdukController::                class, 'edit_isp'])->middleware('auth');
Route::post('/isp/update_isp/{id}',                                         [ProdukController::                class, 'update_isp'])->middleware('auth');
Route::get('/isp/hapus_isp/{id}',                                           [ProdukController::                class, 'hapus_isp'])->middleware('auth');
Route::get('/isp/detail_isp/{id}',                                          [ProdukController::                class, 'detail_isp'])->middleware('auth');

//HALAMAN DISK
Route::get('/disk/create_disk',                                             [ProdukController::                class, 'create_disk'])->middleware('auth');
Route::post('/disk/store_disk',                                             [ProdukController::                class, 'store_disk'])->middleware('auth');
Route::get('/disk/edit_disk/{id}',                                          [ProdukController::                class, 'edit_disk'])->middleware('auth');
Route::post('/disk/update_disk/{id}',                                       [ProdukController::                class, 'update_disk'])->middleware('auth');
Route::get('/disk/hapus_disk/{id}',                                         [ProdukController::                class, 'hapus_disk'])->middleware('auth');
Route::get('/disk/detail_disk/{id}',                                        [ProdukController::                class, 'detail_disk'])->middleware('auth');

//HALAMAN SAN_SWITCH
Route::get('/san_switch/create_san_switch',                                 [ProdukController::                class, 'create_san_switch'])->middleware('auth');
Route::post('/san_switch/store_san_switch',                                 [ProdukController::                class, 'store_san_switch'])->middleware('auth');
Route::get('/san_switch/edit_san_switch/{id}',                              [ProdukController::                class, 'edit_san_switch'])->middleware('auth');
Route::post('/san_switch/update_san_switch/{id}',                           [ProdukController::                class, 'update_san_switch'])->middleware('auth');
Route::get('/san_switch/hapus_san_switch/{id}',                             [ProdukController::                class, 'hapus_san_switch'])->middleware('auth');
Route::get('/san_switch/detail_san_switch/{id}',                            [ProdukController::                class, 'detail_san_switch'])->middleware('auth');

//HALAMAN SERTIFIKASI
Route::get('/sertifikasi/create',                                           [SertifikasiController::           class, 'create'])->middleware('auth');
Route::post('/sertifikasi/store',                                           [SertifikasiController::           class, 'store'])->middleware('auth');
Route::get('/sertifikasi/edit-sertifikasi/{id}',                            [SertifikasiController::           class, 'edit'])->middleware('auth');
Route::post('/sertifikasi/update/{id}',                                     [SertifikasiController::           class, 'update'])->middleware('auth');
Route::get('/sertifikasi/hapus/{id}',                                       [SertifikasiController::           class, 'hapus'])->middleware('auth');
Route::get('/sertifikasi/detail/{id}',                                      [SertifikasiController::           class, 'detail'])->middleware('auth');

//HALAMAN CATEGORY PRODUK
Route::get('/produk/create_produk',                                         [CategoryController::               class, 'create_produk'])->middleware('auth');
Route::post('/produk/store_produk',                                         [CategoryController::               class, 'store_produk'])->middleware('auth');
Route::get('/produk/edit-produk/{id}',                                      [CategoryController::               class, 'edit-produk'])->middleware('auth');
Route::post('/produk/update_produk/{id}',                                   [CategoryController::               class, 'update_produk'])->middleware('auth');
Route::get('/produk/delete_produk/{id}',                                    [CategoryController::               class, 'delete_produk'])->middleware('auth');
Route::get('/produk/detail_produk/{id}',                                    [CategoryController::               class, 'detail_produk'])->middleware('auth');

//HALAMAN CATEGORY PROJECT
Route::get('/project/create_project',                                       [CategoryController::               class, 'create_project'])->middleware('auth');
Route::post('/project/store_project',                                       [CategoryController::               class, 'store_project'])->middleware('auth');
Route::get('/project/edit-project/{id}',                                    [CategoryController::               class, 'edit-project'])->middleware('auth');
Route::post('/project/update_project/{id}',                                 [CategoryController::               class, 'update_project'])->middleware('auth');
Route::get('/project/delete_project/{id}',                                  [CategoryController::               class, 'delete_project'])->middleware('auth');
Route::get('/project/detail_project/{id}',                                  [CategoryController::               class, 'detail_project'])->middleware('auth');

//HALAMAN ADMIN UNTUK LOGIN
Route::get('/pengguna/create',                                              [UserController::                  class, 'create'])->middleware('auth');
Route::post('/pengguna/store',                                              [UserController::                  class, 'store'])->middleware('auth');
Route::get('/pengguna/edit/{id}',                                           [UserController::                  class, 'edit'])->middleware('auth');
Route::post('/pengguna/update/{id}',                                        [UserController::                  class, 'update'])->middleware('auth');
Route::get('/pengguna/delete/{id}',                                         [UserController::                  class, 'delete'])->middleware('auth');

//Halaman KHUSUS USER
Route::get('/home',                                                         [HomeController::                  class, 'index'])->name('user/home');
Route::get('/barang',                                                       [BarangController::                class, 'index'])->name('user/barang');
Route::get('/cctv_user',                                                    [BarangController::                class, 'index_cctv'])->name('user/cctv_user');
Route::get('/laptop_user',                                                  [BarangController::                class, 'index_laptop'])->name('user/laptop_user');
Route::get('/network_user',                                                 [BarangController::                class, 'index_network'])->name('user/network_user');
Route::get('/pc_user',                                                      [BarangController::                class, 'index_pc'])->name('user/pc_user');
Route::get('/printer_user',                                                 [BarangController::                class, 'index_printer'])->name('user/printer_user');     
Route::get('/security_system_user',                                         [BarangController::                class, 'index_security_system'])->name('user/security_system_user');     
Route::get('/server_user',                                                  [BarangController::                class, 'index_server'])->name('user/server_user');     
Route::get('/services_user',                                                [BarangController::                class, 'index_services'])->name('user/services_user');     
Route::get('/software_user',                                                [BarangController::                class, 'index_software'])->name('user/software_user');     
Route::get('/isp_user',                                                     [BarangController::                class, 'index_services'])->name('user/isp_user');     
Route::get('/disk_user',                                                    [BarangController::                class, 'index_disk'])->name('user/disk_user');     
Route::get('/san_switch_user',                                              [BarangController::                class, 'index_san_switch'])->name('user/san_switch_user');     

//DETAIL BARANG DITAMPILAN USER
Route::get('/cctv_user/detail_cctv_user/{id}',                              [BarangController::                class, 'detail_cctv_user']);
Route::get('/laptop_user/detail_laptop_user/{id}',                          [BarangController::                class, 'detail_laptop_user']);
Route::get('/network_user/detail_network_user/{id}',                        [BarangController::                class, 'detail_network_user']);
Route::get('/pc_user/detail_pc_user/{id}',                                  [BarangController::                class, 'detail_pc_user']);
Route::get('/printer_user/detail_printer_user/{id}',                        [BarangController::                class, 'detail_printer_user']);
Route::get('/security_system_user/detail_security_system_user/{id}',        [BarangController::                class, 'detail_security_system_user']);
Route::get('/server_user/detail_server_user/{id}',                          [BarangController::                class, 'detail_server_user']);
Route::get('/services_user/detail_services_user/{id}',                      [BarangController::                class, 'detail_services_user']);
Route::get('/software_user/detail_software_user/{id}',                      [BarangController::                class, 'detail_software_user']);
Route::get('/isp_user/detail_isp_user/{id}',                                [BarangController::                class, 'detail_isp_user']);
Route::get('/disk_user/detail_disk_user/{id}',                              [BarangController::                class, 'detail_disk_user']);
Route::get('/san_switch_user/detail_san_switch_user/{id}',                  [BarangController::                class, 'detail_san_switch_user']);