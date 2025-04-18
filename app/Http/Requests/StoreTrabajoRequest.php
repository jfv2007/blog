<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTrabajoRequest extends FormRequest
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
        $rules=[
            'id_falla' => 'required',
            'id_user' => 'required',
            'id_strabajos' => 'required',
            'des_trabajo' => 'required',
            'foto_trabajo'=> 'required'

        ];
        return $rules;
    }
}
