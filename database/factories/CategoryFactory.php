<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{

    public function definition(): array
    {
        $category = [
            'Computers and Laptops',
            'Mobile Phones and Tablets',
            'Electronic Accessories',
            'Audio and Video',
            'Consoles and Video Games',
            'PC Components',
            'Networking and Internet',
            'Gadgets and Wearables',
            'Peripherals',
            'Monitors',
            'Storage ',
            'Printers and Scanners',
            'Cameras and Photography',
            'Drones',
            'Smart Home Devices',
        ];
        return [
            'name' => $this->faker->randomElement($category),
        ];
    }
}