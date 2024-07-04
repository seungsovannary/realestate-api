<?php

namespace Database\Factories;

use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PropertyFactory extends Factory
{
    protected $model = Property::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'category_id' => \App\Models\Category::factory(),
            'type' => $this->faker->randomElement(['sell', 'rent', 'booking']),
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->paragraphs(3, true),
            'image' => $this->faker->imageUrl(640, 480, 'house', true),
            'status' => $this->faker->randomElement(['pending', 'approved', 'unapproved']),
            'price' => $this->faker->randomFloat(2, 10000, 1000000),
            'address' => $this->faker->address,
            'bedrooms' => $this->faker->numberBetween(1, 5),
            'bathrooms' => $this->faker->numberBetween(1, 3),
            'size' => $this->faker->numberBetween(500, 5000),
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
            'is_featured' => $this->faker->boolean,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
