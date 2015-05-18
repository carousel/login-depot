<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CalendarEventShareRequest extends Request {

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
            "title" => "required",
            "description" => "required",
            "color" => "required",
            "start_year" => "required",
            "start_day" => "required",
            "start_month" => "required",
            "end_year" => "required",
            "end_day" => "required",
            "end_month" => "required",
		];
	}

}
