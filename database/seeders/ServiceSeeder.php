<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                "icone" =>  "icofont-computer",
                "titre" =>  "Lorem Ipsum",
                "texte" =>  "LOREM",
                "created_at"    => now(),
            ],
            [
                "icone" =>  "icofont-chart-bar-graph",
                "titre" =>  "Dolor Sitema",
                "texte" =>  "LOREM",
                "created_at"    => now(),
            ],
            [
                "icone" =>  "icofont-earth",
                "titre" =>  "Sed ut perspiciatis",
                "texte" =>  "LOREM",
                "created_at"    => now(),
            ],
            [
                "icone" =>  "icofont-image",
                "titre" =>  "Magni Dolores",
                "texte" =>  "LOREM",
                "created_at"    => now(),
            ],
            [
                "icone" =>  "icofont-settings",
                "titre" =>  "Nemo Enim",
                "texte" =>  "LOREM",
                "created_at"    => now(),
            ],
            [
                "icone" =>  "icofont-tasks-alt",
                "titre" =>  "Eiusmod Tempor",
                "texte" =>  "LOREM",
                "created_at"    => now(),
            ],
        ]);
    }
}
