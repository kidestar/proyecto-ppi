<?php

namespace Database\Seeders;

use App\Models\Perro;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PerrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('perros')->insert(['Nombre' => 'Pepe',
                                    'FechaIngreso' => '2020/10/11',
                                    'Raza' => 'Chihuahua',
                                    'Edad' => 1,
                                    'Refugio' => 1,
                                    'Foto' => '']);
        DB::table('perros')->insert(['Nombre' => 'Fatima',
                                    'FechaIngreso' => '2021/05/20',
                                    'Raza' => 'Mestizo',
                                    'Edad' => 5,
                                    'Refugio' => 2,
                                    'Foto' => '']);
        
    }
}
