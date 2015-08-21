<?php namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;
use Redirect;
use Illuminate\Http\RedirectResponse;

class SuperAdminMiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
			$user = $request->user();

			// is a user and is NOT an admin
			if(Auth::check()) {
				if($user && $user->isSuperAdmin())
				{
					// not authorized
					//return Redirect::to('/')->with('message', 'You are not authorized as an admin.');
					return $next($request);
					//return Redirect::to('/admin')->with('message', 'Were logged in, go to town!');
				} else {
					// is a user and is an admin
					//if ($user && $user->isSuperAdmin())
					//{
						// good, next!
						//return $next($request);
						// admin/dashboard
					//	return Redirect::to('/admin');
					//} else {
						// not authorized
					//	return Redirect::to('/')->with('message', 'You are not authorized as an admin.');
					//}
					//Auth::logout();
					return Redirect::to('/')->with('message', 'You are not authorized as an admin.');
				}
			} else {
				return Redirect::to('auth/login');
			}
			// good, next!
			return $next($request);

	}

}
