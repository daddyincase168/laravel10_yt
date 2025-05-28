<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                "product_name" => "Oppo Reno 7",
                "quantity" => 2,
                "price" => 100.00,
                "desciption" => "This is oppo reno 7",
                "created_at" => now(),
                "updated_at"=> now(),
            ],
            [
                "product_name" => "Oppo Reno 8",
                "quantity" => 4,
                "price" => 120.00,
                "desciption" => "This is oppo reno 8",
                "created_at" => now(),
                "updated_at"=> now(),
            ],
            [
                "product_name" => "Iphone 12",
                "quantity" => 2,
                "price" => 300.00,
                "desciption" => "This is Iphone 12",
                "created_at" => now(),
                "updated_at"=> now(),
            ],
            [
                "product_name" => "Iphone 13",
                "quantity" => 3,
                "price" => 350.00,
                "desciption" => "This is iphone 13",
                "created_at" => now(),
                "updated_at"=> now(),
            ],
            [
                "product_name" => "Iphone 16",
                "quantity" => 1,
                "price" => 700.00,
                "desciption" => "This is iphone 16",
                "created_at" => now(),
                "updated_at"=> now(),
            ],
        ];

        DB::table("products")->insert($products);
    }
}
