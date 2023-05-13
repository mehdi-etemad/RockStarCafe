<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\CustomerController;

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
Route::get('/menu',[CustomerController::Class, 'getMenu']);
Route::get('/order',[CustomerController::Class, 'getOrder'])->middleware('auth:sanctum');
Route::post('/order',[CustomerController::Class, 'addOrder'])->middleware('auth:sanctum');
Route::get('/change',[CustomerController::Class, 'changeOrder'])->middleware('auth:sanctum');
Route::post('/cancel',[CustomerController::Class, 'cancelOrder'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/',function() {
    $user_manual = '<h2>Rock Star Cafe Webservice Usermanual (routes) :</h2>';
    $user_manual .= '<h4>1- Show Menu :<br />get:/manu</h4>';
    $user_manual .= '<h4>2- New Order :<br />post:/order<br />customer_name<br />customer_email<br /></h4>';
    $user_manual .= '<h4>3- Show current Order :<br />get:/order<br />order_id</h4>';
    $user_manual .= '<h4>4- Change waiting Order ( befor preparation step :<br />post:/change<br />order_id</h4>';
    $user_manual .= '<h4>5- Cancel current Order :<br />post:/cancel<br />order_id</h4>';
    return $user_manual;
});