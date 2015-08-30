<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IdeaDetails extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'ideas_details';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'idea_id',
		'funding_goal',
		'date_start',
        'date_end'
	];
	
	/**
	 * One to One relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function idea()
	{
		return $this->belongsTo('App\Idea');
	}
}
