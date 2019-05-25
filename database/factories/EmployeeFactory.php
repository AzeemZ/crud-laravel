<?php

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'designation' => 'Employee',
        'phone' => '03414640493',
        'salary' => $faker->numberBetween(15000, 90000)
    ];
});
