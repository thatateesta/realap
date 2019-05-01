<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 10)->create();
        factory(App\Model\Catagory::class, 5)->create();
        factory(App\Model\quation::class, 10)->create();
        factory(App\Model\Answor::class, 50)->create()->each( function ($answor){

            return $answor->likes()->save(factory(App\Model\Like::class)->make());
        } );
    }
}
