<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateResumeRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'fullname'  => ['required'],
            'email' =>  ['required', 'email', 'unique:resumes'],
            'phone' =>  ['required', 'max:15', 'unique:resumes'],
            'mobile_no' =>  ['required', 'max:15', 'unique:resumes'],
        ];
    }

    public function messages()
    {
        return [
            'mobile_no.required'    =>  'Mobile Number required',
            'mobile_no.max' =>  "Mobile Number can't exceed 15 digits",
            'mobile_no.unique'  =>  'Already registered',
            'fullname.required' =>  'Full Name is required'
        ];
    }
}
