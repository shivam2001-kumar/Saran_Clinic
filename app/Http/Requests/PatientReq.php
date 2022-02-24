<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientReq extends FormRequest
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
            'pname'=>'required|min:2',
            'pemail'=>'required|email|unique:users',
            'contactno'=>'required|regex:/^([6-9]{1}[0-9]{9})$/|min:10',
            'age'=>'required',
            'dob'=>'required',
            'address'=>'required'
        ];
    }
    public function messages()
    {
        return[
            'pname.required'=>'Fill Your Name','name.min'=>'Enter Name Minimun two letter',
            'pemail.required'=>'Fill Email','email.email'=>'Fill valid Email','email.unique'=>'Alreay Exists',
            'contactno.required'=>'Fill Mobile Number','contactno.regex'=>'Enter Valid Number','contactno.min'=>'Fill 10 Digit Only',
            'age.required'=>'Fill Your Age',
            'dob.required'=>'Choose DOB',
            'address.required'=>'Fill Your Address'
        ];

    }
}
