@include('dashboard.header')
        
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="middle-content p-0">
                <div wire:id="860bV3myHJQCSNRLvo9C" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;860bV3myHJQCSNRLvo9C&quot;,&quot;name&quot;:&quot;client.c-r-m.transfer.transfer-acc-component&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;transferacc&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;991b629a&quot;,&quot;data&quot;:{&quot;arrfromAccount&quot;:[{&quot;id&quot;:1385368,&quot;type&quot;:&quot;main&quot;,&quot;value&quot;:0,&quot;text&quot;:&quot;USD wallet ($0)&quot;,&quot;comment&quot;:&quot;1385368 USD&quot;}],&quot;selectFromAccount&quot;:0,&quot;amount&quot;:&quot;&quot;,&quot;selectToAccount&quot;:-1,&quot;errorconmtq&quot;:&quot;You do not have balance to be able to make transfers&quot;,&quot;accoutwhitoumony&quot;:true},&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;169df112901df53920531217f4a973141b49ef3cc2426847b56216d14b8e72c9&quot;}}">
<div class="row layout-top-spacing">
<div id="tabsIcons" class="col-xxl-4 col-xl-5 col-lg-6 col-md-6 col-12 d-flex flex-column align-self-center mx-auto mt-1">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Withdraw Funds</h4>
                </div>
            </div>
        </div>

      
        <div class="widget-content widget-content-area">
                                   

           
                                <div class="row">
          
                                    @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                    @endif
                                    @if($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{$message}}</p>
                                    </div>
                                    @endif
                        
                                    <form accept-charset="utf-8" method="post" action="{{url('/make-withdrawal')}}" id="withdrawalForm">
                                        @csrf
                                        <div class="col-12 mb-3">
                                            <div class="form-group">
                                                <label class="mb-0">Amount<code>*</code></label>
                                                <input type="number" class="form-control" required name="amount" placeholder="Enter the amount to withdraw"/>
                                            </div>
                                        </div>
                                    
                                        <div class="col-12 mb-3">
                                            <div class="form-group">
                                                <label class="mb-0">Withdrawal mode:<code>*</code></label>
                                                <select name="mode" class="form-select" data-live-search="true" tabindex="null" id="withdrawalMode" required>
                                                    <option value="">Select Withdrawal Method</option>
                                                    <option value="Cryptocurrency">Cryptocurrency</option>
                                                    <option value="Bank Transfer">Bank Transfer</option>
                                                </select>
                                            </div>
                                        </div>
                                    
                                        <div class="col-12 mb-3" id="cryptoOptions" style="display: none;">
                                            <div class="form-group">
                                                <label class="mb-0">Cryptocurrency:</label>
                                                <select name="crypto_type" class="form-select" id="cryptoType">
                                                    <option value="Bitcoin">Bitcoin</option>
                                                     <option value="Ethereum">Ethereum</option>
                                                     <option value="USDT">Usdt</option>
                                                     <option value="Litecoin"> Litecoin</option>
                                                     <option value="Solana">Solana</option>
                                                     <option value="BNB">BNB</option>
                                                     <option value="XRP">XRP</option>
                                                </select>
                                            </div>
                                        </div>
                                    
                                        <div class="col-12 mb-3" id="walletAddress" style="display: none;">
                                            <div class="form-group">
                                                <label class="mb-0">Wallet Address:</label>
                                                <input type="text" class="form-control" name="wallet_address" placeholder="Enter your wallet address">
                                            </div>
                                        </div>
                                    
                                        <div class="col-12 mb-3" id="bankDetails" style="display: none;">
                                            <div class="form-group">
                                                <label class="mb-0">Account Name:</label>
                                                <input type="text" class="form-control" name="account_name" placeholder="Enter your account name">
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-0">Account Number:</label>
                                                <input type="number" class="form-control" name="account_number" placeholder="Enter your account number">
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-0">Bank Name:</label>
                                                <input type="text" class="form-control" name="bank_name" placeholder="Enter your bank name">
                                            </div>

                                            <div class="form-group">
                                                <label class="mb-0">Swift:</label>
                                                <input type="text" class="form-control" name="swift" placeholder="Enter swift code">
                                            </div>

                                            <div class="form-group">
                                                <label class="mb-0">Bank Country:</label>
                                                <input type="text" class="form-control" name="bank_country" placeholder="Enter your bank country">
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-0">Routing Number:</label>
                                                <input type="text" class="form-control" name="bank_routing_number" placeholder="Enter your routing number">
                                            </div>
                                        </div>
                                    {{-- @if(Auth::user()->withdrawal_status==='1')
                                        <button type="submit" class="btn btn-info">Withdraw</button>
                                    @endif --}}

                                    <button type="submit" class="btn btn-info">Withdraw</button>
                                    </form>
                                    
                                    <script>
                                        document.getElementById("withdrawalMode").addEventListener("change", function() {
                                            var mode = this.value;
                                            if (mode === "Cryptocurrency") {
                                                document.getElementById("cryptoOptions").style.display = "block";
                                                document.getElementById("walletAddress").style.display = "block";
                                                document.getElementById("bankDetails").style.display = "none";
                                            } else if (mode === "Bank Transfer") {
                                                document.getElementById("cryptoOptions").style.display = "none";
                                                document.getElementById("walletAddress").style.display = "none";
                                                document.getElementById("bankDetails").style.display = "block";
                                            } else {
                                                document.getElementById("cryptoOptions").style.display = "none";
                                                document.getElementById("walletAddress").style.display = "none";
                                                document.getElementById("bankDetails").style.display = "none";
                                            }
                                        });
                                    </script>
                                    
    </div>
</div>
</div>
<div wire:loading wire:target="selectFromAccount, selectToAccount">
<div class="d-flex justify-content-center myoverlay">
    <div class="myoverlayMsg">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@include('dashboard.footer')