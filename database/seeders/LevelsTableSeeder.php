<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('levels')->truncate();
        
        $xp = 100;
        for ($i= 0; $i <10; $i++){
            
        DB::table('levels')->insert([
            'xp' => $xp
        ]);
        $xp = $xp * 2;
    }
    }
}
