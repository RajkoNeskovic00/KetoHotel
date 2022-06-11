<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ManuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $name=['Home','About','Our room','Gallery','Blog','Contact us'];
    private $route=['home','about','room','gallery','blog','contact'];
    public function run()
    {
        for ($i=0;$i< count($this->name); $i++){
            \DB::table('manu')->insert([
                'name'=>$this->name[$i],
                'route'=>$this->route[$i]
            ]);
        }
    }
}
