<?php

use Faker\Generator as Faker;

$factory->define(App\Item::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\User::class),
        'itemName' => $faker->name,
        'description' => $faker->sentence,
        'type' => $faker->randomElement(['painting', 'photograph', 'sculpture']),
        'price' => $faker->numberBetween(1,10000),
        'available' => true,
    ];
});
