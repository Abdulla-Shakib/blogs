<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $current_time = now();
        $items = [
            [
                "category_id" => 1,
                "name" => 'Shirt',
                "note" => 'Colourful',
                "status" => 1,
                "created_at" => $current_time,
                "updated_at" => $current_time,
            ],
            [
                "category_id" => 1,
                "name" => 'Pant',
                "note" => 'Black Color',
                "status" => 1,
                "created_at" => $current_time,
                "updated_at" => $current_time,
            ],
            [
                "category_id" => 1,
                "name" => 'T-Shirt',
                "note" => '',
                "status" => 1,
                "created_at" => $current_time,
                "updated_at" => $current_time,
            ],
            [
                "category_id" => 1,
                "name" => 'Jacket',
                "note" => '',
                "status" => 1,
                "created_at" => $current_time,
                "updated_at" => $current_time,
            ],
            [
                "category_id" => 1,
                "name" => 'Shoe',
                "note" => '',
                "status" => 1,
                "created_at" => $current_time,
                "updated_at" => $current_time,
            ],
            [
                "category_id" => 1,
                "name" => 'Money Bag',
                "note" => '',
                "status" => 1,
                "created_at" => $current_time,
                "updated_at" => $current_time,
            ],
            [
                "category_id" => 1,
                "name" => 'Wrist Watch',
                "note" => '',
                "status" => 1,
                "created_at" => $current_time,
                "updated_at" => $current_time,
            ],
            [
                "category_id" => 1,
                "name" => 'Belt',
                "note" => '',
                "status" => 1,
                "created_at" => $current_time,
                "updated_at" => $current_time,
            ],
            [
                "category_id" => 1,
                "name" => 'Sunglass',
                "note" => '',
                "status" => 1,
                "created_at" => $current_time,
                "updated_at" => $current_time,
            ],
            [
                "category_id" => 2,
                "name" => 'Borkha',
                "note" => '',
                "status" => 1,
                "created_at" => $current_time,
                "updated_at" => $current_time,
            ],
            [
                "category_id" => 2,
                "name" => 'Hijab',
                "note" => '',
                "status" => 1,
                "created_at" => $current_time,
                "updated_at" => $current_time,
            ],
            [
                "category_id" => 2,
                "name" => 'Three Pieces',
                "note" => '',
                "status" => 1,
                "created_at" => $current_time,
                "updated_at" => $current_time,
            ],
            [
                "category_id" => 2,
                "name" => 'One Piece',
                "note" => '',
                "status" => 1,
                "created_at" => $current_time,
                "updated_at" => $current_time,
            ],
            [
                "category_id" => 2,
                "name" => 'Two Pieces',
                "note" => '',
                "status" => 2,
                "created_at" => $current_time,
                "updated_at" => $current_time,
            ],
            [
                "category_id" => 3,
                "name" => 'Toy',
                "note" => '',
                "status" => 1,
                "created_at" => $current_time,
                "updated_at" => $current_time,
            ],
            [
                "category_id" => 3,
                "name" => 'T-shirt',
                "note" => '',
                "status" => 1,
                "created_at" => $current_time,
                "updated_at" => $current_time,
            ],
        ];
        SubCategory::insert($items);
    }
}
