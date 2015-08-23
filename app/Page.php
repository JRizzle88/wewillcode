<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {
	// _token error fix
	protected $guarded = [];
	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'pages';

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
		//'featured_image',
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

}