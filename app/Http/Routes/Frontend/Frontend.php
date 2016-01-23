<?php

/**
 * Frontend Controllers
 */
Route::get('/', 'FrontendController@index')->name('frontend.index');
Route::get('macros', 'FrontendController@macros')->name('frontend.macros');
Route::get('lottery', 'FrontendController@lottery')->name('frontend.lottery');
Route::get('post', 'Weixin\PostController@index')->name('frontend.weixin.post');
Route::get('cart', 'Weixin\MyCartController@index')->name('frontend.weixin.cart');
Route::get('member', 'Weixin\MemberController@index')->name('frontend.weixin.member');

/**
 * These frontend controllers require the user to be logged in
 */
Route::group(['middleware' => 'auth'], function () {
    Route::group(['namespace' => 'User'], function() {
        Route::get('dashboard', 'DashboardController@index')->name('frontend.user.dashboard');
        Route::get('profile/edit', 'ProfileController@edit')->name('frontend.user.profile.edit');
        Route::patch('profile/update', 'ProfileController@update')->name('frontend.user.profile.update');
    });
});