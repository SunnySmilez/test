<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//http://hello.dev/test/id/1
Route::get('/test/id/{id}', function($id) {
    return 'show id:'.$id;
});

//http://hello.dev/test/show
Route::match(['get', 'post'], '/test/show', function() {
    return "show";
});

//http://hello.dev/test/list
Route::get('/test/list', [
    'uses'  => 'TestController@lists',
]);

//http://hello.dev/test/add
Route::match(['get', 'post'], '/test/add', [
    'uses'  => 'TestController@add',
]);

//http://hello.dev/test/json
Route::get('/test/json', [
    'uses'  => 'TestController@json',
]);

//http://hello.dev/test/view
Route::get('/test/view', [
    'uses'  => 'TestController@view',
]);

Route::get('/test/middle', [
    'uses'          => 'TestController@middle',
    'middleware'    => 'test',
]);

Route::get('/test/get', 'TestController@get');

Route::get('/test/uses', ['uses' => 'TestController@uses', 'as' => 'use']);

Route::resource('photo', 'PhotoController');

Route::get('/test/request', 'TestController@request');

Route::get('/test/cookie', 'TestController@cookie');

Route::get('/test/upload', 'TestController@upload');

Route::get('/test/response', 'TestController@response');

Route::get('/test/session', 'TestController@session');

Route::get('/test/log', 'TestController@log');

Route::controller('mysql', 'MysqlController');

Route::controller('invite', 'InviteController');