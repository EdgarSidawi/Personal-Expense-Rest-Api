<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Expense;
use App\Model\Session;
use Faker\Generator as Faker;

$factory->define(Expense::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'amount'=> $faker->numberBetween($min = 1, $max = 99),

        'session_id' => function () {
            // return  factory(Session::class)->create()->id;
            return  Session::all()->random();
        }
    ];
});
