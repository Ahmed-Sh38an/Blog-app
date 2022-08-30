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
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        // Post::truncate();
        // Category::truncate();



        $user = User::factory()->create([
            'name' => 'John Doe',
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id,
            'thumbnail' => 'thumbnails/2RNtGHlfuDz11YOVHVimZRnHhzrXKVJqtinDVMjO.png'
        ]);

        // $user = User::factory()->create();

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family',
        // ]);

        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'My Family Post',
        //     'slug' => 'family-post',
        //     'excerpt' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet 
        //                 co nsectetur adipisicing elit. Sequi quam recusandae aliquid debitis tenetur fugit dolorum qui 
        //                 eum a mollitia animi modi veniam, ab hic quibusdam aliquam corrupti possimus illum!Lorem ipsum
        //                 dolor sit amet consectetur adipisicing elit. Sequi quam recusandae aliquid debitis tenetur fugit 
        //                 dolorum qui eum a mollitia animi modi veniam, ab hic quibusdam aliquam corrupti possimus illum!Lorem
        //                 ipsum dolor sit amet consectetur adipisicing elit. Sequi quam recusandae aliquid debitis tenetur 
        //                 fugit dolorum qui eum a mollitia animi modi veniam, ab hic quibusdam aliquam corrupti possimus 
        //                 illum!Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quam recusandae aliquid 
        //                 debitis tenetur fugit dolorum qui eum a mollitia animi modi veniam, ab hic quibusdam aliquam 
        //                 corrupti possimus illum!Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quam 
        //                 recusandae aliquid debitis tenetur fugit dolorum qui eum a mollitia animi modi veniam, ab hic
        //                 quibusdam aliquam corrupti possimus illum!Lorem ipsum dolor sit amet consectetur adipisicing 
        //                 elit. Sequi quam recusandae aliquid debitis tenetur fugit dolorum qui eum a mollitia animi modi 
        //                 veniam, ab hic quibusdam aliquam corrupti possimus illum!Lorem ipsum dolor sit amet consectetur 
        //                 adipisicing elit. Sequi quam recusandae aliquid debitis tenetur fugit dolorum qui eum a mollitia
        //                 animi modi veniam, ab hic quibusdam aliquam corrupti possimus illum!</p>',
            
        // ]);
        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Work Post',
        //     'slug' => 'work-post',
        //     'excerpt' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet 
        //                 co nsectetur adipisicing elit. Sequi quam recusandae aliquid debitis tenetur fugit dolorum qui 
        //                 eum a mollitia animi modi veniam, ab hic quibusdam aliquam corrupti possimus illum!Lorem ipsum
        //                 dolor sit amet consectetur adipisicing elit. Sequi quam recusandae aliquid debitis tenetur fugit 
        //                 dolorum qui eum a mollitia animi modi veniam, ab hic quibusdam aliquam corrupti possimus illum!Lorem
        //                 ipsum dolor sit amet consectetur adipisicing elit. Sequi quam recusandae aliquid debitis tenetur 
        //                 fugit dolorum qui eum a mollitia animi modi veniam, ab hic quibusdam aliquam corrupti possimus 
        //                 illum!Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quam recusandae aliquid 
        //                 debitis tenetur fugit dolorum qui eum a mollitia animi modi veniam, ab hic quibusdam aliquam 
        //                 corrupti possimus illum!Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quam 
        //                 recusandae aliquid debitis tenetur fugit dolorum qui eum a mollitia animi modi veniam, ab hic
        //                 quibusdam aliquam corrupti possimus illum!Lorem ipsum dolor sit amet consectetur adipisicing 
        //                 elit. Sequi quam recusandae aliquid debitis tenetur fugit dolorum qui eum a mollitia animi modi 
        //                 veniam, ab hic quibusdam aliquam corrupti possimus illum!Lorem ipsum dolor sit amet consectetur 
        //                 adipisicing elit. Sequi quam recusandae aliquid debitis tenetur fugit dolorum qui eum a mollitia
        //                 animi modi veniam, ab hic quibusdam aliquam corrupti possimus illum!</p>',
            
        // ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
