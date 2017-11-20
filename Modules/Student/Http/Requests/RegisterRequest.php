<?php

namespace Modules\Student\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property mixed total_baccalurate
 * @property mixed science
 * @property mixed username
 * @property mixed national_education
 * @property mixed chemics
 * @property mixed english
 * @property mixed french
 * @property mixed physics
 * @property mixed arabic
 * @property mixed math
 * @property mixed faculty
 */
class RegisterRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           'math'=>'between:560,600|required|numeric',
           'arabic'=>'between:350,400|required|numeric',
           'physics'=>'between:280,300|required|numeric',
           'chemics'=>'between:160,200|required|numeric',
           'science'=>'between:270,300|required|numeric',
           'english'=>'between:278,300|required|numeric',
           'french'=>'between:243,300|required|numeric',
           'national_education'=>'between:124,200|required|numeric',
           'username'=>'required|unique:registrations,username',
           'total_baccalurate'=>'required|numeric',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
