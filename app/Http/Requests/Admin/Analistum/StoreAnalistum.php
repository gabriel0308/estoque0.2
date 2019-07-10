<?php namespace App\Http\Requests\Admin\Analistum;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreAnalistum extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return  bool
     */
    public function authorize()
    {
        return Gate::allows('admin.analistum.create');
    }

/**
     * Get the validation rules that apply to the request.
     *
     * @return  array
     */
    public function rules()
    {
        return [
            'IdAnalista' => ['required', 'numeric'],
            'MatriculaAnalista' => ['nullable', 'string'],
            'NomeAnalista' => ['nullable', 'string'],
            'SenhaAnalista' => ['nullable', 'string'],
            'guard' => ['nullable', 'string'],
            
        ];
    }
}
