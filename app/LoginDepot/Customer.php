<?php namespace App\LoginDepot;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'customers';

	protected $fillable = ['first_name','last_name','email'];

}
