<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use App\User;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->words(3, true),
        'price' => $faker->randomElement([5000, 20000, 100000]),
        'stock' => $faker->randomElement(range(0, 10)),
        'user_id' => function () {
            return factory(User::class)->create();
        }
    ];
});
