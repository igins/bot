<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Profile::class, function (Faker $faker) {
    return [
        'title' => $faker->titleMale,
        'first_name' => $faker->firstName,
        'last_name'  => $faker->lastName,
        'patronymic' => $faker->firstName,
        'gender'     => NULL,
        'dob'        => $faker->date,
        'avatar'     => NULL,
        'user_id'    => NULL
    ];
});
