<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(6)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Rheino Perean',
            'username' => 'Rheinoxxx',
            'email' => 'rheino@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Budi',
        //     'email' => 'Budisantoso@gmail.com',
        //     'password' => bcrypt('1321')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slog' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slog' => 'personal'
        ]);

        Category::create([
            'name' => 'School',
            'slog' => 'school'
        ]);

        Category::create([
            'name' => 'Food',
            'slog' => 'food'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slog' => 'web-design'
        ]);

        Category::create([
            'name' => 'Building',
            'slog' => 'bulding'
        ]);

        Post::factory(30)->create();
    }
}
