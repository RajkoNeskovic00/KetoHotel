<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PopustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $value=[5,10,20,30,40];
    public function run()
    {
        for ($i=0;$i<count($this->value);$i++) {
            \DB::table('popust')->insert([
                'value' => $this->value[$i]]);
        }
    }
}
