<?php namespace App\Http\Controllers\Superadmin;

use App\User;
use App\Page;
use App\Post;

use Response;

class DashboardController extends Controller {
	
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
	public function dashboard()
	{
		$activeCount = User::where('active', '1')->count();
		$subscriberCount = User::where('role', 'subscriber')->count();
		$freelancerCount = User::where('role', 'freelancer')->count();
		$inactiveCount = User::where('active', '0')->count();
		
		$latestUsers = User::take(4)->latest()->get();
		$latestSubscribers = User::take(4)->where('role', 'subscriber')->latest()->get();
		$latestPosts = Post::take(4)->latest()->get();
		$latestPages = Page::take(4)->latest()->get();
		
		return view('superadmin.dashboard')
			->with('activeCount', $activeCount)
			->with('subscriberCount', $subscriberCount)
			->with('freelancerCount', $freelancerCount)
			->with('inactiveCount', $inactiveCount)
			->with('latestUsers', $latestUsers)
			->with('latestSubscribers', $latestSubscribers)
			->with('latestPosts', $latestPosts)
			->with('latestPages', $latestPages);
	}
	
}