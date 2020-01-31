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
            'featured_image'=>'https://images.pexels.com/photos/3220846/pexels-photo-3220846.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'
        ]);
        \App\Campaign::create([
            'name'=>'Kampanya 2',
            'featured_image'=>'https://i.hizliresim.com/r0qLbP.png'
        ]);
    }
}
