<?php namespace App\Http\Controllers;

use App\User;
use Response;

class JoustyApiController extends Controller {
	
	public function users()
	{
		// get all posts
		$users = User::all();
		// api response
		if($users != null) {
			// success
			return Response::make($users, 200);
		} else {
			// error
			return Response::json(['error' => 'There was an error retrieving users.'],  400);
		}
		
	}
	
};