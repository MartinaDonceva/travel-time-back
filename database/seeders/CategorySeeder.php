<?php

namespace Database\Seeders;

use App\Models\Category;
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
        collect([
            [
                'name' => 'Планини'
            ],
            [
                'name' => 'Езера'
            ],
            [
                'name' => 'Реки'
            ],
            [
                'name' => 'Градови'
            ]
        ])->each(function ($category) {
            return Category::create([
                'name' => $category['name']
            ]);
        });
    }
}
