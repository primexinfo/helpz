<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// header('Access-Control-Allow-Origin : *');
// header('Access-Control-Allow-Headers : Content-Type,X-Auth-Token,Authorization,Origin');
// header('Access-Control-Allow-Methods :GET, POST, PUT, DELETE, OPTIONS');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::middleware('api')->get('/user', 'Front\FrontendController@users');
 Route::middleware('api')->get('/allcategories', 'Front\CatalogController@categoriesapi');
 Route::middleware('api')->get('/category/{slug}', 'Front\CatalogController@categoryapi');
 Route::middleware('api')->get('category/{slug1}/{slug2}', 'Front\CatalogController@subcategoryapi');
 Route::middleware('api')->get('category/{slug1}/{slug2}/{slug3}', 'Front\CatalogController@childcategoryapi');
 Route::middleware('api')->get('/item/{slug}', 'Front\CatalogController@productapi');
