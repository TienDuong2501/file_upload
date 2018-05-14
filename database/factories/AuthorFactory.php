<?php

use Faker\Generator as Faker;

$factory->define(App\Author::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'country' => $faker->country,
        'post_id' => function(){
        	return factory(App\Post::class)->create()->id;
        }
    ];
});
