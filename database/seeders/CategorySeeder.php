<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'name' => 'Web Design',
                'slug' => 'web-design',
                'description' => ' Start with the front-end by learning HTML, CSS, and JavaScript.',
                'logo' => UploadedFile::fake()->image(uniqid() . '.jpg')->storePubliclyAs('public', uniqid() . '.jpg'),
                'priority' => 1,
                'enable_homepage' => true,
                'parent_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // [
            //     'name' => 'HTML',
            //     'slug' => 'html',
            //     'description' => ' Learn HTML to create  web pages',
            //     'logo' => UploadedFile::fake()->image(uniqid() . '.jpg')->store('categories'),
            //     'priority' => 2,
            //     'enable_homepage' => true,
            //     'parent_id' => 1,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'name' => 'CSS',
            //     'slug' => 'css',
            //     'description' => ' Learn CSS to create responsive web pages',
            //     'logo' => UploadedFile::fake()->image(uniqid() . '.jpg')->store('categories'),
            //     'priority' => 3,
            //     'enable_homepage' => true,
            //     'parent_id' => 1,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'name' => 'BOOTSTRAP',
            //     'slug' => 'bootstrap',
            //     'description' => ' Learn BOOTSTRAP to create responsive web pages',
            //     'logo' => UploadedFile::fake()->image(uniqid() . '.jpg')->store('categories'),
            //     'priority' => 4,
            //     'enable_homepage' => true,
            //     'parent_id' => 1,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'name' => 'TAILWINDCSS',
            //     'slug' => 'tailwindcss',
            //     'description' => ' Learn TAILWINDCSS to create responsive web pages with Modern technology',
            //     'logo' => UploadedFile::fake()->image(uniqid() . '.jpg')->store('categories'),
            //     'priority' => 5,
            //     'enable_homepage' => true,
            //     'parent_id' => 1,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            [
                'name' => 'WEB DEVELOPMENT',
                'slug' => 'web-development',
                'description' => ' Take advantage of the latest modern technologies to build amazing web experiences for everyone',
                'logo' => UploadedFile::fake()->image(uniqid() . '.jpg')->storePubliclyAs('public', uniqid() . '.jpg'),
                'priority' => 6,
                'enable_homepage' => true,
                'parent_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // [
            //     'name' => 'JAVA SCRIPT',
            //     'slug' => 'java-script',
            //     'description' => ' Take advantage of the latest modern technologies to build amazing web experiences for everyone',
            //     'logo' => UploadedFile::fake()->image(uniqid() . '.jpg')->store('categories'),
            //     'priority' => 7,
            //     'enable_homepage' => true,
            //     'parent_id' => 6,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'name' => 'PHP',
            //     'slug' => 'php',
            //     'description' => 'PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.',
            //     'logo' => UploadedFile::fake()->image(uniqid() . '.jpg')->store('categories'),
            //     'priority' => 8,
            //     'enable_homepage' => true,
            //     'parent_id' => 6,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'name' => 'REACT',
            //     'slug' => 'react',
            //     'description' => 'React is used to build single-page applications.',
            //     'logo' => UploadedFile::fake()->image(uniqid() . '.jpg')->storePubliclyAs('public', uniqid() . '.jpg'),
            //     'priority' => 9,
            //     'enable_homepage' => true,
            //     'parent_id' => 6,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'name' => 'LARAVEL',
            //     'slug' => 'laravel',
            //     'description' => ' Laravel is a PHP web application framework with expressive,',
            //     'logo' => UploadedFile::fake()->image(uniqid() . '.jpg')->storePubliclyAs('public', uniqid() . '.jpg'),
            //     'priority' => 10,
            //     'enable_homepage' => true,
            //     'parent_id' => 6,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
        ]);
    }
}
