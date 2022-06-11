<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SadrzajSmestajSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $sad_sme=['Free wi-fi','French bed / two separate beds','Bath coat and slippers','Lcd tv','Phone','Well equipped mini bar','Personal safety',
        'Bathroom with shower cabin','Fen','Temperature control system','Slippers','Bed on request','Washing and ironing clothes on request',
        'Additional pillows and covers on request','Extensible sofa','Coffee / tea set up','Newspapers and magazines','Additional pillows and covers on request'];
    public function run()
    {
        for ($i=0;$i<count($this->sad_sme);$i++) {
            \DB::table('sadrzaj_smestaj')->insert([
                'naziv'=>$this->sad_sme[$i]
            ]);
        }
    }
}
