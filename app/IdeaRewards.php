<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IdeaRewards extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'ideas_rewards';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'idea_id',
		// Reward 1
		'name_1',
        'image_1',
        'description_1',
        'fund_amount_1',
        // Reward 2
        'name_2',
        'image_2',
        'description_2',
        'fund_amount_2',
        // Reward 3
        'name_3',
        'image_3',
        'description_3',
        'fund_amount_3',
        // Reward 4
        'name_4',
        'image_4',
        'description_4',
        'fund_amount_4'
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
	public function ideaSupporter()
	{
		return $this->belongsTo('App\IdeaSupporters');
	}
}
