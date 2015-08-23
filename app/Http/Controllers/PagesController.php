<?php namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Page;

class PagesController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
		//$this->middleware('auth');
		//$this->middleware('guest', ['only' => ['index', 'show']]);
	}

	/**
 	 * Display the specified resource.
 	 *
 	 * @param  \App\Page $page
	 * @param  \App\Post $post
 	 * @return Response
 	 */
 	public function show(Page $page, Post $post)
 	{
		$pages = Page::where('draft', '0')->orderBy('name')->get();
		// if drafted or doesn't exists
		if( !$page->name || $page->draft == '1' ) {
			$seo_title = "Page doesn't exists";
			return view('errors.no_page')
				->with('seo_title', $seo_title)
				->with('pages', $pages);
		} else {
			// single page view
	 		return view('pages.show', compact('page'));
		}
 		// single Post view
 		//return view('pages.show', compact('page'));
			//->with('sidebarPosts', $sidebarPosts);
 	}
	 
}
