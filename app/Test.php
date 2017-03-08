<?php

namespace App;

// To access Eloquent shell system in command line use >php artisan tinker
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    
  // Any functions can be placed in here to be used on this class model
	public function returnFalse() {
		return false;
	}

	public function returnTestString() {
		echo '*****This is a test. This is ONLY a test.*****';
	}

}
