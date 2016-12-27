<?php

Route::group([
    'prefix' => 'profile',
    'middleware'=> ['web', 'auth'],
    'namespace' => 'Gkiokan\Profile\Http\Controllers'
], function()
{

    // Default Profile overview page
    Route::get('/', [
        'uses'    => 'ProfileController@index',
        'as'      => 'profile.index',
        //'middleware' => 'IsMyOwnProfile:magic',
    ]);

    // User Profile Settings Page
    Route::get('settings', [
         'uses'   => 'ProfileSettingsController@index',
         'as'     => 'profile.settings'
    ]);

    // Magic
    Route::get('/test', function(){
          $callme1 = App::make('profile.callme');
          $callme2 = App::make('profile.callme');
          $magic  = App::make('profile.magic');

          Magic::nr('magic');

          dd($callme1, $callme2, $magic, $this);
    });
});
