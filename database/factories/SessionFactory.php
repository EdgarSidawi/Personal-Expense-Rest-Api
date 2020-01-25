<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Session;
use App\User;
use Faker\Generator as Faker;

$factory->define(Session::class, function (Faker $faker) {
    return [
        'bugbet' => $faker->numberBetween($min = 1, $max = 999),
        'completed' => false,
        'startDate' => Carbon\Carbon::now(),
        'endDate' => Carbon\Carbon::now()->addDays(30),
        'user_id' => function () {
            // return  factory(User::class)->create()->id;
            return  User::all()->random();
        }
    ];
});
