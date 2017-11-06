<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients');
        factory(App\Entities\Clients::class)->create ([


            'name' => 'Elizabeth',
            'nit' => '7198937',
            'email' => 'ely@gmail.com',
            'phone' => '70228912',
            'address' =>'Barrio Juan XXIII',
        ]);
        factory(App\Entities\Clients::class,15) -> create ();
    }
}
