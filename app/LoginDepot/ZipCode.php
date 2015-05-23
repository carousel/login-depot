<?php namespace App\LoginDepot;

use Illuminate\Database\Eloquent\Model;

class ZipCode extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'zipcodes';

	protected $fillable = ['*'];

}
