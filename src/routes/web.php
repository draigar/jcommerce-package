<?php

Route::group(['namespace'=>'Jstore\Jcommerce\Http\Controllers'],function (){
    Route::get('test','testController@index')->name('test');
});

