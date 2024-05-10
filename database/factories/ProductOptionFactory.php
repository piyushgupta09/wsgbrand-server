<?php

namespace Database\Factories;

use Illuminate\Http\File;
use Fpaipl\Prody\Models\ProductOption;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductOptionFactory extends Factory
{
    protected $model = ProductOption::class;

    public function definition()
    {
        return [
            'name' => $this->faker->colorName,
            'slug' => $this->faker->slug,
            'code' => $this->faker->hexColor,
            'product_id' => null,  // Placeholder to be overridden when creating instances.
            'active' => $this->faker->boolean
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (ProductOption $productOption) {
            $this->attachMedia($productOption);
        });
    }

    private function attachMedia(ProductOption $productOption)
    {
        // randoly add 1 to 3 images from storage/assets/products/1.webp to storage/assets/products/5.webp
        $sampleImages = [];
        for ($i = 1; $i <= $this->faker->numberBetween(1, 10); $i++) {
            $sampleImages[] = public_path('storage/assets/products/' . $i . '.webp');
        }

        foreach ($sampleImages as $imagePath) {
            $productOption->addMedia($imagePath)
                        ->preservingOriginal()
                        ->withResponsiveImages()
                        ->toMediaCollection(ProductOption::MEDIA_COLLECTION_NAME);
        }
    }

}
