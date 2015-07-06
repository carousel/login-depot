<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateQuoteRequest;
use App\LoginDepot\Vehicle;
use App\LoginDepot\ZipCode;
use App\LoginDepot\Customer;
use App\LoginDepot\Company;
use App\LoginDepot\Quote;
use App\LoginDepot\Order;
use Carbon\Carbon;
use App\Handlers\Events\QuoteCreateHandler;
use GuzzleHttp\Client;

use Illuminate\Http\Request;

class QuotesController extends Controller {

    /**
    * 
    */
    public function getUshipPrice()
    {
        //dd($_POST);

        //$client_id = env("CLIENT_ID");
        //$client_secret = env("CLIENT_SECRET");
        //$grant_type = env("GRANT_TYPE");
        //$uship_url = env("USHIP_URL");

//if (isset($_POST['p_zip']) && !empty($_POST['d_zip'])) {
    $pu_zip = $_POST['pickupZipcode'];
    $do_zip = $_POST['deliveryZipcode'];
    $v_type = $_POST['vehicleType'];
    $condition = $_POST['vehicleCondition'];
    $carrier = $_POST['carrierType'];
//};


    switch ($v_type) {
        case 'Car':
            $weight = 1400;
            break;
        case 'SUV':
            $weight = 1800;
            break;
        case 'Van':
            $weight = 1800;
            break;
        case 'Pickup':
            $weight = 2000;
            break;
        default:
            $weight = 1500;
            break;
    }


//set the api url
    $service_url = 'https://api.uship.com/oauth/token';

//init curl 
    $curl = curl_init($service_url);

//set all curl options
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);

//send api required parameters
    curl_setopt($curl, CURLOPT_POSTFIELDS, "client_secret=xtcrNXMpyE&grant_type=client_credentials&client_id=75n6cc6v4kbazcau4367p3xs");

//send required headers
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        "Content-Type" => 'application/x-www-form-urlencoded',
        "Connection" => "close"
    ));

//execute curl..
    $curl_response = curl_exec($curl);

//check result
    if ($curl_response === false) {
        $info = curl_getinfo($curl);
        curl_close($curl);
        die('error occured during curl exec. Additioanl info: ' . var_export($info));
    }

//close curl object
    curl_close($curl);

//decode the json respont and get the access token
    $decoded = json_decode($curl_response);
    $token = $decoded->access_token;



    $json_request = '{"route": {"items": [{"address": {"postalCode": "' . $pu_zip . '","country": "US"}},{"address": {"postalCode": "' . $do_zip . '","country": "US"}}]},"items": [{"commodity": "CarsLightTrucks", "weightInGrams": ' . $weight . '}]}';

    $assoc_arr = json_decode($json_request);

    $json_str = json_encode($assoc_arr);



    $ch = curl_init('https://api.uship.com/v2/estimate');

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");

    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_str);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Accept: */*',
        'Content-Type: application/json',
        'Authorization: Bearer ' . $token . '')
    );

    $result = curl_exec($ch);

    $result_arr = json_decode($result);

    $price_q = $result_arr->price;

    $priceValueF = $price_q->value;
    $priceValue = floor($priceValueF);
    echo round($price_q->value);
    //$final;
    //$sql = 'SELECT * FROM onlineQuoteData';
    //$result = $db->query($sql);

    //if ($priceValue < 500) {
        //if ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            //$inop = $row['condition_1'];
            //$enclosed = $row['carrier_1'];
            //$final = $priceValue;
            //if (!$condition === 'yes') {
                //$final = $priceValue + $inop;
            //}
            //if (!$carrier === 'open') {
                //$final = $priceValue + $enclosed;
            //}

//            $price_step_1 = $row['price_step_1a'];
//            $price_step_2 = $row['price_step_2a'];
//            $price_step_3 = $row['price_step_3a'];           
        //}
    //} else if ($priceValue >= 500 && $priceValue < 1000) {
        //if ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            //$inop = $row['condition_2'];
            //$enclosed = $row['carrier_2'];
            //$final = $priceValue;
            //if ($condition === 'no') {
                //$final = $priceValue + $inop;
            //}
            //if ($carrier === 'enclosed') {
                //$final = $priceValue + $enclosed;
            //}
//            $price_step_1 = $row['price_step_1b'];
//            $price_step_2 = $row['price_step_2b'];
//            $price_step_3 = $row['price_step_3b'];
        //}
    //} else if ($priceValue >= 1000) {
        //if ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            //$inop = $row['condition_3'];
            //$enclosed = $row['carrier_3'];
            //$final = $priceValue;
            //if ($condition === 'no') {
                //$final = $priceValue + $inop;
            //}
            //if ($carrier === 'enclosed') {
                //$final = $priceValue + $enclosed;
            //}
//            $price_step_1 = $row['price_step_1c'];
//            $price_step_2 = $row['price_step_2c'];
//            $price_step_3 = $row['price_step_3c'];
        //}
    //}

    //echo $final;


    }



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
        $saved_quotes = Quote::where("status","accepted")->get();
        $saved_quotes_count = count($saved_quotes);
        $states = \Config::get("lists.states");
        $vehicle_type = \Config::get("lists.vehicle_type");
        $quote_id = str_random(10);
        return view("companies.quotes.create")
            ->with("company_name",$company_name)
            ->with("states",$states)
            ->with("vehicle_type",$vehicle_type)
            ->with("quote_id",$quote_id)
            ->with("saved_quotes",$saved_quotes)
            ->with("saved_quotes_count",$saved_quotes_count);

	}
	public function getQuotes($company_name)
	{
        $customers = Customer::all();
        $saved_quotes = Quote::where("status","saved")->get();
        $saved_quotes_count = count($saved_quotes);
        return view("companies.quotes.index")       
            ->with("company_name",$company_name)
            ->with("customers",$customers)
            ->with("saved_quotes",$saved_quotes)
            ->with("saved_quotes_count",$saved_quotes_count);
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
	public function postCreate(CreateQuoteRequest $request)
	{
        if(\Auth::user()->role == "company"){
            $company = Company::where("user_id",\Auth::user()->id)->first();
        }

        $customer = new Customer;
        $quote = new Quote;

        $date = $request["pickup_date"];
        $date = explode("-",$date);
        $pickup_date = Carbon::createFromDate($date[0],$date[1],$date[2]);
        $customer->company_id = $company->id;
        $customer->quote_id = $request["quote_id"];
        $customer->name = $request["name"];
        $customer->phone = $request["phone"];
        $customer->secondary_phone = $request["secondary_phone"];
        $customer->email = $request["email"];
        $customer->secondary_email = $request["secondary_email"];
        $customer->pickup_date = $pickup_date;
        $customer->status = "saved";
        $customer->modified_at = Carbon::now();
        $customer->save();



        $quote->pickup_city = $request["pickup_city"];
        $quote->pickup_state = $request["pickup_state"];
        $quote->pickup_zipcode = $request["pickup_zipcode"];

        $quote->delivery_city = $request["delivery_city"];
        $quote->delivery_state = $request["delivery_state"];
        $quote->delivery_zipcode = $request["delivery_zipcode"];
        $quote->quote_id = $request["quote_id"];

        if(!empty($request["year_2"])){
            $quote->vehicle_two_year = $request["year_2"];        
            $quote->vehicle_two_make = $request["make_2"];        
            $quote->vehicle_two_model = $request["model_2"];        
            $quote->vehicle_two_type = $request["type_2"];        
            $quote->vehicle_two_condition = $request["condition_2"];        
            $quote->vehicle_two_quantity = $request["quantity_2"];        
            $quote->carrier_type = $request["carrier_type"];
        };
        if(!empty($request["year_3"])){
            $quote->vehicle_three_year = $request["year_3"];        
            $quote->vehicle_three_make = $request["make_3"];        
            $quote->vehicle_three_model = $request["model_3"];        
            $quote->vehicle_three_type = $request["type_3"];        
            $quote->vehicle_three_condition = $request["condition_3"];        
            $quote->vehicle_three_quantity = $request["quantity_3"];        
            $quote->carrier_type = $request["carrier_type"];
        };
        if(!empty($request["year_4"])){
            $quote->vehicle_four_year = $request["year_4"];        
            $quote->vehicle_four_make = $request["make_4"];        
            $quote->vehicle_four_model = $request["model_4"];        
            $quote->vehicle_four_type = $request["type_4"];        
            $quote->vehicle_four_condition = $request["condition_4"];        
            $quote->vehicle_four_quantity = $request["quantity_4"];        
            $quote->carrier_type = $request["carrier_type"];
        };
        if(!empty($request["year_5"])){
            $quote->vehicle_five_year = $request["year_5"];        
            $quote->vehicle_five_make = $request["make_5"];        
            $quote->vehicle_five_model = $request["model_5"];        
            $quote->vehicle_five_type = $request["type_5"];        
            $quote->vehicle_five_condition = $request["condition_5"];        
            $quote->vehicle_five_quantity = $request["quantity_5"];        
            $quote->carrier_type = $request["carrier_type"];
        };
        if(!empty($request["year_6"])){
            $quote->vehicle_six_year = $request["year_6"];        
            $quote->vehicle_six_make = $request["make_6"];        
            $quote->vehicle_six_model = $request["model_6"];        
            $quote->vehicle_six_type = $request["type_6"];        
            $quote->vehicle_six_condition = $request["condition_6"];        
            $quote->vehicle_six_quantity = $request["quantity_6"];        
            $quote->carrier_type = $request["carrier_type"];
        };
        if(!empty($request["year_7"])){
            $quote->vehicle_seven_year = $request["year_7"];        
            $quote->vehicle_seven_make = $request["make_7"];        
            $quote->vehicle_seven_model = $request["model_7"];        
            $quote->vehicle_seven_type = $request["type_7"];        
            $quote->vehicle_seven_condition = $request["condition_7"];        
            $quote->vehicle_seven_quantity = $request["quantity_7"];        
            $quote->carrier_type = $request["carrier_type"];
        };
        if(!empty($request["year_8"])){
            $quote->vehicle_eight_year = $request["year_8"];        
            $quote->vehicle_eight_make = $request["make_8"];        
            $quote->vehicle_eight_model = $request["model_8"];        
            $quote->vehicle_eight_type = $request["type_8"];        
            $quote->vehicle_eight_condition = $request["condition_8"];        
            $quote->vehicle_eight_quantity = $request["quantity_8"];        
            $quote->carrier_type = $request["carrier_type"];
        };
        if(!empty($request["year_9"])){
            $quote->vehicle_nine_year = $request["year_9"];        
            $quote->vehicle_nine_make = $request["make_9"];        
            $quote->vehicle_nine_model = $request["model_9"];        
            $quote->vehicle_nine_type = $request["type_9"];        
            $quote->vehicle_nine_condition = $request["condition_9"];        
            $quote->vehicle_nine_quantity = $request["quantity_9"];        
            $quote->carrier_type = $request["carrier_type"];
        };
        if(!empty($request["year_10"])){
            $quote->vehicle_ten_year = $request["year_10"];        
            $quote->vehicle_ten_make = $request["make_10"];        
            $quote->vehicle_ten_model = $request["model_10"];        
            $quote->vehicle_ten_type = $request["type_10"];        
            $quote->vehicle_ten_condition = $request["condition_10"];        
            $quote->vehicle_ten_quantity = $request["quantity_10"];        
            $quote->carrier_type = $request["carrier_type"];
        };

        if(!empty($request["vehicle_notes"])){
            $quote->vehicle_notes = $request["vehicle_notes"];                
        };
        if(!empty($request["notes_for_customer"])){
            $quote->customer_notes = $request["notes_for_customer"];                
        };
        if(!empty($request["notes_for_office"])){
            $quote->office_notes = $request["notes_for_office"];                
        };
        //if(!empty($request["price"])){
            //$quote->quote_price = $request["price"];                
        //};
        if(!empty($request["post_price"])){
            $quote->post_price = $request["post_price"];                
        };
        $quote->customer_id = $customer->id;
        $quote->company_id = $company->id;
        $quote->status = "saved";
        
        $quote->save();

        if(!empty($request["send_email_to_customer"])){
            $subscriber = new QuoteCreateHandler;
            $data = [];
            $data["name"] = $request["name"];
            $data["company_name"] = $company->company_name;
            $data["quote_id"] = $request["quote_id"];
            $data["pickup_location"] = $request["pickup_city"];
            $data["dropoff_location"] = $request["delivery_city"];
            $data["vehicles"] = $request["make_2"] . "," . $request["model_2"];
            $data["carrier_type"] = $request["carrier_type"];
            $data["vehicle_condition"] = $request["condition_2"];
            $data["post_price"] = $request["post_price"];
            $data["email"] = $request["email"];
            $data["notes"] = $request["notes_for_customer"];
            $customer->status = "pending";
            $customer->save();
            $quote->status = "pending";
            $quote->save();
            \Event::fire($subscriber->onQuoteCreate($data));

            return \Redirect::back()
                ->with("quote_create_status","New quote has been created and sent to customer");
       
        }



        return \Redirect::back()
            ->with("quote_create_status","new quote has been created");
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

	public function getVehicleMake()
	{
        $vehicles = Vehicle::select("make")
            ->groupBy("make")
            ->get();
        return $vehicles;
	}
	public function getVehicleName()
	{
        $vehicles = Vehicle::select("make","name")
            ->groupBy("name")
            ->get();
        return $vehicles;
	}

    public function prefetchZipcode(){

            $zip = ZipCode::select("primary_city","state","zip")->get();
            return $zip;
    
    }

    public function prefetchState(){

        $input = \Input::all();
        //return $input["state"];
        $zip_by_state = ZipCode::select("primary_city","state","zip")
            ->where("state","=",$input["state"]) 
            ->get();

        return $zip_by_state;
    
    }

    public function finalQuote($company,$quote_id){
/*
|--------------------------------------------------------------------------
| I need;
| sent quote
| customer order
|--------------------------------------------------------------------------
*/

        $quote = Quote:: where('quote_id',$quote_id)->first();  
        $customer  = Customer::where('id',$quote->customer_id)->first();
        $order = Order:: where('quote_id',$quote_id)->first();  
        $final = [$quote,$order];
        
        $saved_quotes = Quote::where("status","accepted")->get();
        $saved_quotes_count = count($saved_quotes);

        $states = \Config::get("lists.states");
        $vehicle_type = \Config::get("lists.vehicle_type");

        return view("companies.quotes.final")
            ->with("company_name",$company)
            ->with("states",$states)
            ->with("vehicle_type",$vehicle_type)
            ->with("saved_quotes",$saved_quotes)
            ->with("quote",$quote)
            ->with("saved_quotes_count",$saved_quotes_count)
            ->with("customer",$customer);
    }



}
