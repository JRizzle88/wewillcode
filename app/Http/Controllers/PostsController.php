<?php namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Page;

class PostsController extends Controller {

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
 		//$sidebarPosts = Post::take(10)->latest()->get();

 		// single Post view
 		return view('posts.show', compact('post'));
			//->with('sidebarPosts', $sidebarPosts);
 	}
	 
}
