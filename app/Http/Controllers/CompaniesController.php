<?php namespace App\Http\Controllers;

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
	public function getIndex($id)
	{
        return view('companies.dashboard')->with("id",$id);
	}
	public function getCalendar($id)
	{
        return view('companies.calendar')->with("id",$id);
	}
    public function getCustomers($id)
    {
        $name = "neven";
        return view("companies.customers.index")       
            ->with("id",$id)
            ->with("name",$name);
    }

    public function getShow($id)
    {
        $name = "neven";
        return view("companies.customers.show")
            ->with("id",$id)
            ->with("name",$name);
    }


}
