<?php

use Illuminate\Database\Seeder;

class JobCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr=['Muhasebe/Finans','Eğitim/Özel ders','Mühendis/Mimar','Giysi/Tekstil','Halkla ilişkiler','Tasarım/Geliştirici','Araştırma/Danışmanlık','Tıbbi/Eczacılık','Müzik ve Sanat','Pazarlama ve Satış','Üretim/Çalışan','Çeşitli'];

        for($i=0;$i<12;$i++){
            \App\JobCategory::create([
                'name'=>$arr[($i)],
                'photo'=>'jobs/images/icon/'.($i+1).'.png'
            ]);
        }

    }
}
