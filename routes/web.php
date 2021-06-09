<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;


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
})->middleware('auth');

Route::get('/company',[CompanyController::class, 'create']);

Route::get('/company/{companies}/edit', [CompanyController::class , 'edit']);
Route::get('/company/{companies}/delete', [CompanyController::class , 'delete']);

Route::post('/company',[CompanyController::class, 'store']);
Route::put('/company/{companies}',[CompanyController::class, 'update']);
Route::get('/company/{companies}/show', [CompanyController::class , 'show'])->name('company');

//Routes for the employee 

Route::get('/employee',[EmployeeController::class, 'create']);
Route::post('/employee',[EmployeeController::class, 'store']);
Route::get('/employee/{company}/{employees}/edit', [EmployeeController::class,'edit']);
Route::put('/employee/{company}/{employees}',[EmployeeController::class, 'update']);
Route::get('/employee/{employees}/delete',[EmployeeController::class,'delete']);


Route::get('/home', function () {
    return view('home',[
        'companies' => App\Models\company::where('isadmin', auth()->id())->paginate(10)

    ]);
});



Auth::routes();



