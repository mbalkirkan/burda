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
        $categorys=['İş İlanları'=>'fa fa-bullhorn',
            'Cafe & Restoran'=>'fa fa-coffee',
            'Taksi'=>'fa fa-taxi',
            'Nakliye'=>'fa fa-truck',
            'Rent a Car'=>'fa fa-car',
            'Apart ve Yurtlar'=>'fa fa-university',
            'Kütüphane - Kitapevleri'=>'fa fa-book',
            'Çiğköfte'=>'fa fa-angle-right',
            'Sinemalar'=>'fa fa-video-camera',
            'Bisiklet Kirala'=>'fa fa-angle-right',
            'Çilingir'=>'fa fa-unlock',
            'Bilgisayar Tamiri'=>'fa fa-desktop',
            'Konserler'=>'fa fa-music',
            'Fotoğraf Çekinmelik Yerler'=>'fa fa-camera'];



        \App\ProductCategory::create([
            'name'=> 'Cafe & Restoran',
            'icon'=>'fa fa-coffee',
            'photo'=>'https://images.pexels.com/photos/3062752/pexels-photo-3062752.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260'
        ]);

        \App\ProductCategory::create([
            'name'=> 'Taksi',
            'icon'=>'fa fa-taxi',
            'photo'=>'https://images.pexels.com/photos/3062752/pexels-photo-3062752.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260'
        ]);

    }
}
