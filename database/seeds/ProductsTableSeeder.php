<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Product::create([
            'name'=>'Cafe Latte Heykel',
             'description'=>'Nargilenin Başkenti',
             'featured_image'=>'assets/frontend/pages/img/products/k2.jpg',
            'phone'=>'5558998123',
            'address'=>'Yok mahallesi yok sokak no 1',
            'product_category_id'=>2,
            'photos'=>'[{"description":"Çok güzel Çokk","photo":"https://www.anadoluhayat.com.tr/img_content/46dfc_latte_3.jpg"},{"description":"deniyoruz be reis","photo":"https://cdn.yemek.com/mncrop/500/333/uploads/2015/04/latte.jpg"}]'
        ]);

        \App\Product::create([
            'name'=>'Hashtag Cafe',
            'description'=>'Sanatla İç İçe',
            'featured_image'=>'assets/frontend/pages/img/products/k2.jpg',
            'phone'=>'5558998123',
            'address'=>'Yok mahallesi yok sokak no 1',
             'product_category_id'=>2,
            'photos'=>'[{"description":"Çok güzel Çokk","photo":"https://www.anadoluhayat.com.tr/img_content/46dfc_latte_3.jpg"},{"description":"deniyoruz be reis","photo":"https://cdn.yemek.com/mncrop/500/333/uploads/2015/04/latte.jpg"}]'
        ]);

        \App\Product::create([
            'name'=>'Özsüt Cafe',
            'description'=>'Geleneksel Lezzetler Durağı',
            'featured_image'=>'assets/frontend/pages/img/products/k2.jpg',
            'phone'=>'5558998123',
            'address'=>'Yok mahallesi yok sokak no 1',
             'product_category_id'=>2,
            'photos'=>'[{"description":"Çok güzel Çokk","photo":"https://www.anadoluhayat.com.tr/img_content/46dfc_latte_3.jpg"},{"description":"deniyoruz be reis","photo":"https://cdn.yemek.com/mncrop/500/333/uploads/2015/04/latte.jpg"}]'
        ]);
    }
}
