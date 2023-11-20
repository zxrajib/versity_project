<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $time = now();
        $sku = Str::random(16);
        $skuFind = Product::where('sku', $sku)->first();
        if ($skuFind) {
            return $this->sku();
        }
        return [
            'uuid' => $this->faker->uuid,
            'user_id' => 4,
            'vendor_id' => 1,
            'category_id' => 1,
            'unit_id' => $this->faker->numberBetween(1,30),
            'brand_id' => 1,
            'other_brand' => $this->faker->text(7),
            'name' => $this->faker->text(5),
            'description' => $this->faker->sentence(5),
            'slug' => $this->faker->text(5),
            'sku' => $sku,
            'created_at' => $time,
            'updated_at' => $time,
            'deleted_at' => null,
        ];
    }
}
