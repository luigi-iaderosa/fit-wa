<?php

namespace App\Http\Requests\Web\Athlete;

use Illuminate\Foundation\Http\FormRequest;

class AddAthleteRequest extends FormRequest
{
   
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|string|max:50',
            'surname'=>'required|string|max:50',
            'dob'=>'required'
        ];
    }
}
