<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $categories = Category::all();

        $productArrays = [];
        $smartphoneProducts = [
            ['name' => 'iPhone 15 Pro Max', 'price_before' => 1199, 'price_after' => 1099, 'details' => $this->getSmartphoneDetails('iPhone 15 Pro Max'), 'spec' => $this->getSmartphoneSpecs('iPhone 15 Pro Max')],
            ['name' => 'iPhone 15 Pro', 'price_before' => 999, 'price_after' => 949, 'details' => $this->getSmartphoneDetails('iPhone 15 Pro'), 'spec' => $this->getSmartphoneSpecs('iPhone 15 Pro')],
            ['name' => 'Samsung Galaxy S24 Ultra', 'price_before' => 1299, 'price_after' => 1199, 'details' => $this->getSmartphoneDetails('Samsung Galaxy S24 Ultra'), 'spec' => $this->getSmartphoneSpecs('Samsung Galaxy S24 Ultra')],
            ['name' => 'Samsung Galaxy S24+', 'price_before' => 999, 'price_after' => 899, 'details' => $this->getSmartphoneDetails('Samsung Galaxy S24+'), 'spec' => $this->getSmartphoneSpecs('Samsung Galaxy S24+')],
            ['name' => 'Google Pixel 8 Pro', 'price_before' => 899, 'price_after' => 799, 'details' => $this->getSmartphoneDetails('Google Pixel 8 Pro'), 'spec' => $this->getSmartphoneSpecs('Google Pixel 8 Pro')],
            ['name' => 'OnePlus 12', 'price_before' => 799, 'price_after' => 749, 'details' => $this->getSmartphoneDetails('OnePlus 12'), 'spec' => $this->getSmartphoneSpecs('OnePlus 12')],
            ['name' => 'iPhone 14', 'price_before' => 799, 'price_after' => 699, 'details' => $this->getSmartphoneDetails('iPhone 14'), 'spec' => $this->getSmartphoneSpecs('iPhone 14')],
            ['name' => 'Samsung Galaxy A54', 'price_before' => 449, 'price_after' => 399, 'details' => $this->getSmartphoneDetails('Samsung Galaxy A54'), 'spec' => $this->getSmartphoneSpecs('Samsung Galaxy A54')],
            ['name' => 'Google Pixel 7a', 'price_before' => 499, 'price_after' => 449, 'details' => $this->getSmartphoneDetails('Google Pixel 7a'), 'spec' => $this->getSmartphoneSpecs('Google Pixel 7a')],
            ['name' => 'OnePlus Nord 3', 'price_before' => 549, 'price_after' => 499, 'details' => $this->getSmartphoneDetails('OnePlus Nord 3'), 'spec' => $this->getSmartphoneSpecs('OnePlus Nord 3')],
            ['name' => 'Xiaomi 13 Pro', 'price_before' => 899, 'price_after' => 799, 'details' => $this->getSmartphoneDetails('Xiaomi 13 Pro'), 'spec' => $this->getSmartphoneSpecs('Xiaomi 13 Pro')],
            ['name' => 'OPPO Find X6 Pro', 'price_before' => 1099, 'price_after' => 999, 'details' => $this->getSmartphoneDetails('OPPO Find X6 Pro'), 'spec' => $this->getSmartphoneSpecs('OPPO Find X6 Pro')],
            ['name' => 'Vivo X90 Pro', 'price_before' => 849, 'price_after' => 749, 'details' => $this->getSmartphoneDetails('Vivo X90 Pro'), 'spec' => $this->getSmartphoneSpecs('Vivo X90 Pro')],
            ['name' => 'iPhone 13', 'price_before' => 629, 'price_after' => 579, 'details' => $this->getSmartphoneDetails('iPhone 13'), 'spec' => $this->getSmartphoneSpecs('iPhone 13')],
            ['name' => 'Samsung Galaxy Z Flip 5', 'price_before' => 999, 'price_after' => 899, 'details' => $this->getSmartphoneDetails('Samsung Galaxy Z Flip 5'), 'spec' => $this->getSmartphoneSpecs('Samsung Galaxy Z Flip 5')],
            ['name' => 'Google Pixel Fold', 'price_before' => 1799, 'price_after' => 1699, 'details' => $this->getSmartphoneDetails('Google Pixel Fold'), 'spec' => $this->getSmartphoneSpecs('Google Pixel Fold')],
            ['name' => 'Nothing Phone 2', 'price_before' => 699, 'price_after' => 649, 'details' => $this->getSmartphoneDetails('Nothing Phone 2'), 'spec' => $this->getSmartphoneSpecs('Nothing Phone 2')],
            ['name' => 'Motorola Edge 40 Pro', 'price_before' => 799, 'price_after' => 699, 'details' => $this->getSmartphoneDetails('Motorola Edge 40 Pro'), 'spec' => $this->getSmartphoneSpecs('Motorola Edge 40 Pro')],
            ['name' => 'Sony Xperia 1 V', 'price_before' => 1399, 'price_after' => 1299, 'details' => $this->getSmartphoneDetails('Sony Xperia 1 V'), 'spec' => $this->getSmartphoneSpecs('Sony Xperia 1 V')],
            ['name' => 'Asus ROG Phone 7', 'price_before' => 999, 'price_after' => 899, 'details' => $this->getSmartphoneDetails('Asus ROG Phone 7'), 'spec' => $this->getSmartphoneSpecs('Asus ROG Phone 7')]
        ];

        $laptopProducts = [
            ['name' => 'MacBook Pro 16" M3 Max', 'price_before' => 3999, 'price_after' => 3799, 'details' => $this->getLaptopDetails('MacBook Pro 16"'), 'spec' => $this->getLaptopSpecs('MacBook Pro 16"')],
            ['name' => 'MacBook Air 15" M2', 'price_before' => 1299, 'price_after' => 1199, 'details' => $this->getLaptopDetails('MacBook Air 15"'), 'spec' => $this->getLaptopSpecs('MacBook Air 15"')],
            ['name' => 'Dell XPS 13 Plus', 'price_before' => 1199, 'price_after' => 1099, 'details' => $this->getLaptopDetails('Dell XPS 13 Plus'), 'spec' => $this->getLaptopSpecs('Dell XPS 13 Plus')],
            ['name' => 'HP Spectre x360 14', 'price_before' => 1149, 'price_after' => 999, 'details' => $this->getLaptopDetails('HP Spectre x360 14'), 'spec' => $this->getLaptopSpecs('HP Spectre x360 14')],
            ['name' => 'Lenovo ThinkPad X1 Carbon', 'price_before' => 1899, 'price_after' => 1699, 'details' => $this->getLaptopDetails('Lenovo ThinkPad X1 Carbon'), 'spec' => $this->getLaptopSpecs('Lenovo ThinkPad X1 Carbon')],
            ['name' => 'ASUS ZenBook 14', 'price_before' => 899, 'price_after' => 799, 'details' => $this->getLaptopDetails('ASUS ZenBook 14'), 'spec' => $this->getLaptopSpecs('ASUS ZenBook 14')],
            ['name' => 'Microsoft Surface Laptop 5', 'price_before' => 1299, 'price_after' => 1199, 'details' => $this->getLaptopDetails('Microsoft Surface Laptop 5'), 'spec' => $this->getLaptopSpecs('Microsoft Surface Laptop 5')],
            ['name' => 'Acer Swift X', 'price_before' => 899, 'price_after' => 799, 'details' => $this->getLaptopDetails('Acer Swift X'), 'spec' => $this->getLaptopSpecs('Acer Swift X')],
            ['name' => 'LG Gram 17', 'price_before' => 1699, 'price_after' => 1499, 'details' => $this->getLaptopDetails('LG Gram 17'), 'spec' => $this->getLaptopSpecs('LG Gram 17')],
            ['name' => 'Samsung Galaxy Book3 Pro', 'price_before' => 1399, 'price_after' => 1199, 'details' => $this->getLaptopDetails('Samsung Galaxy Book3 Pro'), 'spec' => $this->getLaptopSpecs('Samsung Galaxy Book3 Pro')],
            ['name' => 'MacBook Pro 14" M3', 'price_before' => 1999, 'price_after' => 1899, 'details' => $this->getLaptopDetails('MacBook Pro 14"'), 'spec' => $this->getLaptopSpecs('MacBook Pro 14"')],
            ['name' => 'Dell XPS 15', 'price_before' => 1799, 'price_after' => 1599, 'details' => $this->getLaptopDetails('Dell XPS 15'), 'spec' => $this->getLaptopSpecs('Dell XPS 15')],
            ['name' => 'HP Envy x360 13', 'price_before' => 799, 'price_after' => 699, 'details' => $this->getLaptopDetails('HP Envy x360 13'), 'spec' => $this->getLaptopSpecs('HP Envy x360 13')],
            ['name' => 'Lenovo Yoga 9i', 'price_before' => 1399, 'price_after' => 1199, 'details' => $this->getLaptopDetails('Lenovo Yoga 9i'), 'spec' => $this->getLaptopSpecs('Lenovo Yoga 9i')],
            ['name' => 'ASUS VivoBook Pro 15', 'price_before' => 999, 'price_after' => 849, 'details' => $this->getLaptopDetails('ASUS VivoBook Pro 15'), 'spec' => $this->getLaptopSpecs('ASUS VivoBook Pro 15')],
            ['name' => 'MSI Prestige 14', 'price_before' => 1199, 'price_after' => 999, 'details' => $this->getLaptopDetails('MSI Prestige 14'), 'spec' => $this->getLaptopSpecs('MSI Prestige 14')],
            ['name' => 'Razer Book 13', 'price_before' => 1199, 'price_after' => 999, 'details' => $this->getLaptopDetails('Razer Book 13'), 'spec' => $this->getLaptopSpecs('Razer Book 13')],
            ['name' => 'Huawei MateBook X Pro', 'price_before' => 1499, 'price_after' => 1299, 'details' => $this->getLaptopDetails('Huawei MateBook X Pro'), 'spec' => $this->getLaptopSpecs('Huawei MateBook X Pro')],
            ['name' => 'Framework Laptop', 'price_before' => 1399, 'price_after' => 1199, 'details' => $this->getLaptopDetails('Framework Laptop'), 'spec' => $this->getLaptopSpecs('Framework Laptop')],
            ['name' => 'Google Pixelbook Go', 'price_before' => 849, 'price_after' => 749, 'details' => $this->getLaptopDetails('Google Pixelbook Go'), 'spec' => $this->getLaptopSpecs('Google Pixelbook Go')]
        ];

        $gamingProducts = [
            ['name' => 'ASUS ROG Strix RTX 4090', 'price_before' => 1999, 'price_after' => 1899, 'details' => $this->getGamingDetails('Graphics Card'), 'spec' => $this->getGamingSpecs('RTX 4090')],
            ['name' => 'PlayStation 5', 'price_before' => 499, 'price_after' => 479, 'details' => $this->getGamingDetails('Console'), 'spec' => $this->getGamingSpecs('PlayStation 5')],
            ['name' => 'Xbox Series X', 'price_before' => 499, 'price_after' => 469, 'details' => $this->getGamingDetails('Console'), 'spec' => $this->getGamingSpecs('Xbox Series X')],
            ['name' => 'Nintendo Switch OLED', 'price_before' => 349, 'price_after' => 329, 'details' => $this->getGamingDetails('Console'), 'spec' => $this->getGamingSpecs('Nintendo Switch')],
            ['name' => 'ASUS ROG Ally', 'price_before' => 699, 'price_after' => 649, 'details' => $this->getGamingDetails('Handheld'), 'spec' => $this->getGamingSpecs('ROG Ally')],
            ['name' => 'Steam Deck OLED', 'price_before' => 649, 'price_after' => 599, 'details' => $this->getGamingDetails('Handheld'), 'spec' => $this->getGamingSpecs('Steam Deck')],
            ['name' => 'Corsair K95 RGB Platinum', 'price_before' => 199, 'price_after' => 179, 'details' => $this->getGamingDetails('Keyboard'), 'spec' => $this->getGamingSpecs('Gaming Keyboard')],
            ['name' => 'Logitech G Pro X Superlight', 'price_before' => 149, 'price_after' => 129, 'details' => $this->getGamingDetails('Mouse'), 'spec' => $this->getGamingSpecs('Gaming Mouse')],
            ['name' => 'Razer DeathAdder V3 Pro', 'price_before' => 149, 'price_after' => 139, 'details' => $this->getGamingDetails('Mouse'), 'spec' => $this->getGamingSpecs('Gaming Mouse')],
            ['name' => 'SteelSeries Apex Pro TKL', 'price_before' => 189, 'price_after' => 169, 'details' => $this->getGamingDetails('Keyboard'), 'spec' => $this->getGamingSpecs('Gaming Keyboard')],
            ['name' => 'NVIDIA RTX 4080 Super', 'price_before' => 1199, 'price_after' => 1099, 'details' => $this->getGamingDetails('Graphics Card'), 'spec' => $this->getGamingSpecs('RTX 4080')],
            ['name' => 'AMD Radeon RX 7900 XTX', 'price_before' => 999, 'price_after' => 899, 'details' => $this->getGamingDetails('Graphics Card'), 'spec' => $this->getGamingSpecs('RX 7900 XTX')],
            ['name' => 'Corsair Vengeance LPX 32GB', 'price_before' => 129, 'price_after' => 119, 'details' => $this->getGamingDetails('RAM'), 'spec' => $this->getGamingSpecs('Gaming RAM')],
            ['name' => 'Samsung 980 PRO 2TB SSD', 'price_before' => 199, 'price_after' => 179, 'details' => $this->getGamingDetails('Storage'), 'spec' => $this->getGamingSpecs('Gaming SSD')],
            ['name' => 'ASUS ROG Swift PG279QM', 'price_before' => 699, 'price_after' => 649, 'details' => $this->getGamingDetails('Monitor'), 'spec' => $this->getGamingSpecs('Gaming Monitor')],
            ['name' => 'HyperX Cloud Alpha', 'price_before' => 99, 'price_after' => 89, 'details' => $this->getGamingDetails('Headset'), 'spec' => $this->getGamingSpecs('Gaming Headset')],
            ['name' => 'Razer Basilisk V3 Pro', 'price_before' => 159, 'price_after' => 149, 'details' => $this->getGamingDetails('Mouse'), 'spec' => $this->getGamingSpecs('Gaming Mouse')],
            ['name' => 'Corsair HS80 RGB Wireless', 'price_before' => 149, 'price_after' => 129, 'details' => $this->getGamingDetails('Headset'), 'spec' => $this->getGamingSpecs('Gaming Headset')],
            ['name' => 'Elgato Stream Deck', 'price_before' => 149, 'price_after' => 139, 'details' => $this->getGamingDetails('Streaming'), 'spec' => $this->getGamingSpecs('Stream Deck')],
            ['name' => 'SCUF Reflex Pro', 'price_before' => 229, 'price_after' => 209, 'details' => $this->getGamingDetails('Controller'), 'spec' => $this->getGamingSpecs('Pro Controller')]
        ];

        $audioProducts = [
            ['name' => 'AirPods Pro 2nd Gen', 'price_before' => 249, 'price_after' => 229, 'details' => $this->getAudioDetails('Earbuds'), 'spec' => $this->getAudioSpecs('AirPods Pro')],
            ['name' => 'Sony WH-1000XM5', 'price_before' => 399, 'price_after' => 349, 'details' => $this->getAudioDetails('Headphones'), 'spec' => $this->getAudioSpecs('Sony WH-1000XM5')],
            ['name' => 'Bose QuietComfort 45', 'price_before' => 329, 'price_after' => 299, 'details' => $this->getAudioDetails('Headphones'), 'spec' => $this->getAudioSpecs('Bose QC45')],
            ['name' => 'Samsung Galaxy Buds2 Pro', 'price_before' => 229, 'price_after' => 199, 'details' => $this->getAudioDetails('Earbuds'), 'spec' => $this->getAudioSpecs('Galaxy Buds2 Pro')],
            ['name' => 'Sennheiser Momentum 4', 'price_before' => 379, 'price_after' => 329, 'details' => $this->getAudioDetails('Headphones'), 'spec' => $this->getAudioSpecs('Sennheiser Momentum 4')],
            ['name' => 'JBL Live Pro 2 TWS', 'price_before' => 149, 'price_after' => 129, 'details' => $this->getAudioDetails('Earbuds'), 'spec' => $this->getAudioSpecs('JBL Live Pro 2')],
            ['name' => 'Audio-Technica ATH-M50xBT2', 'price_before' => 199, 'price_after' => 179, 'details' => $this->getAudioDetails('Headphones'), 'spec' => $this->getAudioSpecs('ATH-M50xBT2')],
            ['name' => 'Beats Studio Buds+', 'price_before' => 179, 'price_after' => 159, 'details' => $this->getAudioDetails('Earbuds'), 'spec' => $this->getAudioSpecs('Beats Studio Buds+')],
            ['name' => 'Marshall Acton III', 'price_before' => 279, 'price_after' => 249, 'details' => $this->getAudioDetails('Speaker'), 'spec' => $this->getAudioSpecs('Marshall Acton III')],
            ['name' => 'Sonos Move 2', 'price_before' => 449, 'price_after' => 399, 'details' => $this->getAudioDetails('Speaker'), 'spec' => $this->getAudioSpecs('Sonos Move 2')],
            ['name' => 'Beyerdynamic DT 990 Pro', 'price_before' => 179, 'price_after' => 159, 'details' => $this->getAudioDetails('Headphones'), 'spec' => $this->getAudioSpecs('DT 990 Pro')],
            ['name' => 'Shure SM7B', 'price_before' => 399, 'price_after' => 379, 'details' => $this->getAudioDetails('Microphone'), 'spec' => $this->getAudioSpecs('Shure SM7B')],
            ['name' => 'Blue Yeti X', 'price_before' => 169, 'price_after' => 149, 'details' => $this->getAudioDetails('Microphone'), 'spec' => $this->getAudioSpecs('Blue Yeti X')],
            ['name' => 'JBL Flip 6', 'price_before' => 129, 'price_after' => 109, 'details' => $this->getAudioDetails('Speaker'), 'spec' => $this->getAudioSpecs('JBL Flip 6')],
            ['name' => 'Anker Soundcore Liberty 4', 'price_before' => 99, 'price_after' => 89, 'details' => $this->getAudioDetails('Earbuds'), 'spec' => $this->getAudioSpecs('Soundcore Liberty 4')],
            ['name' => 'Focal Bathys', 'price_before' => 699, 'price_after' => 649, 'details' => $this->getAudioDetails('Headphones'), 'spec' => $this->getAudioSpecs('Focal Bathys')],
            ['name' => 'Nothing Ear (2)', 'price_before' => 149, 'price_after' => 129, 'details' => $this->getAudioDetails('Earbuds'), 'spec' => $this->getAudioSpecs('Nothing Ear 2')],
            ['name' => 'HiFiMan Arya Stealth', 'price_before' => 1299, 'price_after' => 1199, 'details' => $this->getAudioDetails('Headphones'), 'spec' => $this->getAudioSpecs('HiFiMan Arya')],
            ['name' => 'Ultimate Ears BOOM 4', 'price_before' => 199, 'price_after' => 179, 'details' => $this->getAudioDetails('Speaker'), 'spec' => $this->getAudioSpecs('UE BOOM 4')],
            ['name' => 'Sony WF-1000XM4', 'price_before' => 279, 'price_after' => 249, 'details' => $this->getAudioDetails('Earbuds'), 'spec' => $this->getAudioSpecs('Sony WF-1000XM4')]
        ];

        $smartHomeProducts = [
            ['name' => 'Amazon Echo Dot 5th Gen', 'price_before' => 49, 'price_after' => 39, 'details' => $this->getSmartHomeDetails('Smart Speaker'), 'spec' => $this->getSmartHomeSpecs('Echo Dot')],
            ['name' => 'Google Nest Hub Max', 'price_before' => 229, 'price_after' => 199, 'details' => $this->getSmartHomeDetails('Smart Display'), 'spec' => $this->getSmartHomeSpecs('Nest Hub Max')],
            ['name' => 'Apple HomePod mini', 'price_before' => 99, 'price_after' => 89, 'details' => $this->getSmartHomeDetails('Smart Speaker'), 'spec' => $this->getSmartHomeSpecs('HomePod mini')],
            ['name' => 'Ring Video Doorbell Pro 2', 'price_before' => 249, 'price_after' => 219, 'details' => $this->getSmartHomeDetails('Doorbell'), 'spec' => $this->getSmartHomeSpecs('Ring Doorbell Pro 2')],
            ['name' => 'Philips Hue Color Starter Kit', 'price_before' => 199, 'price_after' => 179, 'details' => $this->getSmartHomeDetails('Smart Lighting'), 'spec' => $this->getSmartHomeSpecs('Philips Hue')],
            ['name' => 'Nest Learning Thermostat', 'price_before' => 249, 'price_after' => 229, 'details' => $this->getSmartHomeDetails('Thermostat'), 'spec' => $this->getSmartHomeSpecs('Nest Thermostat')],
            ['name' => 'Arlo Pro 5S Camera', 'price_before' => 249, 'price_after' => 229, 'details' => $this->getSmartHomeDetails('Security Camera'), 'spec' => $this->getSmartHomeSpecs('Arlo Pro 5S')],
            ['name' => 'August Smart Lock Pro', 'price_before' => 279, 'price_after' => 249, 'details' => $this->getSmartHomeDetails('Smart Lock'), 'spec' => $this->getSmartHomeSpecs('August Smart Lock')],
            ['name' => 'TP-Link Kasa Smart Plug', 'price_before' => 29, 'price_after' => 24, 'details' => $this->getSmartHomeDetails('Smart Plug'), 'spec' => $this->getSmartHomeSpecs('Kasa Smart Plug')],
            ['name' => 'Ecobee SmartThermostat', 'price_before' => 249, 'price_after' => 229, 'details' => $this->getSmartHomeDetails('Thermostat'), 'spec' => $this->getSmartHomeSpecs('Ecobee SmartThermostat')],
            ['name' => 'Wyze Cam v3', 'price_before' => 35, 'price_after' => 29, 'details' => $this->getSmartHomeDetails('Security Camera'), 'spec' => $this->getSmartHomeSpecs('Wyze Cam v3')],
            ['name' => 'Samsung SmartThings Hub', 'price_before' => 129, 'price_after' => 109, 'details' => $this->getSmartHomeDetails('Hub'), 'spec' => $this->getSmartHomeSpecs('SmartThings Hub')],
            ['name' => 'LIFX Color A60 Bulb', 'price_before' => 49, 'price_after' => 39, 'details' => $this->getSmartHomeDetails('Smart Bulb'), 'spec' => $this->getSmartHomeSpecs('LIFX Color')],
            ['name' => 'Yale Assure Lock SL', 'price_before' => 199, 'price_after' => 179, 'details' => $this->getSmartHomeDetails('Smart Lock'), 'spec' => $this->getSmartHomeSpecs('Yale Assure Lock')],
            ['name' => 'Honeywell T9 Thermostat', 'price_before' => 199, 'price_after' => 179, 'details' => $this->getSmartHomeDetails('Thermostat'), 'spec' => $this->getSmartHomeSpecs('Honeywell T9')],
            ['name' => 'Blink Outdoor 4', 'price_before' => 99, 'price_after' => 89, 'details' => $this->getSmartHomeDetails('Security Camera'), 'spec' => $this->getSmartHomeSpecs('Blink Outdoor 4')],
            ['name' => 'iRobot Roomba j7+', 'price_before' => 849, 'price_after' => 749, 'details' => $this->getSmartHomeDetails('Robot Vacuum'), 'spec' => $this->getSmartHomeSpecs('Roomba j7+')],
            ['name' => 'Sonos One SL', 'price_before' => 179, 'price_after' => 159, 'details' => $this->getSmartHomeDetails('Smart Speaker'), 'spec' => $this->getSmartHomeSpecs('Sonos One SL')],
            ['name' => 'Lutron Caseta Dimmer Switch', 'price_before' => 59, 'price_after' => 49, 'details' => $this->getSmartHomeDetails('Smart Switch'), 'spec' => $this->getSmartHomeSpecs('Lutron Caseta')],
            ['name' => 'Rachio 3 Smart Sprinkler', 'price_before' => 199, 'price_after' => 179, 'details' => $this->getSmartHomeDetails('Sprinkler Controller'), 'spec' => $this->getSmartHomeSpecs('Rachio 3')]
        ];

        $accessoryProducts = [
            ['name' => 'Apple MagSafe Charger', 'price_before' => 39, 'price_after' => 35, 'details' => $this->getAccessoryDetails('Wireless Charger'), 'spec' => $this->getAccessorySpecs('MagSafe Charger')],
            ['name' => 'Anker PowerCore 10000', 'price_before' => 29, 'price_after' => 25, 'details' => $this->getAccessoryDetails('Power Bank'), 'spec' => $this->getAccessorySpecs('PowerCore 10000')],
            ['name' => 'Samsung T7 Portable SSD 1TB', 'price_before' => 149, 'price_after' => 129, 'details' => $this->getAccessoryDetails('External Storage'), 'spec' => $this->getAccessorySpecs('Samsung T7')],
            ['name' => 'Logitech MX Master 3S', 'price_before' => 99, 'price_after' => 89, 'details' => $this->getAccessoryDetails('Mouse'), 'spec' => $this->getAccessorySpecs('MX Master 3S')],
            ['name' => 'Apple Magic Keyboard', 'price_before' => 99, 'price_after' => 89, 'details' => $this->getAccessoryDetails('Keyboard'), 'spec' => $this->getAccessorySpecs('Magic Keyboard')],
            ['name' => 'CalDigit TS3 Plus Hub', 'price_before' => 249, 'price_after' => 229, 'details' => $this->getAccessoryDetails('USB Hub'), 'spec' => $this->getAccessorySpecs('TS3 Plus Hub')],
            ['name' => 'OtterBox Defender Pro Case', 'price_before' => 59, 'price_after' => 49, 'details' => $this->getAccessoryDetails('Phone Case'), 'spec' => $this->getAccessorySpecs('Defender Pro')],
            ['name' => 'Belkin 3-in-1 Wireless Charger', 'price_before' => 149, 'price_after' => 129, 'details' => $this->getAccessoryDetails('Wireless Charger'), 'spec' => $this->getAccessorySpecs('Belkin 3-in-1')],
            ['name' => 'Elgato Key Light Air', 'price_before' => 129, 'price_after' => 109, 'details' => $this->getAccessoryDetails('Lighting'), 'spec' => $this->getAccessorySpecs('Key Light Air')],
            ['name' => 'HyperX Alloy FPS Pro', 'price_before' => 69, 'price_after' => 59, 'details' => $this->getAccessoryDetails('Keyboard'), 'spec' => $this->getAccessorySpecs('Alloy FPS Pro')],
            ['name' => 'Twelve South BookArc Stand', 'price_before' => 49, 'price_after' => 44, 'details' => $this->getAccessoryDetails('Laptop Stand'), 'spec' => $this->getAccessorySpecs('BookArc Stand')],
            ['name' => 'Peak Design Everyday Backpack', 'price_before' => 279, 'price_after' => 249, 'details' => $this->getAccessoryDetails('Backpack'), 'spec' => $this->getAccessorySpecs('Everyday Backpack')],
            ['name' => 'Native Union Drop XL Pad', 'price_before' => 79, 'price_after' => 69, 'details' => $this->getAccessoryDetails('Wireless Charger'), 'spec' => $this->getAccessorySpecs('Drop XL Pad')],
            ['name' => 'JSAUX Steam Deck Dock', 'price_before' => 59, 'price_after' => 49, 'details' => $this->getAccessoryDetails('Dock'), 'spec' => $this->getAccessorySpecs('Steam Deck Dock')],
            ['name' => 'Anker USB-C Hub 7-in-1', 'price_before' => 69, 'price_after' => 59, 'details' => $this->getAccessoryDetails('USB Hub'), 'spec' => $this->getAccessorySpecs('USB-C Hub')],
            ['name' => 'Apple Pencil 2nd Generation', 'price_before' => 129, 'price_after' => 119, 'details' => $this->getAccessoryDetails('Stylus'), 'spec' => $this->getAccessorySpecs('Apple Pencil 2')],
            ['name' => 'Moft Laptop Stand', 'price_before' => 45, 'price_after' => 39, 'details' => $this->getAccessoryDetails('Laptop Stand'), 'spec' => $this->getAccessorySpecs('Moft Stand')],
            ['name' => 'RAVPower 65W GaN Charger', 'price_before' => 49, 'price_after' => 42, 'details' => $this->getAccessoryDetails('Charger'), 'spec' => $this->getAccessorySpecs('RAVPower GaN')],
            ['name' => 'Spigen Tough Armor Case', 'price_before' => 39, 'price_after' => 34, 'details' => $this->getAccessoryDetails('Phone Case'), 'spec' => $this->getAccessorySpecs('Tough Armor')],
            ['name' => 'SanDisk Extreme Pro 128GB', 'price_before' => 49, 'price_after' => 42, 'details' => $this->getAccessoryDetails('Memory Card'), 'spec' => $this->getAccessorySpecs('Extreme Pro')]
        ];

        $productArrays = [
            $smartphoneProducts,
            $laptopProducts,
            $gamingProducts,
            $audioProducts,
            $smartHomeProducts,
            $accessoryProducts
        ];

        foreach ($categories as $index => $category) {
            if (!isset($productArrays[$index])) {
                continue;
            }
            $products = $productArrays[$index];

            foreach ($products as $productData) {
                Product::create([
                    'name' => $productData['name'],
                    'category_id' => $category->id,
                    'image_path' => 'seed_images/products/' . rand(1, 20) . '.jpg',
                    'price_before_discount' => $productData['price_before'],
                    'price_after_discount' => $productData['price_after'],
                    'details' => $productData['details'],
                    'specification' => $productData['spec']
                ]);
            }
        }
    }

    private function getSmartphoneDetails($name): string
    {
        return "<div class='product-details'>
            <h3>Experience Excellence with {$name}</h3>
            <p>Discover cutting-edge technology and innovative design in this premium smartphone. Whether you're capturing memories, staying connected, or boosting productivity, this device delivers exceptional performance.</p>
            
            <div class='features-grid'>
                <div class='feature'>
                    <h4>📱 Premium Display</h4>
                    <p>Immersive screen technology with vibrant colors and sharp details for the ultimate viewing experience.</p>
                </div>
                <div class='feature'>
                    <h4>📸 Advanced Camera System</h4>
                    <p>Professional-grade photography capabilities with AI enhancement and multiple lens options.</p>
                </div>
                <div class='feature'>
                    <h4>🔋 All-Day Battery</h4>
                    <p>Long-lasting battery life with fast charging technology to keep you powered throughout the day.</p>
                </div>
                <div class='feature'>
                    <h4>⚡ Lightning Performance</h4>
                    <p>Flagship processor delivers smooth multitasking and gaming performance.</p>
                </div>
            </div>
            
            <p><strong>Perfect for:</strong> Photography enthusiasts, business professionals, content creators, and anyone who demands the best mobile experience.</p>
        </div>";
    }

    private function getSmartphoneSpecs($name): string
    {
        return "<div class='specifications'>
            <h3>Technical Specifications</h3>
            
            <div class='spec-section'>
                <h4>Display</h4>
                <ul>
                    <li><strong>Screen Size:</strong> 6.1\" - 6.7\" Super Retina XDR Display</li>
                    <li><strong>Resolution:</strong> 2556 x 1179 pixels at 460 ppi</li>
                    <li><strong>Technology:</strong> OLED with ProMotion 120Hz</li>
                    <li><strong>Brightness:</strong> Up to 2000 nits peak brightness</li>
                </ul>
            </div>
            
            <div class='spec-section'>
                <h4>Performance</h4>
                <ul>
                    <li><strong>Chip:</strong> Latest flagship processor</li>
                    <li><strong>Storage:</strong> 128GB / 256GB / 512GB / 1TB options</li>
                    <li><strong>RAM:</strong> 8GB - 12GB</li>
                    <li><strong>5G:</strong> Sub-6GHz and mmWave support</li>
                </ul>
            </div>
            
            <div class='spec-section'>
                <h4>Camera System</h4>
                <ul>
                    <li><strong>Main Camera:</strong> 48MP with f/1.78 aperture</li>
                    <li><strong>Ultra Wide:</strong> 12MP with f/2.2 aperture</li>
                    <li><strong>Telephoto:</strong> 12MP with 3x optical zoom</li>
                    <li><strong>Video:</strong> 4K Dolby Vision HDR recording</li>
                </ul>
            </div>
            
            <div class='spec-section'>
                <h4>Battery & Charging</h4>
                <ul>
                    <li><strong>Battery Life:</strong> Up to 29 hours video playback</li>
                    <li><strong>Charging:</strong> USB-C with MagSafe wireless</li>
                    <li><strong>Fast Charging:</strong> 50% charge in 30 minutes</li>
                </ul>
            </div>
        </div>";
    }

    private function getLaptopDetails($name): string
    {
        return "<div class='product-details'>
            <h3>Unleash Your Potential with {$name}</h3>
            <p>Experience professional-grade performance in a sleek, portable design. Perfect for work, creativity, and entertainment, this laptop combines power with elegance.</p>
            
            <div class='features-grid'>
                <div class='feature'>
                    <h4>💻 Premium Design</h4>
                    <p>Crafted with premium materials featuring a stunning display and comfortable keyboard for extended use.</p>
                </div>
                <div class='feature'>
                    <h4>⚡ Powerful Performance</h4>
                    <p>Latest generation processors deliver exceptional speed for demanding applications and multitasking.</p>
                </div>
                <div class='feature'>
                    <h4>🎨 Brilliant Display</h4>
                    <p>High-resolution display with accurate colors perfect for creative work and media consumption.</p>
                </div>
                <div class='feature'>
                    <h4>🔋 Extended Battery Life</h4>
                    <p>All-day battery performance with fast charging capabilities for uninterrupted productivity.</p>
                </div>
            </div>
            
            <p><strong>Ideal for:</strong> Content creators, software developers, business professionals, students, and digital artists.</p>
        </div>";
    }

    private function getLaptopSpecs($name): string
    {
        return "<div class='specifications'>
            <h3>Technical Specifications</h3>
            
            <div class='spec-section'>
                <h4>Display</h4>
                <ul>
                    <li><strong>Screen Size:</strong> 13\" - 16\" Retina Display</li>
                    <li><strong>Resolution:</strong> 2560 x 1600 pixels</li>
                    <li><strong>Technology:</strong> IPS LCD with True Tone</li>
                    <li><strong>Color Gamut:</strong> P3 wide color gamut</li>
                </ul>
            </div>
            
            <div class='spec-section'>
                <h4>Performance</h4>
                <ul>
                    <li><strong>Processor:</strong> Intel Core i7 / AMD Ryzen 7 / Apple M2</li>
                    <li><strong>Memory:</strong> 16GB - 64GB unified memory</li>
                    <li><strong>Storage:</strong> 512GB - 2TB SSD</li>
                    <li><strong>Graphics:</strong> Integrated / Dedicated GPU options</li>
                </ul>
            </div>
            
            <div class='spec-section'>
                <h4>Connectivity</h4>
                <ul>
                    <li><strong>Ports:</strong> USB-C Thunderbolt 4, USB-A, HDMI</li>
                    <li><strong>Wireless:</strong> Wi-Fi 6E, Bluetooth 5.3</li>
                    <li><strong>Audio:</strong> High-fidelity speakers with Dolby Atmos</li>
                </ul>
            </div>
            
            <div class='spec-section'>
                <h4>Physical</h4>
                <ul>
                    <li><strong>Weight:</strong> 2.8 - 4.7 lbs</li>
                    <li><strong>Thickness:</strong> 0.61\" - 0.68\"</li>
                    <li><strong>Battery:</strong> Up to 20 hours battery life</li>
                    <li><strong>Keyboard:</strong> Backlit with precision trackpad</li>
                </ul>
            </div>
        </div>";
    }

    private function getGamingDetails($type): string
    {
        return "<div class='product-details'>
            <h3>Elevate Your Gaming Experience</h3>
            <p>Dominate the competition with professional-grade gaming hardware designed for serious gamers. Experience unparalleled performance and precision.</p>
            
            <div class='features-grid'>
                <div class='feature'>
                    <h4>🎮 Pro Gaming Performance</h4>
                    <p>Built for competitive gaming with ultra-low latency and maximum responsiveness for that winning edge.</p>
                </div>
                <div class='feature'>
                    <h4>🌈 RGB Customization</h4>
                    <p>Personalize your setup with stunning RGB lighting effects and customizable color profiles.</p>
                </div>
                <div class='feature'>
                    <h4>⚡ High-Speed Connectivity</h4>
                    <p>Wireless and wired options with industry-leading connection stability and speed.</p>
                </div>
                <div class='feature'>
                    <h4>🛡️ Durability</h4>
                    <p>Built to withstand intense gaming sessions with premium materials and construction.</p>
                </div>
            </div>
            
            <p><strong>Perfect for:</strong> Competitive gamers, streamers, esports enthusiasts, and anyone serious about gaming performance.</p>
        </div>";
    }

    private function getGamingSpecs($product): string
    {
        return "<div class='specifications'>
            <h3>Gaming Specifications</h3>
            
            <div class='spec-section'>
                <h4>Performance</h4>
                <ul>
                    <li><strong>Polling Rate:</strong> Up to 8000Hz</li>
                    <li><strong>Response Time:</strong> <1ms</li>
                    <li><strong>Switches:</strong> Mechanical / Optical</li>
                    <li><strong>Durability:</strong> 100M+ click lifecycle</li>
                </ul>
            </div>
            
            <div class='spec-section'>
                <h4>Connectivity</h4>
                <ul>
                    <li><strong>Connection:</strong> USB-C / Wireless 2.4GHz</li>
                    <li><strong>Battery Life:</strong> 70+ hours (wireless)</li>
                    <li><strong>Charging:</strong> Fast charging via USB-C</li>
                    <li><strong>Compatibility:</strong> PC, Mac, PlayStation, Xbox</li>
                </ul>
            </div>
            
            <div class='spec-section'>
                <h4>Customization</h4>
                <ul>
                    <li><strong>RGB Zones:</strong> 16.8M colors per zone</li>
                    <li><strong>Profiles:</strong> 5 onboard memory profiles</li>
                    <li><strong>Software:</strong> Advanced customization suite</li>
                    <li><strong>Macros:</strong> Unlimited macro programming</li>
                </ul>
            </div>
            
            <div class='spec-section'>
                <h4>Physical</h4>
                <ul>
                    <li><strong>Weight:</strong> Optimized for gaming</li>
                    <li><strong>Grip:</strong> Textured anti-slip surface</li>
                    <li><strong>Buttons:</strong> 6-11 programmable buttons</li>
                    <li><strong>Cable:</strong> Braided, detachable</li>
                </ul>
            </div>
        </div>";
    }

    private function getAudioDetails($type): string
    {
        return "<div class='product-details'>
            <h3>Immersive Audio Experience</h3>
            <p>Discover premium sound quality with cutting-edge audio technology. Whether for music, calls, or entertainment, experience audio like never before.</p>
            
            <div class='features-grid'>
                <div class='feature'>
                    <h4>🎵 Premium Sound</h4>
                    <p>High-fidelity audio with balanced sound signature and exceptional clarity across all frequencies.</p>
                </div>
                <div class='feature'>
                    <h4>🎧 Active Noise Cancellation</h4>
                    <p>Industry-leading noise cancellation technology blocks out distractions for pure audio bliss.</p>
                </div>
                <div class='feature'>
                    <h4>🎙️ Crystal Clear Calls</h4>
                    <p>Advanced microphone technology ensures your voice comes through loud and clear on every call.</p>
                </div>
                <div class='feature'>
                    <h4>🔋 Long Battery Life</h4>
                    <p>Extended playback time with fast charging support keeps your music going all day long.</p>
                </div>
            </div>
            
            <p><strong>Ideal for:</strong> Audiophiles, music producers, podcast creators, remote workers, and music enthusiasts.</p>
        </div>";
    }

    private function getAudioSpecs($product): string
    {
        return "<div class='specifications'>
            <h3>Audio Specifications</h3>
            
            <div class='spec-section'>
                <h4>Sound Quality</h4>
                <ul>
                    <li><strong>Driver Size:</strong> 40mm - 50mm dynamic drivers</li>
                    <li><strong>Frequency Response:</strong> 20Hz - 20kHz</li>
                    <li><strong>Impedance:</strong> 32Ω</li>
                    <li><strong>THD:</strong> <0.1% at 1kHz</li>
                </ul>
            </div>
            
            <div class='spec-section'>
                <h4>Features</h4>
                <ul>
                    <li><strong>ANC:</strong> Adaptive noise cancellation</li>
                    <li><strong>Transparency Mode:</strong> Ambient sound passthrough</li>
                    <li><strong>Codecs:</strong> SBC, AAC, aptX, LDAC support</li>
                    <li><strong>Spatial Audio:</strong> 3D sound positioning</li>
                </ul>
            </div>
            
            <div class='spec-section'>
                <h4>Connectivity</h4>
                <ul>
                    <li><strong>Bluetooth:</strong> 5.3 with multipoint connection</li>
                    <li><strong>Range:</strong> Up to 30ft (10m)</li>
                    <li><strong>Latency:</strong> <40ms with aptX LL</li>
                    <li><strong>Wired:</strong> 3.5mm / USB-C options</li>
                </ul>
            </div>
            
            <div class='spec-section'>
                <h4>Battery & Comfort</h4>
                <ul>
                    <li><strong>Playback Time:</strong> 30+ hours with ANC off</li>
                    <li><strong>Quick Charge:</strong> 3 hours playback in 3 minutes</li>
                    <li><strong>Weight:</strong> Lightweight design for comfort</li>
                    <li><strong>Padding:</strong> Memory foam ear cushions</li>
                </ul>
            </div>
        </div>";
    }

    private function getSmartHomeDetails($type): string
    {
        return "<div class='product-details'>
            <h3>Transform Your Home into a Smart Home</h3>
            <p>Experience the future of home automation with intelligent devices that learn your preferences and make daily life more convenient and secure.</p>
            
            <div class='features-grid'>
                <div class='feature'>
                    <h4>🏠 Smart Integration</h4>
                    <p>Seamlessly connects with major smart home platforms like Alexa, Google Assistant, and Apple HomeKit.</p>
                </div>
                <div class='feature'>
                    <h4>📱 Remote Control</h4>
                    <p>Control your devices from anywhere in the world using the companion mobile app with intuitive interface.</p>
                </div>
                <div class='feature'>
                    <h4>🤖 AI Learning</h4>
                    <p>Advanced algorithms learn your habits and automatically adjust settings for optimal comfort and efficiency.</p>
                </div>
                <div class='feature'>
                    <h4>🔒 Enhanced Security</h4>
                    <p>Bank-level encryption and security protocols protect your privacy and data at all times.</p>
                </div>
            </div>
            
            <p><strong>Perfect for:</strong> Tech enthusiasts, busy families, security-conscious homeowners, and energy-saving advocates.</p>
        </div>";
    }

    private function getSmartHomeSpecs($product): string
    {
        return "<div class='specifications'>
            <h3>Smart Home Specifications</h3>
            
            <div class='spec-section'>
                <h4>Connectivity</h4>
                <ul>
                    <li><strong>Wi-Fi:</strong> 802.11 b/g/n 2.4GHz</li>
                    <li><strong>Bluetooth:</strong> BLE 5.0</li>
                    <li><strong>Protocols:</strong> Zigbee 3.0, Z-Wave Plus</li>
                    <li><strong>Range:</strong> Up to 150ft outdoor range</li>
                </ul>
            </div>
            
            <div class='spec-section'>
                <h4>Compatibility</h4>
                <ul>
                    <li><strong>Alexa:</strong> Full integration support</li>
                    <li><strong>Google:</strong> Google Assistant compatible</li>
                    <li><strong>Apple:</strong> HomeKit certified</li>
                    <li><strong>SmartThings:</strong> Native support</li>
                </ul>
            </div>
            
            <div class='spec-section'>
                <h4>Features</h4>
                <ul>
                    <li><strong>Voice Control:</strong> Hands-free operation</li>
                    <li><strong>Scheduling:</strong> Time-based automation</li>
                    <li><strong>Geofencing:</strong> Location-based triggers</li>
                    <li><strong>Energy Monitor:</strong> Real-time usage tracking</li>
                </ul>
            </div>
            
            <div class='spec-section'>
                <h4>Installation</h4>
                <ul>
                    <li><strong>Setup:</strong> 5-minute quick setup</li>
                    <li><strong>Mounting:</strong> Multiple installation options</li>
                    <li><strong>Power:</strong> Battery / USB-C / Hardwired</li>
                    <li><strong>App:</strong> iOS and Android compatible</li>
                </ul>
            </div>
        </div>";
    }

    private function getAccessoryDetails($type): string
    {
        return "<div class='product-details'>
            <h3>Essential Tech Accessories</h3>
            <p>Enhance your tech experience with premium accessories designed for performance, style, and functionality. Every detail matters when it comes to your daily tech interactions.</p>
            
            <div class='features-grid'>
                <div class='feature'>
                    <h4>⚡ Fast & Efficient</h4>
                    <p>Optimized for speed and efficiency with the latest technology standards and protocols.</p>
                </div>
                <div class='feature'>
                    <h4>🛡️ Premium Build Quality</h4>
                    <p>Constructed with high-grade materials for durability and long-lasting performance.</p>
                </div>
                <div class='feature'>
                    <h4>🎨 Sleek Design</h4>
                    <p>Modern, minimalist design that complements your existing tech setup perfectly.</p>
                </div>
                <div class='feature'>
                    <h4>🔧 Universal Compatibility</h4>
                    <p>Works seamlessly with a wide range of devices across different platforms and brands.</p>
                </div>
            </div>
            
            <p><strong>Essential for:</strong> Tech professionals, students, remote workers, content creators, and anyone who values quality accessories.</p>
        </div>";
    }

    private function getAccessorySpecs($product): string
    {
        return "<div class='specifications'>
            <h3>Product Specifications</h3>
            
            <div class='spec-section'>
                <h4>Compatibility</h4>
                <ul>
                    <li><strong>Devices:</strong> iPhone, iPad, MacBook, Android, Windows</li>
                    <li><strong>Standards:</strong> USB-C, Lightning, Qi wireless</li>
                    <li><strong>Protocols:</strong> USB 3.2, Thunderbolt 4, PD 3.0</li>
                    <li><strong>Operating Systems:</strong> iOS, Android, macOS, Windows</li>
                </ul>
            </div>
            
            <div class='spec-section'>
                <h4>Performance</h4>
                <ul>
                    <li><strong>Data Transfer:</strong> Up to 10Gbps transfer speed</li>
                    <li><strong>Power Delivery:</strong> 100W fast charging support</li>
                    <li><strong>Efficiency:</strong> 95% power conversion efficiency</li>
                    <li><strong>Safety:</strong> Over-current and over-voltage protection</li>
                </ul>
            </div>
            
            <div class='spec-section'>
                <h4>Build Quality</h4>
                <ul>
                    <li><strong>Materials:</strong> Premium aluminum and reinforced cables</li>
                    <li><strong>Certification:</strong> MFi certified, FCC approved</li>
                    <li><strong>Durability:</strong> 10,000+ bend test cycles</li>
                    <li><strong>Warranty:</strong> 2-year limited warranty</li>
                </ul>
            </div>
            
            <div class='spec-section'>
                <h4>Physical</h4>
                <ul>
                    <li><strong>Dimensions:</strong> Compact and portable design</li>
                    <li><strong>Weight:</strong> Lightweight construction</li>
                    <li><strong>Colors:</strong> Multiple color options available</li>
                    <li><strong>Package:</strong> Premium retail packaging included</li>
                </ul>
            </div>
        </div>";
    }
}
