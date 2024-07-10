<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'John Doe',
        //     'email' => 'userone@example.com',
        //     'password' => bcrypt('password')
        // ]);

        Category::create([
            'name' => 'Teknologi',
            'slug' => 'teknologi'
        ]);

        Category::create([
            'name' => 'Kesehatan',
            'slug' => 'kesehatan'
        ]);

        Category::create([
            'name' => 'Pendidikan',
            'slug' => 'pendidikan'
        ]);

        Category::create([
            'name' => 'Olahraga',
            'slug' => 'olahraga'
        ]);

        Post::factory(20)->create();
    }
}
