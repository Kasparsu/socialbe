<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    $created = $faker->dateTimeBetween('-1 year', '-11 days');
    $updated = clone $created;
    $updated->add(DateInterval::createFromDateString('+' . $faker->numberBetween(0, 10) . 'days'));

    return [
        'content' => $faker->paragraph,
        'author_id' => \App\User::inRandomOrder()->first(),
        'created_at' => $created,
        'updated_at' => $updated
    ];
});
