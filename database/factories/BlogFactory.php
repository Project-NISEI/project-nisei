<?php

$factory->define(App\Blog::class, function (Faker\Generator $faker) {
    return [
        "title" => $faker->name,
        "slug" => $faker->name,
        "published_at" => $faker->date("Y-m-d", $max = 'now'),
        "author_id" => factory('App\User')->create(),
        "content" => $faker->name,
    ];
});
