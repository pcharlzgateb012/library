<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Books>
 */
class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->sentence(),
            'totalPages'=>fake()->biasedNumberBetween($min = 1,$max = 10, $function = 'sqrt'),
            'rating'=>fake()->catchPhrase(),
            'isbn'=>fake()->isbn13(),
            'publishDate'=>fake()->date($format = 'm-d-Y', $max ='now'),
        ];
    }
}

