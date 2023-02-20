<?php

namespace App\Http\Controllers;

use App\Models\Parking;
use Illuminate\Http\Request;

class FirebaseController extends Controller
{
    public $database;

    public function __construct()
    {
        $this->database = app('firebase.database');
    }
    public function getData(){
        dd($this->database->getReference('motor/status')->set('0')->getValue());
    }
    public function enableCarWash(){
        $this->database->getReference('motor/status')->set(1);
        return back();
    }
    public function enableCarWashClient($id){
        $this->database->getReference('motor/status')->set(1);
        $parking = Parking::find($id);
        $parking->update([
            'extra_service' => 3
        ]);
        return back();
    }
    public function disableCarWashClient($id){
        $this->database->getReference('motor/status')->set(0);
        $parking = Parking::find($id);
        $parking->update([
            'extra_service' => 2
        ]);
        return back();
    }
    public function disableCarWash(){
        $this->database->getReference('motor/status')->set(0);
        return back();
    }
    public function openGate(){
        $this->database->getReference('gates/status')->set(1);
        return back();
    }

    public function getAvailableSlots(){
        $slot1 = $this->database->getReference('irsensor/sensor1')->getValue();
        $slot2 =  $this->database->getReference('irsensor/sensor2')->getValue();
        $slot3 =  $this->database->getReference('irsensor/sensor3')->getValue();
        return $slot1 + $slot2 + $slot3;
    }
    public function getFreeSlotNo(){
        $slot1 = $this->database->getReference('irsensor/sensor1')->getValue();
        $slot2 =  $this->database->getReference('irsensor/sensor2')->getValue();
        $slot3 =  $this->database->getReference('irsensor/sensor3')->getValue();

        if($slot1 == 0){
            return 1;
        }else if($slot2 == 0){
            return 2;
        }else if($slot3 == 0){
            return 3;
        }else{
            return 0;
        }
    }
}
