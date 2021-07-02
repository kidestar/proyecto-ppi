<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voluntario extends Model
{
    use HasFactory;

    protected $fillable = ['Nombre','Apellidos','FechaNacimiento','IdRefugio','Foto'];


    public function refugios()
    {
        return $this->belongsToMany(Refugio::class);
    }
}
