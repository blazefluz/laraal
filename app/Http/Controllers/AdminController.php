<?php

namespace App\Http\Controllers;

use App\User;
use App\Lottery;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Payments;
use Keygen\Keygen;
use File;
use Carbon\Carbon;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    use UploadTrait;
    public function __construct()
    {
        $this->middleware('admin');
    }
    
    public function index()
    {
        $user = Auth::user();
        $lottery = Lottery::all();
        return view('admin.index', compact('user','lottery'));
    }
    public function users()
    {
        $user = Auth::user();
        $userslist =  DB::table("users")->paginate(20);
        return view('admin.users', compact('user', 'userslist'));
        
    }

    public function payments()
    {
        $user = Auth::user();
        $payments =  DB::table("payments")->join('users', 'users.id', '=', 'payments.user_id')->paginate(10);

        return view('admin.payments', compact('user', 'payments'));   
    }


    public function verify_payment(Request $request )
    {
        $user = User::find($request->userId);
        if($user->acc_bal == null){
            $user->acc_bal = $request->amount;
        }else{

            $user->acc_bal += $request->amount;
        }
        $user->save();

        $payment = Payments::find($request->payment_id);
        $payment->status = 'success';
        $payment->save();


        return redirect()->back();   
    }
    

    public function addUser()
    {
        $user = Auth::user();
       
        return view('admin.addUser', compact('user'));
        
    }
    public function createUser(Request $request)
    {
        $user = Auth::user();
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:11'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        User::create([
            'name' => $request['name'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => 1,
        ]);
        return redirect('/admin/users');
        
    }

    public function editUser($id)
    {
        $user = Auth::user();
        $data = User::find($id);
        return view('admin.editUser', compact('user','data'));
        
    }
    public function updateUser(Request $request, $id)
    {
        $user = Auth::user();
        $this->validate($request, [
            'name' => [ 'string', 'max:255'],
            'phone' => [ 'string', 'max:11'],
        ]);
        $data = User::find($id);
        if($data->email == $request->email){

        }else{
            $this->validate($request, [
                'email' => [ 'string', 'email', 'max:255', 'unique:users'],
            ]);
            $data->email = $request->email;
        }
        $data->name = $request->name;
        $data->phone = $request->phone;
       
        $data->save();
        
        return redirect('admin/users');
        
    }
    public function banUser($id)
    {
        $user = Auth::user();
        $data = User::find($id);
        if($data->role == 1){
            $data->role = 0;
            $data->status = 2;
        }else if($data->role == 0){
            $data->role = 1;
            $data->status = 1;
        }
        $data->save();
        return redirect()->back()->with("message");
        
    }
  

    // public function deleteUser($id)
    // {
    //     $plan = User::where('id', $id)->delete();

    //     return redirect()->back()->with("message");
        
    // }

    function settings(){
       $user = Auth::user();
       return view('admin.settings', compact('user'));
    }

    public function lotto(){
        $user = Auth::user();
        $lotteries = Lottery::get();
        return view('admin.lotteries', compact('user', 'lotteries'));
    }

    public function addlotto(){
        $user = Auth::user();
        return view('admin.addlotto', compact('user'));
    }

    public function lottoSave(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'title' => 'required',
            'category' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'price' => 'required',
            'max_play' => 'required',
            'no_winners' => 'required',
            'bimage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cimage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'desc' => 'required',
            ]);
        
        if ($request->has('bimage')) {
            $image = $request->file('bimage');
            $name = Str::slug($request->input('bimage')).'_'.time().rand(998879999, 104500);
            $folder = '/images/thumbnails/';
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public', $name);
            $bimage = $name. '.' . $image->getClientOriginalExtension();
        }
        if ($request->has('cimage')) {
            $image1 = $request->file('cimage');
            $name1 = Str::slug($request->input('cimage')).'icon_'.time().rand(99999999, 1000);
            $folder1 = '/images/icon/';
            $filePath1 = $folder1 . $name1. '.' . $image1->getClientOriginalExtension();
            $this->uploadOne($image1, $folder1, 'public', $name1);
            $cimage = $name1. '.' . $image1->getClientOriginalExtension();
        }

        $unique_lottery_code = Keygen::numeric(10)->generate();
    //   dd($request);
        Lottery::create([
            'title' => $request['title'],
            'code' => $unique_lottery_code,
            'category' => $request['category'],
            'startdate' =>  Carbon::create($request['startdate']),
            'enddate' =>  Carbon::create($request['enddate']),
            'price' => $request['price'],
            'max_play' => $request['max_play'],
            'no_winners' => $request['no_winners'],
            'banner_img' => $bimage,
            'icon_img' => $cimage,
            'desc' => $request['desc'],
            'status' => $request['publish'],
        ]);
  
        return redirect('/admin/lotteries');
    }

    public function editlotto($id)
    {
        $user = Auth::user();
        $data = Lottery::find($id);
        return view('admin.editlotto', compact('user','data'));
        
    }

    public function updateLotto(Request $request, $id)
    {
        $user = Auth::user();
        $this->validate($request, [
            'title' => ['required','string', 'max:255'],
            'category' => ['required'],
            'price' => ['required'],
            'max_play' => ['required'],
            'no_winners' => ['required'],
            'publish' => ['required'],
            'startdate' => ['required'],
            'enddate' => ['required'],
        ]);
        $data = Lottery::find($id);
        $data->title = $request->title;
        $data->category = $request->category;
        $data->price = $request->price;
        $data->max_play = $request->max_play;
        $data->no_winners = $request->no_winners;
        $data->status = $request->publish;
        $data->desc = $request->desc;
        $data->startdate = Carbon::create($request->startdate);
        $data->enddate = Carbon::create($request->enddate);
       
        $data->save();
        
        return redirect('admin/lotteries');
    }

    public function deleteLotto($id){
        $user = Auth::user();
        $lottery = DB::table("lotteries")->where([['id',$id]])->first();
        // $image1 = $this->deleteOne('images/thumbnails', 'public', $lottery->banner_img);
        // $image2 = $this->deleteOne('images/icon', 'public', $lottery->icon_img);
        $path = public_path() . '/images/thumbnails/' . $lottery->banner_img;
        $path2 = public_path() . '/images/icon/' . $lottery->icon_img;
        if (file_exists($path)) {
            File::delete($path);
        }
        if (file_exists($path2)) {
            File::delete($path2);
        }
        $delete = DB::table("lotteries")->where([['id',$id]])->delete();
     
        return redirect()->back()->with("message");
    }

    public function impersonate($id)
    {       
        Auth::logout(); // for end current session
        Auth::loginUsingId($id);

        return redirect()->to('/');
    }
    
}
