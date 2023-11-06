<?php

use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\cretateuserController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsercontrolController;
use App\Http\Controllers\TemIndexOneController;

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
    return view('index');
});

Auth::routes();
// home controller routing group
Route::middleware(['auth'])->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/dashbord', [App\Http\Controllers\HomeController::class, 'index'])->name('dashbord');
    });
});

// user_info route group
Route::get('/user', [App\Http\Controllers\NewuserController::class, 'index'])->name('user');

// setting route
Route::get('/setting', [SettingController::class, 'setting'])->name('setting');
Route::post('/setting/add', [SettingController::class, 'setting_add'])->name('setting_add');


// user ragistration route
Route::get('/user_create', [cretateuserController::class, 'user_create'])->name('user_create');
Route::post('/create_user_store', [cretateuserController::class, 'createuser'])->name('createuser');
Route::get('/user/login', [cretateuserController::class, 'userlogin'])->name('userlogin');


// catagory route
Route::get('/catagory_create', [CatagoryController::class, 'catagory_create'])->name('catagory_create');
Route::post('/catagory_store', [CatagoryController::class, 'catagory_store'])->name('catagory_store');


// product route
Route::get('/prouduct', [ProductController::class, 'viewProduct'])->name('viewProduct');
Route::post('/productstore', [ProductController::class, 'productstore'])->name('productstore');
Route::get('/prouduct/view', [ProductController::class, 'viewproductlist'])->name('viewproductlist');


// backend/user function route here
Route::group(['middleware' => 'auth'], function () {
    Route::get('/user/deshbord', [UsercontrolController::class, 'userdashbord_view'])->name('userdashbord');
});

// template routing
Route::get('/template/one', [TemIndexOneController::class, 'TemIndexOneView'])->name('TemIndexOneView');

