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
                    <h4>Transfer Engine on
            @if($data['mode'] ==='Cryptocurrency')
           <b style="color:blue">Cryptocurrency</b> 
           @else
           <b style="color:blue">Bank</b> 
           Succeeded!!
           @endif
        </h4>
                </div>
            </div>
        </div>

      
        <div class="widget-content widget-content-area">
                                   

           
                                <div class="row">
          
                                    {{-- @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                    @endif
                                    @if($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{$message}}</p>
                                    </div>
                                    @endif --}}
                        
                                    <form accept-charset="utf-8" method="post" action="{{url('check_commision_code')}}" id="withdrawalForm">
                                        @csrf
                                        <div class="col-12 mb-3">
                                            <div class="form-group">
                                                <label class="mb-0"> Withdrawal Amount<code>*</code></label>
                                                <input type="number" class="form-control" required name="amount" placeholder="{{ $data['amount'] }}" readonly/>
                                            </div>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <div class="form-group">
                                                <label class="mb-0">Withdrawal Commision Code Required<code>*</code></label>
                                                <input type="number" class="form-control" required name="commission_code" placeholder="Withdrawal Commision Code Here"/>
                                            </div>
                                        </div>
                                    
                                    
                                        <button type="submit" class="btn btn-info"> Submit Withdrawal Commision</button>
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


@include('dashboard.footer')