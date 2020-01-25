<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ExpenseModel;
use App\SessionModel;
use Faker\Generator as Faker;

$factory->define(ExpenseModel::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'amount'=> $faker->numberBetween($min = 1, $max = 99),
        'date' => Carbon\Carbon::now(),

        'session_id' => function () {
            // return  factory(SessionModel::class)->create()->id;
            return  SessionModel::all()->random();
        }
    ];
});
