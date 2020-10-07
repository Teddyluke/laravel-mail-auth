<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [

        'title' => $faker -> sentence($nbWords = 4, $variableNbWords = true),
        'author' => $faker -> name(),
        'isbn' => $faker -> isbn13(),
        'editor' => $faker -> word()

    ];
});
