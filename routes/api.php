<?php

use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ApiController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('students/{id}', [ApiController::class,'getStudent']);
Route::get('students',[ApiController::class,'getAllStudents']);
Route::post('students',[ApiController::class,'createStudent']);
Route::delete('students', [ApiController::class,'deleteStudent']);
Route::put('students/{id}', [ApiController::class,'updateStudent']);
// Route::put('students',function(){
//     return 'we are here';
// });