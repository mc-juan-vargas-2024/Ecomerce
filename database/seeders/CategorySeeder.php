<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mycategory1= new Category();
        $mycategory1->name='Electronics';
        $mycategory1->save();
        $mycategory2= new Category();
        $mycategory2->name='Phones';
        $mycategory2->save();
        $mycategory3= new Category();
        $mycategory3->name='Tv';
        $mycategory3->save();

        Category::factory(10)->create();
    }
}
