<?php

namespace Database\Seeders;

use App\Models\Voluntario;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class VoluntariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
/*         DB::table('voluntarios')->insert(['Nombre' => 'Luis',
                                        'Apellidos' => 'Sanchez',
                                        'IdRefugio' => 1,
                                        'FechaNacimiento' => '2000/07/08',
                                        'Foto' => '']);
        DB::table('voluntarios')->insert(['Nombre' => 'Pedro',
                                        'Apellidos' => 'Ruiz',
                                        'IdRefugio' => 2,
                                        'FechaNacimiento' => '1997/12/19',
                                        'Foto' => '']);
        Voluntario::create(['Nombre' => 'Mayte',
                            'Apellidos' => 'Sanchez',
                            'IdRefugio' => 2,
                            'FechaNacimiento' => '1970/12/07',
                            'Foto' => '']); */
        \App\Models\Voluntario::factory(30)->create();
    }
}
