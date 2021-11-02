<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\questions;
use App\Models\dimensions;
use Faker\Generator as Faker;

$factory->define(questions::class, function (Faker $faker) {
    return [
        'question' => $faker->name,
        'dimension_id' => $faker->numberBetween(1,dimensions::count()),
        'status' => $faker->boolean
    ];
});