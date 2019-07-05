<?php

use Faker\Generator as Faker;

$factory->define(App\Proyecto::class, function (Faker $faker) {
    return [
        'Nombre'=>$faker->name,
        'Descripción'=>$faker->sentence(4)
    ];
});
