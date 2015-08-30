<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Sidebar extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'sidebars';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'post_id',
		'page_id',
		'name',
		'description',
		'active'
	];
	
	/**
	 * One to One relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function post()
	{
		return $this->belongsTo('App\Post');
	}
	
	/**
	 * One to One relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function page()
	{
		return $this->belongsTo('App\Page');
	}
	
	/**
	 * Has many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function widgets()
	{
		return $this->hasMany('App\Widget');
	}
}
