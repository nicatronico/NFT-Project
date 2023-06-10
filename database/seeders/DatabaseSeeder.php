<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Author;
use \App\Models\User;
use \App\Models\Item;
use \App\Models\Sale;
use \App\Models\Like;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Author::factory()->count(25)->create();
        User::factory()->count(60)->create();
        Item::factory()->count(150)->create();
        Sale::factory()->count(30)->create();
        Like::factory()->count(500)->create();





    }
}
