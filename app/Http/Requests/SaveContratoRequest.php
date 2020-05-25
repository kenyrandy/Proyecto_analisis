<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class SaveContratoRequest extends FormRequest
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
        //$horas = $this->horas_contratadas;
        //dd($horas);
        return [
            'horas_contratadas' => 'required|numeric',
            'horas_restantes' => 'required|numeric|lte:horas_contratadas',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required|after:fecha_inicio',
            'estado' => 'required',

        ];
    }
}
