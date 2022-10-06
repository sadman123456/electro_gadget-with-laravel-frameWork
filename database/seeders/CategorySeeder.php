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
        Category::create([
                'name'=>'laptop',
                'description'=>'brand new mid range Gaming Laptop',
            ]);
            Category::create([
                'name'=>'computer',
                'description'=>'brand new mid range Gaming Computer',
            ]);
            Category::create([
                'name'=>'Mobile',
                'description'=>'brand new mid range Gaming Mobile',
            ]);

    }
<<<<<<< HEAD
  
=======
>>>>>>> 5fce14271685b22aa9827a44104ebe5bee3505cc
}
