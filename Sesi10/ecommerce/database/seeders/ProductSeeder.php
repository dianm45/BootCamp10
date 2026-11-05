<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Headphone Wireless',
                'description' => 'Headphone wireless berkualitas tinggi.',
                'price' => 250000,
                'stock' => 10,
                'category' => 'Elektronik',
            ],
            [
                'name' => 'Smartwatch',
                'description' => 'Jam tangan pintar dengan fitur modern.',
                'price' => 450000,
                'stock' => 15,
                'category' => 'Elektronik',
            ],
            [
                'name' => 'Kaos Basic',
                'description' => 'Kaos basic nyaman untuk sehari-hari.',
                'price' => 85000,
                'stock' => 20,
                'category' => 'Fashion',
            ],
            [
                'name' => 'Buku HTML dan CSS',
                'description' => 'Buku panduan belajar web development.',
                'price' => 120000,
                'stock' => 12,
                'category' => 'Buku',
            ],
        ]);
    }
}