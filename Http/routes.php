<?php

Route::group(['middleware' => 'web', 'prefix' => 'profile', 'namespace' => 'Gkiokan\Profile\Http\Controllers'], function()
{
    Route::get('/', [
        'uses'    => 'ProfileController@index',
        'as'      => 'profile.index',
        'middleware' => 'IsMyOwnProfile:magic',
    ]);
});
