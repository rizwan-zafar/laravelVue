<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\RoleController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::group(['middleware'=>['auth:api']],function(){

//     Route::get('/role_name',[RoleController::class,'index'])->name('role_name');

// });

// Route::post('/login','Api\UserController@login');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/role_name',[RoleController::class,'index'])->name('role_name');
Route::post('/store',[RoleController::class,'store'])->name('store');
Route::put('/updateuser/{id}',[RoleController::class,'updateuser'])->name('updateuser');
Route::delete('/deleteuser/{id}',[RoleController::class,'deleteuser'])->name('deleteuser');
