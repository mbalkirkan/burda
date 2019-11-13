<?php

use Illuminate\Database\Seeder;

class GalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Gallery::create([
            'name'=>'Ulubey Kanyonları',
            'featured_image'=>'https://live.staticflickr.com/5681/30434472441_14e155e4a8_k.jpg'
        ]);
        \App\Gallery::create([
            'name'=>'Clandras Köprüsü',
            'featured_image'=>'https://live.staticflickr.com/1859/30653816788_439a96a194_6k.jpg'
        ]);

        \App\Gallery::create([
            'name'=>'Taşyaran Vadisi',
            'featured_image'=>' https://live.staticflickr.com/7536/16189170905_d235248c7e_k.jpg'
        ]);
    }
}
