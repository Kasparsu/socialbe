<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Post::all()->each(function ($post){
            factory(\App\Comment::class, 10)->create(['post_id'=> $post->id]);
        });
    }
}
