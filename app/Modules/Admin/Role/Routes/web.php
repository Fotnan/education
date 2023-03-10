<?php

Route::group(['prefix' => 'roles', 'middleware' => []], function () {
    Route::get('/', 'RoleController@index')->name('roles.index');
    Route::get('/create', 'RoleController@create')->name('roles.create');
    Route::post('/', 'RoleController@store')->name('roles.store');
    Route::get('/{role}', 'RoleController@show')->name('roles.read');
    Route::get('/edit/{role}', 'RoleController@edit')->name('roles.edit');
    Route::put('/{role}', 'RoleController@update')->name('roles.update');
    Route::delete('/{role}', 'RoleController@destroy')->name('roles.delete');
});