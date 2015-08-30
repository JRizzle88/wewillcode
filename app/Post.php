<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {
	// _token error fix
	protected $guarded = [];
	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'posts';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'user_id',
		'name',
		'content',
		'layout',
		'featured_image',
		'slug',
		'seo_title',
		'seo_description',
		'seo_keywords',
		'draft',
	];
	
	/**
	 * One to Many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user()
	{
		return $this->belongsTo('App\User');
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
	 * Has one relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function sidebar()
	{
		return $this->hasOne('App\Sidebar');
	}
	
	public function isDefaultLayout()
	{
		return $this->layout === 'default';
	}
	
	public function isFullWidthLayout()
	{
		return $this->layout === 'full-width';
	}
	
	public function isLeftSidebarLayout()
	{
		return $this->layout === 'left-sidebar';
	}
	
	public function isRightSidebarLayout()
	{
		return $this->layout === 'right-sidebar';
	}
	
	public function isSidebarEligible()
	{
		if($this->isLeftSidebarLayout() || $this->isRightSidebarLayout() ) {
			return true;
		} else {
			return false;
		}
	}
}
