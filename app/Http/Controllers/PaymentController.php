<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Keygen\Keygen;
use Paystack;
use App\User;
use App\Payments;
use App\Tickets;
use DB;
use Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\customerMail;

class PaymentController extends Controller
{
    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
     public function redirectToGateway()
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

     /**
     * Obtain Paystack payment information
     * @return void
     */
     public function handleGatewayCallback()
    {
        $user = Auth::user();
        $ticket = Keygen::numeric(10)->prefix('CM-')->generate();
        $ticket_check = DB::table('tickets')->where('ticket_code', $ticket)->count();
        if($ticket_check >= 1){
            $ticket = Keygen::numeric(11)->prefix('CM-')->generate();
        }
        $paymentDetails = Paystack::getPaymentData();
        $authorize = $paymentDetails['data']['authorization']['authorization_code'];
        if(Payments::where('auth_code', $authorize)->count() == 1){
            return redirect('/account/funds');
           
        }
    
    
        Payments::create([
                'user_id' => $user->id,
                'price' => $paymentDetails['data']['amount'],
                'auth_code' => $paymentDetails['data']['authorization']['authorization_code'],
                'user_code' => $paymentDetails['data']['customer']['customer_code'],
                'subscription_plan' => $paymentDetails['data']['metadata']['game_name'],
                'subscription' => 'Card',
                'status' => $paymentDetails['data']['status'],
                'reference' => $paymentDetails['data']['reference'],
              
        ]);
        Tickets::create([
                'user_id' => $user->id,
                'amount' => $paymentDetails['data']['amount'],
                'game_id' => $paymentDetails['data']['metadata']['game_id'],
                'ticket_code' => $ticket,
                'payment_method' => 'card',
              
              
        ]);
        // Mail::to($user->email)->send(new customerMail($user->first_name));
        Mail::send('emails.test',
        array(
                'name' => $user->first_name,
                'email' => $user->email,
                'subject' => "CM-petas Awoof Ticket",
                'user_message' => 'The following code '.$ticket.'is your ticket for the raffle draw'
            ), function($message)
        {
            $message->from('ticket@cmpetas.com');
            $message->to(Auth::user()->email)->subject('CM Awoof Land Ticket');
        });
      
        return redirect('/account/game')->with('message', ' Your payment successfully');;

    }
    
     public function Bankpay($id)
    {
        $user = Auth::user();
        $ticket = Keygen::numeric(10)->prefix('CM-')->generate();
        $ticket_check = DB::table('tickets')->where('ticket_code', $ticket)->count();
        if($ticket_check >= 1){
            $ticket = Keygen::numeric(11)->prefix('CM-')->generate();
        }
        $game_data = DB::table('lotteries')->where('code', $id)->first();
        $user_find = User::find($user->id);
        $user_find->acc_bal -= $game_data->price;
        $user_find->save();

        Tickets::create([
                'user_id' => $user->id,
                'amount' => $game_data->price,
                'game_id' => $game_data->id,
                'ticket_code' => $ticket,
                'payment_method' => 'Bank Transfer',   
              
        ]);
        Mail::send('emails.test',
        array( 'name' => $user->first_name,
                'email' => $user->email,
                'subject' => "CM-petas Awoof Ticket",
                'user_message' => 'The following code '.$ticket.'is your ticket for the raffle draw'), function($message)
        {
            $message->from('ticket@cmpetas.com');
            $message->to(Auth::user()->email)->subject('CM Awoof Land Ticket');
        });
      
        return redirect('/account/game')->with('message', ' Your payment successfully');

    }

     public function bank_transfer(Request $request)
    {
        
        $this->validate($request, [
            'bname' => [ 'string', 'required'],
            'amount' => [ 'numeric', 'required'],
            'imagep' => 'required|image|mimes:jpeg,png,jpg|max:8048',
           
        ]);

        $user = Auth::user();
        $ticket = Keygen::numeric(10)->prefix('CM-')->generate();
        $ticket_check = DB::table('tickets')->where('ticket_code', $ticket)->count();
        if($ticket_check >= 1){
            $ticket = Keygen::numeric(11)->prefix('CM-')->generate();
        }
      
        $imageName = time().'.'.$request->imagep->extension();  
   
        $request->imagep->move(public_path('/images/tellers'), $imageName);
    
        Payments::create([
                'user_id' => $user->id,
                'price' => $request->amount,
                'auth_code' =>  Keygen::alphanum(11)->generate(),
                'user_code' => Keygen::numeric(7)->generate(),
                'subscription' => 'Bank Transfer',
                'subscription_plan' => 'lotto',
                'bank_name' => $request->bname,
                'teller_img' =>  $imageName,
                'status' => 'Pending',
                'reference' => Keygen::alphanum(22)->generate(),
              
        ]);
        
      
        return redirect('/account/funds')->with('message', ' Your Teller was  successfull');;

    }


}
