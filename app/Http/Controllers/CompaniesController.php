<?php namespace App\Http\Controllers;

use App\LoginDepot\Customer;
use App\LoginDepot\Worker;
use App\Http\Requests\CreateCustomerBasicProfileRequest;
use App\Http\Requests\CreateWorkerRequest;
use App\Http\Requests\UpdateCustomerBasicProfileRequest;
use App\Http\Requests\UpdateWorkerRequest;

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

        return \Redirect::to("companies/{$company}/customers")
            ->with("update_status","Customer {$request["first_name"]} profile updated")
            ->with("customer_object",$customer_object)
            ->with("company",$company);
    }
    public function postCreateCustomer($company,CreateCustomerBasicProfileRequest $request)
    {
        $customer = new Customer;
        $customer->first_name = $request["first_name"];
        $customer->last_name = $request["last_name"];
        $customer->email = $request["email"];
        $customer->save();
        return \Redirect::to("companies/{$company}/customers")
            ->with("create_status","Customer {$customer->first_name} profile has been created")
            ->with("company",$company);
    }
    /**
    * 
    */
    public function postDeleteCustomer($company,$customer)
    {
        $customer = Customer::where("first_name",$customer)->first();
        $customer->delete();
        return \Redirect::to("companies/{$company}/customers")
            ->with("delete_status","Customer {$customer->first_name} has been deleted")
            ->with("customer",$customer)
            ->with("company",$company);
        
    }
    public function getWorkers($company) {
        $workers = Worker::all();
        return view("companies.workers.index")       
            ->with("company",$company)
            ->with("workers",$workers);
    }
    public function getUpdateWorker($company,$worker)
    {
        $worker_object = Worker::where("first_name",$worker)->first();
        return view("companies.workers.update")
            ->with("company",$company)
            ->with("worker_object",$worker_object);
    }
    public function getCreateWorker($company)
    {
        return view("companies.workers.create")
            ->with("company",$company);
    }
    public function postCreateWorker($company,CreateWorkerRequest $request)
    {
        $worker = new Worker;
        $worker->first_name = $request["first_name"];
        $worker->last_name = $request["last_name"];
        $worker->account_number = $request["account_number"];
        $worker->email = $request["email"];
        $worker->save();
        return \Redirect::to("companies/{$company}/workers")
            ->with("create_status","worker {$worker->first_name} profile has been created")
            ->with("company",$company);
    }
    public function postDeleteWorker($company,$worker)
    {
        $worker = Worker::where("first_name",$worker)->first();
        $worker->delete();
        return \Redirect::to("companies/{$company}/workers")
            ->with("delete_status","worker {$worker->first_name} has been deleted")
            ->with("worker",$worker)
            ->with("company",$company);
        
    }
    public function postUpdateWorker($company,$worker,UpdateWorkerRequest $request)
    {
        $worker_object = Worker::where("first_name",$worker)->first();
        $worker_object->first_name = $request["first_name"];
        $worker_object->last_name = $request["last_name"];
        $worker_object->account_number = $request["email"];
        $worker_object->email = $request["email"];
        $worker_object->save();
        $worker_object = Worker::where("first_name",$request["first_name"])->first();

        return \Redirect::to("companies/{$company}/workers")
            ->with("update_status","worker {$request["first_name"]} profile updated")
            ->with("worker_object",$worker_object)
            ->with("company",$company);
    }


}
