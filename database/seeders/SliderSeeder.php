<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $images=['banner1.jpg','banner2.jpg','banner3.jpg'];
    private $alt=['hotelRoom','hotelView','pool'];
    public function run()
    {
        for ($i=0;$i<count($this->images); $i++)
        {
            \DB::table('slider')->insert([
               'image'=>$this->images[$i],
                'alt'=>$this->alt[$i],
                'currently_active'=>1
            ]);
        }
    }
}
