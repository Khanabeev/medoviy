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

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('main-page');
Route::get('/med.html', 'HomeController@med');
Route::get('/agreement.html', 'HomeController@agreement');

Route::get('/catalog.html','HomeController@store');
Route::get('/dokumenti.html','HomeController@dokumenti');
Route::get('/dostavka.html','HomeController@dostavka');
Route::get('/kontakti.html','HomeController@kontakti');
Route::get('/narodnie-resepti.html', 'HomeController@narodnieResepti');
Route::get('/nashi-dostijeniy.html', 'HomeController@nashiDostijeniy');
Route::get('/praiys.html', 'HomeController@praiys');


// Пользовательский заказ
Route::get('/store.html','HomeController@store');
Route::get('/store/fetch-all-items','HomeController@fetchAllStoreItems');
Route::get('/store.html/order','HomeController@showOrderPage');
Route::post('/store/get-order','HomeController@getOrder');
Route::post('/store/order-success','HomeController@orderSuccess');

Route::middleware('auth')->prefix('admin')->group(function() {
//    Главная панель
    Route::get('/','OrderController@index')->name('admin');
    // Заказы
    Route::get('/orders/{id}/show','OrderController@show')->name('order.show');
    Route::get('/orders/{id}/change-order-status/{status}','OrderController@changeStatus')
        ->name('order.change.status');
    Route::post('/order/save-comment/{id}','OrderController@saveComment')->name('order.save.comment');

    //  Продукты
    Route::resource('/product','ProductController');
    Route::resource('/price','PriceController');
    Route::get('/products/get-all','ProductController@getAll');
    Route::post('/product/change-availability','ProductController@changeAvailability');
    Route::get('/product/{id}/edit-price','ProductController@editPrice');
    Route::get('/product/get-all-prices/{id}','ProductController@getPrices');

    //    Навигация
    Route::get('/navigation','AdminStoreController@navigation')->name('navigation');
    Route::post('/navigation','AdminStoreController@navigationPost')->name('navigation.store');
    Route::delete('/navigation/{navigation}','AdminStoreController@navigationDestroy')->name('navigation.destroy');

    // Магазин
    Route::get('/store','AdminStoreController@store')->name('store');
    Route::get('/store/create','AdminStoreController@storeCreate')->name('store.create');
    Route::post('/store/store','AdminStoreController@storeStore')->name('store.store');
    Route::get('/store/{product}/show','AdminStoreController@storeShow')->name('store.show');
    Route::post('/store/{product}/edit','AdminStoreController@storeEdit')->name('store.edit');
    Route::get('/store/{product}/destroy','AdminStoreController@storeDestroy')->name('store.destroy');

});

Auth::routes([
    'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/{url}','HomeController@getProductPage');
