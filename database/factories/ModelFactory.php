<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'role' => $faker-> randomElement(['user','editor'])
    ];
});
$factory->define(App\Entities\Clients::class, function (Faker\Generator $faker) {
    return [
        'name' =>$faker->name,
        'nit'=>$faker->numberBetween(1000000,99999999),
        'email'=>$faker->safeEmail,
        'phone' =>$faker->phoneNumber,
        'address' =>$faker->address,

    ];
});


$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'name' =>$faker->name,
        'quantity'=>$faker->numberBetween(1,10),
        'unit_price'=>$faker->numberBetween(500,50000),
        'state' =>$faker->numberBetween(0,1),
        'details'=>$faker->name,
        'product_types_id'=>function(){
            return factory(App\Entities\ProductType::class)->create()->id;
        }
    ];
});

$factory->define(App\Entities\ProductType::class, function (Faker\Generator $faker) {
    return [
        'name' =>$faker->name,
        'details'=>$faker->name,
    ];
});
