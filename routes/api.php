<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;



//Route::get('/posts-all', [App\Http\Controllers\PostController::class, 'index']);

Route::group(['prefix' => 'public'], function () {
    
    //create token   
    //Route::post('/getClientCrendentialsGrantToken'  , 'App\Http\Controllers\Auth\FuckingAuthController@getClientCrendentialsGrantToken');
    //Route::post('/getPersonalAccessToken'           , 'App\Http\Controllers\Auth\FuckingAuthController@getPersonalAccessToken');

    Route::post('/getPasswordGrantToken'              , [App\Http\Controllers\Auth\FuckingAuthController::class,'getPasswordGrantToken']);
    Route::post('/getRegister'                        , [App\Http\Controllers\Auth\FuckingAuthController::class,'getRegister']);
    Route::post('/getLogin'                           , [App\Http\Controllers\Auth\FuckingAuthController::class,'getLogin']);
    Route::post('/getLogout'                          , [App\Http\Controllers\Auth\FuckingAuthController::class,'getLogout']);


});

// se definen todos los endpoints de cualquier REST estaran con un middleware de checktoken
Route::group(['prefix' => 'secure/rest', 'middleware' => 'client'], function () {

    Route::get('/obtenerPosts'                       ,[App\Http\Controllers\ClientsResourcesController::class,'obtenerPosts']);
    Route::get('/testing'                            ,function(){return "testing passport";});
    
});
//->middleware('auth:api');

Route::group(['prefix' => 'secure/rest2'], function () {

});