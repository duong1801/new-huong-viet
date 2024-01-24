<?php

namespace Database\Seeders;

use App\Models\Category;
use Faker\Provider\Lorem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'SPORTSWEAR',
            'slug' => 'sportswear',
            'parent_id' => '0',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit',
            'image' => 'https://htmldemo.net/angara/angara/img/banner/32.jpg'
        ]);

        Category::create([
            'name' => 'NIKE',
            'slug' => 'nike',
            'parent_id' => '1',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit',
            'image' => 'https://htmldemo.net/angara/angara/img/banner/32.jpg'
        ]);
        Category::create([
            'name' => 'UNDER ARMOUR',
            'slug' => 'under-armour',
            'parent_id' => '1',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit',
            'image' => 'https://htmldemo.net/angara/angara/img/banner/32.jpg'
        ]);

        Category::create([
            'name' => 'Men',
            'slug' => 'men',
            'parent_id' => '0',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit',
            'image' => 'https://htmldemo.net/angara/angara/img/banner/32.jpg'
        ]);

        Category::create([
            'name' => 'FENDI',
            'slug' => 'fendi',
            'parent_id' => '4',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit',
            'image' => 'https://htmldemo.net/angara/angara/img/banner/32.jpg'
        ]);
        Category::create([
            'name' => 'GUESS',
            'slug' => 'guess',
            'parent_id' => '4',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit',
            'image' => 'https://htmldemo.net/angara/angara/img/banner/32.jpg'
        ]);
    }
}
