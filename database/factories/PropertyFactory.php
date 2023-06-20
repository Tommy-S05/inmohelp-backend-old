<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => $this->faker->unique()->numberBetween(0001, 9999),
            'name' => $this->faker->unique()->sentence(2),
            'slug' => $this->faker->unique()->slug,
            'description' => $this->faker->paragraph(12),
            'city' => $this->faker->city,
            'sector' => $this->faker->streetName,
            'address' => $this->faker->address,
            //            'map' => $this->faker->url,
            'purpose' => $this->faker->randomElement(['sale', 'rent']),
            'property_type' => $this->faker->randomElement(['Casa', 'Apartamento', 'Local', 'Terreno', 'Oficina', 'Edificio', 'Finca', 'Bodega', 'Consultorio']),
            'price' => $this->faker->numberBetween(1000000, 20000000),
            'area' => $this->faker->numberBetween(50, 500),
            'bedrooms' => $this->faker->numberBetween(1, 5),
            'bathrooms' => $this->faker->numberBetween(1, 4),
            'garages' => $this->faker->numberBetween(0, 3),
            //            'floors' => $this->faker->numberBetween(1, 3),
            'views' => $this->faker->numberBetween(0, 100),
            'outstanding' => $this->faker->boolean(20),
            //            'sold' => $this->faker->boolean(20),
            //            'rent' => $this->faker->boolean(20),
            'furnished' => $this->faker->boolean(20),
            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            //            'state' => $this->faker->randomElement(['NEW', 'LIKE NEW', 'USED']),
            //            'category_id' => $this->faker->numberBetween(1, 5),
            //            'user_id' => $this->faker->numberBetween(1, 5),

        ];
    }
}
