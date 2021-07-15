<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function __construct()
    {
        $this->middleware('player');
    }
    public function index()
    {
        // return view('home');
    }
    public function account_funds()
    {
        $user = Auth::user();
        if($user->first_name == null){
            return redirect('account/profile/edit');
        }
        $payments= DB::table('payments')->where('user_id', $user->id)->get();
        return view('dashboard.funds_page', compact('payments', 'user'));
    }
    public function tellerUpload()
    {
        $user = Auth::user();
        if($user->first_name == null){
            return redirect('account/profile/edit');
        }
        $payments= DB::table('payments')->where('user_id', $user->id)->get();
        return view('dashboard.teller', compact('payments', 'user'));
    }
    public function games()
    {
        $user = Auth::user();
        if($user->first_name == null){
            return redirect('account/profile/edit');
        }

        $game_active = DB::table('tickets')
        ->join('lotteries', 'game_id', '=', 'lotteries.id')
        ->where('user_id', $user->id)
        ->select('tickets.*','lotteries.title','lotteries.code', 'lotteries.price', 'lotteries.enddate','lotteries.startdate')
        ->get();
        
        return view('dashboard.game', compact('user', 'game_active' ));
    }
    public function checkout($id)
    {
        $user = Auth::user();
        if($user->first_name == null){
            return redirect('account/profile/edit');
        }

        $game_data = DB::table('lotteries')->where('code', $id)->first();
        if(!$game_data){
            return back();
        }
        return view('dashboard.checkout', compact('user', 'game_data'));
    }
    public function bankcheckout($id)
    {
        $user = Auth::user();
        if($user->first_name == null){
            return redirect('account/profile/edit');
        }

        $game_data = DB::table('lotteries')->where('code', $id)->first();
        if(!$game_data){
            return back();
        }
        return view('dashboard.bank_transfer', compact('user', 'game_data'));
    }
    public function profile()
    {
        $user = Auth::user();
        if($user->first_name == null){
            return redirect('account/profile/edit');
        }

        return view('dashboard.profile',  compact('user',));
    }
    public function profileEdit()
    {
        $user = Auth::user();
        return view('dashboard.profile_update',  compact('user',));
    }

    public function updateUser(Request $request, $id)
    {
        $user = Auth::user();
        // dd('y');
        $this->validate($request, [
            'phone' => [ 'string', 'max:11'],
            'lname' => [ 'string', 'required'],
            'fname' => [ 'string', 'required'],
            'sex' => [ 'string', 'required'],
            'dob' => [ 'string', 'required'],
            'address' => [ 'string', 'required'],
            'city' => [ 'string', 'required'],
            'state' => [ 'string', 'required'],
            'zip' => [ 'string', 'required'],
        ]);
        
        $data = User::find($id);
        if($data->email == $request->email){

        }else{
            $this->validate($request, [
                'email' => [ 'string', 'email', 'max:255', 'unique:users'],
            ]);
            $data->email = $request->email;
        }
        $data->phone = $request->phone;
        $data->first_name = $request->fname;
        $data->last_name = $request->lname;
        $data->email = $request->email;
        $data->dob = $request->dob;
        $data->sex = $request->sex;
        $data->address = $request->address;
        $data->city = $request->city;
        $data->state = $request->state;
        $data->zip = $request->zip;
       
        $data->save();
        
        return redirect('/')->with('message', ' profile updated successfully');
        
    }

    public function mail()
    {
        $name = 'Krunal';
        Mail::to('krunal@appdividend.com')->send(new SendMailable($name));
        
        return 'Email was sent';
    }
}
