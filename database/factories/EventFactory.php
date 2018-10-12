<?php

$factory->define(App\Event::class, function (Faker\Generator $faker) {
    return [
        "name" => $faker->name,
        "type" => collect(["GNK","Store Championship","Regional Championship","National Championship","Continental Championship","World Championship","Other",])->random(),
    ];
});
