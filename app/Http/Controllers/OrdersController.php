<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class OrdersController extends Controller {

    /**
    * 
    */
    public function getOrderForm($company_name,$quote_id)
    {
        $data = [];
        $data["company_name"] = $company_name;
        $data["quote_id"] = $quote_id;
        dd($data);
    }
}
