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
        \App\Models\Voluntario::factory(30)->create();
    }
}
