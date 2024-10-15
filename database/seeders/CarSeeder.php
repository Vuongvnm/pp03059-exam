<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{

    public function run(): void
    {
        Car::insert([
            [
                'car_name' => 'Toyota Camry',
                'car_color' => 'Black',
                'car_price' => 50000.00,
                'car_description' => 'Luxury sedan'
            ],
            [
                'car_name' => 'Honda Civic',
                'car_color' => 'Blue',
                'car_price' => 30000.00,
                'car_description' => 'Compact car'
            ],
            [
                'car_name' => 'Ford Mustang',
                'car_color' => 'Red',
                'car_price' => 60000.00,
                'car_description' => 'Sport car'
            ],
            [
                'car_name' => 'Tesla Model S',
                'car_color' => 'White',
                'car_price' => 70000.00,
                'car_description' => 'Electric car'
            ],
            [
                'car_name' => 'BMW X5',
                'car_color' => 'Grey',
                'car_price' => 80000.00,
                'car_description' => 'SUV'
            ],
        ]);
    }
}
