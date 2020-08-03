<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    return [
        'title' =>$faker->sentences(rand(1,3), true),
        'body' => $faker->paragraphs(rand(3,7), true),
        'views' => rand(0, 10),
        'answers' => rand(0, 10),
        'votes' => rand(-10, 10)
    ];
});
