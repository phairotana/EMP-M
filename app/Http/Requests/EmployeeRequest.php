<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\EmployeeController;
class EmployeeRequest extends FormRequest
{
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
            'name'=> 'required',
            'email'=> 'required',
            'phone'=> 'required',
            'address'=> 'required',
            'detail'=> 'required',
            'amount'=> 'required',
            'join_date'=> 'required',
            'end_date'=>'required',
            'gender'=> 'required',
            'date_of_birth'=> 'required',
        ];

    }
    public function messages()
    {
        return [
            // 'name.required' => 'Name is required!'
        ];
    }
}
