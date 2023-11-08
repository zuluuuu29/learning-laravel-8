<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('user_id'); 
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt');
            $table->text('body');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}


// Post::create([
//     'title' => 'Judul Kedua',
//     'slug' => 'judul-ke-dua'
//     'excerpt' => 'Lorem ipsum Kedua',
//     'body' => ' <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum tempore veritatis         ratione iusto eveniet modi, sint sequi nihil ea aut voluptatem doloremque harum debitis         accusantium voluptate quisquam, magni molestiae quae illo vel. Numquam molestiae         voluptatem quasi natus non. Dicta placeat delectus vitae omnis, necessitatibus culpa nulla,         temporibus quae, voluptatibus laborum soluta saepe? </p>Ad officia quidem ratione animi odit
//     consequatur aperiam autem unde vitae nam aut cupiditate aliquam recusandae laboriosam,         illum repellendus laudantium consequuntur natus dicta? Ex illo, officiis earum eveniet,         magnam tempore facere et nulla possimus ad a mollitia repudiandae quo corrupti numquam         corporis voluptas quidem maiores harum voluptate. Quibusdam, eius architecto id porro         expedita illo? Reprehenderit eligendi similique vitae, facere nihil optio cum voluptatum         maiores sit, praesentium autem dolorum.</p>'
// ])

// Post::create([     
//     'title' => 'Judul Ketiga',     
//     'slug' => 'judul-ketiga',     
//     'excerpt' => 'Lorem ipsum Ketiga',    
//     'body' => ' <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum tempore veritatis         ratione iusto eveniet modi, sint sequi nihil ea aut voluptatem doloremque harum debitis         accusantium voluptate quisquam, magni molestiae quae illo vel. Numquam molestiae         voluptatem quasi natus non. Dicta placeat delectus vitae omnis, necessitatibus culpa nulla,         temporibus quae, voluptatibus laborum soluta saepe? </p>Ad officia quidem ratione animi odit     consequatur aperiam autem unde vitae nam aut cupiditate aliquam recusandae laboriosam,         illum repellendus laudantium consequuntur natus dicta? Ex illo, officiis earum eveniet,         magnam tempore facere et nulla possimus ad a mollitia repudiandae quo corrupti numquam         corporis voluptas quidem maiores harum voluptate. Quibusdam, eius architecto id porro         expedita illo? Reprehenderit eligendi similique vitae, facere nihil optio cum voluptatum         maiores sit, praesentium autem dolorum.</p>' ])