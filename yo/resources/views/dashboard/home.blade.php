@include('dashboard.header')
        
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="middle-content p-0">
                <div wire:id="TEqH514iI7Rm0IiNvrMq" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;TEqH514iI7Rm0IiNvrMq&quot;,&quot;name&quot;:&quot;client.home.home-component&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;home&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:{&quot;l2843757141-0&quot;:{&quot;id&quot;:&quot;NhLk8TMN9ih5MF3scsDT&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;l2843757141-1&quot;:{&quot;id&quot;:&quot;L2h9RT0ZmDABKu26TlzZ&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;l2843757141-3&quot;:{&quot;id&quot;:&quot;Bns2N7Q1epSq7MULsJUE&quot;,&quot;tag&quot;:&quot;div&quot;}},&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;b11c203d&quot;,&quot;data&quot;:{&quot;data&quot;:{&quot;title&quot;:&quot;Home&quot;,&quot;menu_active&quot;:&quot;home&quot;},&quot;userAuth&quot;:[],&quot;showmainAlerts&quot;:[],&quot;popupAlerts&quot;:[]},&quot;dataMeta&quot;:{&quot;models&quot;:{&quot;userAuth&quot;:{&quot;class&quot;:&quot;App\\Models\\User&quot;,&quot;id&quot;:249387,&quot;relations&quot;:[&quot;roles&quot;,&quot;lang&quot;,&quot;dashboards&quot;,&quot;walletsmainuser&quot;,&quot;walletsmainuser.main_wallet&quot;,&quot;ibsaldos&quot;],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null}}},&quot;checksum&quot;:&quot;19456be808253395d636ccc5f1d784f373ad329f3a085947e86ee7dde1e37ab9&quot;}}">

<div wire:id="NhLk8TMN9ih5MF3scsDT" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;NhLk8TMN9ih5MF3scsDT&quot;,&quot;name&quot;:&quot;client.home.components.banners&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;home&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;f1711b3e&quot;,&quot;data&quot;:[],&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;19f3a91eac1ff29bd889bebbedbcf21dfc96ba671026c48aa43393981cd0ae6e&quot;}}">
    <div class="row layout-boxed">
    <div class="col-12">
        <div id="carouselExample42" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                                                                            <li data-bs-target="#carouselExample42" data-bs-slide-to="0" class=" active m "></li>
                                                    <li data-bs-target="#carouselExample42" data-bs-slide-to="1" class=""></li>
                                                                </ol>
            <div class="carousel-inner">
                                            <div class="carousel-item  active ">
                        <img class="d-block w-100" style="max-height: 400px" src="https://my.consummatetraders.com/storage/banner/65957675d63db_.jpg">
                    </div>
                                            <div class="carousel-item ">
                        <img class="d-block w-100" style="max-height: 400px" src="https://my.consummatetraders.com/storage/banner/65bbb2bd7807b_.jpg">
                    </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExample42" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExample42" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
                            </div>
    </div>
</div>
</div>

<!-- Livewire Component wire-end:NhLk8TMN9ih5MF3scsDT -->
<div class="row layout-top-spacing">
<div wire:id="L2h9RT0ZmDABKu26TlzZ" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;L2h9RT0ZmDABKu26TlzZ&quot;,&quot;name&quot;:&quot;client.home.components.config-widget&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;home&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[&quot;saveConfig&quot;]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;b3e31378&quot;,&quot;data&quot;:{&quot;userAuth&quot;:[],&quot;userWidgets&quot;:[]},&quot;dataMeta&quot;:{&quot;models&quot;:{&quot;userAuth&quot;:{&quot;class&quot;:&quot;App\\Models\\User&quot;,&quot;id&quot;:249387,&quot;relations&quot;:[&quot;roles&quot;,&quot;lang&quot;,&quot;dashboards&quot;],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null}}},&quot;checksum&quot;:&quot;fbb0d534d51f9ac4c7a5ff3feafffc0e59bd979bf3f84cd561ae079cf263fd72&quot;}}" class="col-12 text-end pb-3">
<a href="javascript:void(0)" wire:click="loadModal" class="btn btn-light-success font-weight-bolder btn-sm mr-10">
<i class="fa fa-cogs"></i> {{Auth::user()->account_upgrade}}
</a>

<div wire:ignore.self class="modal fade" id="widgetModal"  tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title add-title">Widgets</h5>
        <a href="javascript:void(0)" wire:click="loaDefault" class="btn btn-light-warning font-weight-bolder btn-sm mr-5">
            <i class="la la-list-alt"></i>Default config
        </a>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>
    </div>
    <div class="modal-body">
        <div class="row" id="order1">
                            </div>
    </div>
    <div class="modal-footer">
        <button class="btn" data-bs-dismiss="modal"> Cancel</button>
        <button type="button" onclick="saveConfigLoad()" class="btn btn-primary">Save</button>
    </div>
</div>
</div>
<div wire:loading>
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

</div>

<!-- Livewire Component wire-end:L2h9RT0ZmDABKu26TlzZ -->

            <div wire:id="wrHIv94YEZRcyIu5jLOg" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;wrHIv94YEZRcyIu5jLOg&quot;,&quot;name&quot;:&quot;client.home.components.widget.available-balance&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;home&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;c5139d5f&quot;,&quot;data&quot;:{&quot;userAuth&quot;:[],&quot;widgetName&quot;:&quot;Available Balance&quot;,&quot;mainWallet&quot;:[]},&quot;dataMeta&quot;:{&quot;models&quot;:{&quot;userAuth&quot;:{&quot;class&quot;:&quot;App\\Models\\User&quot;,&quot;id&quot;:249387,&quot;relations&quot;:[&quot;roles&quot;,&quot;lang&quot;,&quot;dashboards&quot;],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null},&quot;mainWallet&quot;:{&quot;class&quot;:&quot;App\\Models\\WalletMainUser&quot;,&quot;id&quot;:1385368,&quot;relations&quot;:[&quot;main_wallet&quot;],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null}}},&quot;checksum&quot;:&quot;5d7e30d0a7cd5f43d2c458b60d6e8935c2d1621f2934c0b7bcab08cad07d65ed&quot;}}" class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
<div class="widget widget-account-invoice-three widget-activity-four p-0 shadow-sm" style="border-radius: 15px;">
<div class="widget-heading p-4" style="min-height: 150px">
    <div class="wallet-usr-info">
        <div class="usr-name">
            <span style="font-size: 16px; cursor: default">
                <img src="https://my.consummatetraders.com/storage/cryptocurrency/64c44b94b4291_.jpg" alt="admin-profile" class="img-fluid"> 1385368
                <a href="javascript:;" onclick="copyToClipboard('1385368')" class="bs-tooltip" title="Copy">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy text-muted"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
                </a>
            </span>
        </div>
        <div class="add">
            <h5 class="">{{$user_balance}}.00<span class="w-currency" style="font-size: 16px; background: transparent; padding: 0">USD</span></h5>
        </div>
    </div>
</div>
<div class="widget-amount" style="margin-top: -60px">
    <div class="w-a-info funds-received">
        <span>Deposits <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg></span>
        <p>{{$deposit}}.00</p>
    </div>
    
    <div class="w-a-info funds-spent">
        <span>Withdrawals <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span>
        <p>{{$withdrawal}}.00</p>
    </div>

    <div class="w-a-info funds-spent">
        <span>Account Manager <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"></svg></span>
        <p>{{Auth::user()->account_manager}}</p>
    </div>
</div>
<div class="widget-content pb-2 mt-2">
    <ul class="nav nav-pills mb-2 mt-0" id="justify-center-pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="justify-center-pills-home-tab" data-bs-toggle="pill" href="#justify-center-pills-home" role="tab" aria-controls="justify-center-pills-home" aria-selected="true">Last 10 movements</a>
        </li>
                    </ul>
                    
    <div class="tab-content" id="justify-center-pills-tabContent">
        <div class="tab-pane fade show active" id="justify-center-pills-home" role="tabpanel" aria-labelledby="justify-center-pills-home-tab">
            <div class="mt-container-ra" style="height: 2px;">
                <div class="timeline-line">
                                            </div>
            </div>
        </div>
                    </div>
    <div class="invoice-list">
        <hr class="my-1">
        <div class="inv-action mt-2">
            <a href="{{url('deposit')}}" class="btn btn-outline-primary pay-now">Add balance</a>
            <a href="{{url('accounthistory')}}" class="btn btn-outline-primary view-details">View Details</a>
        </div>
    </div>
</div>
</div>
</div>


<!-- Livewire Component wire-end:wrHIv94YEZRcyIu5jLOg -->                    <div wire:id="2QKTvYJUpyzKSHCZjFq8" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;2QKTvYJUpyzKSHCZjFq8&quot;,&quot;name&quot;:&quot;client.home.components.widget.account-balance&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;home&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;52b90be4&quot;,&quot;data&quot;:{&quot;userAuth&quot;:[],&quot;widgetName&quot;:&quot;Balance account&quot;,&quot;colors&quot;:[&quot;#622bd7&quot;,&quot;#e2a03f&quot;,&quot;#e7515a&quot;,&quot;#4361ee&quot;,&quot;#008eff&quot;,&quot;#009688&quot;,&quot;#e95f2b&quot;],&quot;accountBalanceTotal&quot;:0,&quot;accountBalance&quot;:[{&quot;account&quot;:&quot;USD Wallet&quot;,&quot;saldo&quot;:0,&quot;bgcolor&quot;:&quot;#622bd7&quot;},{&quot;account&quot;:&quot;IB account&quot;,&quot;saldo&quot;:0,&quot;bgcolor&quot;:&quot;#e2a03f&quot;}]},&quot;dataMeta&quot;:{&quot;models&quot;:{&quot;userAuth&quot;:{&quot;class&quot;:&quot;App\\Models\\User&quot;,&quot;id&quot;:249387,&quot;relations&quot;:[&quot;roles&quot;,&quot;lang&quot;,&quot;dashboards&quot;,&quot;walletsmainuser&quot;,&quot;walletsmainuser.main_wallet&quot;,&quot;ibsaldos&quot;],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null}}},&quot;checksum&quot;:&quot;02e24dee18c5bfcbda439fe46a5cdf7835e42415fd5fd4e3ba75cc4f26b97536&quot;}}" class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
<div class="widget widget-chart-two">
<div class="widget-heading p-4 rounded">
    <h5>Balance account</h5>
</div>
<div class="widget-content pb-0">
    <div id="radial-chart"></div>
    <div class="row px-4">
                            <div class="col-sm-4 mb-2">
                <div class="media m-0">
                    <div class="media-body pb-3">
                        <h6 class="tx-inverse mb-0">
                            <div class="badge--group">
                                <div class="badge badge-dot" style="background-color: #622bd7"></div>
                            </div>
                            {{$user_balance}}.00</h6>
                        <span>USD Wallet</span>
                    </div>
                </div>
            </div>
                           
                    </div>
</div>
</div>

<script src="https://my.consummatetraders.com/theme/plugins/src/apex/apexcharts.min.js"></script>
<script>
var historybalans = function() {
                    var Theme = 'dark';

        Apex.grid = {
            borderColor: '#ebedf2'
        };
        Apex.track = {
            background: '#e0e6ed',
        };
        Apex.tooltip = {
            theme: 'dark'
        };

        var radialChart = {
            series: [
                                    ],
            chart: {
                fontFamily: 'Nunito, Arial, sans-serif',
                height: 350,
                type: 'radialBar',
            },
            colors: ['#622bd7', '#e2a03f', '#e7515a', '#4361ee', '#008eff', '#009688', '#e95f2b'],
            plotOptions: {
                radialBar: {
                    dataLabels: {
                        showOn: "always",
                        name: {
                            show: false,
                            fontWeight: "700",
                        },
                        value: {
                            color:"#e0e6ed",
                            fontSize: '16px',
                            fontWeight: "700",
                            offsetY: 10,
                            show: true
                        },
                        total: {
                            show: true,
                            label: "Total",
                            fontWeight: "bold",
                            formatter: function (w) {
                                return '0';
                            }
                        }
                    },
                    track: {
                        strokeWidth: '100%'
                    }
                }
            },
            noData: {
                text: 'Without history',
                align: 'center',
                verticalAlign: 'top',
                offsetX: 0,
                offsetY: 0,
                style: {
                    color: '#e0e6ed',
                    fontSize: '18px',
                    fontWeight: 'bold'
                }
            },
            stroke: {
                lineCap: "round",
            },
            labels: ["Progress"]
        };
    
    var radialChart = new ApexCharts(document.querySelector("#radial-chart"), radialChart);
    radialChart.render();
};
historybalans();
</script>

</div>



<!-- Livewire Component wire-end:2QKTvYJUpyzKSHCZjFq8 -->                    <div wire:id="Bns2N7Q1epSq7MULsJUE" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;Bns2N7Q1epSq7MULsJUE&quot;,&quot;name&quot;:&quot;client.home.components.widget.shortcut&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;home&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;2bab9bf3&quot;,&quot;data&quot;:{&quot;userAuth&quot;:[],&quot;widgetName&quot;:&quot;Shortcut&quot;},&quot;dataMeta&quot;:{&quot;models&quot;:{&quot;userAuth&quot;:{&quot;class&quot;:&quot;App\\Models\\User&quot;,&quot;id&quot;:249387,&quot;relations&quot;:[&quot;roles&quot;,&quot;lang&quot;,&quot;dashboards&quot;,&quot;walletsmainuser&quot;,&quot;walletsmainuser.main_wallet&quot;,&quot;ibsaldos&quot;],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null}}},&quot;checksum&quot;:&quot;735107d535d975c51bba6d088159d4b13b601ce99b82ef7370b44ff22f96b443&quot;}}" class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
<div class="widget widget-chart-two h-100">
<div class="widget-heading p-4 rounded">
    <h5>Shortcut</h5>
</div>
<div class="widget-content pb-0">
    <div class="row py-3 px-4">
        <div class="col-12" style="margin-bottom: 10px">
            <a href="{{url('deposit')}}">
                <div class="info-box-3 p-1 m-0" style="max-width: 100%; display: flex">
                    <div class="info-box-3-icon my-0 mx-2" style="width: 30px; height: 30px;">
                        <i style="font-size: 16px" class="fal fa-dollar-sign"></i>
                    </div>
                    <div class="info-box-3-content-wrapper p-0">
                        <h3 style="font-size: 16px" class="info-box-3-title m-0">Deposit</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12" style="margin-bottom: 10px">
            <a href="{{url('withdrawal') }}">
                <div class="info-box-3 p-1 m-0" style="max-width: 100%; display: flex">
                    <div class="info-box-3-icon my-0 mx-2" style="width: 30px; height: 30px">
                        <i style="font-size: 16px" class="fa fa-hand-holding-dollar"></i>
                    </div>
                    <div class="info-box-3-content-wrapper p-0">
                        <h3 style="font-size: 16px" class="info-box-3-title m-0">Withdraw</h3>
                    </div>
                </div>
            </a>
        </div>
                        <div class="col-12" style="margin-bottom: 10px">
            <a href="{{url('kyc')}}">
                <div class="info-box-3 p-1 m-0" style="max-width: 100%; display: flex">
                    <div class="info-box-3-icon my-0 mx-2" style="width: 30px; height: 30px">
                        <i style="font-size: 16px" class="fa fa-shield"></i>
                    </div>
                    <div class="info-box-3-content-wrapper p-0">
                        <h3 style="font-size: 16px" class="info-box-3-title m-0">Verification KYC</h3>
                    </div>
                </div>
            </a>
        </div>
                        <div class="col-12" style="margin-bottom: 10px">
            <a href="{{url('accounthistory')}}">
                <div class="info-box-3 p-1 m-0" style="max-width: 100%; display: flex">
                    <div class="info-box-3-icon my-0 mx-2" style="width: 30px; height: 30px">
                        <i style="font-size: 16px" class="fa fa-money-bill-transfer"></i>
                    </div>
                    <div class="info-box-3-content-wrapper p-0">
                        <h3 style="font-size: 16px" class="info-box-3-title m-0">Transaction history</h3>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
</div>
</div>

<!-- Livewire Component wire-end:Bns2N7Q1epSq7MULsJUE -->            </div>


</div>

<!-- Livewire Component wire-end:TEqH514iI7Rm0IiNvrMq -->

            
                            </div>
    </div>
</div>
</div>
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->



















@include('dashboard.footer')