<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use DB;
class HomeController extends Controller
{
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
    */

    public function index()
    {
        $user = Auth::user();
        $lottos =  DB::table("lotteries")->get();
        $winners =  DB::table("winners")->select('winners.user_id', 'winners.game_id', 'users.username')
        ->join('users', 'users.id','=','winners.user_id')->get();
        return view('home.index', compact('lottos','user', 'winners'));
    }

    public function lottery($id){
        $user = Auth::user();
        $lotto =  DB::table("lotteries")->where('code', $id)->first();
        if(!$lotto){
            return back();
        }
        return view('home.lottery', compact('lotto', 'user'));
    }


}
