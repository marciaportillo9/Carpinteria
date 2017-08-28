<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')-> truncate();
        factory(App\User::class)->create ([
            'name' => 'Marcia',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('admin')
        ]);
        factory(App\User::class,5) -> create ();
    }
}
