<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;

class IndexController extends Controller {
	public function getFromDb() {
		$users = User::paginate(5);
		return view('sample')->withDetails($users);
		
	}
}
