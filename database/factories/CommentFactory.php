<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Comment;
use App\Post;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'post_id' => factory(Post::class)->create()->id,
        'reply' => $faker->paragraph(3)
    ];
});
