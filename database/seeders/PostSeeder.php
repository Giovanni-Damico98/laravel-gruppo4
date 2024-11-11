<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->truncate();
        $faker = Faker::create();
        for ($i = 0; $i < 30; $i++) {
            DB::table('posts')->insert([
                'title' => $faker->word(),
                'author' => $faker->firstName(),
                'content' => substr($faker->paragraphs(2, true), 0, 255),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}