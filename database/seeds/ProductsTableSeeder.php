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
             'featured_image'=>'https://scontent.fist7-2.fna.fbcdn.net/v/t1.0-9/52833025_2082510851835035_6121824166405472256_n.jpg?_nc_cat=102&_nc_oc=AQnW-261tVXmOra6VOwqJTJIOCREoeD3X8vIvxerWRQO1MAsvjxvcy0hbGIYQD2ATZs&_nc_ht=scontent.fist7-2.fna&oh=9b2aae4c8ec5d9f4663bf8f384904ac9&oe=5E47495E',
            'phone'=>'5558998123',
            'address'=>'Yok mahallesi yok sokak no 1',
            'product_category_id'=>1
        ]);

        \App\Product::create([
            'name'=>'Hashtag Cafe',
            'description'=>'Sanatla İç İçe',
            'featured_image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ9ooXoorR0whflTG81H2EPS8BRzbiETfOFxMo4pNTIQhobCkO2',
            'phone'=>'5558998123',
            'address'=>'Yok mahallesi yok sokak no 1',
             'product_category_id'=>1
        ]);

        \App\Product::create([
            'name'=>'Özsüt Cafe',
            'description'=>'Geleneksel Lezzetler Durağı',
            'featured_image'=>'http://www.yeniisfikirleri.net/wp-content/uploads/2016/06/ozsut-bayilik.jpg',
            'phone'=>'5558998123',
            'address'=>'Yok mahallesi yok sokak no 1',
             'product_category_id'=>1
        ]);
    }
}
