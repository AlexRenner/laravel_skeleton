<?php

namespace App\Http\Controllers;

// If this is not in the controller or routes page you must
// query using App\Test::all(); instead of just Test::all();
use App\Test;

class TestsController extends Controller
{
    public function index() {
    	// The next two queries are the same
			// $tests = DB::table('tests')->get();
			$tests = Test::all();  // Like ActiveRecord query but in Eloquent

		  return view('tests.index', compact('tests'));
    }

    public function show(Test $test) { // This works as $test = Test::find(wildCard);
			// Which takes the place of having to query it manually
			// $test = DB::table('tests')->find($id);   (Manual Query)

			// dd($test);

		  return view('tests.show', compact('test'));
    }
}
