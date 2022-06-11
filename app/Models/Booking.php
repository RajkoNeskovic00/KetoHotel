<?php

namespace App\Models;

use App\Http\Requests\RoomBookingStore;

class Booking
{

    public function reservedRoom(RoomBookingStore $request)
    {

        return \DB::table('reservations')
            ->insertGetId([
                'broj_rezervacije'=>rand(1,10000),
                'datumOd'=>$request->input('dateIn'),
                "datumDo"=>$request->input('dateOut'),
                'vreme_rezervacije'=>new \DateTime(),
                "id_korisnika"=>auth()->user()->id_korisnika,
                "id_soba"=>$request->input('id')
            ]);
    }
}
