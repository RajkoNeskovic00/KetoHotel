<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $value=["Single room","Double room","Triple room",'Four-bed room','Five-bed room'];

    public function run()
    {
        for ($i=0;$i< count($this->value); $i++) {
            \DB::table('category')->insert([
                'name' => $this->value[$i]

            ]);
        }
    }
}
