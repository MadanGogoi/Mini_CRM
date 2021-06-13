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





Route::middleware(['auth'])->group(function () {
   
    Route::get('/', function () {
        return view('welcome',[
            'companies' => App\Models\company::where('user_id', auth()->id())->paginate(10)
    
        ]);
    })->name('home');

    Route::get('/employee/show',[EmployeeController::class, 'show']);
    
});

    Route::get('/company',[CompanyController::class, 'create']);
    Route::post('/company',[CompanyController::class, 'store']);
    Route::get('/company/{companies}', [CompanyController::class , 'show']);
    Route::get('/company/{companies}/edit', [CompanyController::class , 'edit']);
    Route::get('/company/{companies}/delete', [CompanyController::class , 'delete']);
    Route::put('/company/{companies}',[CompanyController::class, 'update']);

    //Routes for the employee 

    Route::get('/employee/{company}/{employees}/edit', [EmployeeController::class,'edit']);
    Route::put('/employee/{company}/{employees}',[EmployeeController::class, 'update']);
    Route::get('/employee/{employees}/delete',[EmployeeController::class,'delete']);
    Route::get('/employee/create',[EmployeeController::class, 'create']);
    Route::post('/employee',[EmployeeController::class, 'store']);

Auth::routes();



