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
        return view('home.index', compact('lottos','user'));
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
