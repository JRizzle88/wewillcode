<?php namespace App;
	
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class UserInformation extends Model implements AuthenticatableContract {
	
	use Authenticatable;
	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users_information';
	
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'user_id',
		'company_name',
		'address_1',
		'address_2',
		'city',
		'zipcode',
		'state',
		'country',
		'phone',
		'phone_secondary',
		'linkedin',
		'twitter',
		'instagram',
		'facebook',
		'googleplus',
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
}