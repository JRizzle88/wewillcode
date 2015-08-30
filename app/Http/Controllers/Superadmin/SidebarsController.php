<?php namespace App\Http\Controllers\Superadmin;

use Input;
use Redirect;
use App\Sidebar;
use App\Post;
use App\Page;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SidebarsController extends Controller
{
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
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $sidebars = Sidebar::take(500)->orderBy('created_at', 'asc')->get();
        
        //foreach($sidebars as $s) {
        //    $pages = null;
        //    $posts = null;
        //    if($s->page_id != NULL || $s->post_id != NULL) {

        //      $pages = Page::take(500)->orderBy('name', 'asc')->where('id', $s->page_id)->get(); 

        //      $posts = Post::take(500)->orderBy('name', 'asc')->where('id', $s->post_id)->get();  
        //    }
        //}
        //dd($posts);
        // sidebars list
        return view('superadmin.sidebars.index')
            ->with('sidebars', $sidebars);
            //->with('pages', $pages)
            //->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $input = Input::all();
		
		Sidebar::create( $input );

		return Redirect::route('superadmin.sidebars.index')->with('message', 'Sidebar created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Sidebar $sidebar)
    {
        //
        $sidebars = Sidebar::take(500)->orderBy('created_at', 'asc')->get();
        
        return view('superadmin.sidebars.edit', compact('sidebar'))
            ->with('sidebars', $sidebars);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
        $input = Input::all();
		$id->update($input);

		return Redirect::route('superadmin.sidebars.index')->with('message', 'Sidebar updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        $id->delete();
        
        return Redirect::route('superadmin.sidebars.index')->with('message', 'Sidebar deleted.');
    }
}
