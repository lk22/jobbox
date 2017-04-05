<?php

namespace JobDesk\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'firstname' => 'required',
            'middlename' => '',
            'lastname' => 'required',
            'email' => 'required',
            'description' => 'max:100',
            'job_position' => '',
            'dream_job_title' => '',
            'avatar' => 'mimes:jpeg,png',
            'company' => ''
        ];
    }
}
