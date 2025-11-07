<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Category::create([
        //     'name' => 'Web Programming',
        //     'slug' => 'web-programming'
        // ]);

        // Post::create([
        //    'title' => 'Laravel 12',
        //    'author_id' => 1,
        //    'category_id' => 1,
        //    'slug' => 'laravel-12',
        //    'body' => 'Laravel 12 is a web application framework with expressive, elegant syntax. Laravel is a web application framework with expressive, elegant syntax. Laravel is a web application framework with expressive, elegant syntax. Laravel is a web application framework with expressive, elegant syntax.',
        // ]);

        // memanggil seeder lain
        $this->call([
            CategorySeeder::class,
            UserSeeder::class
        ]);
        Post::factory(100)->recycle([
            Category::all(),
            User::all()
        ])->create();
    }
}
