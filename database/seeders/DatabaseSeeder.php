<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //\App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Felix Ferdianto',
            'email' => 'felixferdianto13@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'Boheh',
            'email' => 'boheh@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' =>  'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, quo!',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam nobis architecto consectetur ut nostrum deserunt repudiandae aspernatur tempore reprehenderit.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, quo!',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam nobis architecto consectetur ut nostrum deserunt repudiandae aspernatur tempore reprehenderit.',
            'category_id' => 1,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, quo!',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam nobis architecto consectetur ut nostrum deserunt repudiandae aspernatur tempore reprehenderit.',
            'category_id' => 2,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, quo!',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam nobis architecto consectetur ut nostrum deserunt repudiandae aspernatur tempore reprehenderit.',
            'category_id' => 2,
            'user_id' => 2
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
