<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateOrderRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			"customer_name" => "required",
			"customer_phone" => "required",
			"customer_email" => "required",
			"quote_id" => "required",
			"pickup_contact_name" => "required",
			"pickup_contact_phone" => "required",
			"pickup_contact_secondary_phone" => "required",
			"pickup_address" => "required",
			"pickup_city" => "required",
			"pickup_state" => "required",
			"pickup_zipcode" => "required",
			"pickup_address_type" => "required",
			"dropoff_contact_name" => "required",
			"dropoff_contact_phone" => "required",
			"dropoff_contact_secondary_phone" => "required",
			"dropoff_address" => "required",
			"dropoff_city" => "required",
			"dropoff_state" => "required",
			"dropoff_zipcode" => "required",
			"dropoff_address_type" => "required",
            "terms-conditions" => "required"
		];
	}

}
