<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Post::factory()->create([
            'imageUrl' => '/images/cutting-mustache.jpg'
        ]);

        Post::factory()->create([
            'imageUrl' => '/images/in-the-country.jpg'
        ]);

        Post::factory()->create([
            'imageUrl' => '/images/mustache-brothers.jpg'
        ]);
    }
}
