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
        $current_time = now();
        $items = [
            [
                "name" => 'Men',
                "note" => '',
                "status" => 1,
                "created_at" => $current_time,
                "updated_at" => $current_time,
            ],
            [
                "name" => 'Women',
                "note" => 'Over 21',
                "status" => 1,
                "created_at" => $current_time,
                "updated_at" => $current_time,
            ],
            [
                "name" => 'Children',
                "note" => '',
                "status" => 1,
                "created_at" => $current_time,
                "updated_at" => $current_time,
            ],
            [
                "name" => 'Baby',
                "note" => 'Babies',
                "status" => 2,
                "created_at" => $current_time,
                "updated_at" => $current_time,
            ]
        ];
        Category::insert($items);
    }
}
