<?php

use Illuminate\Database\Seeder;

class ProductTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_types');
        factory(App\Entities\ProductType::class)->create ([
            'name' => 'Cocina',
            'details' => 'Muebles de madera que pueden ser utilizados en la cocina',
        ]);
        factory(App\Entities\ProductType::class)->create (array(
            'name' => 'Dormitorio',
            'details' => 'Muebles para dormitorio, por ejemplo camas, repisas, comodas, etc',
        ));
        factory(App\Entities\ProductType::class)->create ([
            'name' => 'Baño',
            'details' => 'Muebles y marcos de espejos para baño',
        ]);
        factory(App\Entities\ProductType::class)->create ([
            'name' => 'Salones',
            'details' => 'Muebles que pueden ser adquiridos para usar en salones',
        ]);
        factory(App\Entities\ProductType::class)->create ([
            'name' => 'Puertas y Portones',
            'details' => 'Puertas para interiores y exteriores, como tambien portones externos',
        ]);

    }
}
