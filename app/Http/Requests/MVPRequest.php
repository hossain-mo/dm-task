<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MVPRequest extends FormRequest
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
        $sportTypes = ["handball", "basketball"];
        return [
            //
            "sport_type" => ["required", Rule::in($sportTypes)],
            "match_id" => ["required", "integer","exists:matches,id"],
        ];
    }
}
