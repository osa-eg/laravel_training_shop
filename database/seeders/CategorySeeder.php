<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Smartphones',
                'image_path' => 'seed_images/categories/1.jpg'
            ],
            [
                'name' => 'Laptops',
                'image_path' => 'seed_images/categories/2.jpg'
            ],
            [
                'name' => 'Gaming',
                'image_path' => 'seed_images/categories/3.jpg'
            ],
            [
                'name' => 'Audio & Headphones',
                'image_path' => 'seed_images/categories/4.jpg'
            ],
            [
                'name' => 'Smart Home',
                'image_path' => 'seed_images/categories/5.jpg'
            ],
            [
                'name' => 'Accessories',
                'image_path' => 'seed_images/categories/6.jpg'
            ]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}