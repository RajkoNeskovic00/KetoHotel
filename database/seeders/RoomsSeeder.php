<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $name=['DOUBLE ROOM','SUPERIOR ROOM','SUPERIOR TWIN ROOM','SUPERIOR FAMILY ROOM','DELUXE ROOM','DELUXE FAMILY ROOM','ONE-BEDROOM SUITE','TWO-BEDROOM SUITE'];
    private $desc=['Double room of 30-32m2. It is equipped with a double bed (dimensions 200x180cm), a sofa and a separate bathroom with underfloor heating. The position of these rooms allows guests a view of the Konake and the Malo Jezero trail.',
                    'Superior room of 32m2, equipped with a double bed (dimensions 200x180cm), sofa bed (dimensions 180x120) and a separate bathroom with underfloor heating. The position of these rooms allows guests a view of the top of Pančići and a view of the Konake and the trail Malo Jezero. There is a possibility of connected rooms for certain accommodation units of this type.',
                   'Superior twin room of 32m2, equipped with two single beds (dimensions 200x100), sofa bed (dimensions 180x120), and a separate bathroom with underfloor heating. The position of these rooms allows guests a view of the top of Pančići and a view of the Konake and the trail Malo Jezero. There is a possibility of connected rooms for certain accommodation units of this type.',
                    'Superior room of 34 m2, equipped with a double bed (dimensions 200x180cm), a spacious sofa bed (dimensions 180x140) and a separate bathroom with underfloor heating. The position of these rooms allows guests a view of the top of Pančići and a view of the Konake and the trail Malo Jezero.',
                    'Deluxe room površine 35m2, opremljena je francuskim ležajem (dimenzije 200x180cm), sofom na razvalčenje (dimenzije 180x120cm) i odvojenim kupatilom sa podnim grejanjem. Pozicija ovih soba omogućuje gostima pogled na vrh Pančića i pogled na Konake.',
                    'Deluxe room of 42m2, equipped with a double bed (dimensions 200x180cm), a spacious sofa bed (dimensions 180x120cm) and a separate bathroom with underfloor heating. The position of these rooms allows guests a view of the top of Pančići and a view of the Konake.',
                    'The apartments are 55 m2 in size and consist of a spacious living room with a sofa (dimensions 180x140cm) that can serve as an extra bed and bedrooms equipped with a double bed (dimensions 180x200cm). The bedroom has a separate bathroom with underfloor heating. In the living room there is a separate toilet with underfloor heating.',
                    'The apartments have an area of 100m2 and consist of a spacious living room with a sofa (dimensions 180x140cm), table, chairs and a practical kitchen and two bedrooms equipped with a double bed (dimensions 200x180cm). The apartment has two separate bathrooms with underfloor heating. One room has its own bathroom, while the other room and living room share one bathroom. The apartment has a terrace.'];
    private $cat=[2,3,2,5,4,4,1,2];
    private $mark=[1,2,3,4,5,3,2,4];
    public function run()
    {
        for ($i=0;$i<count($this->name);$i++) {
            \DB::table('rooms')->insert([
                'name'=>$this->name[$i],
                'description'=>$this->desc[$i],
                'id_cat'=>$this->cat[$i],
                'id_mark'=>$this->mark[$i]
            ]);
        }
    }
}
