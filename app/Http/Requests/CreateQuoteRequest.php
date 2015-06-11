<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateQuoteRequest extends Request {

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
            "name" => "required",
            "phone" => "required",
            "secondary_phone" => "required",
            "email" => "required",
            "secondary_email" => "required",
            "pickup_date" => "required",
            "pickup_city" => "required",
            "pickup_state" => "required",
            "pickup_zipcode" => "required",
            "delivery_city" => "required",
            "delivery_state" => "required",
            "delivery_zipcode" => "required",
            "carrier_type" => "required",
            "year_2" => "required",
            "make_2" => "required",
            "model_2" => "required",
            "type_2" => "required",
            "condition_2" => "required",
            "quantity_2" => "required",
            "vehicle_notes" => "required",
            "notes_for_customer" => "required",
            "notes_for_office" => "required",
            "price" => "required"
        ];
	}

}
