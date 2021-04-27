<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            [
                "naissance" => "28 juillet 1996",
                "site"      => "www.google.com",
                "numero"    => 486974970 ,
                "ville"     => "casablanca",
                "age"       => 24,
                "diplome"   => "molengeek",
                "email"     => "elabedayoub1234@gmail.com",
                "freelance" => "actif",
                "created_at"    => now(),
            ],
        ]);
    }
}
