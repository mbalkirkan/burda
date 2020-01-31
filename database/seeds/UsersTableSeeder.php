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
        \App\User::create([
            'name'=>'Osman',
            'email'=>'orakosman9805@gmail.com',
            'password'=>bcrypt('Osman()'),
        ]);
        \App\User::create([
            'name'=>'Mehmet',
            'email'=>'mehmetyagc1643@gmail.com',
            'password'=>bcrypt('Mehmet()'),
        ]);
        \App\User::create([
            'name'=>'Ekrem',
            'email'=>'ekremalbayrak4399@gmail.com',
            'password'=>bcrypt('Ekrem()'),
        ]);
    }
}
