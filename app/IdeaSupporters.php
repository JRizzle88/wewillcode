<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IdeaSupporters extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'ideas_supporters';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'idea_id',
		'user_id',
		'idea_rewards_id',
        'fund_amount'
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
	public function ideaReward()
	{
		return $this->hasOne('App\IdeaRewards');
	}
}
