<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Widget extends Model
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
		'sidebar_id',
		'name',
		'description',
		'content',
		'active'
	];
    
    /**
	 * One to Many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function sidebar()
	{
		return $this->belongsTo('App\Sidebar');
	}
}
