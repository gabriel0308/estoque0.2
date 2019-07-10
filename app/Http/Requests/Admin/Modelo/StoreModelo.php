<?php namespace App\Http\Requests\Admin\Modelo;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreModelo extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return  bool
     */
    public function authorize()
    {
        return Gate::allows('admin.modelo.create');
    }

/**
     * Get the validation rules that apply to the request.
     *
     * @return  array
     */
    public function rules()
    {
        return [
            'IdModelo' => ['required', 'numeric'],
            'IdFabricante' => ['nullable', 'numeric'],
            'IdTipo' => ['nullable', 'numeric'],
            'NomeModelo' => ['nullable', 'string'],
            
        ];
    }
}
