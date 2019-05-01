<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\quation;
use Faker\Generator as Faker;

$factory->define(quation::class, function (Faker $faker) {
    
    $title = $faker->sentence;
    return [
        'title' => $title,
        'slug' => str_slug($title),
        'body' => $faker->text,
        'catagory_id' => function (){
            return App\Model\Catagory::all()->random();
        },

        'user_id' => function(){
            return App\User::all()->random();
        }
        
    ];
});
