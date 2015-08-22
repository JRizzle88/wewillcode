<?php namespace App\Http\Controllers\Superadmin;

use Input;
use Redirect;
use App\User;
use App\Page;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller {

	protected $rules = [
		'name' => ['required', 'min:3'],
		'slug' => ['required'],
		//'user_id' => ['required'],
	];
	
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
		//$this->middleware('admin');
	}

   /**
	 * Display a listing of the resource.
	 *
	 * @param  \App\User $user
	 * @return Response
	 */
	public function index(User $user)
	{
		//$userId = \Auth::user()->id;
		// get all pages
		$pages = Page::take(500)->orderBy('created_at', 'desc')->get();
		// index view
		return view('superadmin.pages.index', compact('user'))->with('pages', $pages);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @param  \App\User $user
	 * @return Response
	 */
	public function create(User $user)
	{
		// create view
		return view('superadmin.pages.create', compact('user'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$this->validate($request, $this->rules);
		
		$request['user_id'] = $request->user()->id;
		$input = Input::all();
		
		Page::create( $input );

		return Redirect::route('superadmin.pages.index')->with('message', 'Page created');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Page $page
	 * @return Response
	 */
	public function show(Page $page)
	{
		$sidebarPosts = Post::take(10)->latest()->get();
		
		// single page view
		return view('pages.show', compact('page'))->with('sidebarPosts', $sidebarPosts);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Page $page
	 * @return Response
	 */
	public function edit(Page $page)
	{
		// show after edit Page
		return view('superadmin.pages.edit', compact('page'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\Page $page
	 * @param  \Illuminate\Http\Request $request
	 * @return Response
	 */
	public function update(Page $page, Request $request)
	{
		$this->validate($request, $this->rules);

		$input = array_except(Input::all(), '_method');
		$page->update($input);

		return Redirect::route('superadmin.pages.index', $page->slug)->with('message', 'Page updated.');

		// show after update page
		//return view('pages.show', compact('page'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Page $page
	 * @return Response
	 */
	public function destroy(Page $page)
	{
		$page->delete();

		return Redirect::route('superadmin.pages.index')->with('message', 'Page deleted.');
		// show after destroy page
		//return view('pages.show', compact('page'));
	}
	 
}
