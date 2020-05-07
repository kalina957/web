<?php

//main
    Route::view('/', 'welcome');
    Route::view('/contact', 'contact');
    Route::view('/about', 'about');


//profile
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/profile', 'ProfileController');
    Route::post('/profile', 'ProfileController@update_avatar')->name('profile1');
    Auth::routes();

//PDF
Route::resource('/pdf', 'DynamicPDFController');


////items
Route::resource('/item', 'ItemController');


//Route::get('watermark-image', 'WaterMarkController@imageWatermark');

//Watermark
Route::get('addWatermark', function()
{
    $img = Image::make(public_path('images/gallery.jpg'));
    $imgAbout = Image::make(public_path('images/gal.jpg'));
    $logo =Image::make(public_path('images/fonsy.png'));
        $logo->resize(110, 80);
    /* insert watermark at bottom-right corner with 10px offset */
    $img->insert($logo, 'bottom-right', 10, 10);
    $img->save(public_path('images/gallery-new.jpg'));
    $imgAbout->insert($logo, 'bottom-right', 10, 10);
    $imgAbout->save(public_path('images/gal-new.jpg'));
    dd('saved images successfully.');
});

//Route::get('pixelateImg', function(){
//    $img = image::make(public_path('uploads/avatars'))
//    $img->pixelate(12);
//    $destinationPath = public_path('/pixelate');
//    $img->save($destinationPath.'/'.$input['imagename']);
//});
//excel export
Route::get('/export_excel', 'ExportExcelController@index');
Route::get('/export_excel/excel', 'ExportExcelController@excel')->name('export_excel.excel');
Route::get('/dynamic_pdf', 'DynamicPDFController@index');
Route::get('/dynamic_pdf/pdf', 'DynamicPDFController@pdf');

//admin
Route::prefix('admin')->group(function (){
    Route::get('/','AdminController@index')->name('admin.dashboard');
    Route::get('login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::post('/adminLogout','Auth\AdminLoginController@adminLogout')->name('admin.logout');
});
