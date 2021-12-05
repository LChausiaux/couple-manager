<?php

namespace Database\Factories;

use App\Models\Dish;
use Illuminate\Database\Eloquent\Factories\Factory;

class DishFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dish::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array {
        return [
            'title' => $this->faker->word,
            'rating' => $this->faker->numberBetween(1, 5),
            'is_public' => $this->faker->boolean,
            'healthy_rating' => $this->faker->numberBetween(1, 5),
            'leftovers' => $this->faker->boolean,
            'sport_friendly' => $this->faker->boolean,
            'content' => $this->faker->sentence(15),
            'collection_id' => null,
        ];
    }
}
