<?php

use Faker\Generator as Faker;

$factory->define(Lecturize\Addresses\Models\Address::class, function (Faker $faker) {
    return [
        'street' => $faker->streetName,
        'street_extra' => NULL,
        'city' => $faker->city,
        'state' => NULL,
        'post_code'=>$faker->postcode,
        'country_id' => \Webpatser\Countries\Countries::all()->random(1)->pluck('id')->first(),
        'lat'=> $faker->latitude,
        'lng'=>$faker->longitude
    ];
});
