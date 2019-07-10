<?php namespace App\Http\Requests\Admin\Computador;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreComputador extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return  bool
     */
    public function authorize()
    {
        return Gate::allows('admin.computador.create');
    }

/**
     * Get the validation rules that apply to the request.
     *
     * @return  array
     */
    public function rules()
    {
        return [
            'IdComp' => ['required', 'numeric'],
            'IdModelo' => ['nullable', 'numeric'],
            'IdAnalista' => ['nullable', 'numeric'],
            'SerialComp' => ['nullable', 'string'],
            'HostnameComp' => ['nullable', 'string'],
            'StatusComp' => ['nullable', 'string'],
            'ObservacaoComp' => ['nullable', 'string'],
            'LacreComp' => ['nullable', 'string'],
            'DataCadastroComp' => ['required', 'date'],
            
        ];
    }
}
