<?php

use Illuminate\Database\Seeder;

class ProductCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorys=['Cafe & Restoran'=>'fa fa-coffee','Taksi'=>'fa fa-taxi','Nakliye'=>'fa fa-truck','Rent a Car'=>'fa fa-car','Apart ve Yurtlar'=>'fa fa-university','Kütüphane - Kitapevleri'=>'fa fa-book','Çiğköfte'=>'fa fa-angle-right','Sinemalar'=>'fa fa-video-camera','Bisiklet Kirala'=>'fa fa-angle-right','Çilingir'=>'fa fa-unlock','Bilgisayar Tamiri'=>'fa fa-desktop','İş Yerleri'=>'fa fa-institution','Konserler'=>'fa fa-music','Fotoğraf Çekinmelik Yerler'=>'fa fa-camera'];



        foreach ($categorys as $key=>$item)
        {
            \App\ProductCategory::create([
                'name'=>$key,
                'icon'=>$item
            ]);
        }


    }
}
