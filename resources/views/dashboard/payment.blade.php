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
                    <h4>{{$item}} Payment</h4>
                </div>
            </div>
        </div>

      
        <div class="widget-content widget-content-area">
                                    
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                  <p>SEND
                    {{-- @if($item=='Bitcoin')
                    <strong>{{$btc_amount}}</strong>
                    @elseif($item=='Ethereum')
                    <strong>{{$eth_amount}}</strong>
                    @endif
           --}}
                    {{$item}} TO THE WALLET ADDRESS BELOW OR
                    SCAN THE QR CODE WITH YOUR WALLET APP
                  </p></p>
              </div>
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
                        
                  {{-- <form accept-charset="utf-8" method="post" action="{{url('get-deposit')}}">
                                        {{csrf_field()}} --}}
                <div class="col-12 mb-3">
                    <div class="form-group">
                        
                      @if($item=='Bitcoin')
                      @foreach($payment as $payments)
                      <input type="text" id="myInput" class="form-control" style="color: black;" class="bg-light text-dark"
                        value="{{$payments->btc_address}}" readonly>
                        <button class = "btn btn-info" onclick="myFunction()">Copy Address</button>
                        <div class="product-cover">
                      <img src="{{asset('admin/uploads/admin/'.$payments->btc_image)}}" width="40%" height="50%" />
                    </div>
                      @endforeach

                      @elseif($item=='Usdt')
                      @foreach($payment as $payments)
                      <input type="text" id="myInput" class="form-control" style="color: black;" class="bg-light text-dark"
                      value="{{$payments->usdt_address}}" readonly>
                      <button class = "btn btn-info" onclick="myFunction()">Copy Address</button>
                      <div class="product-cover">
                    <img src="{{asset('admin/uploads/admin/'.$payments->usdt_image)}}" width="40%" height="50%" />
                  </div>
                  @endforeach
                      @elseif($item=='Ethereum')
              
                      @foreach($payment as $payments)
                      <input type="text" id="myInput" class="form-control" style="color: black;" class="bg-light text-dark"
                      value="{{$payments->eth_address}}" readonly>
                      <button class = "btn btn-info" onclick="myFunction()">Copy Address</button>
                      <div class="product-cover">
                    <img src="{{asset('admin/uploads/admin/'.$payments->eth_image)}}" width="40%" height="50%" />
                  </div>
                      @endforeach

                      @elseif($item=='Litecoin')
              
                      @foreach($payment as $payments)
                      <input type="text" id="myInput" class="form-control" style="color: black;" class="bg-light text-dark"
                      value="{{$payments->litecoin_address}}" readonly>
                      <button class = "btn btn-info" onclick="myFunction()">Copy Address</button>
                      <div class="product-cover">
                    <img src="{{asset('admin/uploads/admin/'.$payments->litecoin_image)}}" width="40%" height="50%" />
                  </div>
                      @endforeach

                      @elseif($item=='Solana')
              
                      @foreach($payment as $payments)
                      <input type="text" id="myInput" class="form-control" style="color: black;" class="bg-light text-dark"
                      value="{{$payments->solana_address}}" readonly>
                      <button class = "btn btn-info" onclick="myFunction()">Copy Address</button>
                      <div class="product-cover">
                    <img src="{{asset('admin/uploads/admin/'.$payments->solana_image)}}" width="40%" height="50%" />
                  </div>
                      @endforeach

                      @elseif($item=='BNB')
              
                      @foreach($payment as $payments)
                      <input type="text" id="myInput" class="form-control" style="color: black;" class="bg-light text-dark"
                      value="{{$payments->bnb_address}}" readonly>
                      <button class = "btn btn-info" onclick="myFunction()">Copy Address</button>
                      <div class="product-cover">
                    <img src="{{asset('admin/uploads/admin/'.$payments->bnb_image)}}" width="40%" height="50%" />
                  </div>
                      @endforeach

                      @elseif($item=='XRP')
              
                      @foreach($payment as $payments)
                      <input type="text" id="myInput" class="form-control" style="color: black;" class="bg-light text-dark"
                      value="{{$payments->xrp_address}}" readonly>
                      <button class = "btn btn-info" onclick="myFunction()">Copy Address</button>
                      <div class="product-cover">
                    <img src="{{asset('admin/uploads/admin/'.$payments->xrp_image)}}" width="40%" height="50%" />
                  </div>
                      @endforeach
                      @endif                                                          </div>
                </div>

                <div class="col-12 mb-3">
                    <div class="form-group">
                      <form action="{{ url('/make-deposit')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label class="mb-0">Upload Payment proof after payment.<code>*</code></label>
                        <input type="file" class="form-control"  name="image" required/>                                                                
                    </div>
                    <input type="hidden" name="amount" value="{{$amount}}">
                    <input type="hidden" name="duration" value="{{$duration}}">
                    <input type="hidden" name="paymethd_method" value="{{$item}}">
      
                </div>
                <button class = "btn btn-info">Proceed to Payment</button>
                <div class="d-grid gap-2 mt-3">
                                            </div>
            </div>
        </div>
    </form>
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

<script>
  function myFunction() {
    // Get the text field
    var copyText = document.getElementById("myInput");
  
    // Select the text field
    copyText.select();
    copyText.setSelectionRange(0, 99999); // For mobile devices
  
    // Copy the text inside the text field
    navigator.clipboard.writeText(copyText.value);
    
    // Alert the copied text
    alert("Copied the text: " + copyText.value);
  }
  </script>
@include('dashboard.footer')