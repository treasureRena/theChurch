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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

//auth
Route::get('/register/view', [App\Http\Controllers\AuthController::class, 'registerView'])->name('registerView');
Route::post('/register/post', [App\Http\Controllers\AuthController::class, 'registerPost'])->name('registerPost');
Route::post('/login/post', [App\Http\Controllers\AuthController::class, 'loginPost'])->name('loginPost');
Route::get('/login/view', [App\Http\Controllers\AuthController::class, 'loginPage'])->name('loginPage');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/try', [App\Http\Controllers\TestController::class, 'testedM'])->name('testedM');
Route::get('/teens', [App\Http\Controllers\PagesController::class, 'teens'])->name('teens');
Route::get('/about', [App\Http\Controllers\PagesController::class, 'about'])->name('about');
Route::get('/page/contact', [App\Http\Controllers\PagesController::class, 'contact'])->name('contact');
Route::get('/page/children', [App\Http\Controllers\PagesController::class, 'children'])->name('children');
Route::get('/page/care-group', [App\Http\Controllers\PagesController::class, 'careGroup'])->name('careGroup');
Route::get('/page/foundation-school', [App\Http\Controllers\PagesController::class, 'foundationSchool'])->name('foundationSchool');
Route::get('/page/foundation/form', [App\Http\Controllers\PagesController::class, 'viewFoundationForm'])->name('viewFoundationForm');
Route::get('/water-baptism', [App\Http\Controllers\PagesController::class, 'waterBap'])->name('waterBap');
Route::get('/page/baby-dedication', [App\Http\Controllers\PagesController::class, 'babyDedication'])->name('babyDedication');
Route::get('/page/wedding', [App\Http\Controllers\PagesController::class, 'wedding'])->name('wedding');


/////post controller

Route::post('/post/contact', [App\Http\Controllers\PostController::class, 'uploadRequest'])->name('uploadRequest');

Route::group(['middleware' => ['checkType']], function () {
    Route::get('/page/stream', [App\Http\Controllers\PagesController::class, 'stream'])->name('stream');

});
