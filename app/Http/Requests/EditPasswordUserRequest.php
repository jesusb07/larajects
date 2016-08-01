<?php

namespace critipelis\Http\Requests;

use critipelis\Http\Requests\Request;

class EditPasswordUserRequest extends Request
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
           'current_password' => 'required|min:6|',
            'new_password'=>'required|confirmed|min:6',
        ];
    }
}
