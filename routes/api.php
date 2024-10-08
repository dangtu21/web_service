<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', [AuthController::class,'login']);
    Route::post('logout',  [AuthController::class,'logout']);
    Route::post('register',  [AuthController::class,'register']);
    Route::post('refresh', [AuthController::class,'refresh']);
    Route::get('me', [AuthController::class,'me']);
    Route::get('server', [AuthController::class,'getServer']);
    Route::get('subscribe', [AuthController::class, 'subscribe']);
    Route::get('getProductUser', [AuthController::class, 'getProductUser']);
    Route::get('getProduct', [AuthController::class, 'getProduct']);
    Route::post('getLink', [AuthController::class, 'getLink']);
    Route::post('postForgetPass', [AuthController::class, 'postForgetPass']);
    Route::get('getOrderDetail', [AuthController::class, 'getOrderDetail']);

    Route::get('shadownroket', [AuthController::class, 'subscribe']);



});
