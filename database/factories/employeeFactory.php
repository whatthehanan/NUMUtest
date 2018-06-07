<?php
use Faker\Generator as Faker;
$factory->define(App\employee::class, function (Faker $faker) {
    return [
        'name' => $faker->text(50),
        'address'  => $faker->text(200)
    ];
});