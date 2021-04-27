<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            [
                "location"  => "White House",
                "email"     => "elabedayoub1234@gmail.com" ,
                "call"      => 486974970 ,
                "created_at"    => now(),
            ],
        ]);
    }
}
