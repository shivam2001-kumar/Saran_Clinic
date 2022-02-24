<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddRecipt extends FormRequest
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
                'id'=>'required',
                'date'=>'required|date',
                'weight'=>'required|min:1|max:3',
                'age'=>'required',
                'sug'=>'required',
                'disease'=>'required'
        ];
    }
    public function messages()
    {
        return[
            'pname.required'=>'Fill Id.',
            'date.required'=>'Fill Date','date.date'=>'Fill Proper Date',
            'weight.required'=>'Fill weight','weight.min'=>'Fill Valid Weight','weight.max'=>'Fill valid weight',
            'age.required'=>'Fill Your Age',
            'sug.required'=>'Fill Suggestion',
            'disease.required'=>'Fill Disease'
        ];
    }
}
