<?php namespace App\Http\Controllers\Superadmin;

use App\User;

use Response;

class SettingsController extends Controller {

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
	public function settingsGlobal()
	{
		return view('superadmin.settings.global');
	}

	/**
	 * Show the application dashboard screen to the superadmin.
	 *
	 * @return Response
	 */
	public function settingsMaintenance()
	{

		return view('superadmin.settings.maintenance');
	}

	/**
	 * Show the application dashboard screen to the superadmin.
	 *
	 * @return Response
	 */
	public function settingsServer()
	{

		return view('superadmin.settings.server');
	}

}
