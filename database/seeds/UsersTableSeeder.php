<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
        'name'=>'Muhammet',
            'email'=>'hbmemati@gmail.com',
            'password'=>bcrypt('03mematiM()'),
        ]);
    }
}
