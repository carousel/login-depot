<?php namespace App\LoginDepot;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model {

	protected $table = 'vehicles';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['*'];

}
