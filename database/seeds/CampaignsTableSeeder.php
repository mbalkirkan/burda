<?php

use Illuminate\Database\Seeder;

class CampaignsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Campaign::create([
            'name'=>'Kampanya 1',
            'featured_image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRkX0Bi0OfyVuuMrwCp9h7ygcTK-o8GPjRUl0DE1yGsm0ryZVd5'
        ]);
        \App\Campaign::create([
            'name'=>'Kampanya 2',
            'featured_image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQpiVQPzt-syEwUJktpcPSw96ivDI2xeSVepqeceZ-Kqens_S0t'
        ]);
    }
}
