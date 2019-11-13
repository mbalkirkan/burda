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
        $categorys=['Cafe & Restoran','Taksi','Nakliye','Rent a Car','Apart ve Yurtlar','Kütüphane - Kitapevleri','Çiğköfte','Sinemalar','Bisiklet Kirala','Çilingir','Bilgisayar Tamiri','İş Yerleri','Konserler'];

        foreach ($categorys as $item)
        {
            \App\ProductCategory::create([
                'name'=>$item,
            ]);
        }


    }
}
