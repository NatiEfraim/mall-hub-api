<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\ProductDetailsController;
use App\Http\Controllers\Admin\ProductListController;
use App\Http\Controllers\Admin\SiteInfoController;
use App\Http\Controllers\Admin\SliderController;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VisitorController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
////////////Get visetor
Route::get("/getvisitor", [VisitorController::class, "GetVisitorDetails"]);
////Post-contact page
Route::post("/postcontact", [ContactController::class, "PostContactDetails"]);
///Get request site info
Route::get("/allsiteinfo", [SiteInfoController::class, "AllSiteInfo"]);
///Get request category
Route::get("/allcategory", [CategoryController::class, "AllCategory"]);
///Get request ProductList Route
Route::get("/productlistbyremark/{remark}", [ProductListController::class, "ProductListByRemark"]);
///Get request ProductCategory Route
Route::get("/productlistbycategory/{category}", [ProductListController::class, "ProductListByCategory"]);
///Get request ProductSubcategory Route
Route::get("/productlistbysubcategory/{category}/{subcategory}", [ProductListController::class, "ProductListBySubCategory"]);
///Get request allSlider Route
Route::get("/allslider", [SliderController::class, "AllSlider"]);
///Get request PeoductDetails Route
Route::get("/productdetails/{id}", [ProductDetailsController::class, "ProductDetails"]);
///Get request allNotification Route
Route::get("/notification", [NotificationController::class, "NotificationHistory"]);
///Get request searc Route
Route::get("/search/{key}", [ProductListController::class, "ProductBySearch"]);
