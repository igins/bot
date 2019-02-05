<?php

Route::group(['middleware'=>['web', 'forceHTTPS']], function()
{

    /**
     * Backend section
     */
    Route::group(['namespace'=>'Backend', 'middleware'=>'core'], function()
    {
        Route::group(['prefix'=>'backend'], function()
        {
            Route::get("/", ['uses'=>'DashboardController@index']);

            Route::group(['prefix'=>'settings'], function()
            {
                Route::get("/", ['uses'=>'SettingsController@index']);
            });

            Route::group(['prefix'=>'users'], function()
            {
                Route::get("/", ['uses'=>'UsersController@index']);
            });
        });
    });
    /**
     * End Backend section
     */
});
