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

// Route::get('/', function () {
//     return view('welcome')->withname('Friend');
// });


Route::get('/', 'TodoListController@index');
// Route::get('/todos', 'TodoListController@index');
// Route::get('/todos/{id}', 'TodoListController@show');
//

Route::get('db', function() {

    $result = DB::table('todo_lists')->get();

    var_dump($result);

   // return $result->name;

});
Route::resource('todos', 'TodoListController');
