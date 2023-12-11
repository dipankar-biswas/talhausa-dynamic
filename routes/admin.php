<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\brandController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\colorController;
use App\Http\Controllers\NeckController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\SiteSetupController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\SliderController;

Route::group(["prefix"=>"admin","middleware"=>"auth"], function(){

	Route::get("dashboard",[dashboardController::class,"index"])->name("admin.dashboard");

	/*For Site Setup*/
		Route::get("profile",[UserProfileController::class,"Index"])->name("profile");
		Route::post('/profile-update', [UserProfileController::class,'profileUpdate'])->name('profile.update');
    	Route::post('/password-change', [UserProfileController::class,'passwordChange'])->name('password.change');

	/*For Site Setup*/
		Route::get("site-setup",[SiteSetupController::class,"Index"])->name("site.setup");
		Route::post("site-setup/logo",[SiteSetupController::class,"HeaderUpdate"])->name("site.setup.logo");
		Route::post("site-setup/info",[SiteSetupController::class,"InformationUpdate"])->name("site.setup.info");
		Route::post("site-setup/social",[SiteSetupController::class,"SocialUpdate"])->name("site.setup.social");
		Route::post("site-setup/footer",[SiteSetupController::class,"FooterUpdate"])->name("site.setup.footer");
		Route::post("site-setup/copyright",[SiteSetupController::class,"CopyrightUpdate"])->name("site.setup.copyright");
	
	/*For Slide Setup*/
		Route::get("slides",[SlideController::class,"Index"])->name("slides");
		Route::post("slide/update",[SlideController::class,"SlideUpdate"])->name("slide.updated");
		
	/*For Banner Setup*/
		Route::get("banners",[BannerController::class,"Index"])->name("banners");
		Route::post("banner/top",[BannerController::class,"BannerUpdateTop"])->name("banner.update.top");
		Route::post("banner/middle",[BannerController::class,"BannerUpdateMiddle"])->name("banner.update.middle");
		Route::post("banner/bottom",[BannerController::class,"BannerUpdateBottom"])->name("banner.update.bottom");

	/*For brandController*/
		Route::get("brandAdd",[brandController::class,"Index"])->name("brand.addbrand");
		Route::post("brandInsert",[brandController::class,"Insert"])->name("brand.insert");
		Route::get("viewUpdate",[brandController::class,"View"])->name("brand.updateView");
		Route::post("brandUpdate",[brandController::class,"Update"])->name("brand.update");
		Route::get("delete/{id}",[brandController::class,"Delete"])->name("brand.delete");
	
	/*For SizeController*/
		Route::get("sizes",[SizeController::class,"Index"])->name("sizes");
		Route::post("size-add",[SizeController::class,"Insert"])->name("size.insert");
		Route::get("size-view",[SizeController::class,"View"])->name("size.view");
		Route::post("size-update",[SizeController::class,"Update"])->name("size.update");
		Route::get("size-delete/{id}",[SizeController::class,"Delete"])->name("size.delete");


	/*For categoryController*/
		Route::get("addcategory",[categoryController::class,"index"])->name("category.addcategory");
		Route::post("categoryInsert",[categoryController::class,"insert"])->name("category.categoryInsert");
		Route::get("viewUpdateCat",[categoryController::class,"viewUpdate"])->name("category.viewUpdateCat");
		Route::post("updateCat",[categoryController::class,"Update"])->name("category.updateCat");
		Route::get("catdelete/{id}",[categoryController::class,"delete"])->name("category.delete");



	/*For colorController*/
		Route::get("addcolor",[colorController::class,"index"])->name("color.addcolor");
		Route::post("colorInsert",[colorController::class,"insert"])->name("color.colorInsert");
		Route::get("editcolor",[colorController::class,"viewUpdate"])->name("color.editcolor");
		Route::post("updatecolor",[colorController::class,"Update"])->name("color.updatecolor");
		Route::get("coldelete/{id}",[colorController::class,"delete"])->name("color.coldelete");

	/*For NeckController*/
		Route::get("necklist",[NeckController::class,"Index"])->name("neck.necklist");
		Route::post("neckInsert",[NeckController::class,"Insert"])->name("neck.insert");
		Route::get("neckView",[NeckController::class,"View"])->name("neck.updateView");
		Route::post("neckUpdate",[NeckController::class,"Update"])->name("neck.update");
		Route::get("neckdelete/{id}",[NeckController::class,"Delete"])->name("neck.delete");


	/*For SliderController*/
		Route::get("slidelist",[SliderController::class,"Index"])->name("slide.slidelist");
		Route::post("slideInsert",[SliderController::class,"Insert"])->name("slide.insert");
		Route::get("slideView",[SliderController::class,"View"])->name("slide.updateView");
		Route::post("slideUpdate",[SliderController::class,"Update"])->name("slide.update");
		Route::get("slidedelete/{id}",[SliderController::class,"Delete"])->name("slide.delete");



	/*For OrderController*/
		Route::get("order",[OrderController::class,"get_all_order"])->name("list.orderlist");

		Route::post("orderstore",[OrderController::class,"Insert"])->name("insert.orderInsert");
		Route::get("orderUpdate",[OrderController::class,"View"])->name("view.orderUpdate");
		Route::post("orderupdate",[OrderController::class,"Update"])->name("update.orderupdate");
		Route::get("orderdelete/{id}",[OrderController::class,"Delete"])->name("delete.orderdelete");

		// For order
		Route::get("orderDetails/{id}",[OrderController::class,"get_all_order_Details"])->name("get_all_order_Details.orderDetails");

		Route::get("orderconfirm/{id}",[OrderController::class,"order_confirm"])->name("order_confirm.orderconfirm");

		Route::get("orderdelivery/{id}",[OrderController::class,"order_delivery"])->name("orderdelivery.order_delivery");


		Route::get("orderremove/{id}",[OrderController::class,"order_delete"])->name("orderdelete.order_delete");






	/*For ProductController*/
		Route::get("addproduct",[ProductController::class,"index"])->name("product.addproduct");
		Route::post("productInsert",[ProductController::class,"insert"])->name("product.productInsert");
		
		Route::get("editproduct",[ProductController::class,"viewUpdate"])->name("product.editproduct");

		Route::post("updateproduct",[ProductController::class,"Update"])->name("product.updateproduct");

		Route::get("productdelete/{id}",[ProductController::class,"delete"])->name("product.productdelete");

		Route::get("check",[ProductController::class,"comBoxMultipleCheck"])->name("product.comBoxMultipleCheck");

		Route::get("getcolorwishdata",[ProductController::class,"color_wish_data"])->name("getcolorwishdata.color_wish_data");

});