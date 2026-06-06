<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Kyc;
use App\Models\Plan;
use App\Models\User;
use App\Models\Bot;
use App\Models\BotHistory;
use App\Models\Profit;
use GuzzleHttp\Client;
use App\Models\Account;
use App\Models\Deposit;
use App\Models\Earning;
use App\Models\Bonus;
use App\Models\Traders;
use App\Models\Refferal;
use App\Models\Transfer;
use App\Mail\supportEmail;
use App\Models\Investment;
use App\Models\Withdrawal;
use App\Models\Debitprofit;
use App\Models\Transaction;
use App\Models\verifyToken;
use Illuminate\Http\Request;
use App\Mail\VerificationEmail;
use App\Mail\userBuyAccountEmail;
use App\Models\TransferHistory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{




    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
      
                    
                    // $client = new Client();
                    // $response = $client->get('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
                    // $data = json_decode($response->getBody(), true);
                    // $price = $data['bpi']['USD']['rate_float'];

                   
                    $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
                    $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
                    $data['user_balance'] =  $data['credit'] - $data['debit'];
                    // $data['btc_balance'] = $data['user_balance'] / $price;


                    $data['deposit'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->sum('amount');
                    $data['withdrawal'] = Withdrawal::where('user_id', Auth::user()->id)->sum('amount');
                     $data['bonus'] = Bonus::where('user_id', Auth::user()->id)->sum('amount');
                    $data['addprofit'] = Profit::where('user_id', Auth::user()->id)->sum('amount');
                    $data['debitprofit'] = Debitprofit::where('user_id', Auth::user()->id)->sum('amount');
                    $data['profit'] = $data['addprofit'] - $data['debitprofit'];
                    $data['earning'] = Earning::where('user_id', Auth::user()->id)->sum('amount');
                    // $data['plan'] = Plan::where('user_id',Auth::user()->id)->sum('amount');
                    $data['referral'] = Refferal::where('user_id', Auth::user()->id)->sum('amount');
                    $data['balance'] = $data['profit'] + $data['deposit'] + $data['earning'] + $data['referral'] - $data['withdrawal'];
                    return view('dashboard.home', $data);
                
                


            } else {
                $result    = DB::table('users')->where('usertype', '0')->get();
                return view('admin.home', compact('result'));
            }
        } else {
            return redirect()->back();
        }
    }





    public function dashboard()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {


//                     $client = new Client();
// $response = $client->get('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd');
// $data = json_decode($response->getBody(), true);
// $price = $data['bitcoin']['usd'];

                    
                                      
                    $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
                    $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
                    $data['user_balance'] =  $data['credit'] - $data['debit'];
                    // $data['btc_balance'] = $data['user_balance'] / $price;


                    $data['deposit'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->sum('amount');
                    $data['withdrawal'] = Withdrawal::where('user_id', Auth::user()->id)->sum('amount');
                     $data['bonus'] = Bonus::where('user_id', Auth::user()->id)->sum('amount');
                    $data['addprofit'] = Profit::where('user_id', Auth::user()->id)->sum('amount');
                    $data['debitprofit'] = Debitprofit::where('user_id', Auth::user()->id)->sum('amount');
                    $data['profit'] = $data['addprofit'] - $data['debitprofit'];
                    $data['earning'] = Earning::where('user_id', Auth::user()->id)->sum('amount');
                    // $data['plan'] = Plan::where('user_id',Auth::user()->id)->sum('amount');
                    $data['referral'] = Refferal::where('user_id', Auth::user()->id)->sum('amount');
                    $data['balance'] = $data['profit'] + $data['deposit'] + $data['earning'] + $data['referral'] - $data['withdrawal'];
                    return view('dashboard.home', $data);
                
            } else {
                $result    = DB::table('users')->where('usertype', '0')->get();
                return view('admin.home', compact('result'));
            }
        } else {
            return redirect()->back();
        }
    }
    public function userDeposit()
    {
        // $client = new Client();
        // $response = $client->get('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
        // $data = json_decode($response->getBody(), true);
        // $price = $data['bpi']['USD']['rate_float'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        // $data['btc_balance'] = $data['user_balance'] / $price;
        $data['payment'] = DB::table('users')->where('id', '4')->get();
        return view('auth.passwords.reload', $data);
    }



    public function Transfer()
    {

        $client = new Client();
$response = $client->get('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd');
$data = json_decode($response->getBody(), true);
$price = $data['bitcoin']['usd'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;
        return view('dashboard.transfer', $data);
    }


    public function activateAccount()
    {

//         $client = new Client();
// $response = $client->get('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd');
// $data = json_decode($response->getBody(), true);
// $price = $data['bitcoin']['usd'];


        
        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        // $data['btc_balance'] = $data['user_balance'] / $price;


        if (Auth::user()->user_status == '1') {
      
                    
            // $client = new Client();
            // $response = $client->get('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
            // $data = json_decode($response->getBody(), true);
            // $price = $data['bpi']['USD']['rate_float'];

           
                                      
                    $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
                    $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
                    $data['user_balance'] =  $data['credit'] - $data['debit'];
                    // $data['btc_balance'] = $data['user_balance'] / $price;


                    $data['deposit'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->sum('amount');
                    $data['withdrawal'] = Withdrawal::where('user_id', Auth::user()->id)->sum('amount');
                     $data['bonus'] = Bonus::where('user_id', Auth::user()->id)->sum('amount');
                    $data['addprofit'] = Profit::where('user_id', Auth::user()->id)->sum('amount');
                    $data['debitprofit'] = Debitprofit::where('user_id', Auth::user()->id)->sum('amount');
                    $data['profit'] = $data['addprofit'] - $data['debitprofit'];
                    $data['earning'] = Earning::where('user_id', Auth::user()->id)->sum('amount');
                    // $data['plan'] = Plan::where('user_id',Auth::user()->id)->sum('amount');
                    $data['referral'] = Refferal::where('user_id', Auth::user()->id)->sum('amount');
                    $data['balance'] = $data['profit'] + $data['deposit'] + $data['earning'] + $data['referral'] - $data['withdrawal'];
                    return view('dashboard.home', $data);
        


    }elseif(Auth::user()->user_status == '2') {
     
        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        // $data['btc_balance'] = $data['user_balance'] / $price;


        $data['deposit'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->sum('amount');
        $data['withdrawal'] = Withdrawal::where('user_id', Auth::user()->id)->sum('amount');
        $data['addprofit'] = Profit::where('user_id', Auth::user()->id)->sum('amount');
        $data['debitprofit'] = Debitprofit::where('user_id', Auth::user()->id)->sum('amount');
        $data['profit'] = $data['addprofit'] - $data['debitprofit'];
        $data['earning'] = Earning::where('user_id', Auth::user()->id)->sum('amount');
        // $data['plan'] = Plan::where('user_id',Auth::user()->id)->sum('amount');
        $data['referral'] = Refferal::where('user_id', Auth::user()->id)->sum('amount');
        $data['balance'] = $data['profit'] + $data['deposit'] + $data['earning'] + $data['referral'] - $data['withdrawal'];
        return view('dashboard.suspended_account', $data);
    


}

    

        return view('dashboard.activate_account', $data);
    }
    
    
    
      public function suspendAccount()
    {

       $client = new Client();
$response = $client->get('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd');
$data = json_decode($response->getBody(), true);
$price = $data['bitcoin']['usd'];


        
        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;

     


        $data['deposit'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->sum('amount');
        $data['withdrawal'] = Withdrawal::where('user_id', Auth::user()->id)->sum('amount');
        $data['addprofit'] = Profit::where('user_id', Auth::user()->id)->sum('amount');
        $data['debitprofit'] = Debitprofit::where('user_id', Auth::user()->id)->sum('amount');
        $data['profit'] = $data['addprofit'] - $data['debitprofit'];
        $data['earning'] = Earning::where('user_id', Auth::user()->id)->sum('amount');
        // $data['plan'] = Plan::where('user_id',Auth::user()->id)->sum('amount');
        $data['referral'] = Refferal::where('user_id', Auth::user()->id)->sum('amount');
        $data['balance'] = $data['profit'] + $data['deposit'] + $data['earning'] + $data['referral'] - $data['withdrawal'];
        return view('dashboard.suspended_account', $data);
    


}




public function tradeTools()
    {

        $client = new Client();
$response = $client->get('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd');
$data = json_decode($response->getBody(), true);
$price = $data['bitcoin']['usd'];


        
        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;

     


        $data['deposit'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->sum('amount');
        $data['withdrawal'] = Withdrawal::where('user_id', Auth::user()->id)->sum('amount');
        $data['addprofit'] = Profit::where('user_id', Auth::user()->id)->sum('amount');
        $data['debitprofit'] = Debitprofit::where('user_id', Auth::user()->id)->sum('amount');
        $data['profit'] = $data['addprofit'] - $data['debitprofit'];
        $data['earning'] = Earning::where('user_id', Auth::user()->id)->sum('amount');
        // $data['plan'] = Plan::where('user_id',Auth::user()->id)->sum('amount');
        $data['referral'] = Refferal::where('user_id', Auth::user()->id)->sum('amount');
        $data['balance'] = $data['profit'] + $data['deposit'] + $data['earning'] + $data['referral'] - $data['withdrawal'];
        return view('dashboard.trade_tools', $data);
    


}

    


public function escrowAccount()
    {

      
        $client = new Client();
$response = $client->get('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd');
$data = json_decode($response->getBody(), true);
$price = $data['bitcoin']['usd'];


        $response2 = $client->get('https://api.coingecko.com/api/v3/simple/price', [
            'query' => [
                'ids' => 'ethereum',
                'vs_currencies' => 'usd',
            ],
        ]);
        // Decode the JSON response
        $data2 = json_decode($response2->getBody(), true);
        $price2 = $data2['ethereum']['usd'];



        
        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;
        $data['eth_balance'] = $data['user_balance'] / $price2;
     


        $data['deposit'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->sum('amount');
        $data['withdrawal'] = Withdrawal::where('user_id', Auth::user()->id)->sum('amount');
        $data['addprofit'] = Profit::where('user_id', Auth::user()->id)->sum('amount');
        $data['debitprofit'] = Debitprofit::where('user_id', Auth::user()->id)->sum('amount');
        $data['profit'] = $data['addprofit'] - $data['debitprofit'];
        $data['earning'] = Earning::where('user_id', Auth::user()->id)->sum('amount');
        // $data['plan'] = Plan::where('user_id',Auth::user()->id)->sum('amount');
        $data['referral'] = Refferal::where('user_id', Auth::user()->id)->sum('amount');
        $data['balance'] = $data['profit'] + $data['deposit'] + $data['earning'] + $data['referral'] - $data['withdrawal'];
        return view('dashboard.escrow_account', $data);
    


}






public function icmProtect()
    {

        $client = new Client();
$response = $client->get('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd');
$data = json_decode($response->getBody(), true);
$price = $data['bitcoin']['usd'];


        
        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;

     


        $data['deposit'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->sum('amount');
        $data['withdrawal'] = Withdrawal::where('user_id', Auth::user()->id)->sum('amount');
        $data['addprofit'] = Profit::where('user_id', Auth::user()->id)->sum('amount');
        $data['debitprofit'] = Debitprofit::where('user_id', Auth::user()->id)->sum('amount');
        $data['profit'] = $data['addprofit'] - $data['debitprofit'];
        $data['earning'] = Earning::where('user_id', Auth::user()->id)->sum('amount');
        // $data['plan'] = Plan::where('user_id',Auth::user()->id)->sum('amount');
        $data['referral'] = Refferal::where('user_id', Auth::user()->id)->sum('amount');
        $data['balance'] = $data['profit'] + $data['deposit'] + $data['earning'] + $data['referral'] - $data['withdrawal'];
        return view('dashboard.icm_protect', $data);
    


}



public function Copy()
{
    $client = new Client();
$response = $client->get('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd');
$data = json_decode($response->getBody(), true);
$price = $data['bitcoin']['usd'];

    $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
    $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
    $data['user_balance'] =  $data['credit'] - $data['debit'];
    $data['btc_balance'] = $data['user_balance'] / $price; 
    $data['traders']  = Traders::get();
    return view('dashboard.trade', $data);
}



public function Trade()
    {

        $client = new Client();
$response = $client->get('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd');
$data = json_decode($response->getBody(), true);
$price = $data['bitcoin']['usd'];


        
        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;

     


        $data['deposit'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->sum('amount');
        $data['withdrawal'] = Withdrawal::where('user_id', Auth::user()->id)->sum('amount');
        $data['addprofit'] = Profit::where('user_id', Auth::user()->id)->sum('amount');
        $data['debitprofit'] = Debitprofit::where('user_id', Auth::user()->id)->sum('amount');
        $data['profit'] = $data['addprofit'] - $data['debitprofit'];
        $data['earning'] = Earning::where('user_id', Auth::user()->id)->sum('amount');
        // $data['plan'] = Plan::where('user_id',Auth::user()->id)->sum('amount');
        $data['referral'] = Refferal::where('user_id', Auth::user()->id)->sum('amount');
        $data['balance'] = $data['profit'] + $data['deposit'] + $data['earning'] + $data['referral'] - $data['withdrawal'];
        $data['traders']  = Traders::get();
        return view('dashboard.trade', $data);
    


}

    





   
    public function WithdrawalCommisionCode()
    {

        $client = new Client();
$response = $client->get('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd');
$data = json_decode($response->getBody(), true);
$price = $data['bitcoin']['usd'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;
        return view('dashboard.withdrawal-commision-code', $data);
    }


    public function WithdrawalTaxCode()
    {

        $client = new Client();
$response = $client->get('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd');
$data = json_decode($response->getBody(), true);
$price = $data['bitcoin']['usd'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;
        return view('dashboard.withdrawal-tax-code', $data);
    }



   






    public function makeTransfer(Request $request)
    {
        $method = $request->input('mode');
        $data['method'] = $method;
        $data['deposit'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->sum('amount');
        $data['withdrawal'] = Withdrawal::where('user_id', Auth::user()->id)->sum('amount');
        $data['transfer'] = Transfer::where('user_id', Auth::user()->id)->sum('amount');
        $data['addprofit'] = Profit::where('user_id', Auth::user()->id)->sum('amount');
        $data['debitprofit'] = Debitprofit::where('user_id', Auth::user()->id)->sum('amount');
        $data['profit'] = $data['addprofit'] - $data['debitprofit'];
        $data['earning'] = Earning::where('user_id', Auth::user()->id)->sum('amount');
        $data['plan'] = Plan::where('user_id', Auth::user()->id)->sum('amount');
        $data['referral'] = Refferal::where('user_id', Auth::user()->id)->sum('amount');
        $data['balance'] = $data['profit'] + $data['deposit'] + $data['earning'] + $data['referral'] - $data['withdrawal'] - $data['plan'];
        
        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];

        if ($data['user_balance'] <= '0') {
            return redirect('transfer')->with('status', 'Your Balance Is Insufficient');
        }
        $transaction_id = rand(76503737, 12344994);
        $trans = new TransferHistory;
        $trans->transaction_id = $transaction_id;
        $trans->user_id = Auth::user()->id;
        $trans->amount = $request['amount'];
        $trans->mode = $request['mode'];
        $trans->wallet_address = $request['wallet_address'];
        // $method = $request->input('method');
        // $data['method']=$method;
        $trans->save();


        $transaction = new Transaction;
        $transaction->user_id = Auth::user()->id;
        $transaction->transaction_id = $transaction_id;
        $transaction->transaction_type = "Debit";
        $transaction->transaction = "debit";
        $transaction->credit = "0";
        $transaction->debit = $request['amount'];
        $transaction->status = 0;
        $transaction->save();
        return redirect('transfer')->with('status', 'Transfer Successful, Please wait for approval');
    }
























    public function Crypto_buy()
    {

        $client = new Client();
$response = $client->get('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd');
$data = json_decode($response->getBody(), true);
$price = $data['bitcoin']['usd'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;
        return view('dashboard.crypto_buy', $data);
    }

    public function Legal()
    {

        // $client = new Client();
        // $response = $client->get('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
        // $data = json_decode($response->getBody(), true);
        // $price = $data['bpi']['USD']['rate_float'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        // $data['btc_balance'] = $data['user_balance'] / $price;
        return view('dashboard.legal', $data);
    }






     public function Terms()
    {

        // $client = new Client();
        // $response = $client->get('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
        // $data = json_decode($response->getBody(), true);
        // $price = $data['bpi']['USD']['rate_float'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        // $data['btc_balance'] = $data['user_balance'] / $price;
        return view('dashboard.terms', $data);
    }



    public function Profile()
    {

        // $client = new Client();
        // $response = $client->get('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
        // $data = json_decode($response->getBody(), true);
        // $price = $data['bpi']['USD']['rate_float'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        // $data['btc_balance'] = $data['user_balance'] / $price;
        return view('dashboard.profile', $data);
    }




    public function Kyc()
    {


        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        // $data['btc_balance'] = $data['user_balance'] / $price;
        return view('dashboard.kyc', $data);
    }



public function connectBot(Request $request)
{
    // Step 1: Validate Request
    $validated = $request->validate([
        'bot_id'    => 'required|string',
        'name'      => 'required|string',
        // 'level'      => 'required|string',
        'category'  => 'required|string',
        'price'     => 'required|numeric',
        'rating'    => 'nullable|numeric',
    ]);

    // Step 2: Get Authenticated User
    $user = Auth::user();

    // Step 3: Calculate Real-Time Balance
    $credit = Transaction::where('user_id', $user->id)->where('status', 1)->sum('credit');
    $debit = Transaction::where('user_id', $user->id)->where('status', 1)->sum('debit');
    $balance = $credit - $debit;

    // Step 4: Insufficient Balance Check
    if ($balance < $validated['price']) {
        return back()->with('error', '❌ Your balance is insufficient to connect to this bot.');
    }

    // Step 5: Generate Unique Transaction ID
    $transaction_id = rand(10000000, 99999999);

    // Step 6: Create Bot History
    BotHistory::create([
        'user_id'        => $user->id,
        'bot_id'         => $validated['bot_id'],
        'name'           => $validated['name'],
        'category'       => $validated['category'],
        'price'          => $validated['price'],
        // 'level'          => $validated['level'],
        'rating'         => $validated['rating'] ?? null,
        'transaction_id' => $transaction_id,
    ]);

    // Step 7: Log Debit Transaction
    Transaction::create([
        'user_id'          => $user->id,
        'transaction_id'   => $transaction_id,
        'debit'            => $validated['price'],
        'credit'           => 0,
        'transaction_type' => 'Debit',
        'transaction'      => 'debit',
        'type'             => 'Bot Connection',
        'status'           => 1,
        'description'      => 'Connected to bot: ' . $validated['name'],
    ]);

    return back()->with('success', '✅ Bot connected successfully!');
}

    
    public function Buybot()
    {
        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['bot']  = Bot::get();
        return view('dashboard.bot', $data);
    }



    
    public function UserRefer()
    {

        // $client = new Client();
        // $response = $client->get('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
        // $data = json_decode($response->getBody(), true);
        // $price = $data['bpi']['USD']['rate_float'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        // $data['btc_balance'] = $data['user_balance'] / $price;
        return view('dashboard.refer', $data);
    }





    public function Photo()
    {

        // $client = new Client();
        // $response = $client->get('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
        // $data = json_decode($response->getBody(), true);
        // $price = $data['bpi']['USD']['rate_float'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        // $data['btc_balance'] = $data['user_balance'] / $price;
        return view('dashboard.photo', $data);
    }

    public function supportTicket()
    {

        $client = new Client();
$response = $client->get('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd');
$data = json_decode($response->getBody(), true);
$price = $data['bitcoin']['usd'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;
        return view('dashboard.support', $data);
    }

    public function Bonus()
    {

       $client = new Client();
$response = $client->get('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd');
$data = json_decode($response->getBody(), true);
$price = $data['bitcoin']['usd'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;
        return view('dashboard.bonus', $data);
    }






    public function accounthistory()
    {

       $client = new Client();
$response = $client->get('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd');
$data = json_decode($response->getBody(), true);
$price = $data['bitcoin']['usd'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;
        $data['deposit'] =  Deposit::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        $data['withdrawal'] =  Withdrawal::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        $data['earning'] =  Earning::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();

        return view('dashboard.accounthistory', $data);
    }




  public function Bothistory()
    {


        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        // $data['btc_balance'] = $data['user_balance'] / $price;
        $data['deposit'] =  Deposit::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        $data['withdrawal'] =  Withdrawal::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        $data['bot'] =   BotHistory::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();

        return view('dashboard.bot-history', $data);
    }



    public function purchasehistory()
    {

       $client = new Client();
$response = $client->get('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd');
$data = json_decode($response->getBody(), true);
$price = $data['bitcoin']['usd'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;
        $data['deposit'] =  Deposit::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        $data['withdrawal'] =  Withdrawal::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        $data['plan'] =  Plan::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();

        return view('dashboard.purchase-history', $data);
    }








    public function tradingHistory()
    {

        // $data['profit'] =  Earning::where('user_id',Auth::user()->id)->where('type', 'ROI')->orderBy('id','desc')->get();

       $client = new Client();
$response = $client->get('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd');
$data = json_decode($response->getBody(), true);
$price = $data['bitcoin']['usd'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;
        return view('dashboard.tradinghistory', $data);
    }
    public function Earning()
    {

       $client = new Client();
$response = $client->get('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd');
$data = json_decode($response->getBody(), true);
$price = $data['bitcoin']['usd'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;

        return view('dashboard.earnings', $data);
    }
    public function buyaccount()
    {

        // $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        // $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        // $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        // $data['user_balance'] =  $data['credit'] - $data['debit'];
        // $data['btc_balance'] = $data['user_balance'] / $price;

        $data['XRP'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->where('payment_method', 'XRP')  ->sum('amount'); 
        $data['user_add_XRP'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->where('cryptocurrency', 'XRP')  ->sum('credit');
        $data['user_debit_XRP'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->where('cryptocurrency', 'XRP')  ->sum('debit');                
        $data['XRP'] = $data['XRP'] + $data['user_add_XRP'] -  $data['user_debit_XRP'];


        $data['BNB'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->where('payment_method', 'BNB')  ->sum('amount'); 
        $data['user_add_BNB'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->where('cryptocurrency', 'BNB')  ->sum('credit');
        $data['user_debit_BNB'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->where('cryptocurrency', 'BNB')  ->sum('debit');                
        $data['BNB'] = $data['BNB'] + $data['user_add_BNB'] -  $data['user_debit_BNB'];
        
        $data['solana'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->where('payment_method', 'Solana')  ->sum('amount'); 
        $data['user_add_solana'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->where('cryptocurrency', 'Solana')  ->sum('credit');
        $data['user_debit_solana'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->where('cryptocurrency', 'Solana')  ->sum('debit');                
        $data['solana'] = $data['solana'] + $data['user_add_solana'] -  $data['user_debit_solana'];
        
        $data['litecoin'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->where('payment_method', 'Litecoin')  ->sum('amount'); 
        $data['user_add_litecoin'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->where('cryptocurrency', 'Litecoin')  ->sum('credit');
        $data['user_debit_litecoin'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->where('cryptocurrency', 'Litecoin')  ->sum('debit');                
        $data['ilitecoin'] = $data['litecoin'] + $data['user_add_litecoin'] -  $data['user_debit_litecoin'];


       
        $data['usdt'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->where('payment_method', 'Usdt')  ->sum('amount'); 
        $data['user_add_usdt'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->where('cryptocurrency', 'Usdt')  ->sum('credit');
        $data['user_debit_usdt'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->where('cryptocurrency', 'Usdt')  ->sum('debit');                
        $data['usdt'] = $data['usdt'] + $data['user_add_usdt'] -  $data['user_debit_usdt'];



        $data['bitcoin'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->where('payment_method', 'bitcoin')  ->sum('amount'); 
        $data['user_add_bitcoin'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->where('cryptocurrency', 'Bitcoin')  ->sum('credit');
        $data['user_debit_bitcoin'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->where('cryptocurrency', 'Bitcoin')  ->sum('debit');                
        $data['bitcoin'] = $data['bitcoin'] + $data['user_add_bitcoin'] -  $data['user_debit_bitcoin'];



        $data['ethereum'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->where('payment_method', 'Ethereum')  ->sum('amount'); 
        $data['user_add_ethereum'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->where('cryptocurrency', 'Ethereum')  ->sum('credit');
        $data['user_debit_ethereum'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->where('cryptocurrency', 'Ethereum')  ->sum('debit');                
        $data['ethereum'] = $data['ethereum'] + $data['user_add_ethereum'] -  $data['user_debit_ethereum'];
        
        $data['deposit'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->sum('amount');
        $data['withdrawal'] = Withdrawal::where('user_id', Auth::user()->id)->sum('amount');
        $data['addprofit'] = Profit::where('user_id', Auth::user()->id)->sum('amount');
        $data['debitprofit'] = Debitprofit::where('user_id', Auth::user()->id)->sum('amount');
        $data['profit'] = $data['addprofit'] - $data['debitprofit'];
        $data['earning'] = Earning::where('user_id', Auth::user()->id)->sum('amount');
        // $data['plan'] = Plan::where('user_id',Auth::user()->id)->sum('amount');
        $data['referral'] = Refferal::where('user_id', Auth::user()->id)->sum('amount');
        $data['balance'] = $data['profit'] + $data['deposit'] + $data['earning'] + $data['referral'] - $data['withdrawal'];
        
        $data['user_balance'] =  $data['bitcoin']  + $data['ethereum']  + $data['usdt']  + $data['ilitecoin']  + $data['solana']  + $data['BNB'] + $data['XRP'] ;
        $data['account']  = Account::get();


       
        return view('dashboard.buy-account', $data);
    }

    public function  investmentHistory()
    {


        // $data['investment'] =  Investment::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        return view('dashboard.investmentHistory');
    }


    public function referUser()
    {

       $client = new Client();
$response = $client->get('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd');
$data = json_decode($response->getBody(), true);
$price = $data['bitcoin']['usd'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;
        return view('dashboard.referuser', $data);
    }

    public function Settings()
    {

       $client = new Client();
$response = $client->get('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd');
$data = json_decode($response->getBody(), true);
$price = $data['bitcoin']['usd'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;
        return view('dashboard.settings', $data);
    }


    public function accountSettings()
    {

        $client = new Client();
$response = $client->get('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd');
$data = json_decode($response->getBody(), true);
$price = $data['bitcoin']['usd'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;
        return view('dashboard.account-settings', $data);
    }
    public function verifyAccount()
    {

       $client = new Client();
$response = $client->get('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd');
$data = json_decode($response->getBody(), true);
$price = $data['bitcoin']['usd'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;
        $data['kycStatus'] = Kyc::where('user_id', Auth::user()->id)->get();
        $data['kyc'] = Kyc::where('user_id', Auth::user()->id)->get();
        return view('dashboard.verify-account', $data)->with('status', 'Documents updated successfully, please wait for approval');
    }


    public function withdrawals()
    {

//        $client = new Client();
// $response = $client->get('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd');
// $data = json_decode($response->getBody(), true);
// $price = $data['bitcoin']['usd'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        // $data['btc_balance'] = $data['user_balance'] / $price;
        return view('dashboard.withdrawals', $data);
    }
    public function withdrawFunds()
    {
       $client = new Client();
$response = $client->get('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd');
$data = json_decode($response->getBody(), true);
$price = $data['bitcoin']['usd'];

        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        $data['btc_balance'] = $data['user_balance'] / $price;

        return view('dashboard.withdraw-funds', $data);
    }
    public function registerPage()
    {

        return view('user.register');
    }


    public function loginPage()
    {

        return view('user.login');
    }



    public function getDeposit(Request $request)
{
    // $client = new Client();

    // try {
    //     // Fetch Bitcoin price from CoinDesk API
    //     $response = $client->get('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
    //     $data = json_decode($response->getBody(), true);
    //     if (isset($data['bpi']['USD']['rate_float'])) {
    //         $btcPrice = $data['bpi']['USD']['rate_float'];
    //     } else {
    //         throw new Exception('Unexpected response structure for Bitcoin price.');
    //     }

    //     // Fetch prices for Ethereum, Solana, Tether, Ripple, and Binance Coin from CoinGecko API
    //     $response2 = $client->get('https://api.coingecko.com/api/v3/simple/price', [
    //         'query' => [
    //             'ids' => 'ethereum,solana,tether,ripple,binancecoin',
    //             'vs_currencies' => 'usd',
    //         ],
    //     ]);
    //     $data2 = json_decode($response2->getBody(), true);
        
    //     if (isset($data2['ethereum']['usd']) && isset($data2['solana']['usd']) && 
    //         isset($data2['tether']['usd']) && isset($data2['ripple']['usd']) && 
    //         isset($data2['binancecoin']['usd'])) {
            
    //         $ethPrice = $data2['ethereum']['usd'];
    //         $solPrice = $data2['solana']['usd'];
    //         $usdtPrice = $data2['tether']['usd'];
    //         $xrpPrice = $data2['ripple']['usd'];
    //         $bnbPrice = $data2['binancecoin']['usd'];
    //     } else {
    //         throw new Exception('Unexpected response structure for one or more cryptocurrency prices.');
    //     }

        // Fetch user transactions and calculate balances
        $userId = Auth::user()->id;
        $data['credit'] = Transaction::where('user_id', $userId)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', $userId)->where('status', '1')->sum('debit');
        $data['user_balance'] = $data['credit'] - $data['debit'];
        // $data['btc_balance'] = $data['user_balance'] / $btcPrice;
        
        // Process request inputs
        $amount = $request->input('amount');
        $duration = $request->input('duration');
        $item = $request->input('item');
        
        $data['amount'] = $amount;
        $data['duration'] = $duration;
        // $data['btc_amount'] = $amount / $btcPrice;
        // $data['eth_amount'] = $amount / $ethPrice;
        // $data['sol_amount'] = $amount / $solPrice;
        // $data['usdt_amount'] = $amount / $usdtPrice;
        // $data['xrp_amount'] = $amount / $xrpPrice;
        // $data['bnb_amount'] = $amount / $bnbPrice;
        $data['item'] = $item;
        $data['payment'] = DB::table('admins')->where('id', '1')->get();

        if ($item == 'Bank') {
            return view('dashboard.bank', $data);
        } else {
            return view('dashboard.payment', $data);
        }

        


        }

//     } catch (ConnectException $e) {
//         return response()->json(['error' => 'Network error: ' . $e->getMessage()], 500);
//     } catch (RequestException $e) {
//         return response()->json(['error' => 'HTTP error: ' . $e->getMessage()], 500);
//     } catch (Exception $e) {
//         return response()->json(['error' => 'Error: ' . $e->getMessage()], 500);
//     }
// }












    // public function getDeposit(Request $request)
    // {

    //     $client = new Client();
    //     $response = $client->get('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
    //     $data = json_decode($response->getBody(), true);
    //     $price = $data['bpi']['USD']['rate_float'];


    //     $response2 = $client->get('https://api.coingecko.com/api/v3/simple/price', [
    //         'query' => [
    //             'ids' => 'ethereum',
    //             'vs_currencies' => 'usd',
    //         ],
    //     ]);
    //     // Decode the JSON response
    //     $data2 = json_decode($response2->getBody(), true);
    //     $price2 = $data2['ethereum']['usd'];


    //     $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
    //     $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
    //     $data['user_balance'] =  $data['credit'] - $data['debit'];
    //     $data['btc_balance'] = $data['user_balance'] / $price;
    //     $amount = $request->input('amount');
    //     $data['amount'] = $amount;
    //     $duration = $request->input('duration');
    //     $data['duration'] = $duration;
    //     $data['btc_amount'] = $data['amount']  / $price;
    //     $data['eth_amount'] = $data['amount']  / $price2;
    //     $item = $request->input('item');
    //     $data['item'] = $item;
    //     $data['payment'] = DB::table('users')->where('id', '4')->get();

    //     if ($item == 'Bank') {
    //         return view('dashboard.bank', $data);
    //     } else {
    //         return view('dashboard.payment', $data);
    //     }
    // }

    public function makeDeposit(Request $request)
    {

        $transaction_id = rand(76503737, 12344994);
        $deposit = new Deposit;
        $deposit->transaction_id = $transaction_id;
        $deposit->user_id = Auth::user()->id;
        $deposit->amount = $request['amount'];
        $deposit->payment_method = $request['paymethd_method'];
        $deposit->duration = $request['duration'];
         if($request->hasFile('image')){
            $file= $request->file('image');
    
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/deposits',$filename);
            $deposit->image =  $filename;
          }

        $deposit->save();


        $transaction = new Transaction;
        $transaction->user_id = Auth::user()->id;
        $transaction->transaction_id = $transaction_id;
        $transaction->transaction_type = "Credit";
        $transaction->transaction = "credit";
        $transaction->cryptocurrency =$request['paymethd_method'];
        $transaction->credit =  $request['amount'];
        $transaction->debit = "0";
        $transaction->status = 0;
        $transaction->save();


        return redirect('deposit')->with('status', 'Deposits will be pending until there are sufficent confirmations on the blockchain!');
    }







public function Subscribe(Request $request)
{
    // Validate the incoming request data
    $validatedData = $request->validate([
        'email' => 'required|email', // Validation rule for email
        // Add more validation rules as needed
    ]);

    // Check if the email already exists in the subscribers table
    $existingSubscriber = User::where('email', $validatedData['email'])->first();

    if ($existingSubscriber) {
        // Redirect to the login page or any other appropriate page
        return redirect()->route('login')->with('message', 'This email is already registered. Please log in.');
    } else {
        // Redirect to the registration page or any other appropriate page
        return redirect()->route('register')->with('message', 'Thank you for your interest. Please complete your registration.');
    }
}










    public function getWithdrawal(Request $request)
    {

        $data['deposit'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->sum('amount');
        $data['withdrawal'] = Withdrawal::where('user_id', Auth::user()->id)->sum('amount');
        $data['addprofit'] = Profit::where('user_id', Auth::user()->id)->sum('amount');
        $data['debitprofit'] = Debitprofit::where('user_id', Auth::user()->id)->sum('amount');
        $data['profit'] = $data['addprofit'] - $data['debitprofit'];
        $data['earning'] = Earning::where('user_id', Auth::user()->id)->sum('amount');
        $data['plan'] = Plan::where('user_id', Auth::user()->id)->sum('amount');
        $data['referral'] = Refferal::where('user_id', Auth::user()->id)->sum('amount');
        $data['investment'] = Investment::where('user_id', Auth::user()->id)->sum('amount');
        // $data['balance'] = $data['profit'] + $data['deposit'] + $data['earning'] + $data['referral'] - $data['withdrawal'] - $data['investment'] - $data['plan'];
        
        
                    $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
                    $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
                    $data['user_balance'] =  $data['credit'] - $data['debit'];

        $plan_amount = $request->input('amount');

        if ($data['user_balance'] <= '0') {
            return back()->with('status', 'Your Balance Is Insufficient');
        }

        if ($data['user_balance'] <= $plan_amount) {
            return back()->with('status', 'Your Balance Is Insufficient');
        }
        $method = $request->input('method');
        $data['method'] = $method;

        if ($method == 'Bank') {
            return view('dashboard.withdraw-bank', $data);
        } else {
            return view('dashboard.withdraw-funds', $data);
        }
    }


    public function uploadKyc(Request $request)
    {
       
        $kyc =  Auth::user();
        $kyc->kyc_status = 0;
        $file_id_card = $request->file('card');
        $file_passport = $request->file('pass');
        $ext_id_card = $file_id_card->getClientOriginalExtension();
        $ext_passport = $file_passport->getClientOriginalExtension();
        $filename_id_card = time() . '.' . $ext_id_card;
        $filename_passport = time() . '.' . $ext_passport;
        $file_id_card->move('uploads/kyc/', $filename_id_card);
        $file_passport->move('uploads/kyc/', $filename_passport);
        $kyc->id_card =  $filename_id_card;
        $kyc->passport =  $filename_passport;
        $kyc->save();
        return redirect('kyc')->with('status', 'Document updated successfully, please wait for approval');
    }




    
    public function uploadProfile(Request $request)

    {


        $update = Auth::user();
        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('user/uploads/id', $filename);
            $update->photo =  $filename;
        }

        $update->update();

        return redirect('profile')->with('status', 'Profile Picture Updated!');
    }








    public function updatePassword(Request $request)
    {
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password changed successfully!");
    }



    public function profileUpdate(Request $request)
    {
        //validation rules

        $request->validate([
            'name' => 'string',
            'lname' => 'string',
            'phone' => 'string',
            'address' => 'string'

        ]);
        $user = Auth::user();
        $user->name = $request['name'];
        $user->lname = $request['lname'];
        $user->phone = $request['phone'];
        $user->dob = $request['dob'];
        $user->address = $request['address'];


        $user->update();
        return back()->with('status', 'Profile Updated');
    }

    public function bankUpdate(Request $request)
    {
      
        $user = Auth::user();
        $user->bankName = $request['bank_name'];
        $user->accountName = $request['account_name'];
        $user->accountNumber = $request['account_no'];
        $user->swiftCode = $request['swiftcode'];
        $user->bitcoinAddress = $request['btc_address'];
        $user->ethereumAddress = $request['eth_address'];
        $user->litecoinAddress = $request['ltc_address'];


        $user->save();
        return back()->with('status', 'Withdrawal Details Updated');
    }

    public function supportEmail(Request $request)
    {

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];
        Mail::to('blueswayne133@gmail.com')->send(new supportEmail($data));

        return back()->with('status', 'Email Successfully sent');
    }








    //buy plans
    public function buyPlans(Request $request)
    {
        
        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        // $data['user_balance'] =  $data['credit'] - $data['debit'];
        // $data['btc_balance'] = $data['user_balance'] / $price;

        $data['deposit'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->sum('amount');
        $data['withdrawal'] = Withdrawal::where('user_id', Auth::user()->id)->sum('amount');
        $data['addprofit'] = Profit::where('user_id', Auth::user()->id)->sum('amount');
        $data['debitprofit'] = Debitprofit::where('user_id', Auth::user()->id)->sum('amount');
        $data['profit'] = $data['addprofit'] - $data['debitprofit'];
        $data['earning'] = Earning::where('user_id', Auth::user()->id)->sum('amount');
        // $data['plan'] = Plan::where('user_id',Auth::user()->id)->sum('amount');
        $data['referral'] = Refferal::where('user_id', Auth::user()->id)->sum('amount');
        $data['balance'] = $data['profit'] + $data['deposit'] + $data['earning'] + $data['referral'] - $data['withdrawal'];
        
        $data['user_balance'] =  $data['bitcoin']  + $data['ethereum']  + $data['usdt']  + $data['ilitecoin']  + $data['solana']  + $data['BNB'] + $data['XRP'] ;

$plan_amount = $request->input('amount');

if ($data['user_balance'] <= '0') {
return back()->with('status', 'Your Balance Is Insufficient');
}

if ($data['user_balance'] < $plan_amount) {
return back()->with('status', 'Your Balance Is Insufficient');
}
     
   
        $transaction_id = rand(76503737, 12344994);
        $buy = new Plan;
        $buy->transaction_id = $transaction_id;
        $buy->user_id = Auth::user()->id;
        $buy->amount = $request['amount'];
        $buy->plan_name = $request['plan_name'];
        $buy->plan_duration = $request['plan_duration'];
        $buy->amount = $request['amount'];
        $buy->save();


        $transaction = new Transaction;
        $transaction->user_id = Auth::user()->id;
        $transaction->transaction_id = $transaction_id;
        $transaction->transaction_type = "Credit";
        $transaction->transaction = "credit";
        $transaction->credit = $request['product'];
        $transaction->debit = 0;
        $transaction->status = 0;
        $transaction->save();

        $transaction = new Transaction;
        $transaction->user_id = Auth::user()->id;
        $transaction->transaction_id = $transaction_id;
        $transaction->transaction_type = "Debit";
        $transaction->transaction = "debit";
        $transaction->credit = '0';
        $transaction->debit = $request['amount'];
        $transaction->status = 1;
        $transaction->save();
        $name = Auth::user()->name;
        $email = Auth::user()->email;
        $plan_name = Auth::user()->name;
        $plan_amount = $request['amount'];
        $plan_name = $request['plan_name'];
        $plan_duration = $request['plan_duration'];
        $data = $name.' with the email address '.$email.' just purchased an account with the name '.$plan_name.' with a duration of '.$plan_duration;
        $data = [
            'data' => $data,
           ];
        Mail::to('support@fundformeprogram.com')->send(new userBuyAccountEmail($data));

        return back()->with('status', 'Account Has Been Purchased Successfully');
    }

    



    public function makeWithdrawal(Request $request)

    {
      
        $method = $request->input('mode');
        $data['method'] = $method;
        $data['deposit'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->sum('amount');
        $data['withdrawal'] = Withdrawal::where('user_id', Auth::user()->id)->sum('amount');
        $data['addprofit'] = Profit::where('user_id', Auth::user()->id)->sum('amount');
        $data['debitprofit'] = Debitprofit::where('user_id', Auth::user()->id)->sum('amount');
        $data['profit'] = $data['addprofit'] - $data['debitprofit'];
        $data['earning'] = Earning::where('user_id', Auth::user()->id)->sum('amount');
        $data['plan'] = Plan::where('user_id', Auth::user()->id)->sum('amount');
        $data['referral'] = Refferal::where('user_id', Auth::user()->id)->sum('amount');
        $data['balance'] = $data['profit'] + $data['deposit'] + $data['earning'] + $data['referral'] - $data['withdrawal'] - $data['plan'];
        
        $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
        $data['user_balance'] =  $data['credit'] - $data['debit'];

        if ($data['user_balance'] <= '0') {
            return redirect('withdrawal')->with('status', 'Your Balance Is Insufficient');
        }
  

        $transaction_id = rand(76503737, 12344994);

        // Create a new Withdrawal instance
        $with = new Withdrawal;
        $with->transaction_id = $transaction_id;
        $with->user_id = Auth::user()->id;
        $with->amount = $request['amount'];
        $with->status = 0;
        $with->mode = $request['mode'];
        $with->account_name = $request['account_name'];
        $with->account_number = $request['account_number'];
        $with->bank_name = $request['bank_name'];
        $with->bank_routing_number = $request['bank_routing_number'];
        $with->swift = $request['swift'];
        $with->bank_country = $request['bank_country'];
        $with->crypto_type = $request['crypto_type']; // Assuming $request['crypto_type'] contains the cryptocurrency name
        $with->wallet_address = $request['wallet_address'];
        $with->save();
        
        // Create a new Transaction instance
        $transaction = new Transaction;
        $transaction->user_id = Auth::user()->id;
        $transaction->transaction_id = $transaction_id;
        $transaction->transaction_type = "Debit";
        $transaction->cryptocurrency = $request['crypto_type']; // Set cryptocurrency name
        $transaction->transaction = "debit";
        $transaction->credit = "0";
        $transaction->debit = $request['amount'];
        $transaction->status = 0;
        $transaction->save();
        
    $data['data'] = $request->session()->get('data');
    return view('dashboard.transfer_completed',$data);

    }


   public function awaitData(Request $request) 
   {
    $data['data'] = $request->session()->get('data');
    return view('dashboard.await_data',$data);
   }

   public function commisionCode(Request $request) 
   {
    $data['data'] = $request->session()->get('data');
    return view('dashboard.withdrawal-commision-code',$data);
   }

   public function queryData(Request $request) 
   {
    $data['data'] = $request->session()->get('data');
    return view('dashboard.query_data',$data);
   }

   public function checkCommisionCode(Request $request) 
   {  
     $commission_code = $request->input('commission_code');
    if ($commission_code != Auth::user()->commission_code) {
        return back()->with('status', 'Incorrect commission code');
    }

    $data['data'] = $request->session()->get('data');
    return view('dashboard.spoofing_connection',$data);
   }


   public function taxCode(Request $request) 
   {
    $data['data'] = $request->session()->get('data');
    return view('dashboard.withdrawal-tax-code',$data);
   }

   public function checkTaxCode(Request $request) 
   {  
    
    $tax_code = $request->input('tax_code');
    if ($tax_code != Auth::user()->tax_code) {
        return back()->with('status', 'Incorrect tax code');
    }

    $transaction_id = rand(76503737, 12344994);
    $with = new Withdrawal;
    $with->transaction_id = $transaction_id;
    $with->user_id = Auth::user()->id;
    $with->amount = $request['amount'];
    $with->status = 0;
    $with->mode = $request['mode'];
    $with->account_name = $request['account_name'];
    $with->account_number = $request['account_number'];
    $with->bank_name = $request['bank_name'];
    $with->bank_routing_number = $request['bank_routing_number'];
    $with->swift = $request['swift'];
    $with->bank_country = $request['bank_country'];
    $with->crypto_type = $request['crypto_type'];
    $with->wallet_address = $request['wallet_address'];
    // $method = $request->input('method');
    // $data['method']=$method;
    $with->save();


    $transaction = new Transaction;
    $transaction->user_id = Auth::user()->id;
    $transaction->transaction_id = $transaction_id;
    $transaction->transaction_type = "Debit";
    $transaction->transaction = "debit";
    $transaction->credit = "0";
    $transaction->debit = $request['amount'];
    $transaction->status = 0;
    $transaction->save();

    $data['data'] = $request->session()->get('data');
    return view('dashboard.transfer_completed',$data);
   }






    public function perform()
    {
        Session::flush();
        Auth::guard('web')->logout();
        return redirect('login');
    }





    public function Step2(Request $request)
    {

        $request->validate([
            'country' => 'string',
            'state' => 'string',
            'pcode' => 'string',
            'address' => 'string',
            'phone' => 'string'

        ]);

        $user = Auth::user();
        $user->country = $request['country'];
        $user->state = $request['state'];
        $user->pcode = $request['pcode'];
        $user->address = $request['address'];
        $user->phone = $request['phone'];


        $user->update();

        return view('dashboard.step3');
    }

    public function Step3(Request $request)

    {
        $data['deposit'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->sum('amount');
        $data['withdrawal'] = Withdrawal::where('user_id', Auth::user()->id)->sum('amount');
        $data['addprofit'] = Profit::where('user_id', Auth::user()->id)->sum('amount');
        $data['debitprofit'] = Debitprofit::where('user_id', Auth::user()->id)->sum('amount');
        $data['profit'] = $data['addprofit'] - $data['debitprofit'];
        $data['earning'] = Earning::where('user_id', Auth::user()->id)->sum('amount');
        $data['plan'] = Plan::where('user_id', Auth::user()->id)->sum('amount');
        $data['referral'] = Refferal::where('user_id', Auth::user()->id)->sum('amount');
        $data['balance'] = $data['profit'] + $data['deposit'] + $data['earning'] + $data['referral'] - $data['withdrawal'] - $data['plan'];


        $request->validate([

            'pin' => 'string',


        ]);

        $user = Auth::user();

        $user->pin = $request['pin'];


        $user->update();

        return view('dashboard.home', $data);
    }

    public function resendCode($id)
    {

        $userData = User::where('id', $id)->first();
        $email = $userData->email;

        $validToken = rand(7650, 1234);
        $get_token = Auth::user();
        $get_token->token = $validToken;
        $get_token->update();



        Mail::to($email)->send(new VerificationEmail($validToken));


        return redirect("verify/" . $userData->id)->with('message', 'verification code has been resent to your email');
    }

    public function nextDetails()
    {
     

        return view('dashboard.step2');
    }


    public function verify($id)
    {
        $user = User::where('id', $id)->first();
        $data['email'] = $user->email;
        $data['hash'] = $user->password;
        $data['id'] = $user->id;

        return view('dashboard.step3', $data);
    }


    public function emailVerify(Request $request)
    {
        $first_token = $request->input('digit');
        $second_token = $request->input('digit2');
        $third_token = $request->input('digit3');
        $fourth_token = $request->input('digit4');
        $get_token =  $first_token;
        $verify_token = User::where('token', $get_token)->first();
        
        if ($verify_token) {
            $user = User::where('email', $verify_token->email)->first();
            $user->is_activated = 1;
            $user->save();
            $user_email =  $user->email;
            $user_password =  $user->password;

            $data = [
                'name' => $user->name,
                'email' => $user->email,
                'password' => '*********',

            ];
            
        //Mail::to($user_email)->send(new welcomeEmail($data));
        
        
        
        
        
        $client = new Client();
$response = $client->get('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd');
$data = json_decode($response->getBody(), true);
$price = $data['bitcoin']['usd'];

                $data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
                $data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
                $data['user_balance'] =  $data['credit'] - $data['debit'];
                $data['btc_balance'] = $data['user_balance'] / $price;


                $data['XRP'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->where('payment_method', 'XRP')  ->sum('amount'); 
                    $data['user_add_XRP'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->where('cryptocurrency', 'XRP')  ->sum('credit');
                    $data['user_debit_XRP'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->where('cryptocurrency', 'XRP')  ->sum('debit');                
                    $data['XRP'] = $data['XRP'] + $data['user_add_XRP'] -  $data['user_debit_XRP'];


                    $data['BNB'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->where('payment_method', 'BNB')  ->sum('amount'); 
                    $data['user_add_BNB'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->where('cryptocurrency', 'BNB')  ->sum('credit');
                    $data['user_debit_BNB'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->where('cryptocurrency', 'BNB')  ->sum('debit');                
                    $data['BNB'] = $data['BNB'] + $data['user_add_BNB'] -  $data['user_debit_BNB'];
                    
                    $data['solana'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->where('payment_method', 'Solana')  ->sum('amount'); 
                    $data['user_add_solana'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->where('cryptocurrency', 'Solana')  ->sum('credit');
                    $data['user_debit_solana'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->where('cryptocurrency', 'Solana')  ->sum('debit');                
                    $data['solana'] = $data['solana'] + $data['user_add_solana'] -  $data['user_debit_solana'];
                    
                    $data['litecoin'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->where('payment_method', 'Litecoin')  ->sum('amount'); 
                    $data['user_add_litecoin'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->where('cryptocurrency', 'Litecoin')  ->sum('credit');
                    $data['user_debit_litecoin'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->where('cryptocurrency', 'Litecoin')  ->sum('debit');                
                    $data['ilitecoin'] = $data['litecoin'] + $data['user_add_litecoin'] -  $data['user_debit_litecoin'];


                   
                    $data['usdt'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->where('payment_method', 'Usdt')  ->sum('amount'); 
                    $data['user_add_usdt'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->where('cryptocurrency', 'Usdt')  ->sum('credit');
                    $data['user_debit_usdt'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->where('cryptocurrency', 'Usdt')  ->sum('debit');                
                    $data['usdt'] = $data['usdt'] + $data['user_add_usdt'] -  $data['user_debit_usdt'];



                    $data['bitcoin'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->where('payment_method', 'bitcoin')  ->sum('amount'); 
                    $data['user_add_bitcoin'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->where('cryptocurrency', 'Bitcoin')  ->sum('credit');
                    $data['user_debit_bitcoin'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->where('cryptocurrency', 'Bitcoin')  ->sum('debit');                
                    $data['bitcoin'] = $data['bitcoin'] + $data['user_add_bitcoin'] -  $data['user_debit_bitcoin'];



                    $data['ethereum'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->where('payment_method', 'Ethereum')  ->sum('amount'); 
                    $data['user_add_ethereum'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->where('cryptocurrency', 'Ethereum')  ->sum('credit');
                    $data['user_debit_ethereum'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->where('cryptocurrency', 'Ethereum')  ->sum('debit');                
                    $data['ethereum'] = $data['ethereum'] + $data['user_add_ethereum'] -  $data['user_debit_ethereum'];
                $data['deposit'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->sum('amount');
                $data['withdrawal'] = Withdrawal::where('user_id', Auth::user()->id)->sum('amount');
                $data['addprofit'] = Profit::where('user_id', Auth::user()->id)->sum('amount');
                $data['debitprofit'] = Debitprofit::where('user_id', Auth::user()->id)->sum('amount');
                $data['profit'] = $data['addprofit'] - $data['debitprofit'];
                $data['earning'] = Earning::where('user_id', Auth::user()->id)->sum('amount');
                $data['plan'] = Plan::where('user_id', Auth::user()->id)->sum('amount');
                $data['referral'] = Refferal::where('user_id', Auth::user()->id)->sum('amount');
                $data['balance'] = $data['profit'] + $data['deposit'] + $data['earning'] + $data['referral'] - $data['withdrawal'] - $data['plan'];
        
        return view('dashboard.home', $data);
        
        } else {
            return redirect("verify/" . Auth::user()->id)->with('error', 'Incorrect Activation Code!');
        }
    }
}
