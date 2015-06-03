<?php namespace App\LoginDepot;

use Illuminate\Database\Eloquent\Model;
use App\LoginDepot\Customer;

class Quote extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'quotes';
    protected $fillable = ['*'];
    /**
    * 
    */
    public function customer()
    {
        return $this->belongsTo("App\LoginDepot\Customer");
    }

    public function order()
    {
        return $this->belongsTo("App\LoginDepot\Order");
    }

}
