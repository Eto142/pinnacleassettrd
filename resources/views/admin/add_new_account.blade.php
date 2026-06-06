@include('admin.header')

<div class="main-panel">

			<div class="content bg-dark">
				<div class="page-inner">
     @if(session('message'))
<div class="alert alert-success mb-2">{{session('message')}}</div>
@endif
					<div class="mt-2 mb-4">
						<h1 class="title1 text-light">Add New Account</h1>
					</div>
					<div>
    </div>                    <div>
    </div>					<div class="mb-5 row">
						<div class="col-lg-12 ">
                            <div class="p-3 card bg-dark">
                            <form action="{{route('save.new.account')}}" method ="POST" enctype="multipart/form-data">
                                              @csrf                                   
                                            <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <h5 class="text-light">Account Balance</h5>
                                 <input  class="form-control text-light bg-dark" placeholder="Enter Account Balance" type="numbers" name="account_balance" required>
                                        </div>
	
                                        <div class="form-group col-md-6">
                                            <h5 class="text-light">Profit Share (%)</h5> 			 
                                             <input placeholder="Enter Profit Share" class="form-control text-light bg-dark" type="text" name="profit_share" required> 
                                       </div>

                                     <div class="form-group col-md-6">
                                             <h5 class="text-light">Days per challenge</h5> 			 
                                             <input class="form-control text-light bg-dark" placeholder="Enter Days per challenge" type="number" name="days_per_challenge" required> 
        
                                       </div>
                                       
                                     <div class="form-group col-md-6">
                                            <h5 class="text-light">Days per verification</h5> 
                                           <input class="form-control text-light bg-dark" placeholder="Enter Days per verification" type="number" name="days_per_verification" required>   

                                       </div>
                                       <div class="form-group col-md-6">
                                            <h5 class="text-light">Reward</h5> 
                                           <input class="form-control text-light bg-dark" placeholder="Enter Reward" type="number" name="reward" required>
                                       </div>

                                       <div class="form-group col-md-6">
                                            <h5 class="text-light">Price</h5> 
                                           <input class="form-control text-light bg-dark" placeholder="Enter Price" type="number" name="price" required>
                                       </div>
                                       
                                           <input class="form-control text-light bg-dark" placeholder="Enter Additional Gift Bonus" type="hidden" name="gift" value="0" required>  
                                         
                                    <div class="form-group col-md-6">
                                            <h5 class="text-light">Profit Target (%)</h5> 			 
                                             <input placeholder="Enter Profit Target" class="form-control text-light bg-dark" type="text" name="profit_target" required> 
                                       </div>

                                       <div class="form-group col-md-6">
                                            <h5 class="text-light">Minimum Trading Days</h5> 			 
                                             <input placeholder="Enter Minimum Trading Days" class="form-control text-light bg-dark" type="number" name="minimum_trading_days" required> 
                                       </div>
                                       <div class="form-group col-md-6">
                                            <h5 class="text-light">Leverage</h5> 			 
                                             <input placeholder="Enter Leverage" class="form-control text-light bg-dark" type="text" name="leverage" required> 
                                       </div>

                                       <div class="form-group col-md-6">
                                            <h5 class="text-light">Overall Loss</h5> 			 
                                             <input placeholder="Enter Overall Loss" class="form-control text-light bg-dark" type="text" name="overall_loss" required> 
                                       </div>

                                       <div class="form-group col-md-6">
                                            <h5 class="text-light">Daily Loss</h5> 			 
                                             <input placeholder="Enter Daily Loss" class="form-control text-light bg-dark" type="text" name="daily_loss" required> 
                                       </div>

                                       <div class="form-group col-md-6">
                                            <h5 class="text-light">Max Overall Loss</h5> 			 
                                             <input placeholder="Enter Max Overall Loss" class="form-control text-light bg-dark" type="text" name="max_overall_loss" required> 
                                       </div>

                                       <div class="form-group col-md-6">
                                            <h5 class="text-light">Max Daily Loss</h5> 			 
                                             <input placeholder="Enter Max Daily Loss" class="form-control text-light bg-dark" type="text" name="max_daily_loss" required> 
                                       </div>

                                       <div class="form-group col-md-6">
                                             <h5 class="text-light">picture</h5> 			 
                                             <input class="form-control text-light bg-dark" placeholder="upload image" type="file" name="image" required> 
                                          
                                       </div>
                                     
                                       
                                        <div class="form-group col-md-6">
                                           <h5 class="text-light">Investment Duration</h5> 	
                                           <select class="form-control text-light bg-dark" name="duration" required>
                                               <option value=""> Choose</option>
                                               <option value="2 Weeks">2 Weeks </option>
                                               <option value="1 Day">1 Daily </option>
                                               <option value="1 Week">1 Week </option>
                                                  <option value="1 Month">1 Month </option>
                                                   <option value="2 Months">2 Months </option>
                                                       <option value="1 Year">1 year </option>
                                                           <option value="3 Months">3 Months </option>
                                           </select>  

                                         
                                       
                                       
                                       <div class="form-group col-md-6">
                                      
                                           <input type="submit" class="btn btn-primary" value="Add Account">   
                                       </div>
                                    </div>
                               </form>
                            </div>
						</div>
					</div>
				</div>
			</div>
            
            <div id="durationModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body bg-dark">
                            <h5 class="text-light">FIRSTLY, Always preceed the time frame with a digit, that is do not write the number in letters, <br> <br> SECONDLY, always add space after the number, <br> <br> LASTLY, the first letter of the timeframe should be in CAPS and always add 's' to the timeframe even if your duration is just a day, month or year.</h5>
                            <h2 class="text-light">Eg, 1 Days, 3 Weeks, 1 Hours, 48 Hours, 4 Months, 1 Years, 9 Months</h2>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div id="topupModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body bg-dark">
                            
                        </div>
                    </div>
                </div>
            </div>

            <script>
                function getduration(id, event){
                    event.preventDefault();
                    document.getElementById('duridden').value = id;
                }
            </script>			


@include('admin.footer')
				