<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name'=> 'Bolts and Screws']);
        Category::create(['name'=> 'Bulbs and Lighting']);
        Category::create(['name'=> 'Cable wires and Steel wires']);
        Category::create(['name'=> 'Concrete Mixtures']);
        Category::create(['name'=> 'Fittings']);
        Category::create(['name'=> 'Nails']);
        Category::create(['name'=> 'Paints and Coating']);
        Category::create(['name'=> 'Pipes and PVCs']);
        Category::create(['name'=> 'Plywoods and Roofs']);
        Category::create(['name'=> 'Tools and Equipments']);
        Category::create(['name'=> 'Wood and Steelbars']);
        
        
    }
}
