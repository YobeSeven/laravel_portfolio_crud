<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facts')->insert([
            [
                "clients"   => 1000,
                "projets"   => 1000,
                "support"   => 1000,
                "workers"   => 1000,
                "created_at"    => now(),
            ],
        ]);
    }
}
