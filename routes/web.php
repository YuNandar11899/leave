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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
//  Route::get('/',function(){
//      return view('admin');
// });
// Route::get('/leave/changepassword',function(){
//     return view('changepassword');
// });

// Route::get('/department',[DepartmentController::class,'index']);
// Route::get('/department/create',[DepartmentController::class,'create']);
// Route::post('/department',[DepartmentController::class,'store']);
// Route::get('/department/{id}/edit',[DepartmentController::class,'edit']);
// Route::patch('/department/{id}/edit',[DepartmentController::class,'update']);
// Route::delete('/department/{departments}',[DepartmentController::class,'destroy']);




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
