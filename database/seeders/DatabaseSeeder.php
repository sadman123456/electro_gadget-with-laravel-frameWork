<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use Database\Factories\ProductFactory;
use Database\Factories\OrderFactory;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ProductSeeder::class,
            CategorySeeder::class,
            OderSeeder::class,
            RoleSeeder::class
         
        ]);

        // DB::table('products')->insert([
        //     'name'=>'asus',
        //     'model'=>'asus507',
        //     'description'=>'brand new mid range Gaming Laptop',
        //     'sale_price'=>'27000',
        //     'purchase_price'=>'25000',
        //     'category'=>'laptop',
        //     'quantity'=>'50'

        // ]);

        // product::create([
        //         'name'=>'lenevo',
        //         'model'=>'RZ507',
        //         'description'=>'brand new mid range Gaming Laptop',
        //         'sale_price'=>'27000',
        //         'purchase_price'=>'25000',
        //         'category'=>'laptop',
        //         'quantity'=>'50'
    
        //     ]);


        //  \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
