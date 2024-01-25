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

        // User::create([
        //     'name' => 'Rhexx',
        //     'email' => 'rheino@gmail.com',
        //     'password' => bcrypt('123')
        // ]);

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
            'name' => 'Design UI/UX',
            'slog' => 'design-ui-ux'
        ]);

        Category::create([
            'name' => 'Matematika',
            'slog' => 'matematika'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'judul Pertama',
        //     'slug' => "judul-pertama",
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia laboriosam non odio asperiores nulla ducimus sed, assumenda deserunt nam nesciunt hic eveniet aspernatur iste veniam harum, molestiae cum accusamus debitis distinctio dolorum, facere vel',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum voluptatem, similique ea dolorem suscipit pariatur aut nam hic corporis repudiandae quibusdam numquam nesciunt assumenda tenetur. Aspernatur sunt tempore, rerum ut consectetur, odit aliquid, magni delectus eum quod reprehenderit unde dolores voluptas rem impedit deleniti nemo harum officia. Repellendus molestias tempore velit quos dolores, maxime explicabo, saepe dolorem deserunt ratione illo earum doloribus quaerat veritatis. Commodi vero, dignissimos repellendus nesciunt doloremque repudiandae quibusdam veritatis aperiam deleniti. Id tempora iusto fuga officiis similique est placeat molestias, animi, minima blanditiis alias perferendis explicabo rem a, voluptatum temporibus aliquam quis fugiat ut quaerat. Tenetur.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'judul Kedua',
        //     'slug' => "judul-kedua",
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia laboriosam non odio asperiores nulla ducimus sed, assumenda deserunt nam nesciunt hic eveniet aspernatur iste veniam harum, molestiae cum accusamus debitis distinctio dolorum, facere vel',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum voluptatem, similique ea dolorem suscipit pariatur aut nam hic corporis repudiandae quibusdam numquam nesciunt assumenda tenetur. Aspernatur sunt tempore, rerum ut consectetur, odit aliquid, magni delectus eum quod reprehenderit unde dolores voluptas rem impedit deleniti nemo harum officia. Repellendus molestias tempore velit quos dolores, maxime explicabo, saepe dolorem deserunt ratione illo earum doloribus quaerat veritatis. Commodi vero, dignissimos repellendus nesciunt doloremque repudiandae quibusdam veritatis aperiam deleniti. Id tempora iusto fuga officiis similique est placeat molestias, animi, minima blanditiis alias perferendis explicabo rem a, voluptatum temporibus aliquam quis fugiat ut quaerat. Tenetur.',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'judul Ketiga',
        //     'slug' => "judul-ketiga",
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia laboriosam non odio asperiores nulla ducimus sed, assumenda deserunt nam nesciunt hic eveniet aspernatur iste veniam harum, molestiae cum accusamus debitis distinctio dolorum, facere vel',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum voluptatem, similique ea dolorem suscipit pariatur aut nam hic corporis repudiandae quibusdam numquam nesciunt assumenda tenetur. Aspernatur sunt tempore, rerum ut consectetur, odit aliquid, magni delectus eum quod reprehenderit unde dolores voluptas rem impedit deleniti nemo harum officia. Repellendus molestias tempore velit quos dolores, maxime explicabo, saepe dolorem deserunt ratione illo earum doloribus quaerat veritatis. Commodi vero, dignissimos repellendus nesciunt doloremque repudiandae quibusdam veritatis aperiam deleniti. Id tempora iusto fuga officiis similique est placeat molestias, animi, minima blanditiis alias perferendis explicabo rem a, voluptatum temporibus aliquam quis fugiat ut quaerat. Tenetur.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'judul Keempat',
        //     'slug' => "judul-keempat",
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia laboriosam non odio asperiores nulla ducimus sed, assumenda deserunt nam nesciunt hic eveniet aspernatur iste veniam harum, molestiae cum accusamus debitis distinctio dolorum, facere vel',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum voluptatem, similique ea dolorem suscipit pariatur aut nam hic corporis repudiandae quibusdam numquam nesciunt assumenda tenetur. Aspernatur sunt tempore, rerum ut consectetur, odit aliquid, magni delectus eum quod reprehenderit unde dolores voluptas rem impedit deleniti nemo harum officia. Repellendus molestias tempore velit quos dolores, maxime explicabo, saepe dolorem deserunt ratione illo earum doloribus quaerat veritatis. Commodi vero, dignissimos repellendus nesciunt doloremque repudiandae quibusdam veritatis aperiam deleniti. Id tempora iusto fuga officiis similique est placeat molestias, animi, minima blanditiis alias perferendis explicabo rem a, voluptatum temporibus aliquam quis fugiat ut quaerat. Tenetur.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
