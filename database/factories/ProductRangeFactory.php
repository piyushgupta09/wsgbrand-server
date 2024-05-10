<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Fpaipl\Prody\Models\ProductRange;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductRangeFactory extends Factory
{
    protected $model = ProductRange::class;

    public function definition()
    {
        $rangeName = $this->faker->randomElement(['Small', 'Medium', 'Large']);
    
        return [
            'name' => $rangeName,
            'slug' => Str::slug($rangeName),
            'mrp' => $this->faker->numberBetween(100, 1000),
            'cost' => $this->faker->numberBetween(50, 900),
            'rate' => $this->faker->numberBetween(80, 950),
            'product_id' => null,  // Placeholder to be overridden when creating instances.
            'active' => $this->faker->boolean
        ];
    }
    
}
