<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoriesName = ['Attualità','Sport','Sociale','Politica','Storia','Informatica'];

        foreach ($categoriesName as $categoryName){
            $newCategory = new Category();

            $newCategory->name = $categoryName;

            $newCategory->save();

        };
    }
}
