<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateOrdersRequest;
use App\LoginDepot\Vehicle;
use App\LoginDepot\ZipCode;
use App\LoginDepot\Customer;
use App\LoginDepot\Company;
use App\LoginDepot\Order;
use Carbon\Carbon;

use Illuminate\Http\Request;

class OrdersController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getCreate($company_name)
	{
        $states = \Config::get("lists.states");
        $vehicle_type = \Config::get("lists.vehicle_type");
        $order_id = str_random(10);
        return view("companies.orders.create")
            ->with("company_name",$company_name)
            ->with("states",$states)
            ->with("vehicle_type",$vehicle_type)
            ->with("order_id",$order_id);

	}
	public function getOrders($company_name)
	{
        $customers = Customer::all();
        $orders = Order::all();
        return view("companies.orders.index")       
            ->with("company_name",$company_name)
            ->with("customers",$customers);
	}

	public function getVehicles()
	{
        return Vehicle::select("year","make")->get();
	}
	public function pickupCity()
	{
        return ZipCode::select("primary_city")->limit(100)->get();
	}

    public function postUpdateOrder(){
        dd(\Input::all());
    }
	/**

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function postCreate(CreateOrdersRequest $request)
	{
        $customer = new Customer;
        $order = new Order;

        if(\Auth::user()->role == "company"){
            $company = Company::where("user_id",\Auth::user()->id)->first();
        }
        $request = $request->all();
        //dd($request);

        $date = $request["pickup_date"];
        $date = explode("-",$date);
        $pickup_date = Carbon::createFromDate($date[0],$date[1],$date[2]);
        $customer->name = $request["name"];
        $customer->phone = $request["phone"];
        $customer->secondary_phone = $request["secondary_phone"];
        $customer->email = $request["email"];
        $customer->secondary_email = $request["secondary_email"];
        $customer->pickup_date = $pickup_date;
        $customer->order_id = $request["order_id"];
        $customer->company_id = $company->id;
        $customer->status = "saved";
        $customer->modified_at = Carbon::now();
        $customer->save();

        $order->pickup_city = $request["pickup_city"];
        $order->pickup_state = $request["pickup_state"];
        $order->pickup_zipcode = $request["pickup_zipcode"];

        $order->delivery_city = $request["delivery_city"];
        $order->delivery_state = $request["delivery_state"];
        $order->delivery_zipcode = $request["delivery_zipcode"];
        $order->order_id = $request["order_id"];

        if(!empty($request["year_1"])){
            $order->vehicle_one_year = $request["year_1"];        
            $order->vehicle_one_make = $request["make_1"];        
            $order->vehicle_one_model = $request["model_1"];        
            $order->vehicle_one_type = $request["type_1"];        
            $order->vehicle_one_condition = $request["condition_1"];        
            $order->vehicle_one_quantity = $request["quantity_1"];        
        };
        if(!empty($request["year_2"])){
            $order->vehicle_two_year = $request["year_2"];        
            $order->vehicle_two_make = $request["make_2"];        
            $order->vehicle_two_model = $request["model_2"];        
            $order->vehicle_two_type = $request["type_2"];        
            $order->vehicle_two_condition = $request["condition_2"];        
            $order->vehicle_two_quantity = $request["quantity_2"];        
        };
        if(!empty($request["year_3"])){
            $order->vehicle_three_year = $request["year_3"];        
            $order->vehicle_three_make = $request["make_3"];        
            $order->vehicle_three_model = $request["model_3"];        
            $order->vehicle_three_type = $request["type_3"];        
            $order->vehicle_three_condition = $request["condition_3"];        
            $order->vehicle_three_quantity = $request["quantity_3"];        
        };
        if(!empty($request["year_4"])){
            $order->vehicle_four_year = $request["year_4"];        
            $order->vehicle_four_make = $request["make_4"];        
            $order->vehicle_four_model = $request["model_4"];        
            $order->vehicle_four_type = $request["type_4"];        
            $order->vehicle_four_condition = $request["condition_4"];        
            $order->vehicle_four_quantity = $request["quantity_4"];        
        };
        if(!empty($request["year_5"])){
            $order->vehicle_five_year = $request["year_5"];        
            $order->vehicle_five_make = $request["make_5"];        
            $order->vehicle_five_model = $request["model_5"];        
            $order->vehicle_five_type = $request["type_5"];        
            $order->vehicle_five_condition = $request["condition_5"];        
            $order->vehicle_five_quantity = $request["quantity_5"];        
        };
        if(!empty($request["year_6"])){
            $order->vehicle_six_year = $request["year_6"];        
            $order->vehicle_six_make = $request["make_6"];        
            $order->vehicle_six_model = $request["model_6"];        
            $order->vehicle_six_type = $request["type_6"];        
            $order->vehicle_six_condition = $request["condition_6"];        
            $order->vehicle_six_quantity = $request["quantity_6"];        
        };
        if(!empty($request["year_7"])){
            $order->vehicle_seven_year = $request["year_7"];        
            $order->vehicle_seven_make = $request["make_7"];        
            $order->vehicle_seven_model = $request["model_7"];        
            $order->vehicle_seven_type = $request["type_7"];        
            $order->vehicle_seven_condition = $request["condition_7"];        
            $order->vehicle_seven_quantity = $request["quantity_7"];        
        };
        if(!empty($request["year_8"])){
            $order->vehicle_eight_year = $request["year_8"];        
            $order->vehicle_eight_make = $request["make_8"];        
            $order->vehicle_eight_model = $request["model_8"];        
            $order->vehicle_eight_type = $request["type_8"];        
            $order->vehicle_eight_condition = $request["condition_8"];        
            $order->vehicle_eight_quantity = $request["quantity_8"];        
        };
        if(!empty($request["year_9"])){
            $order->vehicle_nine_year = $request["year_9"];        
            $order->vehicle_nine_make = $request["make_9"];        
            $order->vehicle_nine_model = $request["model_9"];        
            $order->vehicle_nine_type = $request["type_9"];        
            $order->vehicle_nine_condition = $request["condition_9"];        
            $order->vehicle_nine_quantity = $request["quantity_9"];        
        };
        if(!empty($request["year_10"])){
            $order->vehicle_ten_year = $request["year_10"];        
            $order->vehicle_ten_make = $request["make_10"];        
            $order->vehicle_ten_model = $request["model_10"];        
            $order->vehicle_ten_type = $request["type_10"];        
            $order->vehicle_ten_condition = $request["condition_10"];        
            $order->vehicle_ten_quantity = $request["quantity_10"];        
        };

        if(!empty($request["vehicle_notes"])){
            $order->vehicle_notes = $request["vehicle_notes"];                
        };
        if(!empty($request["notes_for_customer"])){
            $order->customer_notes = $request["notes_for_customer"];                
        };
        if(!empty($request["notes_for_office"])){
            $order->office_notes = $request["notes_for_office"];                
        };
        if(!empty($request["price"])){
            $order->quote_price = $request["price"];                
        };
        if(!empty($request["post_price"])){
            $order->post_price = $request["post_price"];                
        };
        $order->customer_id = $customer->id;
        $order->company_id = $company->id;
        
        $order->save();

        return \Redirect::back()
            ->with("order_create_status","Order has been created");
	}
    public function getEdit($company,$order){

        $order_object = \DB::table("orders")->where("order_id",$order)->first();
        $customer_object = Customer::where("order_id",$order)->first();

        $states = \Config::get("lists.states");
        $vehicle_type = \Config::get("lists.vehicle_type");
        return view("companies.orders.edit")
            ->with("company_name",$company)
            ->with("states",$states)
            ->with("vehicle_type",$vehicle_type)
            ->with("order_id",$order_object->order_id)
            ->with("order_object",$order_object)
            ->with("customer_object",$customer_object);
    
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
