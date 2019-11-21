<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \App\Item::create([
           'name'=>'Coca Cola',
           'description'=>'Buz Gibi Coca Cola',
           'featured_image'=>'',
           'category_id'=>'3',
           'price'=>'4',
           'product_id'=>'1'
       ]);
        \App\Item::create([
            'name'=>'Karpuz - Çilek',
            'description'=>'Ferahlatır',
            'featured_image'=>'',
            'category_id'=>'4',
            'price'=>'30',
            'product_id'=>'1'
        ]);
        \App\Item::create([
            'name'=>'İskender Kebap',
            'description'=>'Bursa İskenderi halt etmiş',
            'featured_image'=>'',
            'category_id'=>'1',
            'price'=>'20',
            'product_id'=>'1'
        ]);
    }
}
