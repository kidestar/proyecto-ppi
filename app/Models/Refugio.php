<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refugio extends Model
{
    use HasFactory;

    protected $fillable = ['Direccion', 'CantidadPerros', 'user_id'];

    public function perros()
    {
        return $this->hasMany('App\Models\Perro');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    
    public function voluntarios()
    {
        return $this->belongsToMany(Voluntario::class);
    }
}
