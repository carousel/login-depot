<?php namespace App\LoginDepot;

use Illuminate\Database\Eloquent\Model;
use App\LoginDepot\Quote;

class Customer extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'customers';
	protected $fillable = ['*'];

    /**
    * 
    */
    public function quotes()
    {
        return $this->hasMany("App\LoginDepot\Quote");
    }

}
