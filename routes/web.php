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

Route::get('/', function () {
	$name = 'Alex';
	$age = 30;
	$phpinfo = [
		'This is php iteration',
		'The first list is traditional php call',
		'The second is blade.php call'
	];

	$tests = DB::table('tests')->get();

  return view('welcome', compact('name', 'age', 'phpinfo', 'tests'));
});

Route::get('/tests', function () {

	// $tests = DB::table('tests')->get();    This is the same as next line
	$tests = App\Test::all();  // Like ActiveRecord query but in Eloquent

  return view('tests.index', compact('tests'));
});

Route::get('/tests/{id}', function ($id) {

	$test = DB::table('tests')->find($id);

  return view('tests.show', compact('test'));
});


Route::get('/about', function () {
	return view('about');
});