<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [

        'category_name' => $faker->company,
        'description' => $faker->paragraph(4),
        'category_image' => $faker->imageUrl(),
    ];
});
