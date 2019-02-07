<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Position::class, function (Faker $faker) {
    return [
        'department_id' => NULL,
        'title' => $faker->jobTitle,
    ];
});
