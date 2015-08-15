<?php namespace App\Http\Controllers;

use App\User;
use Response;

class AccountController extends Controller {
	

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
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('account.index');
	}
	
	public function dashboard()
	{
		return view('account.dashboard');
	}
	
}