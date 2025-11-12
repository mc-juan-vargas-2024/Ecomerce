<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{

    public function definition(): array
    {
        $brand = [
            'Apple',
            'Samsung',
            'Dell',
            'HP',
            'Lenovo',
            'Asus',
            'Acer',
            'Microsoft',
            'Sony',
            'LG',
            'Huawei',
            'Xiaomi',
            'Intel',
            'AMD',
            'NVIDIA',
            'Logitech',
            'Razer',
            'Corsair',
            'Kingston',
            'Seagate',
            'Western Digital',
            'Canon',
            'Nikon',
            'GoPro',
            'DJI',
            'Google',
            'OnePlus',
            'Motorola',
            'Alienware',
            'MSI',
        ];

        return [
            'name' => $this->faker->randomElement($brand),
        ];
    }
}