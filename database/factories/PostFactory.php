<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'content' => $faker->text,
        'title' => $faker->title,
        'slug' => $faker->url,
        'id_user' => function(){
        	return factory(App\User::class)->create()->id;
        }
    ];
});
