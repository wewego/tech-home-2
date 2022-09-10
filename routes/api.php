<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RateController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentGetHandler;
use App\Http\Controllers\SearchProductController;
use App\Http\Controllers\SearchCategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderGetHandler;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/auth/register' , [AuthController::class,'register']);
Route::post('/auth/login' , [AuthController::class,'login']);
Route::get('/comments/{product_id}' , [CommentGetHandler::class,'show']);
Route::get('/searchproduct/{product_name}' , [SearchProductController::class,'show']);
Route::get('/searchcategory/{category_id}' , [SearchCategoryController::class,'show']);
Route::get('/orders/{user_id}' , [OrderGetHandler::class,'show']);


Route::apiResource("profile" , ProfileController::class);
Route::apiResource("rate" , RateController::class);
Route::apiResource("comment" , CommentController::class);
Route::apiResource("cart" , CartController::class);
Route::apiResource("product" , ProductController::class);
Route::apiResource("category" , CategoryController::class);
Route::apiResource("order" , OrderController::class);