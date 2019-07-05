<?php

use Faker\Generator as Faker;

$factory->define(App\Producto::class, function (Faker $faker) {
    return [
      'Producto'=>$faker->name,
      'Cantidad'=>$faker->randomDigit,
      'Lote'=>$faker->randomDigitNotNull,
      'Fecha_vencimiento'=>$faker->dateTime,
      'Precio'=>$faker->randomDigitNotNull
    ];
});
