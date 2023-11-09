<?php

use App\Http\Resources\periodColletion;
use App\Models\Period;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(["prefix"=> "v1", 'namespace' => 'App\Http\Controllers'], function () {
    Route::apiResource("periods",PeriodController::class);
    $period=Period::paginate();
   

});
