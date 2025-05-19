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
                'name' => 'Hacker Hoodie',
                'description' => 'A comfortable hoodie perfect for late-night coding sessions. Features a subtle binary pattern design.',
                'price' => 49.99,
                'stock' => 50,
            ],
            [
                'name' => 'Security T-Shirt',
                'description' => 'Show your love for cybersecurity with this stylish t-shirt. Made from 100% organic cotton.',
                'price' => 24.99,
                'stock' => 100,
            ],
            [
                'name' => 'CTF Challenge Mug',
                'description' => 'Start your day with a cup of coffee and a new challenge. This mug features various CTF challenge types.',
                'price' => 14.99,
                'stock' => 75,
            ],
            [
                'name' => 'Encryption Keychain',
                'description' => 'A unique keychain featuring a working Caesar cipher wheel. Perfect for quick encryption on the go.',
                'price' => 9.99,
                'stock' => 200,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}