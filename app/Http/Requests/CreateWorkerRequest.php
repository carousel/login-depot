<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateWorkerRequest extends Request {

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
            "username" => "required|unique:users",
            "first_name" => "required|unique:workers",
            "last_name" => "required|unique:workers",
            "account_number" => "required",
            "email" => "required|unique:customers",
            "password" => "required"
		];
	}

}
