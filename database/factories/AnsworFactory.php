<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Answor;
use Faker\Generator as Faker;

$factory->define(Answor::class, function (Faker $faker) {
    return [
        'body' => $faker->text,
        'quation_id' => function (){

            return App\Model\quation::all()->random();
        },

        'user_id' => function (){
            return App\User::all()->random();
        }
        
    ];
});
