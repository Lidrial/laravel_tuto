<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Film;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::factory()->count(10)->create();

        $ids = range(1,10);

        Film::factory()->count(40)->create()->each(function ($film) use($ids){
            shuffle($ids);
            $film->categories()->attach(array_slice($ids, 0, rand(1,4)));
        });
    }
}
