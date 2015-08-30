<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['display_name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
    
    /**
	 * The super admin role
	 *
	 * @var string super_admin
	 */
	public function isSuperAdmin()
	{
	    return $this->role === 'super_admin';
	}

	/**
	 * The admin role
	 *
	 * @var string admin
	 */
	public function isAdmin()
	{
	    return $this->role === 'admin';
	}

	/**
	 * The freelancer role
	 *
	 * @var string freelancer
	 */
	public function isFreelancer()
	{
	    return $this->role === 'freelancer';
	}
	
    /**
	 * The subscriber role
	 *
	 * @var string subscriber
	 */
	public function isSubscriber()
	{
	    return $this->role === 'subscriber';
	}
    
    /**
	 * The user role
	 *
	 * @var string user
	 */
	public function isUser()
	{
	    return $this->role === 'user';
	}
    
	/**
	 * Has one relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function user_information()
	{
		return $this->hasOne('App\UserInformation');
	}
	
	/**
	 * Has many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function pages()
	{
		return $this->hasMany('App\Page');
	}
	
	/**
	 * Has many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function posts()
	{
		return $this->hasMany('App\Post');
	}
	
	/**
	 * Has many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function comments()
	{
		return $this->hasMany('App\Comment');
	}
	
	/**
	 * Has many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function fileentries()
	{
		return $this->hasMany('App\Fileentry');
	}
	
	/**
	 * Has many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function ideas()
	{
		return $this->hasMany('App\Idea');
	}
}
