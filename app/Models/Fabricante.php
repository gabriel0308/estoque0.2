<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model
{
    
    protected $table = 'fabricante';
    protected $primaryKey = 'IdFabricante';

    protected $fillable = [
        "IdFabricante",
        "NomeFabricante",
    
    ];
    
    protected $hidden = [
    
    ];
    
    protected $dates = [
    
    ];
    
    
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute() {
        return url('/admin/fabricantes/'.$this->getKey());
    }

    public function modelos()
	{
		return $this->hasMany(\App\Models\Modelo::class, 'IdFabricante');
	}
    
}
