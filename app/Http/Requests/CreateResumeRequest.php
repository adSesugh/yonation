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
            'gender'    =>  ['required'],
            'birthdate' =>  ['required'],
            'domain_id' =>  ['required'],
            'degree_id' =>  ['required'],
            'year_from' =>  ['required'],
            'year_to'   =>  ['required'],
            'course'    =>  ['required'],
            'school_name'   =>  ['required'],
            'photo' =>  ['required'],
            'resumecv'  => ['required'],
            'terms' =>  ['required'],
            'father'    =>  ['required'],
            'fcity' =>  ['required'],
            'fstate'    =>  ['required'],
            'mother'    =>  ['required'],
            'mcity' =>  ['required'],
            'mstate'    =>  ['required'],
            'address'   => ['required']
        ];
    }

    public function messages()
    {
        return [
            'mobile_no.required'    =>  'Mobile Number required',
            'mobile_no.max' =>  "Mobile Number can't exceed 15 digits",
            'mobile_no.unique'  =>  'Already registered',
            'fullname.required' =>  'Full Name is required',
            'birthdate' =>  'Birth Date field is required',
            'resumecv.required' =>  'Please upload CV',
            'domain_id.required' =>  'Select a job function',
            'degree_id.required' =>  'Select your qualification',
            'fcity.required'    =>  'Provide Father\'s City',
            'fstate.required'   =>  'Provide Father\'s State',
            'mcity.required'    =>  'Provide Mother\'s City',
            'mstate.required'   =>  'Provide Mother\'s State'
        ];
    }
}
