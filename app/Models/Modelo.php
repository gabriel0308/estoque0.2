<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    
    protected $primaryKey = 'IdModelo';
    protected $table = 'modelo';
    
    protected $fillable = [
        "IdModelo",
        "IdFabricante",
        "IdTipo",
        "NomeModelo",
    
    ];
    
    protected $hidden = [
    
    ];
    
    protected $dates = [
    
    ];
    
    
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute() {
        return url('/admin/modelos/'.$this->getKey());
    }


    public function fabricante()
	{
		return $this->belongsTo(\App\Models\Fabricante::class, 'IdFabricante');
	}

	public function tipo()
	{
		return $this->belongsTo(\App\Models\Tipo::class, 'IdTipo');
	}

	public function computadors()
	{
		return $this->hasMany(\App\Models\Computador::class, 'IdModelo');
	}
    
}
