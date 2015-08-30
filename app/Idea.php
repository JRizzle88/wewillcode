<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'ideas';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'user_id',
		'name',
		'description_short',
		'description_long_1',
		'description_long_2'
		//'expired',
		//'active'
	];
	
	/**
	 * One to One relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user()
	{
		return $this->belongsTo('App\User');
	}
	
	/**
	 * Has one relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function ideaDetails()
	{
		return $this->hasOne('App\IdeaDetails');
	}
	
	/**
	 * Has one relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function ideaRewards()
	{
		return $this->hasOne('App\IdeaRewards');
	}
	
	/**
	 * Has many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function ideaSupporters()
	{
		return $this->hasMany('App\IdeaSupporters');
	}
}
