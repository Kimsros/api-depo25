<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Models\User;
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
Route::get('login',[LoginController::class,'login']);
Route::get('register',[LoginController::class,'register']);


Route::resource('bank', BankController::class);
Route::resource('brand', BrandController::class);
Route::resource('cart', CartController::class);
Route::resource('category', CategoryController::class);
Route::resource('blog-category',BlogCategoryController::class);
Route::resource('blog',BlogController::class);
Route::resource('comment', CommentController::class);
Route::resource('comment-type', CommentTypeController::class);
Route::resource('delivery', DeliveryController::class);
Route::resource('delivery-location', DeliveryLocationController::class);
Route::resource('invoice', InvoiceController::class);
Route::resource('invoice-detail', InvoiceDetailController::class);
Route::resource('payment', PaymentController::class);
Route::resource('permission', PermisionController::class);
Route::resource('permission-type', PermissionTypeController::class);
Route::resource('pricing', PricingController::class);
Route::resource('product', ProductColorController::class);
Route::resource('product-image', ProductImageController::class);
Route::resource('product-tag', ProductTagController::class);
Route::resource('product-varial', ProductVariationConditionController::class);
Route::resource('product-variation', ProductVariationController::class);
Route::resource('product-video', ProductVideoController::class);
Route::resource('quote', QuoteController::class);
Route::resource('quote-detail', QuoteDetailController::class);
Route::resource('role', RoleController::class);
Route::resource('shop', ShopController::class);
Route::resource('preference_mains', PreferenceMainController::class);
Route::resource('preferences', PreferenceController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

