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
        \App\Models\Perro::factory(30)->create();
    }
}
