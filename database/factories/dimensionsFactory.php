<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\dimensions;
use Faker\Generator as Faker;

$factory->define(dimensions::class, function (Faker $faker) {
    return [
        'name' => $faker->name
    ];
});
