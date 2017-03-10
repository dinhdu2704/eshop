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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function() {

	//index
    Route::get('/','admin\indexController@index');
    Route::get('index','admin\indexController@index');
    //chart
    Route::get('chart','admin\chartController@chart');
    //user
    Route::group(['prefix' => 'user'], function()
    {
        Route::get('list','admin\userController@listUser');
        //thêm
        Route::get('add','admin\userController@getAdd');
        Route::post('add','admin\userController@postAdd');
        //sửa
        Route::get('edit/{id}','admin\userController@getEdit');
        Route::post('edit/{id}','admin\userController@postEdit');
        // delete
        Route::get('delete/{id}','admin\userController@getDelete');
    });

    //category
    Route::group(['prefix' => 'category'], function()
    {
        Route::get('list','admin\categoryController@listCategory');
        // thêm
        Route::get('add','admin\categoryController@getAdd');
        Route::post('add','admin\categoryController@postAdd');
        //sửa
        Route::get('edit/{id}','admin\categoryController@getEdit');
        Route::post('edit/{id}','admin\categoryController@postEdit');
        // xóa
        Route::get('delete/{id}','admin\categoryController@getDelete');

    });

    // sub category 
    Route::group(['prefix' => 'sub-category'], function()
    {
        Route::get('list','admin\sub_cateController@listSubcate');
        // thêm
        Route::get('add','admin\sub_cateController@getAdd');
        Route::post('add','admin\sub_cateController@postAdd');
        //sửa
        Route::get('edit/{id}','admin\sub_cateController@getEdit');
        Route::post('edit/{id}','admin\sub_cateController@postEdit');
        // xóa
        Route::get('delete/{id}','admin\sub_cateController@getDelete');
    });

    //brand
    Route::group(['prefix' => 'brand'], function()
    {
        Route::get('list','admin\brandController@listBrand');
        //thêm
        Route::get('add','admin\brandController@getAdd');
        Route::post('add','admin\brandController@postAdd');
        //sửa
        Route::get('edit/{id}','admin\brandController@getEdit');
        Route::post('edit/{id}','admin\brandController@postEdit');
        //delete
        Route::get('delete/{id}','admin\brandController@getDelete');
    });

    // product
    Route::group(['prefix' => 'product'], function()
    {
        Route::get('list','admin\productController@listProduct');
        // thêm
        Route::get('add','admin\productController@getAdd');
        Route::post('add','admin\productController@postAdd');
        // sửa
        Route::get('edit/{id}','admin\productController@getEdit');
        Route::post('edit/{id}','admin\productController@postEdit');
        //xóa
        Route::get('delete/{id}','admin\productController@getDelete');
    });

    //load ajax
    Route::group(['prefix' => 'ajax'], function() {
        Route::get('subcate/{idCate}','admin\ajaxController@getSubcate');
    });

    // slide
    Route::group(['prefix' => 'slide'], function()
    {
        Route::get('list','admin\slideController@listSlide');
        // add
        Route::get('add','admin\slideController@getAdd');
        Route::post('add','admin\slideController@postAdd');
        // edit
        Route::get('edit/{id}','admin\slideController@getEdit');
        Route::post('edit/{id}','admin\slideController@postEdit');
        //delete
        Route::get('delete/{id}','admin\slideController@getDelete');
    });
   	
    // slide ads
    Route::group(['prefix' => 'slide-ads'], function()
    {
        Route::get('list','admin\adverController@listSlideAds');
        // add
        Route::get('add','admin\adverController@getAdd');
        Route::post('add','admin\adverController@postAdd');
        // edit
        Route::get('edit/{id}','admin\adverController@getEdit');
        Route::post('edit/{id}','admin\adverController@postEdit');
        //delete
        Route::get('delete/{id}','admin\adverController@getDelete');
    });
   	// blog
   	Route::group(['prefix' => 'blog'], function()
    {
        Route::get('list','admin\blogController@list_blog');
    });

    // footer
    Route::group(['prefix' => 'footer'], function()
    {
        Route::get('list','admin\footerController@listFooter');
         // thêm
        Route::get('add','admin\footerController@getAdd');
        Route::post('add','admin\footerController@postAdd');
        //sửa
        Route::get('edit/{id}','admin\footerController@getEdit');
        Route::post('edit/{id}','admin\footerController@postEdit');
        // xóa
        Route::get('delete/{id}','admin\footerController@getDelete');
    });

    // sub footer
    Route::group(['prefix' => 'sub-footer'], function()
    {
        Route::get('list','admin\sub_footerController@listSubFooter');
        // thêm
        Route::get('add','admin\sub_footerController@getAdd');
        Route::post('add','admin\sub_footerController@postAdd');
        //sửa
        Route::get('edit/{id}','admin\sub_footerController@getEdit');
        Route::post('edit/{id}','admin\sub_footerController@postEdit');
        // xóa
        Route::get('delete/{id}','admin\sub_footerController@getDelete');
    });

    

});
