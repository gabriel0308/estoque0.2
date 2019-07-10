<?php namespace App\Http\Requests\Admin\Tipo;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateTipo extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return  bool
     */
    public function authorize()
    {
        return Gate::allows('admin.tipo.edit', $this->tipo);
    }

/**
     * Get the validation rules that apply to the request.
     *
     * @return  array
     */
    public function rules()
    {
        return [
            'IdTipo' => ['sometimes', 'numeric'],
            'NomeTipo' => ['nullable', 'string'],
            
        ];
    }
}
