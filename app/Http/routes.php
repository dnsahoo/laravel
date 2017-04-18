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

Route::get('/user/{name?}',function($name = 'Virat'){
   echo "Name: ".$name;
   
});

Route::get('/role',[
   'middleware' => 'role:editor',
   'uses' => 'TestController@index',
]);

Route::get('profile', [
   'middleware' => 'auth',
   'uses' => 'TestController@showProfile'
]);

Route::get('/usercontroller/path',[
   'middleware' => 'First',
   'uses' => 'TestController@showPath'
]);

//Route::resource('my','TestController');

Route::get('/foo/bar','UriController@index');

Route::get('/register',function(){
   return view('register');
});
Route::post('/user/register',array('uses'=>'UserRegistration@postRegister'));

Route::get('/cookie/set','CookieController@setCookie');
Route::get('/cookie/get','CookieController@getCookie');

Route::resource('my','MyController');

Route::controller('test','ImplicitController');

class MyClass{
   public $foo = 'bar';
}
Route::get('/myclass','ImplicitController@index');

Route::get('/basic_response', function () {
   return 'Hello World';
});

Route::get('/header',function(){
   return response("Hello", 200)->header('Content-Type', 'text/html');
});
Route::get('/cookie',function(){
   return response("Hello", 200)->header('Content-Type', 'text/html')
      ->withcookie('name','Virat Gandhi');
});

Route::get('json',function(){
   return response()->json(['name' => 'Virat Gandhi', 'state' => 'Gujarat']);
});

//view
Route::get('/test', function(){
   return view('test');
});
Route::get('/test2', function(){
   return view('test2');
});

Route::get('blade', function () {
   return view('page',array('name' => 'Virat Gandhi'));
});

//redirecting
Route::get('/testi', ['as'=>'testing',function(){
   return view('testi');
}]);
Route::get('redirect',function(){
   return redirect()->route('testing');
});

//session
Route::get('session/get','SessionController@accessSessionData');
Route::get('session/set','SessionController@storeSessionData');
Route::get('session/remove','SessionController@deleteSessionData');

//ajax
Route::get('ajax',function(){
   return view('message');
});
Route::post('/getmsg','AjaxController@index');

//error
Route::get('/error',function(){
   abort(503);
});