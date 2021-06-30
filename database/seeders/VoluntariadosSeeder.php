<?php

namespace Database\Seeders;

use App\Models\Voluntariado;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class VoluntariadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Voluntariado::factory(30)->create();
    }
}
