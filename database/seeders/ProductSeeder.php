<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'Apple MacBook Pro',
                'price' => '2,199',
                'description' => 'Apple MacBook Pro with M1 Chip (13-inch, 8GB RAM, 256GB SSD Storage) - Space Gray (Latest Model)',
                'category' => 'Laptop',
                'gallery' => 'https://m.media-amazon.com/images/I/61LNGJEMh0L._SL1500_.jpg',
            ],
            [
                'name' => 'Samsung Galaxy S21 Ultra',
                'price' => '1,199',
                'description' => 'Samsung Galaxy S21 Ultra 5G | Factory Unlocked Android Cell Phone | US Version 5G Smartphone | Pro-Grade Camera, 8K Video, 108MP High Res | 128GB, Phantom Silver (SM-G998UZSAXAA)',
                'category' => 'Smartphone',
                'gallery' => 'https://m.media-amazon.com/images/I/61ck-OpLBlL._SL1000_.jpg',
            ],
            [
                'name' => 'Sony PlayStation 5',
                'price' => '499',
                'description' => 'Sony PlayStation 5 Console',
                'category' => 'Gaming Console',
                'gallery' => 'https://m.media-amazon.com/images/I/51wPWj--fAL._SL1000_.jpg',
            ],
            [
                'name' => 'DJI Mavic Air 2',
                'price' => '799',
                'description' => 'DJI Mavic Air 2 - Drone Quadcopter UAV with 48MP Camera 4K Video 8K Hyperlapse 1/2" CMOS Sensor 3-Axis Gimbal 34min Flight Time ActiveTrack 3.0 Ocusync 2.0, Gray',
                'category' => 'Drone',
                'gallery' => 'https://m.media-amazon.com/images/I/61+93u5JeRL._SL1390_.jpg',
            ],
            [
                'name' => 'Samsung Odyssey G9',
                'price' => '1,799',
                'description' => 'Samsung Odyssey G9 49-inch Curved Gaming Monitor | QHD, 240hz, 1000R, Quantum Dot | LS49AG952NNXZA',
                'category' => 'Monitor',
                'gallery' => 'https://m.media-amazon.com/images/I/81aVCRqDqGL._SL1500_.jpg',
            ],
        ]);
    }
}
