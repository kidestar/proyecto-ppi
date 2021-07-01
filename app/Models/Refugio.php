<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refugio extends Model
{
    use HasFactory;

    protected $fillable = ['Direccion', 'CantidadPerros', 'perro_id'];

    public function perros()
    {
        return $this->hasMany('App\Models\Perro');
    }
}
