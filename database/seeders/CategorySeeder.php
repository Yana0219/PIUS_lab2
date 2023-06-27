<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            DB::table('categories')->insert([
                'title' => Str::random(20),
                'active'=> true, //rand(0, 1) ? true : false,
                'code' => Str::snake(Str::random(20)),
                'creation_date'=> now(),
                'parent_category'=> Str::random(20),
            ]);
        }   
    }
}
