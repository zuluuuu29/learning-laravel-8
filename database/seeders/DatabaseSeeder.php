<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'name' => 'Sandika Galih',
        //     'email' => 'sandika@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Dodi',
        //     'email' => 'dodi@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit, Pertama',
        //     'body' => ' <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum tempore veritatis         ratione iusto eveniet modi, sint sequi nihil ea aut voluptatem doloremque harum debitis         accusantium voluptate quisquam, magni molestiae quae illo vel. Numquam molestiae         voluptatem quasi natus non. Dicta placeat delectus vitae omnis, necessitatibus culpa nulla,         temporibus quae, voluptatibus laborum soluta saepe? </p>Ad officia quidem ratione animi odit
        //     consequatur aperiam autem unde vitae nam aut cupiditate aliquam recusandae laboriosam,         illum repellendus laudantium consequuntur natus dicta? Ex illo, officiis earum eveniet,         magnam tempore facere et nulla possimus ad a mollitia repudiandae quo corrupti numquam         corporis voluptas quidem maiores harum voluptate. Quibusdam, eius architecto id porro         expedita illo? Reprehenderit eligendi similique vitae, facere nihil optio cum voluptatum         maiores sit, praesentium autem dolorum.</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit, Kedua',
        //     'body' => ' <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum tempore veritatis         ratione iusto eveniet modi, sint sequi nihil ea aut voluptatem doloremque harum debitis         accusantium voluptate quisquam, magni molestiae quae illo vel. Numquam molestiae         voluptatem quasi natus non. Dicta placeat delectus vitae omnis, necessitatibus culpa nulla,         temporibus quae, voluptatibus laborum soluta saepe? </p>Ad officia quidem ratione animi odit
        //     consequatur aperiam autem unde vitae nam aut cupiditate aliquam recusandae laboriosam,         illum repellendus laudantium consequuntur natus dicta? Ex illo, officiis earum eveniet,         magnam tempore facere et nulla possimus ad a mollitia repudiandae quo corrupti numquam         corporis voluptas quidem maiores harum voluptate. Quibusdam, eius architecto id porro         expedita illo? Reprehenderit eligendi similique vitae, facere nihil optio cum voluptatum         maiores sit, praesentium autem dolorum.</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-Ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit, Ketiga',
        //     'body' => ' <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum tempore veritatis         ratione iusto eveniet modi, sint sequi nihil ea aut voluptatem doloremque harum debitis         accusantium voluptate quisquam, magni molestiae quae illo vel. Numquam molestiae         voluptatem quasi natus non. Dicta placeat delectus vitae omnis, necessitatibus culpa nulla,         temporibus quae, voluptatibus laborum soluta saepe? </p>Ad officia quidem ratione animi odit
        //     consequatur aperiam autem unde vitae nam aut cupiditate aliquam recusandae laboriosam,         illum repellendus laudantium consequuntur natus dicta? Ex illo, officiis earum eveniet,         magnam tempore facere et nulla possimus ad a mollitia repudiandae quo corrupti numquam         corporis voluptas quidem maiores harum voluptate. Quibusdam, eius architecto id porro         expedita illo? Reprehenderit eligendi similique vitae, facere nihil optio cum voluptatum         maiores sit, praesentium autem dolorum.</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-Keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit, Keempat',
        //     'body' => ' <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum tempore veritatis         ratione iusto eveniet modi, sint sequi nihil ea aut voluptatem doloremque harum debitis         accusantium voluptate quisquam, magni molestiae quae illo vel. Numquam molestiae         voluptatem quasi natus non. Dicta placeat delectus vitae omnis, necessitatibus culpa nulla,         temporibus quae, voluptatibus laborum soluta saepe? </p>Ad officia quidem ratione animi odit
        //     consequatur aperiam autem unde vitae nam aut cupiditate aliquam recusandae laboriosam,         illum repellendus laudantium consequuntur natus dicta? Ex illo, officiis earum eveniet,         magnam tempore facere et nulla possimus ad a mollitia repudiandae quo corrupti numquam         corporis voluptas quidem maiores harum voluptate. Quibusdam, eius architecto id porro         expedita illo? Reprehenderit eligendi similique vitae, facere nihil optio cum voluptatum         maiores sit, praesentium autem dolorum.</p>'
        // ]);
    }
}
