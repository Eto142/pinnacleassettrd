<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/rules', function () {
    return view('home.rules');
});
Route::get('/', function () {
    return view('home.homepage');
});

Auth::routes();


//  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', 'App\Http\Controllers\UserController@redirect')->middleware('verifyUser')->name('home');
Route::get('/home', 'App\Http\Controllers\UserController@redirect')->middleware('user_auth')->name('home');
Route::get('/dashboard', 'App\Http\Controllers\UserController@dashboard')->middleware('user_auth');
Route::get('/legal', 'App\Http\Controllers\UserController@Legal')->middleware('user_auth');
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






// manger user details from admin
// manger user details from admin
Route::get('/admin/dashboard', 'App\Http\Controllers\UserManagementController@adminHome')->name('admin.home');



//Route::get('/panel', [AdminPagesController::class, 'panel_home'])->name('panel')->middleware('auth:admin');
Route::get('/admin/login', 'App\Http\Controllers\UserManagementController@login')->name('admin.login');
Route::get('/admin/login', 'App\Http\Controllers\UserManagementController@store')->name('admin.login.store')->middleware('auth:admin');
Route::post('/admin/logout', 'App\Http\Controllers\UserManagementController@logoutAdmin')->name('admin.logout');

Route::get('/add_account','App\Http\Controllers\UserManagementController@addAccount')->name('add.account');
Route::get('/add_new_account','App\Http\Controllers\UserManagementController@addNewAccount')->name('add.new.account');
Route::post('save_new_account','App\Http\Controllers\UserManagementController@saveNewAccount')->name('save.new.account');
Route::get('edit_account/{id}/','App\Http\Controllers\UserManagementController@editAccount');
Route::get('delete_account/{id}/','App\Http\Controllers\UserManagementController@deleteAccount');
Route::get('/users-deposits','App\Http\Controllers\UserManagementController@viewDeposits')->name('deposits');
Route::get('/copy-trader','App\Http\Controllers\UserManagementController@copyTrader')->name('copy-trader');
Route::get('/add-trader','App\Http\Controllers\UserManagementController@addTrader')->name('add-trader');
Route::get('edit_trader/{id}/','App\Http\Controllers\UserManagementController@editTrader');
Route::post('update-account/{id}/','App\Http\Controllers\UserManagementController@updateAccount');
Route::get('edit_stock/{id}/','App\Http\Controllers\UserManagementController@editStock');
Route::get('/profile/{id}/','App\Http\Controllers\UserManagementController@userProfile');
Route::post('update-trader/{id}/','App\Http\Controllers\UserManagementController@updateTrader');
Route::post('update-stock/{id}/','App\Http\Controllers\UserManagementController@updateStock');
Route::post('/add-expert','App\Http\Controllers\UserManagementController@addExpert')->name('add-expert');
Route::get('/process-deposit/{id}/','App\Http\Controllers\UserManagementController@processDeposit')->name('process.deposit');
Route::get('/active-trade/{id}/','App\Http\Controllers\UserManagementController@activeTrade')->name('active.trade');
Route::get('/expired-trade/{id}/','App\Http\Controllers\UserManagementController@expiredTrade')->name('expired.trade');
Route::get('/active-stock/{id}/','App\Http\Controllers\UserManagementController@activeStock')->name('active.stock');
Route::get('/expired-stock/{id}/','App\Http\Controllers\UserManagementController@expiredStock')->name('expired.stock');
Route::get('/delete-deposit/{id}/','App\Http\Controllers\UserManagementController@deleteDeposit');
Route::get('/delete-trade/{id}/','App\Http\Controllers\UserManagementController@deleteTrade');
Route::get('/delete-stock/{id}/','App\Http\Controllers\UserManagementController@deleteStock');
Route::get('/view-deposit/{id}/','App\Http\Controllers\UserManagementController@viewDeposit');
Route::get('/view-withdrawal/{id}/','App\Http\Controllers\UserManagementController@viewWithdrawal');
Route::get('/approve-withdrawal/{id}/','App\Http\Controllers\UserManagementController@approveWithdrawal');
Route::get('/disapprove-account/{id}/','App\Http\Controllers\UserManagementController@disApproveAccount')->name('disapprove.account');
Route::get('/approve-account/{id}/{amount}/{user_id}/','App\Http\Controllers\UserManagementController@approveAccount')->name('approve.account');
Route::get('/disapprove-transfer/{id}/','App\Http\Controllers\UserManagementController@disApproveTransfer')->name('disapprove.transfer');
Route::get('/approve-transfer/{id}/{amount}/{user_id}/','App\Http\Controllers\UserManagementController@approveTransfer')->name('approve.transfer');
Route::get('/disapprove-deposit/{id}/','App\Http\Controllers\UserManagementController@disApproveDeposit')->name('disapprove.deposit');
Route::get('/approve-deposit/{id}/{amount}/{user_id}/','App\Http\Controllers\UserManagementController@approveDeposit')->name('approve.deposit');
Route::get('/disapprove-withdrawal/{id}/','App\Http\Controllers\UserManagementController@disApproveWithdrawal')->name('disapprove.withdrawal');
Route::get('/approve-withdrawal/{id}/{amount}/{user_id}/','App\Http\Controllers\UserManagementController@approveWithdrawal')->name('approve.withdrawal');
Route::get('/accept-kyc/{id}/','App\Http\Controllers\UserManagementController@AcceptKyc');
Route::get('/reject-kyc/{id}/','App\Http\Controllers\UserManagementController@RejectKyc');
Route::get('/copy-trader-investments','App\Http\Controllers\UserManagementController@copyTraderInvestments');
Route::get('/stocks','App\Http\Controllers\UserManagementController@stocks')->name('stock');
Route::get('/add-stocks','App\Http\Controllers\UserManagementController@addStocks')->name('add-stocks');
Route::post('/save-stock','App\Http\Controllers\UserManagementController@saveStock')->name('save-stock');
Route::get('/purchased-stocks','App\Http\Controllers\UserManagementController@purchasedStocks')->name('purchased.stocks');;
Route::get('/manage-users','App\Http\Controllers\UserManagementController@manageUsers')->name('manage.users');
Route::get('/login-activity/{id}/','App\Http\Controllers\UserManagementController@loginActivity')->name('login.activity');
Route::get('/transaction_history/{id}/','App\Http\Controllers\UserManagementController@transactionHistory')->name('transaction.history');
Route::get('/transfer_history/{id}/','App\Http\Controllers\UserManagementController@transferHistory')->name('transfer.history');
Route::get('/deposit_history/{id}/','App\Http\Controllers\UserManagementController@depositHistory')->name('deposit.history');
Route::get('/withdrawal_history/{id}/','App\Http\Controllers\UserManagementController@withdrawalHistory')->name('withdrawal.history');
Route::get('/purchased_accounts/{id}/','App\Http\Controllers\UserManagementController@purchasedAccount')->name('purchased.account');
Route::get('/copied-traders','App\Http\Controllers\UserManagementController@copiedTrader')->name('copied.traders');
Route::get('/manage-kyc','App\Http\Controllers\UserManagementController@manageKyc')->name('manage.kyc');
Route::get('/kyc-details/{id}/','App\Http\Controllers\UserManagementController@KycDetails')->name('kyc.details');
Route::get('/manage-withdrawal','App\Http\Controllers\UserManagementController@manageWithdrawal')->name('manage-withdrawal');
Route::get('/manage-deposit','App\Http\Controllers\UserManagementController@manageDeposit')->name('manage-deposit');
Route::get('/add-manager','App\Http\Controllers\UserManagementController@addManager');
Route::get('/manage-administrator','App\Http\Controllers\UserManagementController@manageAdministrator');
Route::post('/credit-debit','App\Http\Controllers\UserManagementController@creditDebit')->name('credit-debit');
Route::post('/user-withdrawal-settings/{id}','App\Http\Controllers\UserManagementController@userWithdrawalSettings')->name('withdrawal.settings');
Route::post('/fund-wallet','App\Http\Controllers\UserManagementController@fundWallet')->name('fund-wallet');
Route::get('/{user}/impersonate', 'App\Http\Controllers\UserManagementController@impersonate')->name('users.impersonate');
Route::get('/leave-impersonate', 'App\Http\Controllers\UserManagementController@leaveImpersonate')->name('users.leave-impersonate');
Route::get('/admin/reset-password/{user}', 'App\Http\Controllers\UserManagementController@resetPassword')->name('reset.password');
Route::post('/admin/edit-user/{user}', 'App\Http\Controllers\UserManagementController@editUser')->name('edit.user');
Route::post('/admin/add-new-user', 'App\Http\Controllers\UserManagementController@newUser')->name('add.user');
Route::get('/admin/delete-user/{user}', 'App\Http\Controllers\UserManagementController@deleteUser')->name('delete.user');
Route::get('/admin/payment-settings', 'App\Http\Controllers\UserManagementController@paymentSettings')->name('payment.settings');
Route::post('/admin/add-payment', 'App\Http\Controllers\UserManagementController@addPayment')->name('add.payment');
Route::get('/admin/delete-payment/{id}', 'App\Http\Controllers\UserManagementController@deletePayment')->name('delete.payment');
Route::get('/admin/edit-payment/{id}', 'App\Http\Controllers\UserManagementController@editPayment')->name('edit.payment');
Route::get('/admin/clear-account/{id}', 'App\Http\Controllers\UserManagementController@clearAccount')->name('clear.account');
Route::post('/admin/update-payment/{id}', 'App\Http\Controllers\UserManagementController@updatePayment')->name('update.payment');
Route::get('/admin/subscription-settings', 'App\Http\Controllers\UserManagementController@subscriptionSettings')->name('subscription.settings');
Route::get('/admin/page-settings', 'App\Http\Controllers\UserManagementController@pageSettings')->name('page.settings');
Route::get('/admin/ip-settings', 'App\Http\Controllers\UserManagementController@ipSettings')->name('ip.settings');
Route::get('/admin/terms-settings', 'App\Http\Controllers\UserManagementController@terms')->name('terms.settings');
Route::get('/admin/exchange-settings', 'App\Http\Controllers\UserManagementController@exchangeSettings')->name('exchange.settings');
Route::get('/admin/referral-settings', 'App\Http\Controllers\UserManagementController@referralSettings')->name('referral.settings');
Route::get('/admin/app-settings', 'App\Http\Controllers\UserManagementController@appSettings')->name('app.settings');
Route::get('/admin/terms-settings', 'App\Http\Controllers\UserManagementController@termsSettings')->name('terms.settings');
Route::post('/admin/web-info', 'App\Http\Controllers\UserManagementController@updateWebInfo')->name('web.info');
Route::post('/admin/preferences', 'App\Http\Controllers\UserManagementController@updatePreference')->name('update.preferences');
Route::post('/admin/update-smtp', 'App\Http\Controllers\UserManagementController@updateSmtp')->name('update.smtp');
Route::get('/{user}/verification', 'App\Http\Controllers\UserManagementController@userVerification')->name('user.verification');
Route::get('/{user}/suspension', 'App\Http\Controllers\UserManagementController@userSuspension')->name('user.suspension');
Route::post('account-upgrade/{id}/', 'App\Http\Controllers\UserManagementController@accountUpgrade')->name('account.upgrade');
Route::post('account-manager/{id}/', 'App\Http\Controllers\UserManagementController@accountManager')->name('account.manager');
Route::get('back', 'App\Http\Controllers\UserManagementController@goBack')->name('back');
