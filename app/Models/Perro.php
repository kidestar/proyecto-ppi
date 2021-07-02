<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perro extends Model
{
    use HasFactory;

    protected $fillable = ['Nombre','FechaIngreso','Raza','Edad','Foto'];
    
    public function refugio()
    {
        return $this->belongsTo('App\Models\Refugio');
    }
}
