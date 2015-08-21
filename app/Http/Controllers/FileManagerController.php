<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Fileentry;
use Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;

class FileManagerController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
		//$this->middleware('admin');
		//$this->middleware('author', ['only' => ['add', 'index']]);
		//$this->middleware('player', ['only' => ['add', 'index']]);
		//$this->middleware('guest', ['only' => ['get']]);
	}
	
	
	public function get($filename){
	
		$entry = Fileentry::where('filename', '=', $filename)->firstOrFail();
		$file = Storage::disk('local')->get($entry->filename);
		
		return (new Response($file, 200))
			->header('Content-Type', $entry->mime);
	}
	

}
