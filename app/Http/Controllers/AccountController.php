<?php namespace App\Http\Controllers;

use App\User;
use App\Page;
use App\Post;

use App\Idea;
use App\IdeaSupporters;

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
	
	public function profile()
	{
		return view('account.profile.profile');
	}
	
	public function ideas()
	{
		$ideas = Idea::take(20)->get();
		
		return view('account.ideas.ideas')
			->with('ideas', $ideas);
	}
	
	public function supporters()
	{
		$ideaCount = Idea::count();
		$ideaSupporters = Idea::all();
		
		return view('account.supporters')
			->with('ideaCount', $ideaCount)
			->with('ideaSupporters', $ideaSupporters);
	}
	
	public function settings()
	{
		return view('account.settings');
	}

}