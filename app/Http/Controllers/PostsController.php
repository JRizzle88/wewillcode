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
		$posts = Post::where('draft', '0')->orderBy('name')->get();
 		//$sidebarPosts = Post::take(10)->latest()->get();
		if( !$post->name || $post->draft == '1' ) {
			$seo_title = "Post doesn't exists";
			return view('errors.no_post')
				->with('seo_title', $seo_title)
				->with('posts', $posts);
		} else {
			// single page view
	 		return view('posts.show', compact('post'));
		}
 		// single Post view
 		//return view('posts.show', compact('post'));
			//->with('sidebarPosts', $sidebarPosts);
 	}
	 
}
