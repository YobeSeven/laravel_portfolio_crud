<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            [
                "techno"        => "html",
                "niveau"        => 100,
                "created_at"    => now(),
            ],
            [
                "techno"        => "css",
                "niveau"        => 100,
                "created_at"    => now(),
            ],
            [
                "techno"        => "js",
                "niveau"        => 100,
                "created_at"    => now(),
            ],
            [
                "techno"        => "php",
                "niveau"        => 100,
                "created_at"    => now(),
            ],
            [
                "techno"        => "wordpress",
                "niveau"        => 100,
                "created_at"    => now(),
            ],
            [
                "techno"        => "photoshop",
                "niveau"        => 100,
                "created_at"    => now(),
            ],
        ]);
    }
}
