<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Catagory;
use Faker\Generator as Faker;

$factory->define(Catagory::class, function (Faker $faker) {
    $name_q = $faker->word;
    return [
        'name' => $name_q,
        'slug' => str_slug($name_q)
    ];
});
