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
            'photo'=>'https://images.pexels.com/photos/314374/pexels-photo-314374.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260'
        ]);

        \App\ProductCategory::create([
            'name'=> 'Nakliye',
            'icon'=>'fa fa-truck',
            'photo'=>'https://images.pexels.com/photos/2199293/pexels-photo-2199293.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'
        ]);

        \App\ProductCategory::create([
            'name'=> 'Rent a Car',
            'icon'=>'fa fa-car',
            'photo'=>'https://images.pexels.com/photos/164634/pexels-photo-164634.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'
        ]);
        \App\ProductCategory::create([
            'name'=> 'Apart ve Yurtlar',
            'icon'=>'fa fa-university',
            'photo'=>'https://images.pexels.com/photos/129494/pexels-photo-129494.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'
        ]);
        \App\ProductCategory::create([
            'name'=> 'Bisiklet Kirala',
            'icon'=>'fa fa-angle-right',
            'photo'=>'https://images.pexels.com/photos/100582/pexels-photo-100582.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'
        ]);

        \App\ProductCategory::create([
            'name'=> 'Çilingir',
            'icon'=>'fa fa-unlock',
            'photo'=>'https://images.pexels.com/photos/792031/pexels-photo-792031.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'
        ]);

        \App\ProductCategory::create([
            'name'=> 'Bilgisayar Tamiri',
            'icon'=>'fa fa-desktop',
            'photo'=>'https://images.pexels.com/photos/577585/pexels-photo-577585.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'
        ]);
    }
}
