<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()->create([
            'name' => 'Black T-shirt',
            'price' => "$35",
            'description' => 'Freshly pressed black cotton t-shirt with a classic print. Perfect for a casual day out.',
            'image_url' => 'https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg',
        ]);

        Product::factory()->create([
            'name' => 'Aspen White T-shirt',
            'price' => "$35",
            'description' => 'Freshly pressed aspen white cotton t-shirt with a classic print. Perfect for a casual day out.',
            'image_url' => 'https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-02.jpg',
        ]);

        Product::factory()->create([
            'name' => 'Charcoal T-shirt',
            'price' => "$35",
            'description' => 'Freshly pressed charcoal t-shirt with a classic print. Perfect for a casual day out.',
            'image_url' => 'https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-03.jpg',
        ]);

        Product::factory()->create([
            'name' => 'Iso Dots T-shirt',
            'price' => "$35",
            'description' => 'Freshly pressed iso dots t-shirt with a classic print. Perfect for a casual day out.',
            'image_url' => 'https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-04.jpg',
        ]);

        Product::factory()->create([
            'name' => 'Mechanical Pencil',
            'price' => "$15",
            'description' => "Black machined steel mechanical pencil with brass tip and top.",
            'image_url' => 'https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-04.jpg',
        ]);
    }
}
