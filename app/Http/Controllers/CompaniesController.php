<?php namespace App\Http\Controllers;

use App\LoginDepot\Customer;

class CompaniesController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
    //public function getIndex()
    //{
        //return view('companies.dashboard');
    //}
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getIndex($company)
	{
        return view('companies.dashboard')
            ->with("company",$company);
	}
	public function getCalendar($company)
	{
        return view('companies.calendar')->with("company",$company);
	}
    public function getCustomers($company)
    {
        $customers = Customer::all();
        return view("companies.customers.index")       
            ->with("company",$company)
            ->with("customers",$customers);
    }

    public function getShow($company,$customer)
    {
        $customer = Customer::where("first_name",$customer)->first();
        return view("companies.customers.show")
            ->with("company",$company)
            ->with("customer",$customer);
    }
    public function getCreate($company)
    {
        return view("companies.customers.create")
            ->with("company",$company);
    }
    public function getUpdate($company,$customer)
    {
        $customer_object = Customer::where("first_name",$customer)->first();

        return view("companies.customers.update")
            ->with("company",$company)
            ->with("customer_object",$customer_object);
    }
    public function postUpdate($company,$customer)
    {
        $input = \Input::all();
        $customer_object = Customer::where("first_name",$customer)->first();
        $customer_object->first_name = $input["first_name"];
        $customer_object->last_name = $input["last_name"];
        $customer_object->email = $input["email"];
        $customer_object->save();
        $customer_object = Customer::where("first_name",$input["first_name"])->first();
        return \Redirect::route("manage-customers")
            ->with("update_status","Customer {$input["first_name"]} profile updated")
            ->with("customer_object",$customer_object);
    }
    public function postCreate($company)
    {
        $input = \Input::all();
        $customer = new Customer;
        $customer->first_name = $input["first_name"];
        $customer->last_name = $input["last_name"];
        $customer->email = $input["email"];
        $customer->save();
        return \Redirect::route("manage-customers")
            ->with("create_status","Customer {$customer->first_name} profile has been created");
    }
    /**
    * 
    */
    public function postDelete($company,$customer)
    {
        $customer = Customer::where("first_name",$customer)->first();
        $customer->delete();
        return \Redirect::route("manage-customers")
            ->with("delete_status","Customer {$customer->first_name} has been deleted")
            ->with("customer",$customer);
        
    }


}
