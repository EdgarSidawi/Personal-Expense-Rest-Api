<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SessionModel;
use App\User;
use Faker\Generator as Faker;

$factory->define(SessionModel::class, function (Faker $faker) {
    return [
        'bugbet' => $faker->numberBetween($min = 1, $max = 999),
        'completed' => false,
        'startDate' => $faker->date,
        'endDate' => $faker->dateTimeBetween('+1 week', '+1 month'),
        'user_id' => function () {
            return  factory(User::class)->create()->id;
            // return  User::all()->random();
        }

    ];
});
