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
        //$user = \Auth::user();
        //if($user->role = "company"){
            //\View::share("company",$user->first_name);
        //}
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
        return view("companies.quotes.create")
            ->with("company_name",$company_name)
            ->with("states",$states)
            ->with("vehicle_type",$vehicle_type)
            ->with("order_id",$order_id);

	}

	public function getVehicles()
	{
        return Vehicle::select("year","make")->get();
	}
	public function pickupCity()
	{
        return ZipCode::select("primary_city")->limit(100)->get();
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

        $date = $request["Pickup_Date"];
        $date = explode("-",$date);
        $pickup_date = Carbon::createFromDate($date[0],$date[1],$date[2]);
        $customer->name = $request["Name"];
        $customer->phone = $request["Phone"];
        $customer->secondary_phone = $request["Secondary_Phone"];
        $customer->email = $request["Email"];
        $customer->secondary_email = $request["Secondary_Email"];
        $customer->pickup_date = $pickup_date;
        $customer->order_id = $request["Order_Id"];
        $customer->company_id = $company->id;
        $customer->status = "saved";
        $customer->modified_at = Carbon::now();
        $customer->save();

        $order->pickup_city = $request["Pickup_City"];
        $order->pickup_state = $request["Pickup_State"];
        $order->pickup_zipcode = $request["Pickup_ZipCode"];

        $order->delivery_city = $request["Delivery_City"];
        $order->delivery_state = $request["Delivery_State"];
        $order->delivery_zipcode = $request["Delivery_ZipCode"];
        $order->order_id = $request["Order_Id"];

        if(!empty($request["Year_1"])){
            $order->vehicle_one_year = $request["Year_1"];        
            $order->vehicle_one_make = $request["Make_1"];        
            $order->vehicle_one_model = $request["Model_1"];        
            $order->vehicle_one_type = $request["Type_1"];        
            $order->vehicle_one_condition = $request["Condition_1"];        
            $order->vehicle_one_quantity = $request["Quantity_1"];        
        };
        if(!empty($request["Year_2"])){
            $order->vehicle_two_year = $request["Year_2"];        
            $order->vehicle_two_make = $request["Make_2"];        
            $order->vehicle_two_model = $request["Model_2"];        
            $order->vehicle_two_type = $request["Type_2"];        
            $order->vehicle_two_condition = $request["Condition_2"];        
            $order->vehicle_two_quantity = $request["Quantity_2"];        
        };
        if(!empty($request["Year_3"])){
            $order->vehicle_three_year = $request["Year_3"];        
            $order->vehicle_three_make = $request["Make_3"];        
            $order->vehicle_three_model = $request["Model_3"];        
            $order->vehicle_three_type = $request["Type_3"];        
            $order->vehicle_three_condition = $request["Condition_3"];        
            $order->vehicle_three_quantity = $request["Quantity_3"];        
        };
        if(!empty($request["Year_4"])){
            $order->vehicle_four_year = $request["Year_4"];        
            $order->vehicle_four_make = $request["Make_4"];        
            $order->vehicle_four_model = $request["Model_4"];        
            $order->vehicle_four_type = $request["Type_4"];        
            $order->vehicle_four_condition = $request["Condition_4"];        
            $order->vehicle_four_quantity = $request["Quantity_4"];        
        };
        if(!empty($request["Year_5"])){
            $order->vehicle_five_year = $request["Year_5"];        
            $order->vehicle_five_make = $request["Make_5"];        
            $order->vehicle_five_model = $request["Model_5"];        
            $order->vehicle_five_type = $request["Type_5"];        
            $order->vehicle_five_condition = $request["Condition_5"];        
            $order->vehicle_five_quantity = $request["Quantity_5"];        
        };
        if(!empty($request["Year_6"])){
            $order->vehicle_six_year = $request["Year_6"];        
            $order->vehicle_six_make = $request["Make_6"];        
            $order->vehicle_six_model = $request["Model_6"];        
            $order->vehicle_six_type = $request["Type_6"];        
            $order->vehicle_six_condition = $request["Condition_6"];        
            $order->vehicle_six_quantity = $request["Quantity_6"];        
        };
        if(!empty($request["Year_7"])){
            $order->vehicle_seven_year = $request["Year_7"];        
            $order->vehicle_seven_make = $request["Make_7"];        
            $order->vehicle_seven_model = $request["Model_7"];        
            $order->vehicle_seven_type = $request["Type_7"];        
            $order->vehicle_seven_condition = $request["Condition_7"];        
            $order->vehicle_seven_quantity = $request["Quantity_7"];        
        };
        if(!empty($request["Year_8"])){
            $order->vehicle_eight_year = $request["Year_8"];        
            $order->vehicle_eight_make = $request["Make_8"];        
            $order->vehicle_eight_model = $request["Model_8"];        
            $order->vehicle_eight_type = $request["Type_8"];        
            $order->vehicle_eight_condition = $request["Condition_8"];        
            $order->vehicle_eight_quantity = $request["Quantity_8"];        
        };
        if(!empty($request["Year_9"])){
            $order->vehicle_nine_year = $request["Year_9"];        
            $order->vehicle_nine_make = $request["Make_9"];        
            $order->vehicle_nine_model = $request["Model_9"];        
            $order->vehicle_nine_type = $request["Type_9"];        
            $order->vehicle_nine_condition = $request["Condition_9"];        
            $order->vehicle_nine_quantity = $request["Quantity_9"];        
        };
        if(!empty($request["Year_10"])){
            $order->vehicle_ten_year = $request["Year_10"];        
            $order->vehicle_ten_make = $request["Make_10"];        
            $order->vehicle_ten_model = $request["Model_10"];        
            $order->vehicle_ten_type = $request["Type_10"];        
            $order->vehicle_ten_condition = $request["Condition_10"];        
            $order->vehicle_ten_quantity = $request["Quantity_10"];        
        };

        if(!empty($request["Vehicle_Notes"])){
            $order->vehicle_notes = $request["Vehicle_Notes"];                
        };
        if(!empty($request["Notes_For_Customer"])){
            $order->customer_notes = $request["Notes_For_Customer"];                
        };
        if(!empty($request["Notes_For_Office"])){
            $order->office_notes = $request["Notes_For_Office"];                
        };
        if(!empty($request["Price"])){
            $order->quote_price = $request["Price"];                
        };
        if(!empty($request["Post_Price"])){
            $order->post_price = $request["Post_Price"];                
        };
        $order->customer_id = $customer->id;
        $order->company_id = $company->id;
        
        $order->save();

        return \Redirect::back()
            ->with("order_create_status","Order has been created");
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
