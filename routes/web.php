<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FBController;
use App\Http\Controllers\PCController;
use App\Http\Controllers\ISPController;
use App\Http\Controllers\CctvController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\ServerController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\DiskController;
use App\Http\Controllers\PrinterController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SertifikasiController;
use App\Http\Controllers\SoftwareController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\GovermentController;
use App\Http\Controllers\SanSwitchController;
use App\Http\Controllers\NetworkingController;
use App\Http\Controllers\NonGovermentController;
use App\Http\Controllers\SecuritySystemController;
use App\Models\SanSwitch;
use App\Models\SecuritySystem;
use App\Models\Software;

//User
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;

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
    return view('welcome');
});

//Halaman Khusus Admin
Route::get('/index',                                                 [IndexController::                 class, 'index'])->name('admin/index');
Route::get('/team',                                                  [TeamController::                  class, 'index'])->name('admin/team');
Route::get('/partner',                                               [PartnerController::               class, 'index'])->name('admin/partner');
Route::get('/sertifikasi',                                           [SertifikasiController::           class, 'index'])->name('admin/sertifikasi');
Route::get('/education',                                             [EducationController::             class, 'index'])->name('admin/education');
Route::get('/FB',                                                    [FBController::                    class, 'index'])->name('admin/FB');
Route::get('/goverment',                                             [GovermentController::             class, 'index'])->name('admin/goverment');
Route::get('/non_goverment',                                         [NonGovermentController::          class, 'index'])->name('admin/non_goverment');
Route::get('/hospital',                                              [HospitalController::              class, 'index'])->name('admin/hospital');
                                
Route::get('/cctv',                                                  [ProdukController::                class, 'product_cctv'])->name('admin/cctv');
Route::get('/laptop',                                                [LaptopController::                class, 'index'])->name('admin/laptop');
Route::get('/networking',                                            [NetworkingController::            class, 'index'])->name('admin/networking');
Route::get('/pc',                                                    [PCController::                    class, 'index'])->name('admin/pc');
Route::get('/printer',                                               [PrinterController::               class, 'index'])->name('admin/printer');
Route::get('/security_system',                                       [SecuritySystemController::        class, 'index'])->name('admin/security_system');
Route::get('/server',                                                [ServerController::                class, 'index'])->name('admin/server');
Route::get('/services',                                              [ServicesController::              class, 'index'])->name('admin/services');
Route::get('/software',                                              [SoftwareController::              class, 'index'])->name('admin/software');
Route::get('/isp',                                                   [ISPController::                   class, 'index'])->name('admin/isp');
Route::get('/disk',                                                  [DiskController::                  class, 'index'])->name('admin/disk');
Route::get('/san_switch',                                            [SanSwitchController::             class, 'index'])->name('admin/san_switch');
                                
Route::get('/team/create',                                           [TeamController::                  class, 'create']);
Route::post('/team/store',                                           [TeamController::                  class, 'store']);
Route::get('/team/edit-team/{id}',                                   [TeamController::                  class, 'edit']);
Route::post('/team/update/{id}',                                     [TeamController::                  class, 'update']);
Route::get('/team/hapus/{id}',                                       [TeamController::                  class, 'hapus']);
Route::get('/team/detail/{id}',                                      [TeamController::                  class, 'detail']);
            
Route::get('/education/create',                                      [EducationController::             class, 'create']);
Route::post('/education/store',                                      [EducationController::             class, 'store']);
Route::get('/education/edit-education/{id}',                         [EducationController::             class, 'edit']);
Route::post('/education/update/{id}',                                [EducationController::             class, 'update']);
            
Route::get('/FB/create',                                             [FBController::                    class, 'create']);
Route::post('/FB/store',                                             [FBController::                    class, 'store']);
Route::get('/FB/edit-fb/{id}',                                       [FBController::                    class, 'edit']);
Route::post('/FB/update/{id}',                                       [FBController::                    class, 'update']);
            
Route::get('goverment/create',                                       [GovermentController::             class, 'create']);
Route::post('goverment/store',                                       [GovermentController::             class, 'store']);
Route::get('goverment/edit-goverment/{id}',                          [GovermentController::             class, 'edit']);
Route::post('goverment/update/{id}',                                 [GovermentController::             class, 'update']);
    
Route::get('/non_goverment/create',                                  [NonGovermentController::          class, 'create']);
Route::post('/non_goverment/store',                                  [NonGovermentController::          class, 'store']);
Route::get('/non_goverment/edit-non_goverment/{id}',                 [NonGovermentController::          class, 'edit']);
Route::post('/non_goverment/update/{id}',                            [NonGovermentController::          class, 'update']);
    
Route::get('/hospital/create',                                       [HospitalController::              class, 'create']);
Route::post('/hospital/store',                                       [HospitalController::              class, 'store']);
Route::get('/hospital/edit-hospital/{id}',                           [HospitalController::              class, 'edit']);
Route::post('/hospital/update/{id}',                                 [HospitalController::              class, 'update']);
    
Route::get('/cctv/create_cctv',                                      [ProdukController::                  class, 'create_cctv']);
Route::post('/cctv/store_cctv',                                      [ProdukController::                  class, 'store_cctv']);
Route::get('/cctv/edit-cctv/{id}',                                   [CctvController::                  class, 'edit']);
Route::post('/cctv/update/{id}',                                     [CctvController::                  class, 'update']);
Route::get('/cctv/hapus/{id}',                                       [CctvController::                  class, 'hapus']);
Route::get('/cctv/detail/{id}',                                      [CctvController::                  class, 'detail']);
    
Route::get('/laptop/create',                                         [LaptopController::                class, 'create']);
Route::post('/laptop/store',                                         [LaptopController::                class, 'store']);
Route::get('/laptop/edit-laptop/{id}',                               [LaptopController::                class, 'edit']);
Route::post('/laptop/update/{id}',                                   [LaptopController::                class, 'update']);
Route::get('/laptop/hapus/{id}',                                     [LaptopController::                class, 'hapus']);
Route::get('/laptop/detail/{id}',                                    [LaptopController::                class, 'detail']);
    
Route::get('/networking/create',                                     [NetworkingController::            class, 'create']);
Route::post('/networking/store',                                     [NetworkingController::            class, 'store']);
Route::get('/networking/edit-networking/{id}',                       [NetworkingController::            class, 'edit']);
Route::post('/networking/update/{id}',                               [NetworkingController::            class, 'update']);
Route::get('/networking/hapus/{id}',                                 [NetworkingController::            class, 'hapus']);
Route::get('/networking/detail/{id}',                                [NetworkingController::            class, 'detail']);
    
Route::get('/pc/create',                                             [PCController::                    class, 'create']);
Route::post('/pc/store',                                             [PCController::                    class, 'store']);
Route::get('/pc/edit-pc/{id}',                                       [PCController::                    class, 'edit']);
Route::post('/pc/update/{id}',                                       [PCController::                    class, 'update']);
Route::get('/pc/hapus/{id}',                                         [PCController::                    class, 'hapus']);
Route::get('/pc/detail/{id}',                                        [PCController::                    class, 'detail']);
    
Route::get('/printer/create',                                        [PrinterController::               class, 'create']);
Route::post('/printer/store',                                        [PrinterController::               class, 'store']);
Route::get('/printer/edit-printer/{id}',                             [PrinterController::               class, 'edit']);
Route::post('/printer/update/{id}',                                  [PrinterController::               class, 'update']);
Route::get('/printer/hapus/{id}',                                    [PrinterController::               class, 'hapus']);
Route::get('/printer/detail/{id}',                                   [PrinterController::               class, 'detail']);

Route::get('/security_system/create',                                [SecuritySystemController::        class, 'create']);
Route::post('/security_system/store',                                [SecuritySystemController::        class, 'store']);
Route::get('/security_system/edit-securitysystem/{id}',              [SecuritySystemController::        class, 'edit']);
Route::post('/security_system/update/{id}',                          [SecuritySystemController::        class, 'update']);
Route::get('/security_system/hapus/{id}',                            [SecuritySystemController::        class, 'hapus']);
Route::get('/security_system/detail/{id}',                           [SecuritySystemController::        class, 'detail']);

Route::get('/server/create',                                         [ServerController::                class, 'create']);
Route::post('/server/store',                                         [ServerController::                class, 'store']);
Route::get('/server/edit-server/{id}',                               [ServerController::                class, 'edit']);
Route::post('/server/update/{id}',                                   [ServerController::                class, 'update']);
Route::get('/server/hapus/{id}',                                     [ServerController::                class, 'hapus']);
Route::get('/server/detail/{id}',                                    [ServerController::                class, 'detail']);

Route::get('/services/create',                                       [ServicesController::              class, 'create']);
Route::post('/services/store',                                       [ServicesController::              class, 'store']);
Route::get('/services/edit-services/{id}',                           [ServicesController::              class, 'edit']);
Route::post('/services/update/{id}',                                 [ServicesController::              class, 'update']);
Route::get('/services/hapus/{id}',                                   [ServicesController::              class, 'hapus']);
Route::get('/services/detail/{id}',                                  [ServicesController::              class, 'detail']);

Route::get('/software/create',                                       [SoftwareController::              class, 'create']);
Route::post('/software/store',                                       [SoftwareController::              class, 'store']);
Route::get('/software/edit-software/{id}',                           [SoftwareController::              class, 'edit']);
Route::post('/software/update/{id}',                                 [SoftwareController::              class, 'update']);
Route::get('/software/hapus/{id}',                                   [SoftwareController::              class, 'hapus']);
Route::get('/software/detail/{id}',                                  [SoftwareController::              class, 'detail']);

Route::get('/isp/create',                                            [ISPController::                   class, 'create']);
Route::post('/isp/store',                                            [ISPController::                   class, 'store']);
Route::get('/isp/edit-isp/{id}',                                     [ISPController::                   class, 'edit']);
Route::post('/isp/update/{id}',                                      [ISPController::                   class, 'update']);
Route::get('/isp/hapus/{id}',                                        [ISPController::                   class, 'hapus']);
Route::get('/isp/detail/{id}',                                       [ISPController::                   class, 'detail']);

Route::get('/disk/create',                                           [DiskController::                  class, 'create']);
Route::post('/disk/store',                                           [DiskController::                  class, 'store']);
Route::get('/disk/edit-disk/{id}',                                   [DiskController::                  class, 'edit']);
Route::post('/disk/update/{id}',                                     [DiskController::                  class, 'update']);
Route::get('/disk/hapus/{id}',                                       [DiskController::                  class, 'hapus']);
Route::get('/disk/detail/{id}',                                      [DiskController::                  class, 'detail']);

Route::get('/san_switch/create',                                     [SanSwitchController::             class, 'create']);
Route::post('/san_switch/store',                                     [SanSwitchController::             class, 'store']);
Route::get('/san_switch/edit-san_switch/{id}',                       [SanSwitchController::             class, 'edit']);
Route::post('/san_switch/update/{id}',                               [SanSwitchController::             class, 'update']);
Route::get('/san_switch/hapus/{id}',                                 [SanSwitchController::             class, 'hapus']);
Route::get('/san_switch/detail/{id}',                                [SanSwitchController::             class, 'detail']);

Route::get('/sertifikasi/create',                                    [SertifikasiController::           class, 'create']);
Route::post('/sertifikasi/store',                                    [SertifikasiController::           class, 'store']);
Route::get('/sertifikasi/edit-sertifikasi/{id}',                     [SertifikasiController::           class, 'edit']);
Route::post('/sertifikasi/update/{id}',                              [SertifikasiController::           class, 'update']);
Route::get('/sertifikasi/hapus/{id}',                                [SertifikasiController::           class, 'hapus']);
Route::get('/sertifikasi/detail/{id}',                               [SertifikasiController::           class, 'detail']);

//Halaman Khusus User
Route::get('/home',                                                  [HomeController::                  class, 'index'])->name('user/home');
Route::get('/produk',                                                [ProdukController::                class, 'index'])->name('user/produk');