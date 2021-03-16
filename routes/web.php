<?php

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

Route::get('/', 'ShopController@index')->name('shop.index');
Route::get('/lien-he', 'ShopController@contact')->name('shop.contact');
Route::post('/lien-he', 'ShopController@postContact')->name('shop.postContact');


//trang giới thiệu
Route::get('/gioi-thieu', 'ShopController@about')->name('shop.about');

//trang đối tác
Route::get('/doi-tac', 'ShopController@vendor')->name('shop.vendor');
Route::get('/doi-tac/{slug}', 'ShopController@getListVendor')->name('shop.getListVendor');

//trang tin tuc
Route::get('/tin-tuc', 'ShopController@article')->name('shop.article');
Route::get('/tin-tuc/{slug}', 'ShopController@getListArticle')->name('shop.getListArticle');
Route::get('/chi-tiet-tin-tuc/{slug}', 'ShopController@getDetailArticle')->name('shop.getDetailArticle');

//trang san pham
Route::get('/san-pham', 'ShopController@product')->name('shop.product');
Route::get('/san-pham/{slug}', 'ShopController@getListProduct')->name('shop.getListProduct');

Route::get('/chi-tiet-san-pham/{slug}_{id}', 'ShopController@getProductDetail')->name('shop.getProductDetail');

//Route::get('/chi-tiet-san-pham/{slug}', 'ShopController@getDetailProduct')->name('shop.getDetailProduct');

Route::get('/tim-kiem', 'ShopController@search')->name('shop.searchProducts');

Route::post('/', 'ShopController@setContact')->name('shop.setContact');

// php artisan route:list
Route::get('/admin/login', 'AdminController@login')->name('admin.login');
Route::post('/admin/login', 'AdminController@postLogin')->name('admin.postLogin');
Route::get('/admin/logout', 'AdminController@logout')->name('admin.logout');



// Gom nhom route
Route::group(['prefix' => 'admin', 'as' => 'admin.','middleware' => 'checkLogin'],function () {
    Route::resource('banner', 'BannerController');
    Route::resource('category', 'CategoryController');
    Route::resource('product', 'ProductController');
    Route::resource('vendor', 'VendorController');
    Route::resource('setting', 'SettingController');
    Route::resource('user', 'UserController');
    Route::resource('article', 'ArticleController');
    Route::resource('product_image', 'ProductImageController');
    Route::resource('contact', 'ContactController');
    Route::resource('material', 'MaterialController');
    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');

});
