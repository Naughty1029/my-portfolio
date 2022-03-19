<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories_name = [
            'JavaScript',
            'PHP',
            'WordPress',
            'React',
            'TypeScript',
            'Laravel'
        ];

        foreach ($categories_name as $category_name) {
            $category = new Category();
            $category->category = $category_name;
            $category->save();
        }
    }
}
