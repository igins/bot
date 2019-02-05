<?php

Route::group(['middleware'=>['web', 'forceHTTPS']], function()
{

    /**
     * Backend section
     */
    Route::group(['namespace'=>'Backend', 'middleware'=>'core', 'as'=>'backend'], function()
    {
        Route::group(['prefix'=>'backend'], function()
        {
            Route::get("/", ['uses'=>'DashboardController@index', 'as'=>'.dashboard']);

            Route::group(['prefix'=>'settings'], function()
            {
                Route::get("/", ['uses'=>'SettingsController@index']);
            });

            Route::group(['prefix'=>'users'], function()
            {
                Route::get("/",     ['uses'=>'UsersController@index', 'as'=>'.users']);
                Route::get("/{id}", ['uses'=>'UsersController@show',  'as'=>'.users.show']);
            });
        });
    });
    /**
     * End Backend section
     */
});
