<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\FirebaseController;
use App\Models\Parking;

class AdminController extends Controller
{
    public function viewAdminDashboard(){
        return view('admin.dashboard',[
            'available_slots' => (new FirebaseController)->getAvailableSlots(),
            'total_earnings' => Parking::sum('grand_total'),
            'parkings' => Parking::latest()->get()
        ]);
    }
    public static function sms($number, $text){
        $url = "https://isms.mimsms.com/smsapi";
        $data = [
          "api_key" => "C200145763023f2451a9e0.97702620",
          "type" => "text",
          "contacts" => "$number",
          "senderid" => "8809601003450",
          "msg" => "$text",
        ];
      
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
        //dd($response);
    }
}
