<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => 'example title',
            'tags' => 'laravel, api, backend',
            'company' => 'example company',
            'email' => 'example@gmail.com',
            'website' => 'https://www.example.com',
            'location' => 'Kabul',
            'description' => 'there is some description',
        ];
    }
}
