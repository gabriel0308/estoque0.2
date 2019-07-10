<?php namespace App\Http\Requests\Admin\Fabricante;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreFabricante extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return  bool
     */
    public function authorize()
    {
        return Gate::allows('admin.fabricante.create');
    }

/**
     * Get the validation rules that apply to the request.
     *
     * @return  array
     */
    public function rules()
    {
        return [
            'IdFabricante' => ['required', 'numeric'],
            'NomeFabricante' => ['nullable', 'string'],
            
        ];
    }
}
