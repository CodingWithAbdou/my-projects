<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Models\Project;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

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
    return view('welcome');
});

Auth::routes();


Route::resource('/projects'  , ProjectController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/projects/{project}/tasks/create' , [TaskController::class , 'store']);
Route::patch('/projects/{project}/tasks/{task}' , [TaskController::class , 'update']);
Route::delete('/projects/{project}/tasks/{task}' , [TaskController::class , 'destroy']);


Route::get('/profile' , [ProfileController::class , 'index'])->middleware('auth');

Route::patch('/profile' , [ProfileController::class , 'update']);
