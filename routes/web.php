<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubmitData;
use App\Http\Controllers\HttpRequestController;
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

Route::get("menu/{id}", [UserController::class, 'passData']);
Route::get("user/{id}", function($id) {
    return redirect("menu/$id");
});

// Route::view("header", "test");
Route::view("cssex", "cssex")->middleware("check");
Route::get("form", [SubmitData::class, "submitData"]);
Route::view("noaccess", "noaccess");

Route::group(["middleware" => ["checkName"]], function () {
    Route::view("header", "test");
});
Route::get("userinfo", [HttpRequestController::class, 'getData']);
Route::get("edit", function() {
    echo "hello";
});