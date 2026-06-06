<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\Admin\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/about', function () {
    return view('home.about');
});

Route::get('/elite', function () {
    return view('home.elite');
});

Route::get('/affliate', function () {
    return view('home.affliate');
});

Route::get('/competition', function () {
    return view('home.competition');
});

Route::get('/faq', function () {
    return view('home.faq');
});

Route::get('/trading', function () {
    return view('home.trading');
});

Route::get('/raw-trader', function () {
    return view('home.raw-trader');
});

Route::get('/why', function () {
    return view('home.why');
});

Route::get('/live', function () {
    return view('home.live');
});

Route::get('/forex', function () {
    return view('home.forex');
});

Route::get('/indices', function () {
    return view('home.indices');
});

Route::get('/bond', function () {
    return view('home.bond');
});

Route::get('/digitalcurrency', function () {
    return view('home.digitalcurrency');
});

Route::get('/stocks', function () {
    return view('home.stocks');
});

Route::get('/futures', function () {
    return view('home.futures');
});

Route::get('/trading-conditions', function () {
    return view('home.trading-conditions');
});

Route::get('/trading-hours', function () {
    return view('home.trading-hours');
});

Route::get('/swap-rates', function () {
    return view('home.swap-rates');
});


Route::get('/commodities', function () {
    return view('home.commodities');
});

Route::get('/demo', function () {
    return view('home.demo');
});

Route::get('/ic-mobile', function () {
    return view('home.ic-mobile');
});

Route::get('/ctrader-windows', function () {
    return view('home.ctraders-window');
});

Route::get('/social-trading', function () {
    return view('home.social-trading');
});

Route::get('/zulutrade', function () {
    return view('home.zulutrade');
});

Route::get('/signal-start', function () {
    return view('home.signal-start');
});

Route::get('/account-overview', function () {
    return view('home.account-overview');
});

Route::get('/ctrader-raw', function () {
    return view('home.ctrader-raw');
});

Route::get('/spread-account', function () {
    return view('home.spread-account');
});

Route::get('/standard-account', function () {
    return view('home.standard-account');
});

Route::get('/islamic-account', function () {
    return view('home.islamic-account');
});

Route::get('/signal-start', function () {
    return view('home.signal-start');
});



Route::get('/tradingview', function () {
    return view('home.tradingview');
});

Route::get('/metatrader-4', function () {
    return view('home.metatrader-4');
});

Route::get('/metatrader-5', function () {
    return view('home.meta-trader5');
});

Route::get('/webtrader', function () {
    return view('home.webtrader');
});

Route::get('/iphone', function () {
    return view('home.iphone');
});

Route::get('/android', function () {
    return view('home.android');
});

Route::get('/mac', function () {
    return view('home.mac');
});

Route::get('/withdrawals', function () {
    return view('home.withdrawals');
});
Route::get('/ctrader-web', function () {
    return view('home.ctrader-web');
});

Route::get('/ctrader-iphone', function () {
    return view('home.ctrader-iphone');
});
Route::get('/ctrader-android', function () {
    return view('home.ctrader-android');
});


Route::get('/ctrader-automate', function () {
    return view('home.ctrader-automate');
});

Route::get('/legal', function () {
    return view('home.legal');
});

Route::get('/ctrader-copytrading', function () {
    return view('home.ctrader-copytrading');
});

Route::get('/virtual-private-server', function () {
    return view('home.virtual-private-server');
});

Route::get('/trading-server', function () {
    return view('home.trading-server');
});

Route::get('/mt4-advanced', function () {
    return view('home.mt4-advanced');
});

Route::get('/funding', function () {
    return view('home.funding');
});

Route::get('/range-of-markets', function () {
    return view('home.range-of-markets');
});

Route::get('/forex-trading', function () {
    return view('home.forex-trading');
});

Route::get('/spreads', function () {
    return view('home.spreads');
});

Route::get('/contact', function () {
    return view('home.contact');
});

Route::get('/regulation', function () {
    return view('home.regulation');
});

Route::get('/insurance', function () {
    return view('home.insurance');
});

Route::get('/career', function () {
    return view('home.career');
});

Route::get('/education-overview', function () {
    return view('home.education-overview');
});

Route::get('/advantage-of-forex', function () {
    return view('home.advantage-of-forex');
});

Route::get('/advantage-of-cfds', function () {
    return view('home.advantage-of-cfds');
});

Route::get('/web-tv', function () {
    return view('home.web-tv');
});

Route::get('/video-tutorials', function () {
    return view('home.video-tutorials');
});

Route::get('/video-tutorials', function () {
    return view('home.video-tutorials');
});

Route::get('/help-center', function () {
    return view('home.help-center');
});

Route::get('/forex-calculators', function () {
    return view('home.forex-calculators');
});

Route::get('/rules', function () {
    return view('home.rules');
});
Route::get('/', function () {
    return view('home.homepage');
});

Auth::routes();


//  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', 'App\Http\Controllers\UserController@redirect')->middleware('verifyUser')->name('home');
Route::get('/copy', 'App\Http\Controllers\UserController@Copy');
Route::get('/home', 'App\Http\Controllers\UserController@redirect')->middleware('user_auth')->name('home');
Route::get('/dashboard', 'App\Http\Controllers\UserController@dashboard')->middleware('user_auth');
Route::get('/legal', 'App\Http\Controllers\UserController@Legal')->middleware('user_auth');
Route::get('/terms', 'App\Http\Controllers\UserController@Terms')->middleware('user_auth');
Route::get('/copy', 'App\Http\Controllers\UserController@Copy')->middleware('user_auth');
Route::get('/profile', 'App\Http\Controllers\UserController@Profile')->middleware('user_auth');
Route::get('/photo', 'App\Http\Controllers\UserController@Photo')->middleware('user_auth');
// Route::post('/upload-picture','App\Http\Controllers\UserController@uploadProfile');
Route::post('/upload_picture', 'App\Http\Controllers\UserController@uploadProfile')->middleware('user_auth')->name('upload_picture');
Route::get('/crypto_buy', 'App\Http\Controllers\UserController@Crypto_buy')->middleware('user_auth');
Route::post('/get-deposit', 'App\Http\Controllers\UserController@getDeposit')->middleware('user_auth');
Route::get('/deposit', 'App\Http\Controllers\UserController@userDeposit')->middleware('user_auth');
Route::post('/make-deposit', 'App\Http\Controllers\UserController@makeDeposit')->middleware('user_auth');
Route::get('/support', 'App\Http\Controllers\UserController@supportTicket')->middleware('user_auth');
Route::get('/kyc', 'App\Http\Controllers\UserController@Kyc')->middleware('user_auth');
Route::get('/accounthistory', 'App\Http\Controllers\UserController@accounthistory')->middleware('user_auth');
Route::get('/purchasehistory', 'App\Http\Controllers\UserController@purchasehistory')->middleware('user_auth');
Route::get('/bothistory', 'App\Http\Controllers\UserController@Bothistory')->middleware('user_auth');
Route::get('/earnings', 'App\Http\Controllers\UserController@Earning')->middleware('user_auth');
Route::get('/buy-account', 'App\Http\Controllers\UserController@buyaccount')->middleware('user_auth');
Route::get('/bonus', 'App\Http\Controllers\UserController@Bonus')->middleware('user_auth');
Route::get('/account-settings', 'App\Http\Controllers\UserController@accountSettings')->middleware('user_auth');
Route::get('/myplans', 'App\Http\Controllers\UserController@myplans')->middleware('user_auth');
Route::get('/settings', 'App\Http\Controllers\UserController@Settings');
Route::get('/tradinghistory', 'App\Http\Controllers\UserController@tradingHistory')->middleware('user_auth');
Route::get('/referuser', 'App\Http\Controllers\UserController@referUser')->middleware('user_auth');
Route::get('/verify-account', 'App\Http\Controllers\UserController@verifyAccount')->middleware('user_auth');
Route::get('/upload-kyc', 'App\Http\Controllers\UserController@uploadKyc')->middleware('user_auth');
Route::post('/upload-kyc', 'App\Http\Controllers\UserController@uploadKyc')->middleware('user_auth');
Route::get('/withdrawal', 'App\Http\Controllers\UserController@Withdrawals');
Route::get('/user-refer', 'App\Http\Controllers\UserController@UserRefer');
Route::get('/withdrawal-commision-code', 'App\Http\Controllers\UserController@WithdrawalCommisionCode')->middleware('user_auth');
Route::get('/withdrawal-tax-code', 'App\Http\Controllers\UserController@WithdrawalTaxCode')->middleware('user_auth');
Route::get('/transfer', 'App\Http\Controllers\UserController@Transfer')->middleware('user_auth');
Route::get('/withdraw-funds', 'App\Http\Controllers\UserController@withdrawFunds')->middleware('user_auth');
Route::get('/logout', 'App\Http\Controllers\UserController@perform')->name('logout.perform');
Route::post('/change-password', 'App\Http\Controllers\UserController@updatePassword')->middleware('user_auth')->name('update-password');
Route::post('/profile-update', 'App\Http\Controllers\UserController@profileUpdate')->middleware('user_auth')->name('profileupdate');
Route::post('/support-email', 'App\Http\Controllers\UserController@supportEmail')->middleware('user_auth');
Route::post('/buy-plan', 'App\Http\Controllers\UserController@buyPlans')->middleware('user_auth');
Route::get('/investments', 'App\Http\Controllers\UserController@investmentHistory')->middleware('user_auth');
Route::post('/trading', 'App\Http\Controllers\UserController@Trading')->middleware('user_auth');
Route::post('/make-withdrawal', 'App\Http\Controllers\UserController@makeWithdrawal')->middleware('user_auth');
Route::post('/make-transfer', 'App\Http\Controllers\UserController@makeTransfer')->middleware('user_auth');
Route::post('/step2', 'App\Http\Controllers\UserController@Step2')->middleware('user_auth')->name('step2');
Route::post('/dashboard', 'App\Http\Controllers\UserController@Step3')->middleware('user_auth')->name('step3');
Route::get('verify/{id}', 'App\Http\Controllers\UserController@verify')->middleware('user_auth')->name('verify');
Route::get('update_details', 'App\Http\Controllers\UserController@nextDetails')->middleware('user_auth')->name('update.details');
Route::match(['get', 'post'],'email-verify', 'App\Http\Controllers\UserController@emailVerify')->middleware('user_auth')->name('code');
Route::get('resend-code/{id}', 'App\Http\Controllers\UserController@resendCode')->middleware('user_auth')->name('resendCode');
Route::get('await_data', 'App\Http\Controllers\UserController@awaitData')->middleware('user_auth')->name('await.data');
Route::get('commision_code', 'App\Http\Controllers\UserController@commisionCode')->middleware('user_auth')->name('commision.code');
Route::post('check_commision_code', 'App\Http\Controllers\UserController@checkCommisionCode')->middleware('user_auth')->name('check.commision.code');
Route::get('tax_code', 'App\Http\Controllers\UserController@taxCode')->middleware('user_auth')->name('tax.code');
Route::post('check_tax_code', 'App\Http\Controllers\UserController@checkTaxCode')->middleware('user_auth')->name('check.tax.code');
Route::get('query_data', 'App\Http\Controllers\UserController@queryData')->middleware('user_auth')->name('query.data');
Route::get('activate_account', 'App\Http\Controllers\UserController@activateAccount')->name('activate.account');
Route::get('suspend_account', 'App\Http\Controllers\UserController@suspendAccount')->name('suspend.account');
Route::get('buy-bot', 'App\Http\Controllers\UserController@Buybot')->name('buybot');
Route::get('escrow-account', 'App\Http\Controllers\UserController@escrowAccount')->name('escrow.account');
Route::get('escrow-account', 'App\Http\Controllers\UserController@escrowAccount')->name('escrow.account');
Route::get('icm-protect', 'App\Http\Controllers\UserController@icmProtect')->name('icm.protect');
Route::get('trade', 'App\Http\Controllers\UserController@Trade')->name('trade');
Route::post('/subscribe', 'App\Http\Controllers\UserController@Subscribe')->name('subscribe');
Route::post('activate-bot', 'App\Http\Controllers\UserController@activateBot')->name('activate.bot');

Route::post('/connect-bot', 'App\Http\Controllers\UserController@ConnectBot')->name('connect.bot');

Route::get('/accept-bot/{id}/', 'App\Http\Controllers\UserManagementController@acceptBot');
Route::get('/decline-bot/{id}/', 'App\Http\Controllers\UserManagementController@rejectBot');



      
// // manage user details from admin
// Route::get('/admin/dashboard', 'App\Http\Controllers\UserManagementController@adminHome')->name('admin.home');

// //Route::get('/panel', [AdminPagesController::class, 'panel_home'])->name('panel')->middleware('auth:admin');
// Route::get('/admin/login', 'App\Http\Controllers\UserManagementController@login')->name('admin.login');
// Route::get('/admin/login', 'App\Http\Controllers\UserManagementController@store')->name('admin.login.store')->middleware('auth:admin');
// Route::post('/admin/logout', 'App\Http\Controllers\UserManagementController@logoutAdmin')->name('admin.logout');

// Route::get('/add_account','App\Http\Controllers\UserManagementController@addAccount')->name('add.account');
// Route::get('/add_new_account','App\Http\Controllers\UserManagementController@addNewAccount')->name('add.new.account');
// Route::post('save_new_account','App\Http\Controllers\UserManagementController@saveNewAccount')->name('save.new.account');
// Route::get('edit_account/{id}/','App\Http\Controllers\UserManagementController@editAccount');
// Route::get('delete_account/{id}/','App\Http\Controllers\UserManagementController@deleteAccount');
// Route::get('/users-deposits','App\Http\Controllers\UserManagementController@viewDeposits')->name('deposits');
// Route::get('/copy-trader','App\Http\Controllers\UserManagementController@copyTrader')->name('copy-trader');
// Route::get('/add-trader','App\Http\Controllers\UserManagementController@addTrader')->name('add-trader');
// Route::get('edit_trader/{id}/','App\Http\Controllers\UserManagementController@editTrader');
// Route::match(['get', 'post'], 'update-trader/{id}', 'App\Http\Controllers\UserManagementController@updateTraders')->name('update.traders');
// Route::post('save-trader', 'App\Http\Controllers\UserManagementController@saveTrader')->name('save.trader');









// Route::post('update-account/{id}/','App\Http\Controllers\UserManagementController@updateAccount');
// Route::get('edit_stock/{id}/','App\Http\Controllers\UserManagementController@editStock');
// Route::get('/profile/{id}/','App\Http\Controllers\UserManagementController@userProfile');
// Route::post('update-trader/{id}/','App\Http\Controllers\UserManagementController@updateTrader');
// Route::post('update-stock/{id}/','App\Http\Controllers\UserManagementController@updateStock');
// Route::post('/add-expert','App\Http\Controllers\UserManagementController@addExpert')->name('add-expert');
// Route::get('/process-deposit/{id}/','App\Http\Controllers\UserManagementController@processDeposit')->name('process.deposit');
// Route::get('/active-trade/{id}/','App\Http\Controllers\UserManagementController@activeTrade')->name('active.trade');
// Route::get('/expired-trade/{id}/','App\Http\Controllers\UserManagementController@expiredTrade')->name('expired.trade');
// Route::get('/active-stock/{id}/','App\Http\Controllers\UserManagementController@activeStock')->name('active.stock');
// Route::get('/expired-stock/{id}/','App\Http\Controllers\UserManagementController@expiredStock')->name('expired.stock');
// Route::get('/delete-deposit/{id}/','App\Http\Controllers\UserManagementController@deleteDeposit');
// Route::get('/delete-trade/{id}/','App\Http\Controllers\UserManagementController@deleteTrader');
// Route::get('/delete-stock/{id}/','App\Http\Controllers\UserManagementController@deleteStock');
// Route::get('/view-deposit/{id}/','App\Http\Controllers\UserManagementController@viewDeposit');
// Route::get('/view-withdrawal/{id}/','App\Http\Controllers\UserManagementController@viewWithdrawal');
// Route::get('/approve-withdrawal/{id}/','App\Http\Controllers\UserManagementController@approveWithdrawal');
// Route::get('/disapprove-account/{id}/','App\Http\Controllers\UserManagementController@disApproveAccount')->name('disapprove.account');
// Route::get('/approve-account/{id}/{amount}/{user_id}/','App\Http\Controllers\UserManagementController@approveAccount')->name('approve.account');
// Route::get('/disapprove-transfer/{id}/','App\Http\Controllers\UserManagementController@disApproveTransfer')->name('disapprove.transfer');
// Route::get('/approve-transfer/{id}/{amount}/{user_id}/','App\Http\Controllers\UserManagementController@approveTransfer')->name('approve.transfer');
// Route::get('/disapprove-deposit/{id}/','App\Http\Controllers\UserManagementController@disApproveDeposit')->name('disapprove.deposit');
// Route::get('/approve-deposit/{id}/{amount}/{user_id}/','App\Http\Controllers\UserManagementController@approveDeposit')->name('approve.deposit');
// Route::get('/disapprove-withdrawal/{id}/','App\Http\Controllers\UserManagementController@disApproveWithdrawal')->name('disapprove.withdrawal');
// Route::get('/approve-withdrawal/{id}/{amount}/{user_id}/','App\Http\Controllers\UserManagementController@approveWithdrawal')->name('approve.withdrawal');
// Route::get('/accept-kyc/{id}/','App\Http\Controllers\UserManagementController@AcceptKyc');
// Route::get('/reject-kyc/{id}/','App\Http\Controllers\UserManagementController@RejectKyc');
// Route::get('/copy-trader-investments','App\Http\Controllers\UserManagementController@copyTraderInvestments');
// Route::get('/stocks','App\Http\Controllers\UserManagementController@stocks')->name('stock');
// Route::get('/add-stocks','App\Http\Controllers\UserManagementController@addStocks')->name('add-stocks');
// Route::post('/save-stock','App\Http\Controllers\UserManagementController@saveStock')->name('save-stock');
// Route::get('/purchased-stocks','App\Http\Controllers\UserManagementController@purchasedStocks')->name('purchased.stocks');;
// Route::get('/manage-users','App\Http\Controllers\UserManagementController@manageUsers')->name('manage.users');
// Route::get('/login-activity/{id}/','App\Http\Controllers\UserManagementController@loginActivity')->name('login.activity');
// Route::get('/transaction_history/{id}/','App\Http\Controllers\UserManagementController@transactionHistory')->name('transaction.history');
// Route::get('/transfer_history/{id}/','App\Http\Controllers\UserManagementController@transferHistory')->name('transfer.history');
// Route::get('/deposit_history/{id}/','App\Http\Controllers\UserManagementController@depositHistory')->name('deposit.history');
// Route::get('/withdrawal_history/{id}/','App\Http\Controllers\UserManagementController@withdrawalHistory')->name('withdrawal.history');
// Route::get('/bot_history/{id}/','App\Http\Controllers\UserManagementController@BotHistory')->name('bot.history');
// Route::get('/purchased_accounts/{id}/','App\Http\Controllers\UserManagementController@purchasedAccount')->name('purchased.account');
// Route::get('/copied-traders','App\Http\Controllers\UserManagementController@copiedTrader')->name('copied.traders');
// Route::get('/manage-kyc','App\Http\Controllers\UserManagementController@manageKyc')->name('manage.kyc');
// Route::get('/kyc-details/{id}/','App\Http\Controllers\UserManagementController@KycDetails')->name('kyc.details');
// Route::get('/manage-withdrawal','App\Http\Controllers\UserManagementController@manageWithdrawal')->name('manage-withdrawal');
// Route::get('/manage-deposit','App\Http\Controllers\UserManagementController@manageDeposit')->name('manage-deposit');
// Route::get('/all-purchased','App\Http\Controllers\UserManagementController@AllPurchasedAccount')->name('all-purchased');
// Route::get('/add-manager','App\Http\Controllers\UserManagementController@addManager');
// Route::get('/manage-administrator','App\Http\Controllers\UserManagementController@manageAdministrator');
// Route::post('/credit-debit','App\Http\Controllers\UserManagementController@creditDebit')->name('credit-debit');
// Route::post('/user-withdrawal-settings/{id}','App\Http\Controllers\UserManagementController@userWithdrawalSettings')->name('withdrawal.settings');
// Route::post('/fund-wallet','App\Http\Controllers\UserManagementController@fundWallet')->name('fund-wallet');
// Route::get('/{user}/impersonate', 'App\Http\Controllers\UserManagementController@impersonate')->name('users.impersonate');
// Route::get('/leave-impersonate', 'App\Http\Controllers\UserManagementController@leaveImpersonate')->name('users.leave-impersonate');
// Route::get('/admin/reset-password/{user}', 'App\Http\Controllers\UserManagementController@resetPassword')->name('reset.password');
// Route::post('/admin/edit-user/{user}', 'App\Http\Controllers\UserManagementController@editUser')->name('edit.user');
// Route::post('/admin/add-new-user', 'App\Http\Controllers\UserManagementController@newUser')->name('add.user');
// Route::get('/admin/delete-user/{user}', 'App\Http\Controllers\UserManagementController@deleteUser')->name('delete.user');
// Route::get('/admin/payment-settings', 'App\Http\Controllers\UserManagementController@paymentSettings')->name('payment.settings');
// Route::post('/admin/add-payment', 'App\Http\Controllers\UserManagementController@addPayment')->name('add.payment');
// Route::get('/admin/delete-payment/{id}', 'App\Http\Controllers\UserManagementController@deletePayment')->name('delete.payment');
// Route::get('/admin/edit-payment/{id}', 'App\Http\Controllers\UserManagementController@editPayment')->name('edit.payment');
// Route::get('/admin/clear-account/{id}', 'App\Http\Controllers\UserManagementController@clearAccount')->name('clear.account');
// Route::post('/admin/update-payment/{id}', 'App\Http\Controllers\UserManagementController@updatePayment')->name('update.payment');
// Route::get('/admin/subscription-settings', 'App\Http\Controllers\UserManagementController@subscriptionSettings')->name('subscription.settings');
// Route::get('/admin/page-settings', 'App\Http\Controllers\UserManagementController@pageSettings')->name('page.settings');
// Route::get('/admin/ip-settings', 'App\Http\Controllers\UserManagementController@ipSettings')->name('ip.settings');
// Route::get('/admin/terms-settings', 'App\Http\Controllers\UserManagementController@terms')->name('terms.settings');
// Route::get('/admin/exchange-settings', 'App\Http\Controllers\UserManagementController@exchangeSettings')->name('exchange.settings');
// Route::get('/admin/referral-settings', 'App\Http\Controllers\UserManagementController@referralSettings')->name('referral.settings');
// Route::get('/admin/app-settings', 'App\Http\Controllers\UserManagementController@appSettings')->name('app.settings');
// Route::get('/admin/terms-settings', 'App\Http\Controllers\UserManagementController@termsSettings')->name('terms.settings');
// Route::post('/admin/web-info', 'App\Http\Controllers\UserManagementController@updateWebInfo')->name('web.info');
// Route::post('/admin/preferences', 'App\Http\Controllers\UserManagementController@updatePreference')->name('update.preferences');
// Route::post('/admin/update-smtp', 'App\Http\Controllers\UserManagementController@updateSmtp')->name('update.smtp');
// Route::get('/{user}/verification', 'App\Http\Controllers\UserManagementController@userVerification')->name('user.verification');
// Route::get('/{user}/suspension', 'App\Http\Controllers\UserManagementController@userSuspension')->name('user.suspension');
// Route::post('account-status/{id}/', 'App\Http\Controllers\UserManagementController@accountStatus')->name('account.status');
// Route::post('signal-strength/{id}/', 'App\Http\Controllers\UserManagementController@UpdateSignal')->name('signal.strength');
// Route::post('notification/{id}/', 'App\Http\Controllers\UserManagementController@UpdateNotification')->name('notification');
// Route::post('escrow-account/{id}/', 'App\Http\Controllers\UserManagementController@updateEscrow')->name('update.escrow');
// Route::get('back', 'App\Http\Controllers\UserManagementController@goBack')->name('back');

// Route::get('admin-change-password', 'App\Http\Controllers\UserManagementController@adminChangePassword')->name('admin.change.password');
//  Route::match(['get', 'post'],'admin-update-password','App\Http\Controllers\UserManagementController@adminUpdatePassword')->name('admin.update.password');
//  Route::get('/update-wallet', 'App\Http\Controllers\UserManagementController@updateWallet')->name('wallet');
//  Route::post('/choose-wallet', 'App\Http\Controllers\UserManagementController@chooseWallet')->name('choose-wallet');
//  Route::post('/update-trc', 'App\Http\Controllers\UserManagementController@updateTrc')->name('update-trc');
//  Route::post('/update-btc', 'App\Http\Controllers\UserManagementController@updateBtc')->name('update-btc');
//  Route::post('/update-eth', 'App\Http\Controllers\UserManagementController@updateEth')->name('update-eth');

//  Route::post('/update-litecoin', 'App\Http\Controllers\UserManagementController@updateLitecoin')->name('update-litecoin');
//  Route::post('/update-solana', 'App\Http\Controllers\UserManagementController@updateSolana')->name('update-solana');
//  Route::post('/update-bnb', 'App\Http\Controllers\UserManagementController@updateBnb')->name('update-bnb');
//  Route::post('/update-xrp', 'App\Http\Controllers\UserManagementController@updateXrp')->name('update-xrp');
 



//  Route::post('/update-bank', 'App\Http\Controllers\UserManagementController@updateBank')->name('update-bank');
 
//  Route::match(['get', 'post'], 'send-mail', 'App\Http\Controllers\UserManagementController@sendMail')->name('send.mail');
//  Route::get('/send-mail/{id}/', 'App\Http\Controllers\UserManagementController@sendMail');
 
//  Route::resource('bots', UserManagementController::class);
//  Route::get('/add_bot','App\Http\Controllers\UserManagementController@addBot')->name('add.bots');



 




Route::prefix('admin')->name('admin.')->group(function () {
Route::get('login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm'])->name('login');
 Route::post('login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'login']);
  Route::post('logout', [App\Http\Controllers\Admin\Auth\LoginController::class, 'logout'])->name('logout');

    Route::middleware('auth:admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'admindashboard'])->name('dashboard');


Route::get('/add_account','App\Http\Controllers\Admin\AdminController@addAccount')->name('add.account');
Route::get('/add_new_account','App\Http\Controllers\Admin\AdminController@addNewAccount')->name('add.new.account');
Route::post('save_new_account','App\Http\Controllers\Admin\AdminController@saveNewAccount')->name('save.new.account');
Route::get('edit_account/{id}/','App\Http\Controllers\Admin\AdminController@editAccount');
Route::get('delete_account/{id}/','App\Http\Controllers\Admin\AdminController@deleteAccount');
Route::get('/users-deposits','App\Http\Controllers\Admin\AdminController@viewDeposits')->name('deposits');
Route::get('/copy-trader','App\Http\Controllers\Admin\AdminController@copyTrader')->name('copy-trader');
Route::get('/add-trader','App\Http\Controllers\Admin\AdminController@addTrader')->name('add-trader');
Route::get('edit_trader/{id}/','App\Http\Controllers\Admin\AdminController@editTrader')->name('edit_trader');
Route::match(['get', 'post'], 'update-trader/{id}', 'App\Http\Controllers\Admin\AdminController@updateTraders')->name('update.traders');
Route::post('save-trader', 'App\Http\Controllers\Admin\AdminController@saveTrader')->name('save.trader');









Route::post('update-account/{id}/','App\Http\Controllers\Admin\AdminController@updateAccount');
Route::get('edit_stock/{id}/','App\Http\Controllers\Admin\AdminController@editStock');
Route::get('/profile/{id}/','App\Http\Controllers\Admin\AdminController@userProfile')->name('profile');
Route::post('update-trader/{id}/','App\Http\Controllers\Admin\AdminController@updateTrader');
Route::post('update-stock/{id}/','App\Http\Controllers\Admin\AdminController@updateStock');
Route::post('/add-expert','App\Http\Controllers\Admin\AdminController@addExpert')->name('add-expert');
Route::get('/process-deposit/{id}/','App\Http\Controllers\Admin\AdminController@processDeposit')->name('process.deposit');
Route::get('/active-trade/{id}/','App\Http\Controllers\Admin\AdminController@activeTrade')->name('active.trade');
Route::get('/expired-trade/{id}/','App\Http\Controllers\Admin\AdminController@expiredTrade')->name('expired.trade');
Route::get('/active-stock/{id}/','App\Http\Controllers\Admin\AdminController@activeStock')->name('active.stock');
Route::get('/expired-stock/{id}/','App\Http\Controllers\Admin\AdminController@expiredStock')->name('expired.stock');
Route::get('/delete-deposit/{id}/','App\Http\Controllers\Admin\AdminController@deleteDeposit')->name('delete.deposit');
Route::get('/delete-trader/{id}/','App\Http\Controllers\Admin\AdminController@deleteTrader')->name('delete.trader');
Route::get('/delete-stock/{id}/','App\Http\Controllers\Admin\AdminController@deleteStock');
Route::get('/view-deposit/{id}/','App\Http\Controllers\Admin\AdminController@viewDeposit')->name('view.deposit');
Route::get('/view-withdrawal/{id}/','App\Http\Controllers\Admin\AdminController@viewWithdrawal');
Route::get('/approve-withdrawal/{id}/','App\Http\Controllers\Admin\AdminController@approveWithdrawal');
Route::get('/disapprove-account/{id}/','App\Http\Controllers\Admin\AdminController@disApproveAccount')->name('disapprove.account');
Route::get('/approve-account/{id}/{amount}/{user_id}/','App\Http\Controllers\Admin\AdminController@approveAccount')->name('approve.account');
Route::get('/disapprove-transfer/{id}/','App\Http\Controllers\Admin\AdminController@disApproveTransfer')->name('disapprove.transfer');
Route::get('/approve-transfer/{id}/{amount}/{user_id}/','App\Http\Controllers\Admin\AdminController@approveTransfer')->name('approve.transfer');
Route::get('/disapprove-deposit/{id}/','App\Http\Controllers\Admin\AdminController@disApproveDeposit')->name('disapprove.deposit');
Route::get('/approve-deposit/{id}/{amount}/{user_id}/','App\Http\Controllers\Admin\AdminController@approveDeposit')->name('approve.deposit');
Route::get('/disapprove-withdrawal/{id}/','App\Http\Controllers\Admin\AdminController@disApproveWithdrawal')->name('disapprove.withdrawal');
Route::get('/approve-withdrawal/{id}/{amount}/{user_id}/','App\Http\Controllers\Admin\AdminController@approveWithdrawal')->name('approve.withdrawal');
Route::get('/accept-kyc/{id}/','App\Http\Controllers\Admin\AdminController@AcceptKyc')->name('accept.kyc');
Route::get('/reject-kyc/{id}/','App\Http\Controllers\Admin\AdminController@RejectKyc')->name('reject.kyc');
Route::get('/copy-trader-investments','App\Http\Controllers\Admin\AdminController@copyTraderInvestments');
Route::get('/stocks','App\Http\Controllers\Admin\AdminController@stocks')->name('stock');
Route::get('/add-stocks','App\Http\Controllers\Admin\AdminController@addStocks')->name('add-stocks');
Route::post('/save-stock','App\Http\Controllers\Admin\AdminController@saveStock')->name('save-stock');
Route::get('/purchased-stocks','App\Http\Controllers\Admin\AdminController@purchasedStocks')->name('purchased.stocks');

Route::get('/manage-users','App\Http\Controllers\Admin\AdminController@manageUsers')->name('manage.users');
Route::get('/login-activity/{id}/','App\Http\Controllers\Admin\AdminController@loginActivity')->name('login.activity');
Route::get('/transaction_history/{id}/','App\Http\Controllers\Admin\AdminController@transactionHistory')->name('transaction.history');
Route::get('/transfer_history/{id}/','App\Http\Controllers\Admin\AdminController@transferHistory')->name('transfer.history');
Route::get('/deposit_history/{id}/','App\Http\Controllers\Admin\AdminController@depositHistory')->name('deposit.history');
Route::get('/withdrawal_history/{id}/','App\Http\Controllers\Admin\AdminController@withdrawalHistory')->name('withdrawal.history');
Route::get('/bot_history/{id}/','App\Http\Controllers\Admin\AdminController@BotHistory')->name('bot.history');
Route::get('/purchased_accounts/{id}/','App\Http\Controllers\Admin\AdminController@purchasedAccount')->name('purchased.account');
Route::get('/copied-traders','App\Http\Controllers\Admin\AdminController@copiedTrader')->name('copied.traders');
Route::get('/manage-kyc','App\Http\Controllers\Admin\AdminController@manageKyc')->name('manage.kyc');
Route::get('/kyc-details/{id}/','App\Http\Controllers\Admin\AdminController@KycDetails')->name('kyc.details');
Route::get('/manage-withdrawal','App\Http\Controllers\Admin\AdminController@manageWithdrawal')->name('manage-withdrawal');
Route::get('/manage-deposit','App\Http\Controllers\Admin\AdminController@manageDeposit')->name('manage-deposit');
Route::get('/all-purchased','App\Http\Controllers\Admin\AdminController@AllPurchasedAccount')->name('all-purchased');
Route::get('/add-manager','App\Http\Controllers\Admin\AdminController@addManager');
Route::get('/manage-administrator','App\Http\Controllers\Admin\AdminController@manageAdministrator');
Route::post('/credit-debit','App\Http\Controllers\Admin\AdminController@creditDebit')->name('credit-debit');
Route::post('/user-withdrawal-settings/{id}','App\Http\Controllers\Admin\AdminController@userWithdrawalSettings')->name('withdrawal.settings');
Route::post('/fund-wallet','App\Http\Controllers\Admin\AdminController@fundWallet')->name('fund-wallet');
Route::get('/{user}/impersonate', 'App\Http\Controllers\Admin\AdminController@impersonate')->name('users.impersonate');
Route::get('/leave-impersonate', 'App\Http\Controllers\Admin\AdminController@leaveImpersonate')->name('users.leave-impersonate');
Route::get('/admin/reset-password/{user}', 'App\Http\Controllers\Admin\AdminController@resetPassword')->name('reset.password');
Route::post('/admin/edit-user/{user}', 'App\Http\Controllers\Admin\AdminController@editUser')->name('edit.user');
Route::post('/admin/add-new-user', 'App\Http\Controllers\Admin\AdminController@newUser')->name('add.user');
Route::get('/admin/delete-user/{user}', 'App\Http\Controllers\Admin\AdminController@deleteUser')->name('delete.user');
Route::get('/admin/payment-settings', 'App\Http\Controllers\Admin\AdminController@paymentSettings')->name('payment.settings');
Route::post('/admin/add-payment', 'App\Http\Controllers\Admin\AdminController@addPayment')->name('add.payment');
Route::get('/admin/delete-payment/{id}', 'App\Http\Controllers\Admin\AdminController@deletePayment')->name('delete.payment');
Route::get('/admin/edit-payment/{id}', 'App\Http\Controllers\Admin\AdminController@editPayment')->name('edit.payment');
Route::get('/admin/clear-account/{id}', 'App\Http\Controllers\Admin\AdminController@clearAccount')->name('clear.account');
Route::post('/admin/update-payment/{id}', 'App\Http\Controllers\Admin\AdminController@updatePayment')->name('update.payment');
Route::get('/admin/subscription-settings', 'App\Http\Controllers\Admin\AdminController@subscriptionSettings')->name('subscription.settings');
Route::get('/admin/page-settings', 'App\Http\Controllers\Admin\AdminController@pageSettings')->name('page.settings');




Route::get('/admin/ip-settings', 'App\Http\Controllers\Admin\AdminController@ipSettings')->name('ip.settings');
Route::get('/admin/terms-settings', 'App\Http\Controllers\Admin\AdminController@terms')->name('terms.settings');
Route::get('/admin/exchange-settings', 'App\Http\Controllers\Admin\AdminController@exchangeSettings')->name('exchange.settings');
Route::get('/admin/referral-settings', 'App\Http\Controllers\Admin\AdminController@referralSettings')->name('referral.settings');
Route::get('/admin/app-settings', 'App\Http\Controllers\Admin\AdminController@appSettings')->name('app.settings');
Route::get('/admin/terms-settings', 'App\Http\Controllers\Admin\AdminController@termsSettings')->name('terms.settings');
Route::post('/admin/web-info', 'App\Http\Controllers\Admin\AdminController@updateWebInfo')->name('web.info');
Route::post('/admin/preferences', 'App\Http\Controllers\Admin\AdminController@updatePreference')->name('update.preferences');
Route::post('/admin/update-smtp', 'App\Http\Controllers\Admin\AdminController@updateSmtp')->name('update.smtp');



Route::get('/{user}/verification', 'App\Http\Controllers\Admin\AdminController@userVerification')->name('user.verification');
Route::get('/{user}/suspension', 'App\Http\Controllers\Admin\AdminController@userSuspension')->name('user.suspension');
Route::post('account-status/{id}/', 'App\Http\Controllers\Admin\AdminController@accountStatus')->name('account.status');
Route::post('signal-strength/{id}/', 'App\Http\Controllers\Admin\AdminController@UpdateSignal')->name('signal.strength');
Route::post('notification/{id}/', 'App\Http\Controllers\Admin\AdminController@UpdateNotification')->name('notification');
Route::post('escrow-account/{id}/', 'App\Http\Controllers\Admin\AdminController@updateEscrow')->name('update.escrow');
Route::get('back', 'App\Http\Controllers\Admin\AdminController@goBack')->name('back');

Route::get('admin-change-password', 'App\Http\Controllers\Admin\AdminController@adminChangePassword')->name('change.password');
 Route::match(['get', 'post'],'admin-update-password','App\Http\Controllers\Admin\AdminController@adminUpdatePassword')->name('update.password');
 Route::get('/update-wallet', 'App\Http\Controllers\Admin\AdminController@updateWallet')->name('wallet');
 Route::post('/choose-wallet', 'App\Http\Controllers\Admin\AdminController@chooseWallet')->name('choose.wallet');
 Route::post('/update-trc', 'App\Http\Controllers\Admin\AdminController@updateTrc')->name('update-trc');
 Route::post('/update-btc', 'App\Http\Controllers\Admin\AdminController@updateBtc')->name('update-btc');
 Route::post('/update-eth', 'App\Http\Controllers\Admin\AdminController@updateEth')->name('update-eth');

 Route::post('/update-litecoin', 'App\Http\Controllers\Admin\AdminController@updateLitecoin')->name('update-litecoin');
 Route::post('/update-solana', 'App\Http\Controllers\Admin\AdminController@updateSolana')->name('update-solana');
 Route::post('/update-bnb', 'App\Http\Controllers\Admin\AdminController@updateBnb')->name('update-bnb');
 Route::post('/update-xrp', 'App\Http\Controllers\Admin\AdminController@updateXrp')->name('update-xrp');
 



 Route::post('/update-bank', 'App\Http\Controllers\Admin\AdminController@updateBank')->name('update-bank');
 
 Route::match(['get', 'post'], 'send-mail', 'App\Http\Controllers\Admin\AdminController@sendMail')->name('send.mail');
 Route::get('/send-mail/{id}/', 'App\Http\Controllers\Admin\AdminController@sendMail');
 
 Route::resource('bots', AdminController::class);
 Route::get('/add_bot','App\Http\Controllers\Admin\AdminController@addBot')->name('add.bots');



    });
});



