<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\LoginDepot\Quote;
use App\LoginDepot\Customer;
use App\LoginDepot\Company;
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
        $customer = Customer::where("email",$request->all()["customer_email"])->first();
        $quote = Quote::where("quote_id",$request->quote_id)->first()->toArray();
        $all = array_merge($quote,$request->all());
        $final_order = array_filter($all);
        $vehicles = [];

        if(!empty($final_order["vehicle_two_year"])){ $vehicles["vehicle_two_year"] = $final_order["vehicle_two_year"];}
        if(!empty($final_order["vehicle_two_make"])){$vehicles["vehicle_two_make"] = $final_order["vehicle_two_make"];}
        if(!empty($final_order["vehicle_two_model"])){$vehicles["vehicle_two_model"] = $final_order["vehicle_two_model"];}
        if(!empty($final_order["vehicle_two_type"])){$vehicles["vehicle_two_type"] = $final_order["vehicle_two_type"];}
        if(!empty($final_order["vehicle_two_condition"])){$vehicles["vehicle_two_condition"] = $final_order["vehicle_two_condition"];}
        if(!empty($final_order["vehicle_two_quantity"])){$vehicles["vehicle_two_quantity"] = $final_order["vehicle_two_quantity"];}

        if(!empty($final_order["vehicle_three_year"])){ $vehicles["vehicle_three_year"] = $final_order["vehicle_three_year"];}
        if(!empty($final_order["vehicle_three_make"])){$vehicles["vehicle_three_make"] = $final_order["vehicle_three_make"];}
        if(!empty($final_order["vehicle_three_model"])){$vehicles["vehicle_three_model"] = $final_order["vehicle_three_model"];}
        if(!empty($final_order["vehicle_three_type"])){$vehicles["vehicle_three_type"] = $final_order["vehicle_three_type"];}
        if(!empty($final_order["vehicle_three_condition"])){$vehicles["vehicle_three_condition"] = $final_order["vehicle_three_condition"];}
        if(!empty($final_order["vehicle_three_quantity"])){$vehicles["vehicle_three_quantity"] = $final_order["vehicle_three_quantity"];}

        if(!empty($final_order["vehicle_four_year"])){ $vehicles["vehicle_four_year"] = $final_order["vehicle_four_year"];}
        if(!empty($final_order["vehicle_four_make"])){$vehicles["vehicle_four_make"] = $final_order["vehicle_four_make"];}
        if(!empty($final_order["vehicle_four_model"])){$vehicles["vehicle_four_model"] = $final_order["vehicle_four_model"];}
        if(!empty($final_order["vehicle_four_type"])){$vehicles["vehicle_four_type"] = $final_order["vehicle_four_type"];}
        if(!empty($final_order["vehicle_four_condition"])){$vehicles["vehicle_four_condition"] = $final_order["vehicle_four_condition"];}
        if(!empty($final_order["vehicle_four_quantity"])){$vehicles["vehicle_four_quantity"] = $final_order["vehicle_four_quantity"];}

        if(!empty($final_order["vehicle_five_year"])){ $vehicles["vehicle_five_year"] = $final_order["vehicle_five_year"];}
        if(!empty($final_order["vehicle_five_make"])){$vehicles["vehicle_five_make"] = $final_order["vehicle_five_make"];}
        if(!empty($final_order["vehicle_five_model"])){$vehicles["vehicle_five_model"] = $final_order["vehicle_five_model"];}
        if(!empty($final_order["vehicle_five_type"])){$vehicles["vehicle_five_type"] = $final_order["vehicle_five_type"];}
        if(!empty($final_order["vehicle_five_condition"])){$vehicles["vehicle_five_condition"] = $final_order["vehicle_five_condition"];}
        if(!empty($final_order["vehicle_five_quantity"])){$vehicles["vehicle_five_quantity"] = $final_order["vehicle_five_quantity"];}

        if(!empty($final_order["vehicle_six_year"])){ $vehicles["vehicle_six_year"] = $final_order["vehicle_six_year"];}
        if(!empty($final_order["vehicle_six_make"])){$vehicles["vehicle_six_make"] = $final_order["vehicle_six_make"];}
        if(!empty($final_order["vehicle_six_model"])){$vehicles["vehicle_six_model"] = $final_order["vehicle_six_model"];}
        if(!empty($final_order["vehicle_six_type"])){$vehicles["vehicle_six_type"] = $final_order["vehicle_six_type"];}
        if(!empty($final_order["vehicle_six_condition"])){$vehicles["vehicle_six_condition"] = $final_order["vehicle_six_condition"];}
        if(!empty($final_order["vehicle_six_quantity"])){$vehicles["vehicle_six_quantity"] = $final_order["vehicle_six_quantity"];}

        if(!empty($final_order["vehicle_seven_year"])){ $vehicles["vehicle_seven_year"] = $final_order["vehicle_seven_year"];}
        if(!empty($final_order["vehicle_seven_make"])){$vehicles["vehicle_seven_make"] = $final_order["vehicle_seven_make"];}
        if(!empty($final_order["vehicle_seven_model"])){$vehicles["vehicle_seven_model"] = $final_order["vehicle_seven_model"];}
        if(!empty($final_order["vehicle_seven_type"])){$vehicles["vehicle_seven_type"] = $final_order["vehicle_seven_type"];}
        if(!empty($final_order["vehicle_seven_condition"])){$vehicles["vehicle_seven_condition"] = $final_order["vehicle_seven_condition"];}
        if(!empty($final_order["vehicle_seven_quantity"])){$vehicles["vehicle_seven_quantity"] = $final_order["vehicle_seven_quantity"];}

        if(!empty($final_order["vehicle_eight_year"])){ $vehicles["vehicle_eight_year"] = $final_order["vehicle_eight_year"];}
        if(!empty($final_order["vehicle_eight_make"])){$vehicles["vehicle_eight_make"] = $final_order["vehicle_eight_make"];}
        if(!empty($final_order["vehicle_eight_model"])){$vehicles["vehicle_eight_model"] = $final_order["vehicle_eight_model"];}
        if(!empty($final_order["vehicle_eight_type"])){$vehicles["vehicle_eight_type"] = $final_order["vehicle_eight_type"];}
        if(!empty($final_order["vehicle_eight_condition"])){$vehicles["vehicle_eight_condition"] = $final_order["vehicle_eight_condition"];}
        if(!empty($final_order["vehicle_eight_quantity"])){$vehicles["vehicle_eight_quantity"] = $final_order["vehicle_eight_quantity"];}

        if(!empty($final_order["vehicle_nine_year"])){ $vehicles["vehicle_nine_year"] = $final_order["vehicle_nine_year"];}
        if(!empty($final_order["vehicle_nine_make"])){$vehicles["vehicle_nine_make"] = $final_order["vehicle_nine_make"];}
        if(!empty($final_order["vehicle_nine_model"])){$vehicles["vehicle_nine_model"] = $final_order["vehicle_nine_model"];}
        if(!empty($final_order["vehicle_nine_type"])){$vehicles["vehicle_nine_type"] = $final_order["vehicle_nine_type"];}
        if(!empty($final_order["vehicle_nine_condition"])){$vehicles["vehicle_nine_condition"] = $final_order["vehicle_nine_condition"];}
        if(!empty($final_order["vehicle_nine_quantity"])){$vehicles["vehicle_nine_quantity"] = $final_order["vehicle_nine_quantity"];}

        if(!empty($final_order["vehicle_ten_year"])){ $vehicles["vehicle_ten_year"] = $final_order["vehicle_ten_year"];}
        if(!empty($final_order["vehicle_ten_make"])){$vehicles["vehicle_ten_make"] = $final_order["vehicle_ten_make"];}
        if(!empty($final_order["vehicle_ten_model"])){$vehicles["vehicle_ten_model"] = $final_order["vehicle_ten_model"];}
        if(!empty($final_order["vehicle_ten_type"])){$vehicles["vehicle_ten_type"] = $final_order["vehicle_ten_type"];}
        if(!empty($final_order["vehicle_ten_condition"])){$vehicles["vehicle_ten_condition"] = $final_order["vehicle_ten_condition"];}
        if(!empty($final_order["vehicle_ten_quantity"])){$vehicles["vehicle_ten_quantity"] = $final_order["vehicle_ten_quantity"];}

        //return $vehicles;
        $vehicle_type = \Config::get("lists.vehicle_type");
        //return $final_order;
        //return $quote;
        
        $company_name = Company::where("id",$all["company_id"])->first()->company_name;

        return view("companies.quotes.orders.order-status");
        //return view("companies.quotes.orders.overview")
            //->with("final_order",$final_order)
            //->with("company_name",$company_name)
            //->with("vehicle_type",$vehicle_type)
            //->with("customer",$customer)
            //->with("quote",$quote)
            //->with("vehicles",$vehicles);
    }
}
