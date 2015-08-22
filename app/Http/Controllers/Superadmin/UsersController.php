<?php namespace App\Http\Controllers\Superadmin;

use App\User;

use Response;

class UsersController extends Controller {
	
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
		//$this->middleware('guest');
	}
	
	/**
	 * Show the application dashboard screen to the superadmin.
	 *
	 * @return Response
	 */	
	public function index()
	{
		$users = User::take(500)->orderBy('created_at', 'desc')->get();
		return view('superadmin.users.index', compact('users'));
	}
	
	
}