<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UlogaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $value=["Admin",'Korisnik'];
    public function run()
    {
        for ($i=0;$i<count($this->value);$i++) {
            \DB::table('uloge')->insert([
                'name' => $this->value[$i]]);
        }
    }
}
