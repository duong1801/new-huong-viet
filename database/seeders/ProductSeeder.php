<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'category_id' => '1',
            'name' => 'Fresh Red Chili',
            'slug' => 'Fresh Red Chili',
            'small_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum",
            'original_price' => 90000,
            'selling_price' =>  45000,
            'image' => 'https://htmldemo.net/angara/angara/img/product/50.jpg',
            'qty' => '20',
            'status' => 'out_of_stock',
            'trending' => '0',
        ]);
        Product::create([
            'category_id' => '2',
            'name' => 'Green Peas',
            'slug' => 'Green Peas',
            'small_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum",
            'original_price' => 98000,
            'selling_price' => 72000,
            'image' => 'https://htmldemo.net/angara/angara/img/product/51.jpg',
            'qty' => '20',
            'status' => 'stocking',
            'trending' => '0',
        ]);
        Product::create([
            'category_id' => '3',
            'name' => 'Bamboo Towel Set',
            'slug' => 'Bamboo Towel Set',
            'small_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum",
            'original_price' => 50000,
            'selling_price' => 25000,
            'image' => 'https://htmldemo.net/angara/angara/img/product/54.jpg',
            'qty' => '20',
            'status' => 'out_of_stock',
            'trending' => '1',
        ]);
        Product::create([
            'category_id' => '4',
            'name' => 'DHC Mineral Mask',
            'slug' => 'DHC Mineral Mask',
            'small_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum",
            'original_price' => 55000,
            'selling_price' => 33000,
            'image' => 'https://htmldemo.net/angara/angara/img/product/54.jpg',
            'qty' => '20',
            'status' => 'stocking',
            'trending' => '1',
        ]);
        Product::create([
            'category_id' => '2',
            'name' => 'The BEST ORGANIC',
            'slug' => 'The BEST ORGANIC',
            'small_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum",
            'original_price' => 250000,
            'selling_price' => 120000,
            'image' => 'https://htmldemo.net/angara/angara/img/product/55.jpg',
            'qty' => '20',
            'status' => 'stocking',
            'trending' => '1',
        ]);
        Product::create([
            'category_id' => '6',
            'name' => 'DHC Mineral Mask',
            'slug' => 'DHC Mineral Mask',
            'small_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum",
            'original_price' => 78000,
            'selling_price' => 65000,
            'image' => 'https://htmldemo.net/angara/angara/img/product/54.jpg',
            'qty' => '20',
            'status' => 'stocking',
            'trending' => '1',
        ]);
        Product::create([
            'category_id' => '5',
            'name' => 'DHC Mineral Mask',
            'slug' => 'DHC Mineral Mask',
            'small_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum",
            'original_price' =>190000,
            'selling_price' => 150000,
            'image' => 'https://htmldemo.net/angara/angara/img/product/54.jpg',
            'qty' => '20',
            'status' => 'stocking',
            'trending' => '1',
        ]);
    }
}
