<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    public function run(): void
    {
        $sliders = [
            [
                'title' => 'Latest iPhone 15 Pro',
                'sub_title' => 'Titanium. So strong. So light. So Pro.',
                'url' => '/products/iphone-15-pro',
                'button_name' => 'Shop Now',
                'sort' => 1,
                'image_path' => 'seed_images/sliders/1.jpg'
            ],
            [
                'title' => 'MacBook Air M2',
                'sub_title' => 'Supercharged by M2 chip. Redesigned around the next-generation chip.',
                'url' => '/products/macbook-air-m2',
                'button_name' => 'Discover',
                'sort' => 2,
                'image_path' => 'seed_images/sliders/2.jpg'
            ],
            [
                'title' => 'Gaming Laptops Sale',
                'sub_title' => 'Up to 30% off on premium gaming laptops. Level up your game!',
                'url' => '/categories/gaming-laptops',
                'button_name' => 'View Deals',
                'sort' => 3,
                'image_path' => 'seed_images/sliders/3.jpg'
            ],
            [
                'title' => 'Smart Home Collection',
                'sub_title' => 'Transform your home with intelligent automation and security.',
                'url' => '/categories/smart-home',
                'button_name' => 'Explore',
                'sort' => 4,
                'image_path' => 'seed_images/sliders/4.jpg'
            ]
        ];

        foreach ($sliders as $slider) {
            Slider::create($slider);
        }
    }
}
