<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products');
        factory(App\Product::class)->create ([

            'name' =>'mesa',
            'quantity'=>'2',
            'unit_price'=>'450',
            'state' =>'1',
            'details'=>'pequeña',
            'product_types_id'=>'1',
        ]);
        factory(App\Product::class)->create ([

            'name' =>'cama',
            'quantity'=>'1',
            'unit_price'=>'2000',
            'state' =>'1',
            'details'=>'Madera de cedro',
            'product_types_id'=>'2',
        ]);
        factory(App\Product::class)->create ([

            'name' =>'puerta de cocina',
            'quantity'=>'5',
            'unit_price'=>'1000',
            'state' =>'1',
            'details'=>'Metro y medio x 2 metros',
            'product_types_id'=>'5',
        ]);

       // factory(App\Product::class,15) -> create ();
    }
}
