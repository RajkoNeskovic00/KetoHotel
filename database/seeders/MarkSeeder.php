<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $value=[3,4,5,6,7];
    public function run()
    {
        for ($i=0;$i<count($this->value);$i++) {
            \DB::table('mark')->insert([
                'value' => $this->value[$i]]);
        }
    }
}
