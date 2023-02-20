<?php

namespace App\Http\Controllers;

use App\Models\Parking;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    public function viewDashboard(){
        return view('user.dashboard');
    }
    public function viewLoginPage(){
        return view('user.login');
    }
    
    public function login_validate(Request $request){
        $request->validate([
            'mobile' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);
        $credintials = $request->only('mobile', 'password');
        if(Auth::attempt($credintials)){
            $request->session()->regenerate();
            return redirect('/client-dashboard');
        }
        return redirect('/login')->withErrors('Incorrect Username Or Password');
    }
    public function logout(Request $request){
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
    
    public function viewRegPage(){
        return view('user.register');
    }
    
    public function register_validate(Request $request){
        $request->validate([
            'full_name' => ['required', 'string'],
            'mobile' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);
        $user = User::create([
            'full_name' => $request->full_name,
            'mobile' => $request->mobile,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/login')->withSuccess('Incorrect Username Or Password');
    }
    
    public function viewReserve(){
        return view('user.new-reserve');
    }
    
    public function reserve(Request $request){
        $request->validate([
            // 'full_name' => ['required', 'string'],
            // 'mobile' => ['required', 'string'],
            // 'password' => ['required', 'string'],
        ]);
        $slot = (new FirebaseController)->getFreeSlotNo();
        if($slot == 0){
            return back()->withErrors('Sorry No Slot available');
        }else{
            $user = Parking::create([
                'user_id' => Auth::user()->id,
                'vehicle_type' => $request->vehicle_type,
                'vehicle_number' => $request->vehicle_number,
                'entry_time' => $request->entry_time,
                'exit_time' => $request->exit_time,
                'extra_service' => $request->extra_service,
                'slot_no' => $slot,
            ]);
            return redirect()->route('confirmation',$user->id);
        }
    }
    
    public function viewConfirmation($id){
        $parking = Parking::find($id);
        $start = date_create($parking['entry_time']);
        $end = date_create($parking['exit_time']);
        $diff = date_diff($end, $start);
        $min =  ($diff->d * 24 * 60 + $diff->h * 60 + $diff->i);
        
        $grand_total = $min/60 * 30;
        return view('user.confirmation',[
            'parking' => Parking::find($id),
            'min' => $min 
        ]);
    }
    public function confirm(Request $request,$id){
        $parking = Parking::find($id);
        $token = rand(1231,7879);
        $parking->update([
            'grand_total' => $request->grand_total,
            'entry_code' => $token
        ]);
        $slot = $parking->slot_no;
        $text = "Thank you for booking. Entry Code: '$token'. Slot: '$slot'. URL: https://parking.atsbd.net/entry";
        AdminController::sms(Auth::user()->mobile, $text);
        return redirect()->route('success',$parking->id);
        
    }
    
    public function success($id){
        $parking = Parking::find($id);
        return view('user.success',[
            'parking' => $parking
        ]);
    }
    
    public function viewEntry(){
        return view('user.entry');
    }
    
    public function entry(Request $request){
        $parking = Parking::where('entry_code', $request->entry_code)->first();
        // dd($parking);
        if($parking != null){
            date_default_timezone_set('Asia/Dhaka');
            $now = Carbon::now();
            $end   = Carbon::parse($parking->exit_time);
            $slot = $parking->slot_no;
            if ($now->gt($end)) {
                return redirect('/entry')->withErrors('Expired Code');
            }else{
                (new FirebaseController)->openGate();
                return redirect('/entry')->withSuccess("Welcome! Opening Gate. Your Parking Slot is: $slot");
            }
        }else{
            return redirect('/entry')->withErrors('Incorrect Code');
        }
    }
}
