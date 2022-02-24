<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupervisorReq extends FormRequest
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

            //'name'=>'required|min:1.00|max:10000.00',
            'name'=>'required|min:2',
            'role'=>'required',
            'email'=>'required|email|unique:users',
            'contactno'=>'required|regex:/^([6-9]{1}[0-9]{9})$/|min:10',
            'pic'=>'required|image',
            'pincode'=>'required|min:6',
            'address'=>'required',
            'highest_qualification'=>'required',
            'password'=>'required'
        ];
    }
    public function messages()
    {
       return [
           'name.required'=>'Fill Your Name','name.min'=>'Enter Name Minimun two letter',
           'role.required'=>'Choose Roll',
           'email.required'=>'Fill Email','email.email'=>'Fill valid Email','email.unique'=>'Alreay Exists',
           'contactno.required'=>'Fill Mobile Number','contactno.regex'=>'Enter Valid Number','contactno.min'=>'Fill 10 Digit Only',
           'pic.required'=>'Choose Image','pic.image'=>'Choose Valid Image',
           'pincode.required'=>'Fill Pincode','pincode.min'=>'Enter Valid Pincode',
           'address.required'=>'Fill Address',
           'highest_qualification.required'=>'Fill Highest Qualification',
           'password.required'=>'Fill Password'
    ];
    }
}
