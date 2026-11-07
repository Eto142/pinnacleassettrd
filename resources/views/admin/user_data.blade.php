@include('admin.header')
<div class="main-panel">
    <div class="content bg-dark">
        <div class="page-inner">
        @if(session('message'))
<div class="alert alert-success mb-2">{{session('message')}}</div>
@endif
            <div>
    </div>            <div>
    </div>            <!-- Beginning of  Dashboard Stats  -->
            <div class="row">
                <div class="col-md-12">
                    <div class="p-3 card bg-dark">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <h1 class="d-inline text-primary">{{$profileData->name}}</h1><span></span>

                                    <div class="d-inline">
                                        <div class="float-right btn-group">
                                            <a class="btn btn-primary btn-sm" href="{{route('admin.manage.users')}}"> <i class="fa fa-arrow-left"></i> back</a> &nbsp;
                                            <button type="button" class="btn btn-secondary dropdown-toggle btn-sm" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                                              Actions
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-lg-right">
                                                {{-- <a class="dropdown-item" href="{{route('login.activity',$profileData->id)}}">Login Activity</a> --}}
                                                <a class="dropdown-item" href="{{route('admin.deposit.history',$profileData->id)}}">Deposit History</a>
                                                <a class="dropdown-item" href="{{route('admin.transfer.history',$profileData->id)}}">Transfer History</a>
                                                <a class="dropdown-item" href="{{route('admin.withdrawal.history',$profileData->id)}}">Withdrawal History</a>
                                                <a class="dropdown-item" href="{{route('admin.bot.history',$profileData->id)}}">Bot History</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#accountSuspension">Account Suspension</a>                                                                                                                                                
                                                <a href="#"  data-toggle="modal" data-target="#topupModal" class="dropdown-item">Account Funding</a>
                                                {{-- <a href="#"  data-toggle="modal" data-target="#withdrawalsettings" class="dropdown-item">Withdrawal Settings</a> --}}
                                                <a href="#"  data-toggle="modal" data-target="#accountverificationModal" class="dropdown-item">Account Verification</a>
                                                <a href="#" data-toggle="modal" data-target="#clearacctModal" class="dropdown-item">Clear Account</a>
                                                <a href="#" data-toggle="modal" data-target="#SignalStrength" class="dropdown-item">Update signal</a>
                                                <a href="#" data-toggle="modal" data-target="#AccountStatus" class="dropdown-item">Account Status</a>
                                                <a href="#" data-toggle="modal" data-target="#sendmailtooneuserModal" class="dropdown-item">Send Email</a>
                                                {{-- <a href="#" data-toggle="modal" data-target="#switchuserModal"  class="dropdown-item text-success">Gain Access</a> --}}
                                                <a href="#" data-toggle="modal" data-target="#deleteModal" class="dropdown-item text-danger">Delete {{$profileData->name}}</a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 mt-4 border rounded row text-light">
                                <div class="col-md-3">
                                    <h5 class="text-bold">Total Balance</h5>
                                    <p>${{$user_balance}}</p>
                                </div>
                                

                                <div class="col-md-3">
                                    <h5 class="text-bold"> Total Deposit</h5>
                                    <p>${{$deposit}}</p>
                                </div>

                                <div class="col-md-3">
                                    <h5 class="text-bold"> Total Withdrawal</h5>
                                    <p>${{$withdrawal}}</p>
                                </div>

                                <div class="col-md-3">
                                    <h5 class="text-bold">Total Profit</h5>
                                    <p>${{$profits}}</p>
                                </div>

                                <div class="col-md-3">
                                    <h5 class="text-bold">Total Bonus</h5>
                                    <p>${{$bonus}}</p>
                                </div>

                                <div class="col-md-3">
                                    <h5>User Account Status</h5>
                                                                        <span class="badge badge-success">{{$profileData->account_status}}</span>
                                                                    </div>
                                <div class="col-md-3">
                                    <h5>Purchased. Account</h5>
                                    
                                 <a class="btn btn-sm btn-primary d-inline" href="{{route('admin.purchased.account',$profileData->id)}}">View Accounts</a>  
                                                                        
                                </div>


                                <div class="col-md-3">
                                    <h5>Kyc Details</h5>
                                    
                                 <a class="btn btn-sm btn-primary d-inline" href="{{route('admin.kyc.details',$profileData->id)}}">View Kyc</a>  
                                                                        
                                </div>


                                <div class="col-md-3">
                                    <h5>Kyc Status</h5>
                                    @if($kyc_status=="0")
                                    <span class="badge badge-danger">Not Verified Yet</span>
                                    @elseif($kyc_status=="1")
                                    <span class="badge badge-success">Verified</span>@endif
                                </div>
                                <div class="col-md-3">
                                    <h5>Signal Strength</h5>
                                                                        <span class="badge badge-primary">{{$profileData->signal_strength}}</span>
                                                                    </div>
                            </div>

                            
                            <div class="mt-3 row text-light">
                                <div class="col-md-12">
                                    <h5>USER INFORMATION</h5>
                                </div>
                            </div>
                            <div class="p-3 border row text-light">
                                <div class="col-md-4 border-right">
                                    <h5>Fullname</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5>{{$profileData->name}}</h5>
                                </div>
                            </div>
                            <div class="p-3 border row text-light">
                                <div class="col-md-4 border-right">
                                    <h5>Email Address</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5>{{$profileData->email}}</h5>
                                </div>
                            </div>

                            <div class="p-3 border row text-light">
                                <div class="col-md-4 border-right">
                                    <h5>Password</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5>{{$profileData->show_password}}</h5>
                                </div>
                            </div>
                            <div class="p-3 border row text-light">
                                <div class="col-md-4 border-right">
                                    <h5>Mobile Number</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5>{{$profileData->phone}}</h5>
                                </div>
                            </div>
          
                            <div class="p-3 border row text-light">
                                <div class="col-md-4 border-right">
                                    <h5>Nationality</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5>{{$profileData->country}}</h5>
                                </div>
                            </div>
                            
                            <div class="p-3 border row text-light">
                                <div class="col-md-4 border-right">
                                    <h5>Registered</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5>{{ \Carbon\Carbon::parse($profileData->created_at)->format('D, M j, Y g:i A') }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Up Modal first -->
    <div id="topupModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title text-light">Credit/Debit {{$profileData->country}} account.</strong></h4>
                    <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-dark">
                <form action="{{route('admin.credit-debit')}}" method ="POST" enctype="multipart/form-data">
											{{ csrf_field()}}  
                    <div class="form-group">
                      <input type="hidden" class="form-control" name="user_id" value="{{$profileData->id}}">
                    </div>                     
                        <div class="form-group">
                            <input class="form-control bg-dark text-light" placeholder="Enter amount" type="text" name="amount" required>
                        </div>
                        <div class="form-group">
                            <h5 class="text-light">Select where to Credit/Debit</h5>
                            <select class="form-control bg-dark text-light" name="type" required>
                                <option value="" selected disabled>Select Column</option>
                                <option value="Profit">Profit</option>
                                <option value="Bonus">Bonus</option>
                                <option value="Deposit">Deposit</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <h5 class="text-light">Select credit to add, debit to subtract.</h5>
                            <select class="form-control bg-dark text-light" name="t_type" required>
                                <option value="">Select type</option>
                                <option value="Credit">Credit</option>
                                <option value="Debit">Debit</option>
                            </select>
                            <small> <b>NOTE:</b> You cannot debit deposit</small>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-light" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>






    <div id="SignalStrength" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title text-light">Signal Strength: {{$profileData->signal_strength}}</strong></h4>
                    <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-dark">
                <form action="{{ route('admin.signal.strength',$profileData->id)}}" method ="POST">
											{{ csrf_field()}}  
                                       
                        <div class="form-group">
                            <input class="form-control bg-dark text-light" placeholder="{{$profileData->signal_strength}}" type="text" name="signal_strength">
                        </div>
                       
                        
                        <div class="form-group">
                            <input type="submit" class="btn btn-light" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <div id="AccountStatus" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title text-light">Account Status: {{$profileData->account_status}} .</strong></h4>
                    <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-dark">
                <form action="{{ route('admin.account.status',$profileData->id)}}" method ="POST">
											{{ csrf_field()}}                       
                        <div class="form-group">
                            <input class="form-control bg-dark text-light" placeholder="{{$profileData->account_status}}" type="text" name="account_status" required>
                        </div>
                       
                        
                        <div class="form-group">
                            <input type="submit" class="btn btn-light" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>










       <!-- withdrawal settings -->
       <div id="withdrawalsettings" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title text-light">Set {{$profileData->name}} Withdrawal Settings.</strong></h4>
                    <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-dark">
                <form action="{{route('admin.withdrawal.settings',$profileData->id)}}" method ="POST" enctype="multipart/form-data">
										{{ csrf_field()}}  
                                
                        
                        <div class="form-group">
                            <h5 class="text-light">Activate/Dectivate Withdrawal</h5>
                            <select class="form-control bg-dark text-light" name="withdrawal_status" required>
                                <option value="{{$profileData->withdrawal_status}}" selected disabled>@if($profileData->withdrawal_status==='1')Activated @else Inactive @endif</option>
                                <option value="1">Activate Withdrawal</option>
                                <option value="0">Deactivate Withdrawal</option>
                            </select>
                        </div>

                        <div class="form-group">
                        <h5 class="text-light">Commission Code</h5>
                            <input class="form-control bg-dark text-light" value="{{$profileData->commission_code}}" placeholder="Commission Code" type="text" name="commission_code">
                        </div>
                        <div class="form-group">
                        <h5 class="text-light">Tax Code</h5>
                            <input class="form-control bg-dark text-light" value="{{$profileData->tax_code}}" placeholder="Tax Code" type="text" name="tax_code">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-light" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- send a single user email Modal-->
    <div id="sendmailtooneuserModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title text-light">Send Email</h4>
                    <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-dark">
                    <p class="text-light">This message will be sent to {{$profileData->name}}</p>
                    <form style="padding:3px;" role="form" method="post" action="{{ route('admin.send.mail')}}">
                        @csrf
                        
                         <div class=" form-group">
                            <input type="email" name="email" class="form-control bg-dark text-light" value="{{$profileData->email}}">
                        </div>
                               <div class=" form-group">
                            <input type="text" name="subject" class="form-control bg-dark text-light" placeholder="Subject" required>
                        </div>
                        <div class=" form-group">
                            <textarea placeholder="Type your message here" class="form-control bg-dark text-light" name="message" row="8" placeholder="Type your message here" required></textarea>
                        </div>
                        <div class=" form-group">
                            <input type="hidden" name="user_id" value="151">
                            <input type="submit" class="btn btn-light" value="Send">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Trading History Modal -->
      
    <!-- Switch useraccount Modal -->
    <div id="switchuserModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title text-light">You are about to login as {{$profileData->name}}.</strong></h4>
                    <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-dark">
                    <a class="btn btn-success" href="{{ route('admin.users.impersonate', $profileData->id) }}">Proceed</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Switch user account Modal -->

       <!-- Account verification Modal -->
       <div id="accountverificationModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title text-light">You are about to verify {{$profileData->name}}'s account, Ones you verify thier account they wil be able to access thier account.</strong></h4>
                    <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-dark">
                    <a class="btn btn-success" href="{{ route('admin.user.verification', $profileData->id) }}">Verify</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Account verification Modal -->

       <!-- Account suspension Modal -->
       <div id="accountSuspension" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title text-light">You are about to suspend {{$profileData->name}}'s account, Ones you verify thier account they wil not be able to access thier account.</strong></h4>
                    <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-dark">
                    <a class="btn btn-success" href="{{ route('admin.user.suspension', $profileData->id) }}">Account Suspension</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Account suspension Modal -->

    <!-- Clear account Modal -->
    <div id="clearacctModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title text-light">Clear Account</strong></h4>
                    <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-dark">
                    <p class="text-light">You are clearing account for {{$profileData->name}} to $0.00</p>
                    <a class="btn btn-light" href="{{route('admin.clear.account',$profileData->id)}}">Proceed</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Clear account Modal -->

    <!-- Delete user Modal -->
    <div id="deleteModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    
                    <h4 class="modal-title text-light">Delete User</strong></h4>
                    <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-dark p-3">
                    <p class="text-light">Are you sure you want to delete {{$profileData->name}} Account? Everything associated with this account will be loss.</p>
                    <a class="btn btn-danger" href="{{ route('admin.delete.user', $profileData->id) }}">Yes i'm sure</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete user Modal --> 
			
@include('admin.footer')
				