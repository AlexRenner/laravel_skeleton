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
		'The first is traditional php call',
		'The second is blade.php call'
	];

  return view('welcome', compact('name', 'age', 'phpinfo'));
});


Route::get('/about', function () {
	return view('about');
});