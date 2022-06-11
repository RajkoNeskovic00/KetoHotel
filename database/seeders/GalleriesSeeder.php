<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GalleriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $images=['gallery1.jpg','gallery2.jpg','gallery3.jpg','gallery4.jpg','gallery5.jpg','gallery6.jpg','gallery7.jpg','gallery8.jpg'];
    private $alt=['loby','redRoom','nightRoom','wedingRoom','seaRoom','bussinesRoom','eleganceRoom','doubleRoom'];
    public function run()
    {
        for($i=0;$i<count($this->images);$i++){
            \DB::table('galleries')->insert([
                'image'=>$this->images[$i],
                'alt'=>$this->alt[$i],
            ]);
        }
    }
}
