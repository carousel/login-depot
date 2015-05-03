<?php namespace App\Http\Controllers;

use App\LoginDepot\Customer;
use App\Http\Requests\CreateCustomerBasicProfileRequest;
use App\Http\Requests\UpdateCustomerBasicProfileRequest;

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

    public function getShowCustomer($company,$customer)
    {
        $customer = Customer::where("first_name",$customer)->first();
        return view("companies.customers.show")
            ->with("company",$company)
            ->with("customer",$customer);
    }
    public function getCreateCustomer($company)
    {
        return view("companies.customers.create")
            ->with("company",$company);
    }
    public function getUpdateCustomer($company,$customer)
    {
        $customer_object = Customer::where("first_name",$customer)->first();

        return view("companies.customers.update")
            ->with("company",$company)
            ->with("customer_object",$customer_object);
    }
    public function postUpdateCustomer($company,$customer,UpdateCustomerBasicProfileRequest $request)
    {
        $customer_object = Customer::where("first_name",$customer)->first();
        $customer_object->first_name = $request["first_name"];
        $customer_object->last_name = $request["last_name"];
        $customer_object->email = $request["email"];
        $customer_object->save();
        $customer_object = Customer::where("first_name",$request["first_name"])->first();
        return \Redirect::route("manage-customers")
            ->with("update_status","Customer {$request["first_name"]} profile updated")
            ->with("customer_object",$customer_object);
    }
    public function postCreateCustomer(CreateCustomerBasicProfileRequest $request)
    {
        $customer = new Customer;
        $customer->first_name = $request["first_name"];
        $customer->last_name = $request["last_name"];
        $customer->email = $request["email"];
        $customer->save();
        return \Redirect::route("manage-customers")
            ->with("create_status","Customer {$customer->first_name} profile has been created");
    }
    /**
    * 
    */
    public function postDeleteCustomer($company,$customer)
    {
        $customer = Customer::where("first_name",$customer)->first();
        $customer->delete();
        return \Redirect::route("manage-customers")
            ->with("delete_status","Customer {$customer->first_name} has been deleted")
            ->with("customer",$customer);
        
    }


}
