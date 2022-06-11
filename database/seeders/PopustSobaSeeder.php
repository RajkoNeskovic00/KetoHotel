<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PopustSobaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $soba=[1,2,4,5,6,7,8,9,10];
    private $popust=[1,2,3,4,5];
    public function run()
    {
        for ($i=0;$i<count($this->soba);$i++) {
            \DB::table('popust_soba')->insert([
                'id_popust'=>$this->popust[array_rand($this->popust, 1)],
                'id_soba'=>$this->soba[$i],
                'date'=>date('Y-m-d H:i:s')

            ]);
        }
    }
}
