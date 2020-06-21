<?php

use App\Recipe;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recipe = Recipe::find(1);
        $recipe->image = "images/16705859.jpg";
        $recipe->save();
        
        $recipe = Recipe::find(2);
        $recipe->image = "images/21017234.jpg";
        $recipe->save();
        
        $recipe = Recipe::find(3);
        $recipe->image = "images/36556979.jpg";
        $recipe->save();
        
        $recipe = Recipe::find(4);
        $recipe->image = "images/45370816.jpg";
        $recipe->save();
        
        $recipe = Recipe::find(5);
        $recipe->image = "images/52377229.jpg";
        $recipe->save();
        
        $recipe = Recipe::find(6);
        $recipe->image = "images/66879705.jpg";
        $recipe->save();
        
        $recipe = Recipe::find(7);
        $recipe->image = "images/73875901.jpg";
        $recipe->save();
        
        $recipe = Recipe::find(8);
        $recipe->image = "images/81133716.jpg";
        $recipe->save();
        
        $recipe = Recipe::find(9);
        $recipe->image = "images/95543478.jpg";
        $recipe->save();
    }
}
