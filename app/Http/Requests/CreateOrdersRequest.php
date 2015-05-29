<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateOrdersRequest extends Request {

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
            "year_1" => "required",
            "make_1" => "required",
            "model_1" => "required",
            "type_1" => "required",
            "condition_1" => "required",
            "quantity_1" => "required",
            "carrier_type" => "required",
            "vehicle_notes" => "required",
            "notes_for_customer" => "required",
            "notes_for_office" => "required",
            "post_price" => "required"
        ];
	}

}
