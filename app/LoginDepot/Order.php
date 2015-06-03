<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

	protected $table = 'orders';
    protected $fillable = ['*'];

    public function quote()
    {
        return $this->hasOne("App\LoginDepot\Ouote");
    }

}
