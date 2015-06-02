<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\LoginDepot\Quote;
use App\LoginDepot\Customer;
use App\Http\Requests\CreateOrderRequest;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class OrdersController extends Controller {

    /**
    * 
    */
    //public function getOrderForm($company_name,$quote_id)
    //{
        //$data = [];
        //$data["company_name"] = $company_name;
        //$data["quote_id"] = $quote_id;
        //dd($data);
    //}
    public function getOrderForm($company,$quote_id)
    {
        $states = \Config::get("lists.states");
        $quote = Quote::where("quote_id",$quote_id)->first();
        $customer = Customer::where("quote_id",$quote_id)->first();
        //return $customer;
        return view("companies.quotes.orders.create")
            ->with("customer",$customer)
            ->with("quote",$quote)
            ->with("states",$states)
            ->with("company",$company)
            ->with("quote_id",$quote_id);
    }

    public function postOrder(CreateOrderRequest $request)
    {
        return $request->all();
    }
}
