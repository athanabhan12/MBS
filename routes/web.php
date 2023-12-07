<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SertifikasiController;
use App\Http\Controllers\BarangController;
use App\Models\Partner;
use App\Models\Project;
use App\Models\Tim;



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
    $partner                = Partner::all();
    $education              = Project::all();
    $fb                     = Project::all();
    $goverment              = Project::all();
    $non_goverment          = Project::all();
    $hospital               = Project::all();
    return view('user/home', compact('tim', 
                                     'partner', 
                                     'education', 
                                     'fb', 
                                     'goverment', 
                                     'non_goverment', 
                                     'hospital'
    ));
});

//HALAMAN KHUSUS ADMIN

//HALAMAN UTAMA
Route::get('/index',                                                 [IndexController::                 class, 'index'])->name('admin/index');
Route::get('/team',                                                  [TeamController::                  class, 'index'])->name('admin/team');
Route::get('/partner',                                               [PartnerController::               class, 'index_partner'])->name('admin/partner');
Route::get('/sertifikasi',                                           [SertifikasiController::           class, 'index_sertifikasi'])->name('admin/sertifikasi');

//HALAMAN HOMEE PROJECT REFERENCE
Route::get('/education',                                             [ProjectController::               class, 'project_education'])->name('admin/education');
Route::get('/FB',                                                    [ProjectController::               class, 'project_fb'])->name('admin/FB');
Route::get('/goverment',                                             [ProjectController::               class, 'project_goverment'])->name('admin/goverment');
Route::get('/non_goverment',                                         [ProjectController::               class, 'project_non_goverment'])->name('admin/non_goverment');
Route::get('/hospital',                                              [ProjectController::               class, 'project_hospital'])->name('admin/hospital');

//HALAMAN HOME PRODUK
Route::get('/cctv',                                                  [ProdukController::                class, 'product_cctv'])->name('admin/cctv');
Route::get('/laptop',                                                [ProdukController::                class, 'product_laptop'])->name('admin/laptop');
Route::get('/networking',                                            [ProdukController::                class, 'product_networking'])->name('admin/networking');
Route::get('/pc',                                                    [ProdukController::                class, 'product_pc'])->name('admin/pc');
Route::get('/printer',                                               [ProdukController::                class, 'product_printer'])->name('admin/printer');
Route::get('/security_system',                                       [ProdukController::                class, 'product_security_system'])->name('admin/security_system');
Route::get('/server',                                                [ProdukController::                class, 'product_server'])->name('admin/server');
Route::get('/services',                                              [ProdukController::                class, 'product_services'])->name('admin/services');
Route::get('/software',                                              [ProdukController::                class, 'product_software'])->name('admin/software');
Route::get('/isp',                                                   [ProdukController::                class, 'product_isp'])->name('admin/isp');
Route::get('/disk',                                                  [ProdukController::                class, 'product_disk'])->name('admin/disk');
Route::get('/san_switch',                                            [ProdukController::                class, 'product_san_switch'])->name('admin/san_switch');

//HALAMAN TEAM
Route::get('/team/create',                                           [TeamController::                  class, 'create']);
Route::post('/team/store',                                           [TeamController::                  class, 'store']);
Route::get('/team/edit-team/{id}',                                   [TeamController::                  class, 'edit']);
Route::post('/team/update/{id}',                                     [TeamController::                  class, 'update']);
Route::get('/team/hapus/{id}',                                       [TeamController::                  class, 'hapus']);
Route::get('/team/detail/{id}',                                      [TeamController::                  class, 'detail']);

//HALAMAN PARTNER
Route::get('partner/create_partner',                                 [PartnerController::               class, 'create_partner']);
Route::post('partner/store_partner',                                 [PartnerController::               class, 'store_partner']);
Route::get('partner/edit_partner/{id}',                              [PartnerController::               class, 'edit_partner']);
Route::post('partner/update_partner/{id}',                           [PartnerController::               class, 'update_partner']);
Route::get('partner/delete_partner/{id}',                            [PartnerController::               class, 'delete_partner']);

//HALAMAN SERTIFIKASI
Route::get('sertifikasi/create_sertifikasi',                         [SertifikasiController::           class, 'create_sertifikasi']);
Route::post('sertifikasi/store_sertifikasi',                         [SertifikasiController::           class, 'store_sertifikasi']);
Route::get('sertifikasi/edit_sertifikasi/{id}',                      [SertifikasiController::           class, 'edit_sertifikasi']);
Route::post('sertifikasi/update_sertifikasi/{id}',                   [SertifikasiController::           class, 'update_sertifikasi']);
Route::get('sertifikasi/delete_sertifikasi/{id}',                    [SertifikasiController::           class, 'delete_sertifikasi']);

//HALAMAN EDUCATION
Route::get('/education/create_education',                            [ProjectController::               class, 'create_education']);
Route::post('/education/store_education',                            [ProjectController::               class, 'store_education']);
Route::get('/education/edit_education/{id}',                         [ProjectController::               class, 'edit_education']);
Route::post('/education/update_education/{id}',                      [ProjectController::               class, 'update_education']);
Route::get('/education/delete_education/{id}',                       [ProjectController::               class, 'delete_education']);

//HALAMAN FINANCE & BANKING
Route::get('/FB/create_fb',                                          [ProjectController::               class, 'create_fb']);
Route::post('/FB/store_fb',                                          [ProjectController::               class, 'store_fb']);
Route::get('/FB/edit_fb/{id}',                                       [ProjectController::               class, 'edit_fb']);
Route::post('/FB/update_fb/{id}',                                    [ProjectController::               class, 'update_fb']);
Route::get('/FB/delete_fb/{id}',                                     [ProjectController::               class, 'delete_fb']);

//HALAMAN GOVERMENT
Route::get('goverment/create_goverment',                             [ProjectController::               class, 'create_goverment']);
Route::post('goverment/store_goverment',                             [ProjectController::               class, 'store_goverment']);
Route::get('goverment/edit_goverment/{id}',                          [ProjectController::               class, 'edit_goverment']);
Route::post('goverment/update_goverment/{id}',                       [ProjectController::               class, 'update_goverment']);
Route::get('goverment/delete_goverment/{id}',                        [ProjectController::               class, 'delete_goverment']);

//HALAMAN NON_GOVERMENT
Route::get('/non_goverment/create_non_goverment',                    [ProjectController::               class, 'create_non_goverment']);
Route::post('/non_goverment/store_non_goverment',                    [ProjectController::               class, 'store_non_goverment']);
Route::get('/non_goverment/edit_non_goverment/{id}',                 [ProjectController::               class, 'edit_non_goverment']);
Route::post('/non_goverment/update_non_goverment/{id}',              [ProjectController::               class, 'update_non_goverment']);
Route::get('/non_goverment/delete_non_goverment/{id}',               [ProjectController::               class, 'delete_non_goverment']);

//HALAMAN HOSPITAL
Route::get('/hospital/create_hospital',                              [ProjectController::               class, 'create_hospital']);
Route::post('/hospital/store_hospital',                              [ProjectController::               class, 'store_hospital']);
Route::get('/hospital/edit_hospital/{id}',                           [ProjectController::               class, 'edit_hospital']);
Route::post('/hospital/update_hospital/{id}',                        [ProjectController::               class, 'update_hospital']);
Route::get('/hospital/delete_hospital/{id}',                         [ProjectController::               class, 'delete_hospital']);

//HALAMAN CCTV
Route::get('/cctv/create_cctv',                                      [ProdukController::                class, 'create_cctv']);
Route::post('/cctv/store_cctv',                                      [ProdukController::                class, 'store_cctv']);
Route::get('/cctv/edit_cctv/{id}',                                   [ProdukController::                class, 'edit_cctv']);
Route::post('/cctv/update_cctv/{id}',                                [ProdukController::                class, 'update_cctv']);
Route::get('/cctv/delete_cctv/{id}',                                 [ProdukController::                class, 'delete_cctv']);
Route::get('/cctv/detail_cctv/{id}',                                 [ProdukController::                class, 'detail_cctv']);

//HALAAN LAPTOP
Route::get('/laptop/create_laptop',                                  [ProdukController::                class, 'create_laptop']);
Route::post('/laptop/store_laptop',                                  [ProdukController::                class, 'store_laptop']);
Route::get('/laptop/edit-laptop/{id}',                               [ProdukController::                class, 'edit_laptop']);
Route::post('/laptop/update_laptop/{id}',                            [ProdukController::                class, 'update_laptop']);
Route::get('/laptop/hapus_laptop/{id}',                              [ProdukController::                class, 'hapus_laptop']);
Route::get('/laptop/detail_laptop/{id}',                             [ProdukController::                class, 'detail_laptop']);

//HALAMAN NETWORKING
Route::get('/networking/create_networking',                          [ProdukController::                class, 'create_networking']);
Route::post('/networking/store_networking',                          [ProdukController::                class, 'store_networking']);
Route::get('/networking/edit_networking/{id}',                       [ProdukController::                class, 'edit_networking']);
Route::post('/networking/update_networking/{id}',                    [ProdukController::                class, 'update_networking']);
Route::get('/networking/hapus_networking/{id}',                      [ProdukController::                class, 'hapus_networking']);
Route::get('/networking/detail_networking/{id}',                     [ProdukController::                class, 'detail_networking']);
 
//HALAMAN PC
Route::get('/pc/create_pc',                                          [ProdukController::                class, 'create_pc']);
Route::post('/pc/store_pc',                                          [ProdukController::                class, 'store_pc']);
Route::get('/pc/edit_pc/{id}',                                       [ProdukController::                class, 'edit_pc']);
Route::post('/pc/update_pc/{id}',                                    [ProdukController::                class, 'update_pc']);
Route::get('/pc/hapus_pc/{id}',                                      [ProdukController::                class, 'hapus_pc']);
Route::get('/pc/detail_pc/{id}',                                     [ProdukController::                class, 'detail_pc']);
 
//HALAMAN PRINTER
Route::get('/printer/create_printer',                                [ProdukController::                class, 'create_printer']);
Route::post('/printer/store_printer',                                [ProdukController::                class, 'store_printer']);
Route::get('/printer/edit_printer/{id}',                             [ProdukController::                class, 'edit_printer']);
Route::post('/printer/update_printer/{id}',                          [ProdukController::                class, 'update_printer']);
Route::get('/printer/hapus_printer/{id}',                            [ProdukController::                class, 'hapus_printer']);
Route::get('/printer/detail_printer/{id}',                           [ProdukController::                class, 'detail_printer']);

//HALAMAN SECURITY_SYSTEM
Route::get('/security_system/create_security_system',                [ProdukController::                class, 'create_security_system']);
Route::post('/security_system/store_security_system',                [ProdukController::                class, 'store_security_system']);
Route::get('/security_system/edit_security_system/{id}',             [ProdukController::                class, 'edit_security_system']);
Route::post('/security_system/update_security_system/{id}',          [ProdukController::                class, 'update_security_system']);
Route::get('/security_system/hapus_security_system/{id}',            [ProdukController::                class, 'hapus_security_system']);
Route::get('/security_system/detail_security_system/{id}',           [ProdukController::                class, 'detail_security_system']);

//HALAMAN SERVER
Route::get('/server/create_server',                                         [ProdukController::                class, 'create_server']);
Route::post('/server/store_server',                                         [ProdukController::                class, 'store_server']);
Route::get('/server/edit_server/{id}',                                      [ProdukController::                class, 'edit_server']);
Route::post('/server/update_server/{id}',                                   [ProdukController::                class, 'update_server']);
Route::get('/server/hapus_server/{id}',                                     [ProdukController::                class, 'hapus_server']);
Route::get('/server/detail_server/{id}',                                    [ProdukController::                class, 'detail_server']);

//HALAMAN SERVICES
Route::get('/services/create_services',                                     [ProdukController::                class, 'create_services']);
Route::post('/services/store_services',                                     [ProdukController::                class, 'store_services']);
Route::get('/services/edit_services/{id}',                                  [ProdukController::                class, 'edit_services']);
Route::post('/services/update_services/{id}',                               [ProdukController::                class, 'update_services']);
Route::get('/services/hapus_services/{id}',                                 [ProdukController::                class, 'hapus_services']);
Route::get('/services/detail_services/{id}',                                [ProdukController::                class, 'detail_services']);

//HALAMAN SOFTWARE
Route::get('/software/create_software',                                     [ProdukController::                class, 'create_software']);
Route::post('/software/store_software',                                     [ProdukController::                class, 'store_software']);
Route::get('/software/edit_software/{id}',                                  [ProdukController::                class, 'edit_software']);
Route::post('/software/update_software/{id}',                               [ProdukController::                class, 'update_software']);
Route::get('/software/hapus_software/{id}',                                 [ProdukController::                class, 'hapus_software']);
Route::get('/software/detail_software/{id}',                                [ProdukController::                class, 'detail_software']);

//HALAMAN ISP
Route::get('/isp/create_isp',                                               [ProdukController::                class, 'create_isp']);
Route::post('/isp/store_isp',                                               [ProdukController::                class, 'store_isp']);
Route::get('/isp/edit_isp/{id}',                                            [ProdukController::                class, 'edit_isp']);
Route::post('/isp/update_isp/{id}',                                         [ProdukController::                class, 'update_isp']);
Route::get('/isp/hapus_isp/{id}',                                           [ProdukController::                class, 'hapus_isp']);
Route::get('/isp/detail_isp/{id}',                                          [ProdukController::                class, 'detail_isp']);

//HALAMAN DISK
Route::get('/disk/create_disk',                                             [ProdukController::                class, 'create_disk']);
Route::post('/disk/store_disk',                                             [ProdukController::                class, 'store_disk']);
Route::get('/disk/edit_disk/{id}',                                          [ProdukController::                class, 'edit_disk']);
Route::post('/disk/update_disk/{id}',                                       [ProdukController::                class, 'update_disk']);
Route::get('/disk/hapus_disk/{id}',                                         [ProdukController::                class, 'hapus_disk']);
Route::get('/disk/detail_disk/{id}',                                        [ProdukController::                class, 'detail_disk']);

//HALAMAN SAN_SWITCH
Route::get('/san_switch/create_san_switch',                                 [ProdukController::                class, 'create_san_switch']);
Route::post('/san_switch/store_san_switch',                                 [ProdukController::                class, 'store_san_switch']);
Route::get('/san_switch/edit_san_switch/{id}',                              [ProdukController::                class, 'edit_san_switch']);
Route::post('/san_switch/update_san_switch/{id}',                           [ProdukController::                class, 'update_san_switch']);
Route::get('/san_switch/hapus_san_switch/{id}',                             [ProdukController::                class, 'hapus_san_switch']);
Route::get('/san_switch/detail_san_switch/{id}',                            [ProdukController::                class, 'detail_san_switch']);

//HALAMAN SERTIFIKASI
Route::get('/sertifikasi/create',                                           [SertifikasiController::           class, 'create']);
Route::post('/sertifikasi/store',                                           [SertifikasiController::           class, 'store']);
Route::get('/sertifikasi/edit-sertifikasi/{id}',                            [SertifikasiController::           class, 'edit']);
Route::post('/sertifikasi/update/{id}',                                     [SertifikasiController::           class, 'update']);
Route::get('/sertifikasi/hapus/{id}',                                       [SertifikasiController::           class, 'hapus']);
Route::get('/sertifikasi/detail/{id}',                                      [SertifikasiController::           class, 'detail']);

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