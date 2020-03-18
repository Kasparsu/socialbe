<?php

use Illuminate\Database\Seeder;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Post::all()->each(function ($post){
            $count = rand(0, 10);
            \App\User::inRandomOrder()->take($count)->get()->each(function ($user) use ($post){
                $like = new \App\Like();
                $like->user_id = $user->id;
                $like->post_id = $post->id;
                $like->save();
            });
        });
    }
}
