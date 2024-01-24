<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Slider;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::create([
            'title' => 'ceramic',
            'content' => 'Get cooking with pro tools',
            'text_color' => '#fff',
            'url_btn' => '/',
            'content_btn' => 'Buy Now',
            'image' => 'https://htmldemo.net/angara/angara/img/slider/1.jpg',
        ]);
        Slider::create([
            'title' => 'ceramic',
            'content' => 'Get cooking with pro tools',
            'text_color' => '#fff',
            'url_btn' => '/',
            'content_btn' => 'Buy Now',
            'image' => 'https://htmldemo.net/angara/angara/img/slider/2.jpg',
        ]);
        Slider::create([
            'title' => 'ceramic',
            'content' => 'Get cooking with pro tools',
            'text_color' => '#fff',
            'url_btn' => '/',
            'content_btn' => 'Buy Now',
            'image' => 'https://htmldemo.net/angara/angara/img/slider/7.jpg',
        ]);
        Slider::create([
            'title' => 'ceramic',
            'content' => 'Get cooking with pro tools',
            'text_color' => '#fff',
            'url_btn' => '/',
            'content_btn' => 'Buy Now',
            'image' => 'https://htmldemo.net/angara/angara/img/slider/6.jpg',
        ]);
    }
}
