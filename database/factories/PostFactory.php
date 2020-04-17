<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\User;
use App\Post;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'author_id' => factory(User::class)->create()->id,
        'title' => $faker->sentence,
        'content' => $faker->text
    ];
});
