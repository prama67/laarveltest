<?php

use App\Http\Controllers\blogController;
use App\Models\postingan;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;


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
    return view('percobaan/home');
});

Route::get('/about', function () {
    return view('percobaan/about', [
        
        "nama" => "rama acyuta",
        "kelas" => "XRPL",
        "rumah" => "FBI",
        "img" => "aku hadir.jpg"

    ]);
});

// percobaan

Route::get('/blog', [blogController::class, 'index']);


// membuat yang baru
Route::get ('nwpost/{Post:slug}', [blogController::class, 'show']);

