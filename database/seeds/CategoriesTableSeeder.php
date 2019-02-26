<?php

use Illuminate\Database\Seeder;
Use App\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1,5) as $c)
        {
            $category=Category::create(['category' => "Category {$c}"]);
            $products = [];
            foreach(range(1, rand(1,5)) as $s){
                $products[]=['product'=>  "Product{$c} {$s}"];
            }
                $category->products()->createMany($products);
        }
    }
}
