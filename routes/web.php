<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Routes to welcome page as guest
Route::get('/', function () {
    return view('welcome');
});

// Routes to home page as user
Route::get('/home', 'HomeController@index')->name('home');

// Routes to settings as user
Route::get('settings', 'UserController@settings')->middleware('auth');
Route::post('settings', 'UserController@update_avatar');

// Routes for authentication
Auth::routes();

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

// Send get request to Notes API
Route::get('/notes', function () {
  return App\Note::with('user')->get();
});

// Send get request and store to note.id
Route::get('/notes/{id}', function ($id) {
  return App\Note::findOrFail($id);
});

// Send post request to Notes API
Route::post('/notes', function () {
  return Auth::user()->notes()->create([
    'note' => request()->get('note')
  ]);
  // return App\Note::create(Request::all());
});

// Send patch request to Notes API
Route::patch('/notes/{id}', function ($id) {
  // Auth::user()->notes()->findOrFail($id)->update([
  //   'note' => request()->get('note')  
  // ]);
  App\Note::findOrFail($id)->update(Request::all());
    return Response::json(Request::all());
    // return Auth::user()->notes->update($id);
});

// Send delete request to Notes API
Route::delete('/notes/{id}', function ($id) {
  // return Auth::user()->notes()->destroy($id);
  return App\Note::destroy($id);
});
