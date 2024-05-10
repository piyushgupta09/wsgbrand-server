<?php

namespace Database\Factories;

use Fpaipl\Prody\Models\Product;
use Database\Factories\ProductRangeFactory;
use Database\Factories\ProductOptionFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        $mrp = $this->faker->numberBetween(100, 1000);

        return [
            'sid' => $this->faker->unique()->bothify('Product-###??'),
            'uuid' => $this->faker->unique()->uuid,
            'name' => $this->faker->words(3, true),
            'slug' => $this->faker->unique()->slug,
            'code' => $this->faker->unique()->bothify('Code-###??'),
            'details' => $this->faker->paragraph,
            'brand_id' => $this->faker->randomElement([1, 2, 3]),
            'category_id' => $this->faker->randomElement([6,7,8,9,10,11,12]),
            'tax_id' => $this->faker->randomElement([1, 2, 3]),
            'mrp' => $mrp,
            'rate' => $this->faker->numberBetween($mrp * 0.5, $mrp),
            'moq' => $this->faker->numberBetween(1, 10),
            'status' => 'live',
            'active' => 1,
            'tags' => $this->faker->words(5, true)
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Product $product) {
            $product->productDecisions->factory = 0;
            $product->productDecisions->vendor = 0;
            $product->productDecisions->market = 1;
            $product->productDecisions->saveQuietly();
            ProductOptionFactory::new()->count(3)->create(['product_id' => $product->id]);
            ProductRangeFactory::new()->count(1)->create([
                'name' => 'Small',
                'slug' => 'small',
                'product_id' => $product->id
            ]);
            ProductRangeFactory::new()->count(1)->create([
                'name' => 'Medium',
                'slug' => 'medium',
                'product_id' => $product->id
            ]);
            ProductRangeFactory::new()->count(1)->create([
                'name' => 'Large',
                'slug' => 'large',
                'product_id' => $product->id
            ]);
            $product->generateStocks();
        });
    }

}
