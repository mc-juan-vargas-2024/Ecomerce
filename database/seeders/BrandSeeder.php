<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
   
    public function run(): void
    {   $mycategory1= new Brand();
        $mycategory1->name='apple';
        $mycategory1->save();
        Brand::factory(20)->create();
    }
}