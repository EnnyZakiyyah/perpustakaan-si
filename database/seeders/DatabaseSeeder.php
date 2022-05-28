<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Katalog;
use App\Models\Category;
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
        User::factory(3)->create();

        Katalog::factory(5)->create();
        
        Category::create([
            'name' => 'Majalah',
            'slug' => 'majalah'
        ]);

        Category::create([
            'name' => 'Buku',
            'slug' => 'buku'
        ]);

        // User::create([
        //     'name' => 'Enny Zakiyyah',
        //     'email' => 'enny.9h08@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Na Jaemin',
        //     'email' => 'na.jaemin@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // Katalog::create([
        //     'title' => 'The Lord of The Rings',
        //     'slug' => 'the-lord-of-the-rings',
        //     'excerpt' => 'Lorem ipsum dolor sit amet,',
        //     'body' => 'consectetur adipisicing elit. Dolor quia incidunt voluptas molestias, reprehenderit alias non voluptate, ea, magnam nesciunt optio cupiditate! Reiciendis inventore repudiandae dignissimos, quisquam quos voluptatum quasi!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Katalog::create([
        //     'title' => 'Naruto',
        //     'slug' => 'naruto',
        //     'excerpt' => 'Lorem ipsum dolor sit amet,',
        //     'body' => 'consectetur adipisicing elit. Dolor quia incidunt voluptas molestias, reprehenderit alias non voluptate, ea, magnam nesciunt optio cupiditate! Reiciendis inventore repudiandae dignissimos, quisquam quos voluptatum quasi!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Katalog::create([
        //     'title' => 'Boruto',
        //     'slug' => 'boruto',
        //     'excerpt' => 'Lorem ipsum dolor sit amet,',
        //     'body' => 'consectetur adipisicing elit. Dolor quia incidunt voluptas molestias, reprehenderit alias non voluptate, ea, magnam nesciunt optio cupiditate! Reiciendis inventore repudiandae dignissimos, quisquam quos voluptatum quasi!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
