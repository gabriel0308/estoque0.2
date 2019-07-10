<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computador extends Model
{
    
    protected $primaryKey = 'IdComp';
    protected $table = 'computador';
    
    protected $fillable = [
        "IdModelo",
        "IdAnalista",
        "SerialComp",
        "HostnameComp",
        "StatusComp",
        "ObservacaoComp",
        "LacreComp",
        "DataCadastroComp",
    
    ];
    
    protected $hidden = [
    
    ];
    
    protected $dates = [
        "DataCadastroComp",
    
    ];
    
    
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute() {
        return url('/admin/computadors/'.$this->getKey());
    }

    
}
