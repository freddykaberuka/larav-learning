<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\category\CategoryController;
use App\Http\Controllers\blog\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home',function(){
     return redirect()->route('dashboard');
});
Route::get('/dashboard/admin', function () {
   return view('dashboard.app');
})->name('dashboard')->middleware('auth');


route::get('/category',[CategoryController::class,'index'])->name('category')->middleware('auth');
route::POST('/category/store',[CategoryController::class,'store'])->name('category.store')->middleware('auth');

route::get('/blog',[BlogController::class,'index'])->name('blog')->middleware('auth');
route::POST('/blog/store',[BlogController::class,'store'])->name('blog.store')->middleware('auth');

//Route::get('/layoutdashboard/login',function ()
//{
     //return view('layoutdashboard.Login');

//})->name('login');

//Route::get('/register',function ()
//{
     //return view('layoutdashboard.register');
//})->name('register'); 