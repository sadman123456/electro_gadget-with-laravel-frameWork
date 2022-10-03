<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                Product::factory(1000)->create();

        
        // DB::table('products')->insert([
        //     'name'=>'asus',
        //     'model'=>'asus507',
        //     'description'=>'brand new mid range Gaming Laptop',
        //     'sale_price'=>'27000',
        //     'purchase_price'=>'25000',
        //     'category'=>'laptop',
        //     'quantity'=>'50'

        // ]);

        // Product::create([
        //         'name'=>'lenevo',
        //         'model'=>'RZ507',
        //         'description'=>'brand new mid range Gaming Laptop',
        //         'sale_price'=>'27000',
        //         'purchase_price'=>'25000',
        //         'category'=>'laptop',
        //         'quantity'=>'50'
    
        //     ]);

    }
}
