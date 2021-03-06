<?php

namespace critipelis\Http\Requests;

use critipelis\Http\Requests\Request;

class EditAvatarUserRequest extends Request
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
            'img_avatar'=>'required|image|max:640*640*1'
        ];
    }
}
