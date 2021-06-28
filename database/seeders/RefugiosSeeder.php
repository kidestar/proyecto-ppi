<?php

namespace Database\Seeders;

use App\Models\Refugio;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RefugiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /* DB::table('refugios')->insert(['Direccion' => 'Av Patria 3421',
                                        'CantidadPerros' => 1]);
        DB::table('refugios')->insert(['Direccion' => 'Pedro Moreno 492',
                                        'CantidadPerros' => 2]); */
        Refugio::create(['Direccion' => 'Camino viejo a Tesistan 510',
                        'CantidadPerros' => 0]);
        
    }
}
