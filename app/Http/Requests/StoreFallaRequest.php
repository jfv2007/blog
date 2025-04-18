<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFallaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        /* if($this->user_id==auth()->user()->id){ */
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules=[
            'id_tag18s'=> 'required',
            'id_usuario'=>'required',
            'id_sfallas'=>'required',
            'descripcion_falla'=> 'required',
            'turno'=>'required',
            'foto_falla'=> 'required'
        ];
        return $rules;
    }
}
