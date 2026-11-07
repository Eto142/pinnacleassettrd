@include('dashboard.header')







        
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="middle-content p-0">
                <div wire:id="UIgVudFFzVOxkZHbWVZ6" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;UIgVudFFzVOxkZHbWVZ6&quot;,&quot;name&quot;:&quot;client.finance.balance-history.balance-history-component&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;balancehistory&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[],&quot;path&quot;:&quot;https:\/\/my.consummatetraders.com\/balancehistory&quot;},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;9ebe26f1&quot;,&quot;data&quot;:{&quot;account&quot;:[],&quot;accountIB&quot;:[],&quot;userAuth&quot;:[],&quot;ib_hedge&quot;:[],&quot;ib_crm&quot;:{&quot;name&quot;:&quot;IB wallet (USD)&quot;,&quot;saldo&quot;:0,&quot;data&quot;:{&quot;current_page&quot;:1,&quot;data&quot;:[],&quot;first_page_url&quot;:&quot;https:\/\/my.consummatetraders.com\/balancehistory?page=1&quot;,&quot;from&quot;:null,&quot;last_page&quot;:1,&quot;last_page_url&quot;:&quot;https:\/\/my.consummatetraders.com\/balancehistory?page=1&quot;,&quot;links&quot;:[{&quot;url&quot;:null,&quot;label&quot;:&quot;&amp;laquo; Previous&quot;,&quot;active&quot;:false},{&quot;url&quot;:&quot;https:\/\/my.consummatetraders.com\/balancehistory?page=1&quot;,&quot;label&quot;:&quot;1&quot;,&quot;active&quot;:true},{&quot;url&quot;:null,&quot;label&quot;:&quot;Next &amp;raquo;&quot;,&quot;active&quot;:false}],&quot;next_page_url&quot;:null,&quot;path&quot;:&quot;https:\/\/my.consummatetraders.com\/balancehistory&quot;,&quot;per_page&quot;:10,&quot;prev_page_url&quot;:null,&quot;to&quot;:null,&quot;total&quot;:0}},&quot;arrMequotUsers&quot;:[],&quot;page&quot;:1,&quot;paginators&quot;:{&quot;page&quot;:1},&quot;tab&quot;:&quot;wall1385368&quot;},&quot;dataMeta&quot;:{&quot;models&quot;:{&quot;userAuth&quot;:{&quot;class&quot;:&quot;App\\Models\\User&quot;,&quot;id&quot;:249387,&quot;relations&quot;:[&quot;roles&quot;,&quot;lang&quot;,&quot;ibsaldos&quot;],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null}}},&quot;checksum&quot;:&quot;7864754ec2c98746dbd0917f71f93c640d0d41461e6b14ee8d2da41bf46cd188&quot;}}">
<div class="row layout-top-spacing flex-wrap">

<div class="col-xxl-3 col-xl-3 col-lg-4 col-md-5 col-sm-5 col-12 layout-spacing">
<div class="statbox widget box box-shadow">
<div class="widget-header">
    <div class="row">
        <div class="col-12 col-sm-12 d-flex align-items-center justify-content-center mt-2">
            <h6 class="m-0" style="padding: 16px 15px;"> Purchased Account History</h6>
        </div>
    </div>
</div>

             
</div>
</div>
</div>

<div class="col-xxl-9 col-xl-9 col-lg-8 col-md-7 col-sm-7 col-12 layout-spacing">
    <div class="tab-content" id="animateLineContent-4">
        <div wire:ignore.self class="tab-pane fade  show active " id="permtabwall1385368" role="tabpanel" aria-labelledby="permtabwall1385368-tab">
<div class="statbox widget box box-shadow">
    <div class="widget-header">
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center p-3">
                <div>
                   
                </div>
                <div class="toolbar align-self-center" style="padding-right: 15px">
                    <button wire:click.prevent="exportReport('w', 1385368)" class="btn btn-primary"> <i class="fa fa-file-excel"> </i> Transaction History</button>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="toolbar align-self-center" style="padding-right: 15px">
        <button wire:click.prevent="exportReport('w', 1385368)" class="btn btn-primary"> <i class="fa fa-file-excel"> </i> Purchased Account History</button>
    </div>

    <div class="widget-content widget-content-area pt-3">
        <div class="card-body p-0">
            <div class="table-responsive">
               <table class="table dt-table-hover dataTable no-footer" style="width: 100%;">
    <thead>
        <tr>
            <th>Bot ID</th>
            <th>Level</th>
            <th>Name</th>
            <th>Category</th>
            <th>Image</th>
            <th>Processed</th>
            <th>Price</th>
            <th>Active Connections</th>
            <th>Rating</th>
            <th>Percentage Rating</th>
        </tr>
    </thead>
    <tbody>
        @forelse($bot as $botData)
            <tr>
                <td>{{ $botData->bot_id }}</td>
                <td>{{ $botData->level }}</td>
                <td>{{ $botData->name }}</td>
                <td>{{ $botData->category }}</td>
                <td>
                    @if(!empty($botData->image))
                        <img src="{{ asset('storage/' . $botData->image) }}" alt="Bot Image" width="50">
                    @else
                        N/A
                    @endif
                </td>
                <td>{{ $botData->processed }}</td>
                <td>${{ number_format($botData->price, 2) }}</td>
                <td>{{ $botData->active_connections }}</td>
                <td>{{ $botData->rating }}</td>
                <td>{{ $botData->percentage_rating }}%</td>
            </tr>
        @empty
            <tr>
                <td colspan="10" class="text-center">No bot data available.</td>
            </tr>
        @endforelse
    </tbody>
</table>

            </div>

            <br>

           
            <div class="d-sm-flex justify-content-sm-end mt-3">
                <div>
</div>

            </div>
        </div>
    </div>
</div>

</div>






















        <div wire:ignore.self class="tab-pane fade " id="permtabibcrm" role="tabpanel" aria-labelledby="permtabibcrm-tab">
<div class="statbox widget box box-shadow">
<div class="widget-header">
    <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center mt-2">
            <div>
                <h6 class="m-0 pb-0" style="padding: 16px 15px;">
                    IB wallet (USD)
                </h6>
                <span style="padding-left: 16px;">Amount: 0</span>
            </div>
            <div class="toolbar align-self-center" style="padding-right: 15px">
                <button wire:click.prevent="exportReport('ic')" class="btn btn-primary"> <i class="fa fa-file-excel"> </i> Export</button>
            </div>
        </div>
    </div>
</div>
<div class="widget-content widget-content-area pt-3">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table dt-table-hover dataTable no-footer" style="width: 100%;">
                <thead>
                    <tr>
                        <th >Date</th>
                        <th >Balance</th>
                        <th >Description</th>
                    </tr>
                </thead>
                <tbody>
                                            <tr>
                        <td colspan="3" class="text-center">
                            No data
                        </td>
                    </tr>
                                        </tbody>
            </table>
        </div>
        <div class="d-sm-flex justify-content-sm-end mt-3">
            <div>
</div>

        </div>
    </div>
</div>
</div>
</div>
                    </div>
</div>

</div>

<div wire:loading wire:target="exportReport">
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

<!-- Livewire Component wire-end:UIgVudFFzVOxkZHbWVZ6 -->

            
                            </div>
    </div>
</div>
</div>
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->












@include('dashboard.footer')