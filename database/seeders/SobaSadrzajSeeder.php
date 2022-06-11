<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SobaSadrzajSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $sadrzaj_smestaj=[1,2,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18];
    private $soba=[1,2,4,5,6,7,8,9,10];
    public function run()
    {
        for ($i=0;$i<count($this->sadrzaj_smestaj);$i++) {
            \DB::table('soba_sadrzaj')->insert([
                'id_sadrzaj_smestaj'=>$this->sadrzaj_smestaj[array_rand($this->sadrzaj_smestaj, 1)],
                'id_soba'=>$this->soba[array_rand($this->soba, 1)],


            ]);
        }
    }
}
