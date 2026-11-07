<?php

namespace App\Http\Controllers;

use DB;
use Session;
use App\Models\Kyc;
use App\Models\Plan;
use App\Models\User;
use App\Models\Profit;
use App\Models\Deposit;
use App\Models\Earning;
use App\Models\Traders;
use App\Models\Refferal;
use App\Models\Investment;
use App\Models\Withdrawal;
use App\Mail\sendUserEmail;
use App\Models\Debitprofit;
use App\Models\Transaction;
use App\Models\Account;
use Illuminate\Http\Request;
use App\Mail\DepositApproveEmail;
use App\Mail\WithdrawalApproveEmail;
use App\Mail\TransferApproveEmail;
use App\Mail\activateAccountEmail;
use App\Mail\ApprovePurchasedAccountEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;



class UserManagementController extends Controller
{



    public function adminHome()
    {
        $result  = DB::table('users')->where('role','is_user')->get();
        $data['active_users'] = DB::table('users')->where('status','Active')->count();
        $data['inactive_users'] = DB::table('users')->where('status','Inactive')->count();
        $data['total_users']  = DB::table('users')->where('role','is_user')->count();
        $data['deposits'] = DB::table('deposits')->sum('amount');
        $data['pending_deposits'] = DB::table('deposits')->where('status','0')->sum('amount');
        $data['withdrawals'] = DB::table('withdrawals')->sum('amount');
        $data['plan'] = DB::table('plans')->count();
        $data['stock'] = DB::table('stocks')->count();
        $data['investment_plan'] =  $data['plan'] +  $data['stock'];
        $data['pending_withdrawals'] = DB::table('withdrawals')->where('status','0')->sum('amount');
        return view('admin.home', $data , compact('result'));
    }

    public function viewUser(){

        if(Auth::user()->role==='is_user')
      {
        
          return view('user.home');
      }
      else
      {
         $result  = DB::table('users')->where('role','is_user')->get();
         $data['deposits'] = DB::table('deposits')->where('user_id',$user_id)->sum('amount');
         return view('admin.home',$data,compact('result'));
      }


    }

   

    public function viewDeposits()
    {
        $deposit  =     DB::table('deposits')->get();
        $deposits =     User::join('deposits', 'users.id', '=', 'deposits.user_id')
                        ->get(['users.email', 'users.name', 'deposits.*']); 

        return view('admin.deposits', compact('deposit','deposits'));
    }



    public function processDeposit($id)
    {

        $deposit = array();
        $deposit['status'] = '1';
        $update = DB::table('deposits')->where('id',$id)->update($deposit);
        return redirect()->back()->with('message', 'Deposit Has Been Processed Successfully');

    }

    public function activeTrade($id)
    {

        $trade = array();
        $trade['status'] = '0';
        $update = DB::table('trade_histories')->where('id',$id)->update($trade);
        return redirect()->back()->with('message', 'Trade Has Been Processed Successfully');

    }

    public function expiredTrade($id)
    {

        $trade = array();
        $trade['status'] = '1';
        $update = DB::table('trade_histories')->where('id',$id)->update($trade);
        return redirect()->back()->with('message', 'Trade Has Been Processed Successfully');

    }
    public function activeStock($id)
    {

        $trade = array();
        $trade['status'] = '0';
        $update = DB::table('stock_histories')->where('id',$id)->update($trade);
        return redirect()->back()->with('message', 'Trade Has Been Processed Successfully');

    }

    public function expiredStock($id)
    {

        $trade = array();
        $trade['status'] = '1';
        $update = DB::table('stock_histories')->where('id',$id)->update($trade);
        return redirect()->back()->with('message', 'Trade Has Been Processed Successfully');

    }

    public function deleteDeposit($id)
    {

        $deposit  = Deposit::findOrFail($id);
        $deposit->delete();
        return back()->with('message', 'Deposit deleted Successfully');  

    }

    
    public function deleteTrade($id)
    {

        $trade  = TradeHistory::findOrFail($id);
        $trade->delete();
        return back()->with('message', 'Plan deleted Successfully');  

    }
    public function deleteStock($id)
    {

        $stock  = StockHistory::findOrFail($id);
        $stock->delete();
        return back()->with('message', 'Plan deleted Successfully');  

    }
    public function viewDeposit($id)
    {

        $data['proof']  = Deposit::findOrFail($id);
       
        return view('admin.proof',$data);

    }

    public function viewWithdrawal($id)
    {

        $data['withdrawal_details']  = Withdrawal::findOrFail($id);
        $data['user_details']  = User::findOrFail($id);
        
       
        return view('admin.user_withdrawal',$data);

    }

    
     


    public function approveAccount($id, $amount, $user_id)
    {

        $user_data = DB::table('users')->where('id', $user_id)->first(); 
        $full_name = $user_data->name;  
        $email =   $user_data->email; 
        $amount = $amount; 
        $message =   "Your Request to Purchase An account has been approved successfully";    
        $user = [
    
          'full_name' => $full_name,
          'message' => $message,
         ];
        
        Mail::to($email)->send(new ApprovePurchasedAccountEmail($user));
        $user = array();
        $user['status'] = 1;
        $update = DB::table('transactions')->where('id',$id)->update($user);
        //Mail::to($email)->cc('support@altruisticmarkets.com')->bcc('support@altruisticmarkets.com')->send(new ApproveWithdrawalEmail($data));
       
       
        return back()->with('message', 'Account Has Been Approved Successfully');  ;

    }

    public function disApproveAccount($id)
    {

        
        $user = array();
        $user['status'] = 0;
        $update = DB::table('transactions')->where('id',$id)->update($user);
        //Mail::to($email)->cc('support@altruisticmarkets.com')->bcc('support@altruisticmarkets.com')->send(new ApproveWithdrawalEmail($data));
       
       
        return back()->with('message', 'Account Has Been Disapproved Successfully');  ;

    }

    public function approveTransfer($id, $amount, $user_id)
    {

        $user_data = DB::table('users')->where('id', $user_id)->first(); 
        $full_name = $user_data->name;  
        $email =   $user_data->email; 
        $amount = $amount; 
        $message =   "Your $$amount Transfer has been approved successfully";    
        $user = [
    
          'full_name' => $full_name,
          'message' => $message,
         ];
        
        Mail::to($email)->send(new TransferApproveEmail($user));
        $user = array();
        $user['status'] = 1;
        $update = DB::table('transactions')->where('id',$id)->update($user);
        //Mail::to($email)->cc('support@altruisticmarkets.com')->bcc('support@altruisticmarkets.com')->send(new ApproveWithdrawalEmail($data));
       
       
        return back()->with('message', 'Transfer Has Been Approved Successfully');  ;

    }

    public function disApproveTransfer($id)
    {

        
        $user = array();
        $user['status'] = 0;
        $update = DB::table('transactions')->where('id',$id)->update($user);
        //Mail::to($email)->cc('support@altruisticmarkets.com')->bcc('support@altruisticmarkets.com')->send(new ApproveWithdrawalEmail($data));
       
       
        return back()->with('message', 'Transfer Has Been Disapproved Successfully');  ;

    }

    public function approveDeposit($id, $amount, $user_id)
    {

        $user_data = DB::table('users')->where('id', $user_id)->first(); 
        $full_name = $user_data->name;  
        $email =   $user_data->email; 
        $amount = $amount; 
        $message =   "Your $$amount Deposit has been approved successfully";    
        $user = [
    
          'full_name' => $full_name,
          'message' => $message,
         ];
        
        Mail::to($email)->send(new DepositApproveEmail($user));
        $user = array();
        $user['status'] = 1;
        $update = DB::table('transactions')->where('id',$id)->update($user);
        //Mail::to($email)->cc('support@altruisticmarkets.com')->bcc('support@altruisticmarkets.com')->send(new ApproveWithdrawalEmail($data));
       
       
        return back()->with('message', 'Deposit Has Been Approved Successfully');  ;

    }

    public function disApproveDeposit($id)
    {

        
        $user = array();
        $user['status'] = 0;
        $update = DB::table('transactions')->where('id',$id)->update($user);
        //Mail::to($email)->cc('support@altruisticmarkets.com')->bcc('support@altruisticmarkets.com')->send(new ApproveWithdrawalEmail($data));
       
       
        return back()->with('message', 'Deposit Has Been Disapproved Successfully');  ;

    }

    public function approveWithdrawal($id, $amount, $user_id)
    {

        $user_data = DB::table('users')->where('id', $user_id)->first(); 
        $full_name = $user_data->name;  
        $email =   $user_data->email; 
        $amount = $amount; 
        $message =   "Your $$amount Withdrawal has been approved successfully";    
        $user = [
    
          'full_name' => $full_name,
          'message' => $message,
         ];
        
        Mail::to($email)->send(new WithdrawalApproveEmail($user));

        $user = array();
        $user['status'] = 1;
        $update = DB::table('transactions')->where('id',$id)->update($user);
        //Mail::to($email)->cc('support@altruisticmarkets.com')->bcc('support@altruisticmarkets.com')->send(new ApproveWithdrawalEmail($data));
       
       
        return back()->with('message', 'Withdrawal Has Been Approved Successfully');  ;

    }

    public function disApproveWithdrawal($id)
    {

        
        $user = array();
        $user['status'] = 0;
        $update = DB::table('transactions')->where('id',$id)->update($user);
        //Mail::to($email)->cc('support@altruisticmarkets.com')->bcc('support@altruisticmarkets.com')->send(new ApproveWithdrawalEmail($data));
       
       
        return back()->with('message', 'Withdrawal Has Been Disapproved Successfully');  ;

    }

    
    public function AcceptKyc($id)
    {

        $user  = User::findOrFail($id);
        $email = $user->email;
        $user->kyc_status = '1';
       
        $user->save();
        return back()->with('message', 'Kyc Approved Successfully');


    }


    public function RejectKyc($id)
    {

        $user  = User::findOrFail($id);
        $email = $user->email;
        $user->kyc_status = '0';
       
        $user->save();
        return back()->with('message', 'Kyc Rejected Successfully');  ;

    }




    // public function RejectKyc($id)
    // {

    //     $user  = User::findOrFail($id);
    //     $email = $user->email;
    //     $user->kyc_status = '0';
    //     Mail::to($email)->cc('support@altruisticmarkets.com')->bcc('support@altruisticmarkets.com')->send(new RejectKyc());
    //     $user->save();
    //     return back()->with('message', 'Kyc Rejected Successfully');  ;

    // }








    public function copyTrader()
    {
       $traders    = DB::table('plans')->get();
       return view('admin.copy_trader', compact('traders'));

    }

    public function addAccount()
    {
       $accounts    = DB::table('accounts')->get();
       return view('admin.add_account', compact('accounts'));

    }

    public function addNewAccount()
    {
       return view('admin.add_new_account');

    }

    public function editAccount($account_id)
    {
        $account = Account::findOrFail($account_id);

        return view('admin.edit_account', compact('account'));

    }

    public function deleteAccount($account_id)
    {
        $account = Account::findOrFail($account_id);
        $account->delete();
        return back()->with('message', 'Acoount deleted Successfully');  

    }






    public function updateAccount(Request $request, int $account_id)
    
  {
  
     

          $account = Account::findOrFail($account_id);
          $account->account_balance = $request['account_balance'];
          $account->profit_share = $request['profit_share'];
          $account->days_per_challenge = $request['days_per_challenge'];
          $account->days_per_verification = $request['days_per_verification'];
          $account->reward = $request['reward'];
          $account->price = $request['price'];
          $account->profit_target = $request['profit_target'];
          $account->minimum_trading_days = $request['minimum_trading_days'];
          $account->leverage = $request['leverage'];
          $account->overall_loss = $request['overall_loss'];
          $account->daily_loss = $request['daily_loss'];
          $account->max_overall_loss = $request['max_overall_loss'];
          $account->max_daily_loss = $request['max_daily_loss'];
          $account->picture = $request['image'];
          $account->duration = $request['duration'];
        
          $account->update($request->all());

        
          return back()->with('message', 'Trading Account Updated Successfully');  
    }




public function saveNewAccount(Request $request)
{
  

    $validatedData = $request->validate([
        'account_balance' => 'required',
        'days_per_challenge' => 'required',
        'days_per_verification' => 'required',
        'reward' => 'required',
        'price' => 'required',
        'profit_target' => 'required',
        'minimum_trading_days' => 'required',
        'leverage' => 'required',
        'overall_loss' => 'required',
        'daily_loss' => 'required',
        'max_daily_loss' => 'required',
        'max_overall_loss' => 'required',
        'duration' => 'required',
        'profit_share' => 'required',
        
     
       
    ]);
 
  $account = new Account;
  $account->account_balance = $validatedData['account_balance'];
  $account->days_per_challenge = $validatedData['days_per_challenge'];
  $account->days_per_verification = $validatedData['days_per_verification'];
  $account->reward = $validatedData['reward'];
  $account->price = $validatedData['price'];
  $account->profit_target = $validatedData['profit_target'];
  $account->minimum_trading_days = $validatedData['minimum_trading_days'];
  $account->leverage = $validatedData['leverage'];
  $account->overall_loss = $validatedData['overall_loss'];
  $account->daily_loss = $validatedData['daily_loss'];
  $account->max_daily_loss = $validatedData['max_daily_loss'];
  $account->max_overall_loss = $validatedData['max_overall_loss'];
  $account->profit_share = $validatedData['profit_share'];
  $account->duration = $validatedData['duration'];
  
//   $trader->picture =  'in.png';
 
 
  
  if($request->hasFile('image'))
    {
        $file= $request->file('image');

        $ext = $file->getClientOriginalExtension();
        $filename = time().'.'.$ext;
        $file->move('uploads/trader',$filename);
        $account->picture =  $filename;
    }

    $account->save();

  
      
 return back()->with('message', 'Account Created Successfully');  
}

    public function addTrader()
    {
       return view('admin.add_trader');

    }
    public function copyTraderInvestments()
    {
       return view('admin.copy_trader_investments');

    }

    public function stocks()
    {
       $stocks     = DB::table('stocks')->get();
       return view('admin.stocks', compact('stocks'));

    }

    public function addStocks()
    {
       return view('admin.add_stocks');

    }
    public function purchasedStocks()
    {
    $data['stock']= User::join('stock_histories', 'users.id', '=', 'stock_histories.user_id')
        ->get(['users.email', 'users.name', 'stock_histories.*']);

       return view('admin.purchased_stocks',$data);

    }
    public function manageUsers()
    {
       $user  = DB::table('users')->where('usertype', '0')->get();
       return view('admin.manage_users',compact('user'));

    }
    public function copiedTrader()
    {
    
     $data['trade']= User::join('trade_histories', 'users.id', '=', 'trade_histories.user_id')
        ->get(['users.email', 'users.name', 'trade_histories.*']);

       return view('admin.copied_trader',$data);

    }
    public function userProfile($user_id)
    {
       
       // get 
        $profileData  = DB::table('users')
        ->where('id',$user_id)
        ->first();
     
        // get the kyc 
        $kyc_status = $profileData->kyc_status; 
    //   $user = User::with('kyc')->find($user_id);
    //     if ($user->kyc) {
    //       $kyc_status = $user->kyc->status; 
    //       }

        //sum all transactions

        $data['withdrawal']     = DB::table('withdrawals')->where('user_id',$user_id)->where('status', '1')->sum('amount');
        //deposits
        $data['deposit']     = DB::table('deposits')->where('user_id',$user_id)->where('status', '1')->sum('amount');
        $data['credit'] = Transaction::where('user_id', $user_id)->where('status', '1')->sum('credit');
        $data['debit'] = Transaction::where('user_id', $user_id)->where('status', '1')->sum('debit');
       $data['user_balance'] =  $data['credit'] - $data['debit'];
        //account balance  
        // $data['account_balance_credit']     = DB::table('acount_balances')->where('user_id',$user_id)->where('status', '1')->sum('credit');
        // $data['account_balance_debit']     = DB::table('acount_balances')->where('user_id',$user_id)->where('status', '1')->sum('debit');
        // $data['account_balance']     =   $data['account_balance_credit'] -  $data['account_balance_debit'] ;
        
        //       //account bonuses  
        // $data['bonuses_credit']     = DB::table('bonuses')->where('user_id',$user_id)->where('status', '1')->sum('credit');
        // $data['bonuses_debit']     = DB::table('bonuses')->where('user_id',$user_id)->where('status', '1')->sum('debit');
        // $data['total_bonuses']     =   $data['bonuses_credit'] -  $data['bonuses_debit'] ;
        
        //     //equities   
        // $data['equities_credit']     = DB::table('equities')->where('user_id',$user_id)->where('status', '1')->sum('credit');
        // $data['equities_debit']     = DB::table('equities')->where('user_id',$user_id)->where('status', '1')->sum('debit');
        // $data['total_equities']     =   $data['equities_credit'] -  $data['equities_debit'] ;
        
        //     //profits  
        // $data['profits_credit']     = DB::table('equities')->where('user_id',$user_id)->where('status', '1')->sum('credit');
        // $data['profits_debit']     = DB::table('equities')->where('user_id',$user_id)->where('status', '1')->sum('debit');
        // $data['total_profits']     =   $data['profits_credit'] -  $data['profits_debit'] ;
        
        //      //referrals 
        // $data['referrals_credit']     = DB::table('refferals')->where('user_id',$user_id)->where('status', '1')->sum('credit');
        // $data['referrals_debit']     = DB::table('refferals')->where('user_id',$user_id)->where('status', '1')->sum('debit');
        // $data['total_referrals']     =   $data['referrals_credit'] -  $data['referrals_debit'] ;
        
        return view('admin.user_data',$data, compact('profileData','kyc_status'));
    
     }
    public function manageKyc()
    {
        $data['kyc']  = DB::table('users')->where('role', 'is_user')->get();
       return view('admin.kyc', $data);

    }


    public function KycDetails($id)
    {
        $userProfile      = DB::table('users')->where('id', $id)->first();
    
       return view('admin.kyc', compact('userProfile'));

    }


    public function manageDeposit()
    {
        
    $data['deposits']= User::join('deposits', 'users.id', '=', 'deposits.user_id')
                               ->get(['users.email', 'users.name', 'deposits.*']);
             
                  return view('admin.manage_deposit',$data);

    }
    public function manageWithdrawal()
    {
    
        $data['withdrawals']= User::join('withdrawals', 'users.id', '=', 'withdrawals.user_id')
        ->get(['users.email', 'users.name', 'withdrawals.*']);

        return view('admin.manage_withdrawal', $data);

    }
    public function addManager()
    {
       return view('admin.add_manager');

    }
    public function manageAdministrator()
    {
       return view('admin.manage_administrator');

    }


    public function addExpert(Request $request)
    {
      

        $validatedData = $request->validate([
            'trader_name' => 'required',
            'trading_max_amount' => 'required',
            'trading_min_amount' => 'required',
            'top_up_interval' => 'required',
            'top_up_type' => 'required',
            'top_up_amount' => 'required',
            'investment_duration' => 'required',
            'trader_year_of_experience' => 'required',
            'copier_roi' => 'required',
            'risk_index' => 'required',
            'performance' => 'required',
            'total_copied_trade' => 'required',
            'active_traders' => 'required',
            'trader_country' => 'required',
            'about_trader' => 'required',
         
           
        ]);
     
      $trader = new Plan;
      $trader->trader_name = $validatedData['trader_name'];
      $trader->trading_max_amount = $validatedData['trading_max_amount'];
      $trader->trading_min_amount = $validatedData['trading_min_amount'];
      $trader->top_up_interval = $validatedData['top_up_interval'];
      $trader->top_up_type = $validatedData['top_up_type'];
      $trader->top_up_amount = $validatedData['top_up_amount'];
      $trader->investment_duration = $validatedData['investment_duration'];
      $trader->trader_year_of_experience = $validatedData['trader_year_of_experience'];
      $trader->copier_roi = $validatedData['copier_roi'];
      $trader->risk_index = $validatedData['risk_index'];
      $trader->performance = $validatedData['performance'];
      $trader->total_copied_trade = $validatedData['total_copied_trade'];
      $trader->active_traders = $validatedData['active_traders'];
      $trader->trader_country = $validatedData['trader_country'];
      $trader->about_trader = $validatedData['about_trader'];
      //$trader->picture =  'in.png';
     
     
      
      if($request->hasFile('image'))
        {
            $file= $request->file('image');
    
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/trader',$filename);
            $trader->picture =  $filename;
        }

        $trader ->save();

          

  


     return back()->with('message', 'Expert Trader Created Successfully');  
    }

    public function editTrader($trader_id)
    {
        $trader = Plan::findOrFail($trader_id);

        return view('admin.edit_trader', compact('trader'));

    }

    public function editStock($stock_id)
    {
        
        $stock = Stock::findOrFail($stock_id);
        return view('admin.edit_stock', compact('stock'));

    }
   

public function updateTrader(Request $request, int $trader_id)
    
  {
  
     

          $trader = Plan::findOrFail($trader_id);
          $trader->trader_name = $request['trader_name'];
          $trader->trading_max_amount = $request['trading_max_amount'];
          $trader->trading_min_amount = $request['trading_min_amount'];
          $trader->top_up_interval = $request['top_up_interval'];
          $trader->top_up_type = $request['top_up_type'];
          $trader->top_up_amount = $request['top_up_amount'];
          $trader->investment_duration = $request['investment_duration'];
          $trader->trader_year_of_experience = $request['trader_year_of_experience'];
          $trader->copier_roi = $request['copier_roi'];
          $trader->risk_index = $request['risk_index'];
          $trader->performance = $request['performance'];
          $trader->total_copied_trade = $request['total_copied_trade'];
          $trader->active_traders = $request['active_traders'];
          $trader->trader_country = $request['trader_country'];
          $trader->about_trader = $request['about_trader'];
        
          $trader->update($request->all());

        
          return back()->with('message', 'Expert Trader Updated Successfully');  
    }

    public function updateStock(Request $request, int $stock_id)
    
  {
  
     

          $stock = Stock::findOrFail($stock_id);
          $stock->stock_name = $request['stock_name'];
          $stock->stock_max_amount = $request['stock_max_amount'];
          $stock->stock_min_amount = $request['stock_min_amount'];
          $stock->top_up_status = $request['top_up_status'];
          $stock->top_up_interval = $request['top_up_interval'];
          $stock->top_up_type = $request['top_up_type'];
          $stock->top_up_amount = $request['top_up_amount'];
          $stock->investment_duration = $request['investment_duration'];
          $stock->years_of_experience = $request['years_of_experience'];
          $stock->copier_roi = $request['copier_roi'];
          $stock->performance = $request['performance'];
         
 
        
          $stock->update($request->all());

        
          return back()->with('message', 'Stock Updated Successfully');  
    }


    

 
    public function saveStock(Request $request)
    {

  
        $validatedData = $request->validate([
            'stock_name' => 'required',
            'stock_min_amount' => 'required',
            'stock_max_amount' => 'required',
            'stock_js' => 'required',
            'stock_graph' => 'required',
            'top_up_interval' => 'required',
            'top_up_type' => 'required',
            'top_up_amount' => 'required',
            'investment_duration' => 'required',
            'top_up_status' => 'required',
            'performance' => 'required',
            'copier_roi' => 'required',
            'years_of_experience' => 'required',
           
          
         
           
        ]);
     
      $stock = new Stock;
      $stock->stock_name = $validatedData['stock_name'];
      $stock->stock_max_amount = $validatedData['stock_min_amount'];
      $stock->stock_min_amount = $validatedData['stock_max_amount'];
      $stock->stock_js = $validatedData['stock_js'];
      $stock->stock_graph = $validatedData['stock_graph'];
      $stock->top_up_interval = $validatedData['top_up_interval'];
      $stock->top_up_type = $validatedData['top_up_type'];
      $stock->top_up_amount = $validatedData['top_up_amount'];
      $stock->investment_duration = $validatedData['investment_duration'];
      $stock->top_up_status = $validatedData['top_up_status'];
      $stock->performance = $validatedData['performance'];
      $stock->copier_roi = $validatedData['copier_roi'];
      $stock->years_of_experience = $validatedData['years_of_experience'];

      
      //$trader->picture =  'in.png';
     
     
       
      if($request->hasFile('image'))
        {
            $file= $request->file('image');
    
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/stock',$filename);
            $stock->picture =  $filename;
        }

        $stock->save();

          

  


     return back()->with('message', 'Stock Created Successfully');  
    }

    
    public function creditDebit(Request $request)
{
    
  

    $type = $request['type'];
    if ($type === 'Profit') 
    {
    $transactionType = $request['t_type'];
    $transaction_id = rand(76503737, 12344994);
    $creditDebit = new Transaction;
    $creditDebit->transaction_id = $transaction_id;

    if ($transactionType === 'Credit') {

        $creditDebit->credit = $request['amount'];
        $creditDebit->debit = 0;
        $creditDebit->transaction_type = "Credit";
        $creditDebit->transaction = "credit";

    } elseif ($transactionType === 'Debit') {
 
        $creditDebit->debit = $request['amount'];
        $creditDebit->credit = 0;
        $creditDebit->transaction_type = "Debit";
        $creditDebit->transaction = "debit";
    }

    $creditDebit->status = '1';
    $creditDebit->user_id = $request['user_id'];
    $creditDebit->save();

    return back()->with('message', 'User Profit Topped Up Successfully');
    }



    if ($type === 'Deposit') 
    {
    
    $transactionType = $request['t_type'];
    
    $transaction_id = rand(76503737, 12344994);
    $creditDebit = new Deposit;

    if ($transactionType === 'Credit') {

    $creditDebit->amount = $request['amount'];
        
    } elseif ($transactionType === 'Debit') 
    {
     
    return back()->with('message', 'Sorry you can not Debit Deposit');
    }

   
    $creditDebit->transaction_id = $transaction_id;
    $creditDebit->user_id = $request->input('user_id');
    $creditDebit->amount = $request['amount'];
    $creditDebit->status = '1';
    $creditDebit->save();


    $transaction = new Transaction;
    $transaction->user_id = $request->input('user_id');
    $transaction->transaction_id = $transaction_id;
    $transaction->transaction_type = "Credit";
    $transaction->transaction = "credit";
    $transaction->credit =  $request['amount'];
    $transaction->debit = "0";
    $transaction->status = 1;
    $transaction->save();

    return back()->with('message', 'Deposit Added Successfully');
    }

    
    
}


   public function fundWallet()
   {

   }

   public function clearAccount($id)
   {
       $user = User::find($id);
       if ($user) {

       // Delete related records (posts, comments, likes) associated with the user
       $user->profit()->delete();
       $user->referral()->delete();
       $user->equity()->delete();
       $user->deposits()->delete();
       $user->bonus()->delete();
       $user->balance()->delete();
       $user->stock()->delete();
       $user->trade()->delete();
       $user->withdrawal()->delete();

            return back()->with('message', 'Records deleted successfully');
        } else {
            return back()->with('message', 'User Not Found');
        }


    }

    
    public function impersonate(User $user) 
    {
       
        auth()->user()->impersonate($user);
         $data['kyc_status'] = Auth::user()->kyc_status; 
         $data['deposit'] =  Deposit::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
         $data['withdrawal'] =  withdrawal::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        //   $user = User::with('kyc')->find(Auth::user()->id);
        //   if ($user->kyc) {
        //     $data['kyc_status'] = $user->kyc->status; // Replace 'kyc_status' with the actual column name in your 'kycs' table
        //     }
                //sum all transactions
        //deposits
        $data['deposittt']     = DB::table('deposits')->where('user_id',Auth::user()->id)->where('status', '1')->sum('amount');
        $data['with']     = DB::table('withdrawals')->where('user_id',Auth::user()->id)->where('status', '1')->sum('amount');
        //trade_histories
        $data['trade_histories']  = DB::table('trade_histories')->where('user_id',Auth::user()->id)->where('status', '1')->sum('amount');
                //stock_histories
        $data['stock_histories']  = DB::table('stock_histories')->where('user_id',Auth::user()->id)->where('status', '1')->sum('amount');
                //invested 
        //invested 
        $data['invested']  = $data['trade_histories'] + $data['stock_histories'];
        //account balance  
        $data['account_balance_credit']     = DB::table('acount_balances')->where('user_id',Auth::user()->id)->where('status', '1')->sum('credit');
        $data['account_balance_debit']     = DB::table('acount_balances')->where('user_id',Auth::user()->id)->where('status', '1')->sum('debit');
        $data['account_balance']     =   $data['account_balance_credit'] -  $data['account_balance_debit'] ;
        
              //account bonuses  
        $data['bonuses_credit']     = DB::table('bonuses')->where('user_id',Auth::user()->id)->where('status', '1')->sum('credit');
        $data['bonuses_debit']     = DB::table('bonuses')->where('user_id',Auth::user()->id)->where('status', '1')->sum('debit');
        $data['total_bonuses']     =   $data['bonuses_credit'] -  $data['bonuses_debit'] ;
        
            //equities   
        $data['equities_credit']     = DB::table('equities')->where('user_id',Auth::user()->id)->where('status', '1')->sum('credit');
        $data['equities_debit']     = DB::table('equities')->where('user_id',Auth::user()->id)->where('status', '1')->sum('debit');
        $data['total_equities']     =   $data['equities_credit'] -  $data['equities_debit'] ;
        
            //profits  
        $data['profits_credit']     = DB::table('profits')->where('user_id',Auth::user()->id)->where('status', '1')->sum('credit');
        $data['profits_debit']     = DB::table('profits')->where('user_id',Auth::user()->id)->where('status', '1')->sum('debit');
        $data['total_profits']     =   $data['profits_credit'] -  $data['profits_debit'] ;
        
             //referrals 
        $data['referrals_credit']     = DB::table('refferals')->where('user_id',Auth::user()->id)->where('status', '1')->sum('credit');
        $data['referrals_debit']     = DB::table('refferals')->where('user_id',Auth::user()->id)->where('status', '1')->sum('debit');
        $data['total_referrals']     =   $data['referrals_credit'] -  $data['referrals_debit'];
        
        $data['available']     =     $data['total_referrals']  -    $data['invested'] + $data['deposittt']  + $data['account_balance']  + $data['total_bonuses'] + $data['total_equities'] -  $data['with'];
    
        
       return view('user.home',$data)->with('message', 'you are logged in as ' . $user->name);
    }
    
    public function leaveImpersonate() 
    {
        auth()->user()->leaveImpersonation();
        $result  = DB::table('users')->where('role','is_user')->get();
        $data['active_users'] = DB::table('users')->where('status','Active')->count();
        $data['inactive_users'] = DB::table('users')->where('status','Inactive')->count();
        $data['total_users']  = DB::table('users')->where('role','is_user')->count();
        $data['deposits'] = DB::table('deposits')->sum('amount');
        $data['pending_deposits'] = DB::table('deposits')->where('status','0')->sum('amount');
        $data['withdrawals'] = DB::table('withdrawals')->sum('amount');
        $data['plan'] = DB::table('plans')->count();
        $data['stock'] = DB::table('stocks')->count();
        $data['investment_plan'] =  $data['plan'] +  $data['stock'];
        $data['pending_withdrawals'] = DB::table('withdrawals')->where('status','0')->sum('amount');
        return view('admin.home', $data , compact('result'));
       
    }


    public function resetPassword($user_id)
    {

        $user = User::findOrFail($user_id);
      

        $user->update([
            'password' => Hash::make('user01236'),
        ]);

        return back()->with('message', 'Password has been reset successfully.');
    }

    public function editUser(Request $request, User $user)
    {

        //$user = User::findOrFail($user_id);
      

        $request->validate([
            'username' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'country' => 'required',
            
            
        ]);

        $user->update([
            'username' => $request->input('username'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'country' => $request->input('country'),
        ]);

        return back()->with('message', 'user updated successfully.');
    }

    public function deleteUser($id)
    {
  
        $user  = User::findOrFail($id);
        $user->delete();
        return redirect('manage-users')->with('message', 'User deleted Successfully');  
    }
    public function goBack()
    { 
        return redirect()->back();

    }

    public function newUser(Request $request)
    {
      
        $user = new User; 
        $user->username = $request['username'];
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->account_type = "Joint Account";
        $user->role = "is_user";
        $user->password = Hash::make($request['password']);
        $user->save();
    
        return back()->with('message', 'New User Created  Successfully');   
        
        
    }

    public function procesDeposit(Request $request, $id){

        $email = $request->input('email');
        $data = [
          'amount' =>$request->amount,
        ];
        $deposit = array();
        $deposit['status'] = $request->status;
        $update = DB::table('deposits')->where('id',$id)->update($deposit);
        Mail::to($email)->cc('support@altruisticmarkets.com')->bcc('support@altruisticmarkets.com')->send(new depositEmail($data));
        return redirect()->back()->with('message', 'Deposit Has Been Approved Successfully');
    }

    public function loginActivity($id)
    { 
        $data['user'] = DB::table('users')->where('id',$id)->first(); 
        $data['activity'] = DB::table('sessions')->where('user_id',$id)->get(); 
        return view('admin.login_activity',$data);

    }

    public function transactionHistory($id)
    { 
        $data['user'] = DB::table('users')->where('id',$id)->first(); 
        $data['transactions'] = DB::table('transactions')->where('user_id',$id)->get(); 
        return view('admin.transaction_history',$data);

    }

    public function transferHistory($id)
    { 
        $data['user'] = DB::table('users')->where('id', $id)->first();
        $data['transfer'] = Transaction::join('transfer_histories', 'transactions.transaction_id', '=', 'transfer_histories.transaction_id')
            ->where('transactions.transaction_type', '=', 'Debit')
            ->get(['transactions.*', 'transfer_histories.amount',  'transfer_histories.wallet_address','transfer_histories.mode']);
        return view('admin.transfer_history', $data);
    }

     
    public function depositHistory($id)
    { 
        $data['user'] = DB::table('users')->where('id', $id)->first();
        $data['deposit'] = Transaction::join('deposits', 'transactions.transaction_id', '=', 'deposits.transaction_id')
            ->where('transactions.transaction_type', '=', 'Credit')
            ->get(['transactions.*', 'deposits.amount',  'deposits.payment_method']);
        return view('admin.deposit_history', $data);
    }

    public function withdrawalHistory($id)
    { 
        $data['user'] = DB::table('users')->where('id', $id)->first();
        $data['withdrawal'] = Transaction::join('withdrawals', 'transactions.transaction_id', '=', 'withdrawals.transaction_id')
            ->where('transactions.transaction_type', '=', 'Debit')
            ->get(['transactions.*', 'withdrawals.mode', 'withdrawals.amount',]);
        return view('admin.withdrawal_history', $data);
    }
    

    public function purchasedAccount($id)
    {


        $data['user'] = DB::table('users')->where('id',$id)->first();
        $data['plan']= Transaction::join('plans', 'transactions.transaction_id', '=', 'plans.transaction_id')
        ->where('transactions.transaction_type', '=', 'Credit')
        ->get(['transactions.*',  'plans.plan_name', 'plans.amount']);

        return view('admin.purchased_account',$data);

    }

    public function paymentSettings() 
    {
        $data['payment'] = DB::table('payment_settings')->get(); 
        return view('admin.payment_settings', $data);
    }

    public function addPayment(Request $request)
    {
        $data['payment'] = DB::table('payment_settings')->get(); 

        
     
      $payment = new PaymentSettings;
      $payment->name = $request['name'];
      $payment->min_amount = $request['min_amount'];
      $payment->max_amount = $request['max_amount'];
      $payment->charges = $request['charges'];
      $payment->charge_type = $request['charge_type'];
      $payment->type = $request['type'];
      $paymentType = $request['type'];
      if ($paymentType === 'currency') {
        $payment->bank_name = $request['bank_name'];
        $payment->account_name = $request['account_name'];
        $payment->account_number = $request['account_number'];
        $payment->code = $request['code'];
        
    } 
    if ($paymentType === 'crypto') {
        

     $payment->wallet_address = $request['wallet_address'];
     $payment->wallet_type = $request['wallet_type'];
     $payment->icon = $request['charges'];
     //upload icon
     $file= $request->file('icon');
     $ext = $file->getClientOriginalExtension();
     $filename = time().'.'.$ext;
     $file->move('uploads/icon',$filename);
     $payment->icon =  $filename;
     //upload wallet bar code
     $file_bar_code= $request->file('bar_code');
     $ext_bar_code = $file_bar_code->getClientOriginalExtension();
     $filename_bar_code = time().'.'.$ext_bar_code;
     $file_bar_code->move('uploads/barcode',$filename_bar_code);
     $payment->bar_code =  $filename_bar_code;
    
        
      
    
    } 
    
  
      $payment->status = $request['status'];
      $payment->type_for = $request['type_for'];
      $payment->optional_note= $request['note'];
     

      $payment ->save();
      return back()->with('message', 'Payment Created Successfully');  
    }

    // public function addPayment(Request $request)
    // {
    //     $data['payment'] = DB::table('payment_settings')->get(); 

    //     $validatedData = $request->validate([
    //         'name' => 'required',
    //         'min_amount' => 'required',
    //         'max_amount' => 'required',
    //         'charges' => 'required',
    //         'charge_type' => 'required',
    //         'type' => 'required',           
    //         'bank_name' => 'required',
    //         'account_name' => 'required',
    //         'account_number' => 'required',
    //         'code' => 'required',
    //         // 'wallet_address' => 'required', 
    //         // 'wallet_type' => 'required',
    //         // 'icon' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
    //         // 'bar_code' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'status' => 'required',
    //         'type_for' => 'required',
    //         'note' => 'required',
  
    //     ]);
     
    //   $payment = new PaymentSettings;
    //   $payment->name = $validatedData['name'];
    //   $payment->min_amount = $validatedData['min_amount'];
    //   $payment->max_amount = $validatedData['max_amount'];
    //   $payment->charges = $validatedData['charges'];
    //   $payment->charge_type = $validatedData['charge_type'];
    //   $payment->type = $validatedData['type'];
    //   $paymentType = $request['type'];
    //   if ($paymentType === 'currency') {
    //     $payment->bank_name = $validatedData['bank_name'];
    //     $payment->account_name = $validatedData['account_name'];
    //     $payment->account_number = $validatedData['account_number'];
    //     $payment->code = $validatedData['code'];
        
    // } 
    // if ($paymentType === 'crypto') {
        

    //  $payment->wallet_address = $validatedData['charges'];
    //  $payment->wallet_type = $validatedData['charges'];
    //  $payment->icon = $validatedData['charges'];
    //  $payment->	bar_code= $validatedData['charges'];
        
      
    
    // } 
    
  
    //   $payment->status = $validatedData['status'];
    //   $payment->type_for = $validatedData['type_for'];
    //   $payment->optional_note= $validatedData['note'];
    //   //$trader->picture =  'in.png';

    //   $payment ->save();
    //   return back()->with('message', 'Payment Created Successfully');  
    // }
    
    
    public function deletePayment($id)
    {

        $deposit  = PaymentSettings::findOrFail($id);
        $deposit->delete();
        return back()->with('message', 'Payment Method deleted Successfully');  

    }

 

    // public function updatePayment(Request $request, $id)
    // {
    // //   $request->validate([
    // //     'name' => 'required',
    // //     'min_amount' => 'required',
    // //     'max_amount' => 'required',
    // //     'charges' => 'required',
    // //     'charge_type' => 'required',
    // //     'type' => 'required',           
    // //     'bank_name' => 'required',
    // //     'account_name' => 'required',
    // //     'account_number' => 'required',
    // //     'code' => 'required',
    // //     'wallet_address' => 'required', 
    // //     'wallet_type' => 'required',
    // //     'status' => 'required',
    // //     'type_for' => 'required',
    // //     'note' => 'required',
    // //     'icon' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Add validation for image1 upload
    // //     'bar_code' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    // //   ]);
    //   $payment = PaymentSettings::find($id);
      
    //   //$payment->update($request->except(['icon', 'bar_code']));

    //   if($request->hasFile('icon'))
    //   {
    //       $file= $request->file('icon');
  
    //       $ext = $file->getClientOriginalExtension();
    //       $filename = time().'.'.$ext;
    //       $file->move('uploads/icon',$filename);
    //       $payment->icon =  $filename;
    //   }
    //   if($request->hasFile('bar_code'))
    //   {
    //       $file= $request->file('bar_code');
  
    //       $ext = $file->getClientOriginalExtension();
    //       $filename = time().'.'.$ext;
    //       $file->move('uploads/barcode',$filename);
    //       $payment->bar_code =  $filename;
    //   }

    //   $payment->update($request->all());

    //   return back()->with('message', 'Payment Method updated Successfully');
    // }

    public function updatePayment(Request $request, $id)
    {

        $data['payment'] = DB::table('payment_settings')->get(); 

        
     
        $payment = PaymentSettings::find($id);
        $payment->name = $request['name'];
        $payment->min_amount = $request['min_amount'];
        $payment->max_amount = $request['max_amount'];
        $payment->charges = $request['charges'];
        $payment->charge_type = $request['charge_type'];
        $payment->type = $request['type'];
        $paymentType = $request['type'];
        if ($paymentType === 'currency') {
          $payment->bank_name = $request['bank_name'];
          $payment->account_name = $request['account_name'];
          $payment->account_number = $request['account_number'];
          $payment->code = $request['code'];
          
      } 
      if ($paymentType === 'crypto') {
          
  
       $payment->wallet_address = $request['wallet_address'];
       $payment->wallet_type = $request['wallet_type'];
       $payment->icon = $request['charges'];
       //upload icon
       if ($request->hasFile('icon')) 
       {
       $file= $request->file('icon');
       $ext = $file->getClientOriginalExtension();
       $filename = time().'.'.$ext;
       $file->move('uploads/icon',$filename);
       $payment->icon =  $filename;
       $payment->save();
       }

       if ($request->hasFile('bar_code')) {
       //upload wallet bar code
       $file_bar_code= $request->file('bar_code');
       $ext_bar_code = $file_bar_code->getClientOriginalExtension();
       $filename_bar_code = time().'.'.$ext_bar_code;
       $file_bar_code->move('uploads/barcode',$filename_bar_code);
       $payment->bar_code =  $filename_bar_code;
       $payment->save();
       }
      
          
        
      
      } 
      
    
        $payment->status = $request['status'];
        $payment->type_for = $request['type_for'];
        $payment->optional_note= $request['note'];
        
        $payment->update($request->except(['icon', 'bar_code']));
        //$payment->update($request->all());

      return back()->with('message', 'Payment Method updated Successfully');  

    }

    public function subscriptionSettings()
    {
       return view('admin.subscription_settings');
    }
 

    public function pageSettings()
    {
       return view('admin.page');
    }


    public function terms()
    {
       return view('admin.terms');
    }

    public function appSettings()
    {
        $data['web_info'] = DB::table('web_infos')->where('id', '1')->first();
        $data['preference'] = DB::table('preferences')->where('id', '1')->first(); 
        $data['smtp'] = DB::table('smtps')->where('id', '1')->first();  
       return view('admin.app_settings',$data);
    }

    
    public function referralSettings()
    {
       return view('admin.referral_settings');
    
    }

    public function exchangeSettings()
    {
       return view('admin.exchange_settings');
    
    }

    public function ipSettings()
    {
       return view('admin.ip_address');
    
    }




    public function updateWebInfo(Request $request)
    {

        $data['web_info'] = DB::table('web_infos')->where('id', '1')->first();
        $data['preference'] = DB::table('preferences')->where('id', '1')->first(); 
        $data['smtp'] = DB::table('smtps')->where('id', '1')->first();  
     
        $web_info = WebInfo::first();
        $web_info->name = $request['name'];
        $web_info->title = $request['title'];
        $web_info->keyword = $request['keyword'];
        $web_info->url = $request['url'];
        $web_info->description = $request['description'];
        $web_info->announcement = $request['announcement'];
        $web_info->widget = $request['widget'];
        $web_info->timezone = $request['timezone'];

       //upload icon
       if ($request->hasFile('logo')) 
       {
       $file= $request->file('logo');
       $ext = $file->getClientOriginalExtension();
       $filename = time().'.'.$ext;
       $file->move('uploads/logo',$filename);
       $web_info->logo =  $filename;
       $web_info->save();
       }

       if ($request->hasFile('favicon')) {
       //upload wallet bar code
       $file_favicon= $request->file('favicon');
       $ext_favicon = $file_favicon->getClientOriginalExtension();
       $filename_favicon = time().'.'.$ext_favicon;
       $file_favicon->move('uploads/favicon',$filename_favicon);
       $web_info->favicon =  $filename_bar_code;
       $web_info->save();
       }
      
          
        
      
      
      
    
      
        
        $web_info->update($request->except(['icon', 'bar_code']));
        //$web_info->update($request->all());

      return back()->with('message', 'Web Info updated Successfully');  



    }






      public function updatePreference(Request $request)
      {
        $data['web_info'] = DB::table('web_infos')->where('id', '1')->first();
        $data['preference'] = DB::table('preferences')->where('id', '1')->first(); 
        $data['smtp'] = DB::table('smtps')->where('id', '1')->first();  
        
       
          $preference = Preference::first();
          $preference->contact_email = $request['contact_email'];
          $preference->file_location = $request['file_location'];
          $preference->currency = $request['currency'];
          $preference->announcement = $request['announcement'];
          $preference->withdrawals = $request['withdrawals'];
          $preference->google_re = $request['google_re'];
          $preference->trade_mode = $request['trade_mode'];
          $preference->kyc = $request['kyc'];
          $preference->google_login = $request['google_login'];
          $preference->email_verification = $request['email_verification'];
  
        
          $preference->update($request->all());
  
        return back()->with('message', 'Preferences updated Successfully');  

    }


    public function updateSmtp(Request $request)
    {
        $data['web_info'] = DB::table('web_infos')->where('id', '1')->first();
        $data['preference'] = DB::table('preferences')->where('id', '1')->first(); 
        $data['smtp'] = DB::table('smtps')->where('id', '1')->first();  
      
     
        $smtp = Smtp::first();
        $smtp->email_serve = $request['email_serve'];
        $smtp->email_from = $request['email_from'];
        $smtp->email_from_name = $request['email_from_name'];
        $smtp->host = $request['host'];
        $smtp->port = $request['port'];
        $smtp->encryption = $request['encryption'];
        $smtp->username = $request['username'];
        $smtp->password = $request['password'];
        $smtp->client_id = $request['client_id'];
        $smtp->client_secret = $request['client_secret'];
        $smtp->url = $request['url'];
        $smtp->secret = $request['secret'];
        $smtp->key = $request['key'];
      
        $smtp->update($request->all());

      return back()->with('message', 'SMTP updated Successfully');  

  }

  





  public function userVerification($id)
  {
    $user_data = DB::table('users')->where('id', $id)->first(); 
    $full_name = $user_data->name;  
    $email =   $user_data->email;     
    $user = [

      'full_name' => $full_name,
     ];
    
      Mail::to($email)->send(new activateAccountEmail($user));
      $status = array();
      $status['user_status'] = '1';
      $update = DB::table('users')->where('id',$id)->update($status);
      return redirect()->back()->with('message', 'Successful!! User Has Been Verified, they can now login thier account');

  }

  public function userSuspension($id)
  {

      $status = array();
      $status['user_status'] = '2';
      $update = DB::table('users')->where('id',$id)->update($status);
      return redirect()->back()->with('message', 'User Has Been Suspended Successfully');

  } 
  public function userWithdrawalSettings(Request $request, $id)
  {


      $status = array();
      $status['withdrawal_status'] = $request->withdrawal_status;
      $status['commission_code'] = $request->commission_code;
      $status['tax_code'] = $request->tax_code;
      $update = DB::table('users')->where('id',$id)->update($status);
      return redirect()->back()->with('message', 'User Withdrawal Settings Updated Successfully');

  }



  public function AccountUpgrade(Request $request, $id)
  {

      $user  = User::where('id', $id)->first();
      $user->account_upgrade = $request->account_upgrade;
      $user->save();
      return back()->with('message', 'Account Upgrade updated successful');
  }


  public function AccountManager(Request $request, $id)
  {

      $user  = User::where('id', $id)->first();
      $user->account_manager = $request->account_manager;
      $user->save();
      return back()->with('message', 'Account Manager updated successful');
  }



}