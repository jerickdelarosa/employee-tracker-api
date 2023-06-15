<?php

namespace App\Http\Requests\Requests\Groups;


use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreGroupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'group_code' => [
                'required',
                'string',
                Rule::unique('groups', 'group_code')->ignore($this->id, 'id')
            ],
            'name' => [
                'required',
                'string'
            ]
        ];
    }
}
