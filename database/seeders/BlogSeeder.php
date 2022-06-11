<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $images=['blog1.jpg','blog2.jpg','blog3.jpg'];
    private $alt=['swwimingPool','hotel','hotelRoom'];
    private $title=['Enjoy in the music','Reception at the hotel','The best hotel room'];
    private $sub_title=['Swwiming pool','Inside the hotel','Comfortable bed'];
    private $desc=['Expect a night swimming party every night in front of the hotel',
                    'At the entrance of the hotel there is a reception and the staff is very pleasant',
                    'On the tenth floor, there is a room that everyone says is the best, and people is ratings show that'];

    public function run()
    {
        for ($i=0;$i<count($this->images); $i++){
            \DB::table('blogs')->insert([
                'image'=>$this->images[$i],
                'alt'=>$this->alt[$i],
                'title'=>$this->title[$i],
                'sub_title'=>$this->sub_title[$i],
                'description'=>$this->desc[$i],
            ]);
        }
    }
}
