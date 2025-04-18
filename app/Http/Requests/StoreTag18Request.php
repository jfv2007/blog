<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTag18Request extends FormRequest
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
            'tag'=> 'required|unique:tag18s',
            'descripcion'=> 'required',
            'operacion'=>'required',
            'ubicacion'=> 'required',
            'id_cen'=>'required',
            'id_planta' =>'required',
            'id_seccion'=>'required',
            'id_categoria'=>'required',
            'id_status'=>'required',
            'foto' => 'required'
        ];
        return $rules;
    }
}
