<?php

use Illuminate\Database\Seeder;
use App\Setting;
class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       Setting::create([
            'blog_name'=>'Aziz WA',
            'address' =>'Ludwigshafen',
            'facebook' =>'www.facebooke.com/none',
            'phone'   =>'01874539141'
        ]);
    }
}
