<?php

$faker = Faker\Factory::create();

return [
    [
        'name' => 'HTML',
        'color' => $faker->safeColorName(),
    ],
    [
        'name' => 'CSS',
        'color' => $faker->safeColorName(),
    ],
    [
        'name' => 'SCSS',
        'color' => $faker->safeColorName(),
    ],
    [
        'name' => 'JavaScript',
        'color' => $faker->safeColorName(),
    ],
    [
        'name' => 'Vue',
        'color' => $faker->safeColorName(),
    ],
    [
        'name' => 'React',
        'color' => $faker->safeColorName(),
    ],
    [
        'name' => 'Angular',
        'color' => $faker->safeColorName(),
    ],
    [
        'name' => 'PHP',
        'color' => $faker->safeColorName(),
    ],
    [
        'name' => 'Laravel',
        'color' => $faker->safeColorName(),
    ],
    [
        'name' => 'Node',
        'color' => $faker->safeColorName(),
    ],
];
