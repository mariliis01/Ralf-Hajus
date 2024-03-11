<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Huulepulk',
            'price' => 9.99,
            'image' => 'path/to/image1.jpg',
        ]);
         Product::create([
            'name' => 'Laovärv',
            'price' => 9.99,
            'image' => 'path/to/image2.jpg',
        ]);
        Product::create([
            'name' => 'Jumestuskreem',
            'price' => 9.99,
            'image' => 'path/to/image3.jpg',
        ]);
        Product::create([
            'name' => 'Silmapliiats',
            'price' => 9.99,
            'image' => 'path/to/image4.jpg',
        ]);
        Product::create([
            'name' => 'Põsepuna',
            'price' => 9.99,
            'image' => 'path/to/image5.jpg',
        ]);
        Product::create([
            'name' => 'Highlighter',
            'price' => 9.99,
            'image' => 'path/to/image6.jpg',
        ]);
        Product::create([
            'name' => 'Kreem',
            'price' => 9.99,
            'image' => 'path/to/image7.jpg',
        ]);
        Product::create([
            'name' => 'Toonik',
            'price' => 9.99,
            'image' => 'path/to/image8.jpg',
        ]);
        Product::create([
            'name' => 'Silmakreem',
            'price' => 9.99,
            'image' => 'path/to/image9.jpg',
        ]);
    }
    }
