<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Chèn dữ liệu mức "Sản phẩm" vào bảng categories và lấy ID của dòng vừa chèn
        DB::table('categories')->insert([
            [
                'category_name' => 'Giới Thiệu',
                'parent_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Sản Phẩm',
                'parent_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Tin Tức',
                'parent_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Blog',
                'parent_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Giáo Dục',
                'parent_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Phụ Kiện',
                'parent_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Cũ | Ký Gửi',
                'parent_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
