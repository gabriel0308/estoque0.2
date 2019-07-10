<?php namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Analistum extends Authenticatable
{
    
    protected $primaryKey = 'IdAnalista';
    protected $table = 'analista';
    
    protected $fillable = [
        "IdAnalista",
        "MatriculaAnalista",
        "NomeAnalista",
        "SenhaAnalista",
        "guard",
    
    ];
    
    protected $hidden = [
        "remember_token",
    
    ];
    
    protected $dates = [
    
    ];
    
    
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute() {
        return url('/admin/analista/'.$this->getKey());
    }

    
}
