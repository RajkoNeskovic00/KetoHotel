<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',[\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/{room?}',[\App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/room',[\App\Http\Controllers\RoomController::class,'index'])->name('room');


Route::get('/room/{id}',[\App\Http\Controllers\RoomController::class,'show'])->name('room.show');
Route::post('/room',[\App\Http\Controllers\RoomController::class,'store'])->name('room.store');




Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('/about',[\App\Http\Controllers\AboutController::class, 'index'])->name('about');

Route::get('/contact',[\App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/contact',[\App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

Route::get('/forms',[\App\Http\Controllers\RegLogFormController::class, 'index'])->name('forms');

Route::post('/forms',[\App\Http\Controllers\RegLogFormController::class, 'store'])->name('registration');
Route::get('/logout',[\App\Http\Controllers\SessionsController::class,'destroy'])->name('logout');
Route::post('/login',[\App\Http\Controllers\SessionsController::class,'store'])->name('login');


Route::middleware('isAdmin')->group(function (){
//ADMIN
Route::get('/admin',[\App\Http\Controllers\admin\AdminController::class,'index'])->name('admin');
Route::get('/adminR',[\App\Http\Controllers\admin\AdminController::class,'rooms'])->name('admin.rooms');
Route::get('/adminU',[\App\Http\Controllers\admin\AdminController::class,'users'])->name('admin.users');
Route::get('/adminC',[\App\Http\Controllers\admin\AdminController::class,'category'])->name('admin.cat');
Route::get('/adminM',[\App\Http\Controllers\admin\AdminController::class,'message'])->name('admin.mes');


Route::get('/adminP',[\App\Http\Controllers\admin\AdminController::class,'price'])->name('admin.price');
Route::post('/price',[\App\Http\Controllers\admin\AdminController::class,'storePrice']);
Route::delete("/price/{id}",[\App\Http\Controllers\admin\AdminController::class,'priceDelete']);
Route::get('/price/{id}',[\App\Http\Controllers\admin\AdminController::class,'showPrice']);
Route::put('/price/{id}',[\App\Http\Controllers\admin\AdminController::class,'updatePrice']);
Route::resource('/categoryAdmin',\App\Http\Controllers\admin\CategoryAdminController::class);
Route::resource('/messageAdmin',\App\Http\Controllers\admin\MessagesAdminController::class);
Route::resource("/userAdmin",\App\Http\Controllers\admin\UsersAdminController::class);
Route::resource("/adminMenu",\App\Http\Controllers\admin\ManuAdminController::class)->name('index','adminMenu');
Route::resource('/adminRoom',\App\Http\Controllers\admin\RoomsAdminControler::class);
Route::resource("/adminContent",\App\Http\Controllers\admin\ContentRoomAdminController::class)->name('index','adminContent');
});
