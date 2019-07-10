<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    
    protected $table = 'tipo';
    protected $primaryKey = 'IdTipo';
    
    protected $fillable = [
        "NomeTipo",
    
    ];
    
    protected $hidden = [
    
    ];
    
    protected $dates = [
    
    ];
    
    
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute() {
        return url('/admin/tipos/'.$this->getKey());
    }

    public function modelos()
	{
		return $this->hasMany(\App\Models\Modelo::class, 'IdTipo');
	}

    
}
