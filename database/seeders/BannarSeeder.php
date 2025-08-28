<?php

namespace Database\Seeders;

use App\Models\Bannar;
use Illuminate\Database\Seeder;

class BannarSeeder extends Seeder
{
    public function run(): void
    {
        $bannars = [
            [
                'title' => 'Weekend Flash Sale',
                'sub_title' => 'Get up to 50% off on selected tech accessories',
                'url' => '/flash-sale',
                'image_path' => 'seed_images/banars/1.jpg'
            ],
            [
                'title' => 'New Arrivals',
                'sub_title' => 'Check out the latest smartphones and gadgets',
                'url' => '/new-arrivals',
                'image_path' => 'seed_images/banars/2.jpg'
            ],
            [
                'title' => 'Free Shipping',
                'sub_title' => 'On orders over $99. No minimum purchase required',
                'url' => '/shipping-info',
                'image_path' => 'seed_images/banars/3.jpg'
            ]
        ];

        foreach ($bannars as $bannar) {
            Bannar::create($bannar);
        }
    }
}