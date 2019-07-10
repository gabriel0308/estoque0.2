<?php namespace App\Http\Requests\Admin\Computador;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class IndexComputador extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return  bool
     */
    public function authorize()
    {
        return Gate::allows('admin.computador.index');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return  array
     */
    public function rules()
    {
        return [
            'orderBy' => 'in:IdComp,IdModelo,IdAnalista,SerialComp,HostnameComp,StatusComp,ObservacaoComp,LacreComp,DataCadastroComp|nullable',
            'orderDirection' => 'in:asc,desc|nullable',
            'search' => 'string|nullable',
            'page' => 'integer|nullable',
            'per_page' => 'integer|nullable',

        ];
    }
}
