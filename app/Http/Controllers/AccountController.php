<?php namespace App\Http\Controllers;

use App\User;
use App\Page;
use App\Post;
use Auth;

use App\Idea;
use App\IdeaDetails;
use App\IdeaSupporters;

use Response;
use Illuminate\Http\Request;

class AccountController extends Controller {

	protected $idea_rules = [
		'name' => ['required', 'min:3'],
		'description_short',
		'description_long_1',
		'description_long_2',
		//'user_id' => ['required'],
	];
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(Request $request)
	{
		parent::__construct();
		//$this->middleware('guest');
		$this->request = $request;
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$user = Auth::user();
		return view('account.general', compact('user'));
	}

	public function profile()
	{
		$user = Auth::user();
		return view('account.profile.profile', compact('user'));
	}

	public function ideas()
	{
		$ideas = Idea::take(5)->get();

		return view('account.ideas.ideas')
			->with('ideas', $ideas);
	}

	public function ideas_process()
	{
		return view('account.ideas.create');
	}

	public function ideas_create() {

		$this->validate($this->request, $this->idea_rules);

		$input = $this->request->input();

		$idea = Idea::create($input);

		if(!$idea) {
			return $this->session->flash('error-message', 'Something went wrong. If this persists, please contact us. Thanks!');
		}

		$ideaDetails = $input['ideaDetails'];

		$ideaDetails['idea_id'] = $idea['id'];
		$ideaDetails['user_id'] = Auth::user()->id;

		IdeaDetails::create($ideaDetails);

		return redirect('account/ideas');
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
