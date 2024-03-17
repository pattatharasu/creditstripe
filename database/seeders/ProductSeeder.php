<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'name' => 'Product 1',
                'price' => 10.99,
                'description' => 'Description for Product 1',
            ],
            [
                'name' => 'Product 2',
                'price' => 20.99,
                'description' => 'Description for Product 2',
            ]
        ];

        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}
