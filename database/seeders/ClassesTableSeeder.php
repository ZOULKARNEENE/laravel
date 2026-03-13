<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("classes")->insert([
            ["libelle"=>"6EME"],
            ["libelle"=>"5EME"],
            ["libelle"=>"4EME"],
            ["libelle"=>"3EME"],
            ["libelle"=>"2ND"],
            ["libelle"=>"1ERE"],
            ["libelle"=>"TLE"],

        ]);
    }
}
