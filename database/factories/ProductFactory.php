<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [

        'product_name' => $faker->firstName(),
        'slug' => $faker->slug(2),
        'price' => $faker->randomNumber(5),
        'product_img' => $faker->imageUrl(),
        'description' => $faker->sentence(3),
        'category_id' => rand(1, 8),
    ];
});
