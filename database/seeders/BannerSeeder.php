<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i = 0; $i < 100; $i++) {
            DB::table('categories')->insert([
                'banner_title' => Str::random(20),
                'code' => Str::snake(Str::random(20)),
                'active'=> rand(0, 1) ? true : false,
                'acrive_since'=> now(),
                'active_until'=> now(),
                'link'=> 'https://'.Str::random(10).'.com',
                'url_img'=> 'images/banner.png',
            ]);
        }   
    }
}
