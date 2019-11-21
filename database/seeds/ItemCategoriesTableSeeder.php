<?php

use Illuminate\Database\Seeder;

class ItemCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\ItemCategory::create([
            'name'=>'Ana Yemekler'
        ]);
        \App\ItemCategory::create([
            'name'=>'Ara Sıcaklar'
        ]);
       \App\ItemCategory::create([
          'name'=>'İçecekler'
       ]);
        \App\ItemCategory::create([
            'name'=>'Nargile'
        ]);
    }
}
