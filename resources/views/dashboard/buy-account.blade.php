@include('dashboard.header')

        
<link rel="stylesheet" href="mcss/complementary.css">
<div id="content" class="main-content">
	<div class="layout-px-spacing">
		<div class="middle-content p-0">
				<div wire:id="ZCpoiABVNW61p7FPWKOx" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;ZCpoiABVNW61p7FPWKOx&quot;,&quot;name&quot;:&quot;client.funding.packets.fn-packets-component&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;funding\/packets\/Monthly&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;4446feb9&quot;,&quot;data&quot;:{&quot;ProductTypes&quot;:[],&quot;SelectedProductType&quot;:[],&quot;SelectedTypeOfProducts&quot;:[],&quot;SelectedProduct&quot;:null,&quot;CouponCode&quot;:&quot;&quot;,&quot;RefererDiscount&quot;:0,&quot;CouponDiscount&quot;:0,&quot;CouponDiscountType&quot;:-1,&quot;RefDiscountVal&quot;:0,&quot;IsPaymentWithCoins&quot;:false,&quot;CouponDiscountAmount&quot;:null,&quot;TestSessionId&quot;:249387,&quot;userAuth&quot;:[],&quot;selectedPeriod&quot;:[]},&quot;dataMeta&quot;:{&quot;modelCollections&quot;:{&quot;ProductTypes&quot;:{&quot;class&quot;:&quot;App\\Models\\FnProductType&quot;,&quot;id&quot;:[60,61,62,64,65,66,68,69],&quot;relations&quot;:[],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null},&quot;SelectedTypeOfProducts&quot;:{&quot;class&quot;:&quot;App\\Models\\FnProduct&quot;,&quot;id&quot;:[76,9,10,11,12,13,14,32],&quot;relations&quot;:[&quot;restrictions&quot;,&quot;fnType&quot;],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null}},&quot;models&quot;:{&quot;SelectedProductType&quot;:{&quot;class&quot;:&quot;App\\Models\\FnProductType&quot;,&quot;id&quot;:60,&quot;relations&quot;:[],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null},&quot;userAuth&quot;:{&quot;class&quot;:&quot;App\\Models\\User&quot;,&quot;id&quot;:249387,&quot;relations&quot;:[&quot;roles&quot;,&quot;lang&quot;],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null},&quot;selectedPeriod&quot;:{&quot;class&quot;:&quot;App\\Models\\FnPeriod&quot;,&quot;id&quot;:3,&quot;relations&quot;:[],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null}}},&quot;checksum&quot;:&quot;8b3cf49ffb6191a52b2bcbd47514cbef297bd7ac776f718cbdf78dd14fd8b5a2&quot;}}">

<div class="d-flex justify-content-end layout-top-spacing mb-2">
<div class="p-2 bg-dark rounded shadow-sm">
	<span class="me-1">Balance:</span>
	<strong class="text-warning">${{$user_balance}}.00</strong>
</div>
</div>

<div class="mb-2">
<div class="type-control-selection flex-wrap gap-2">
					<button class="btn btn-warning" wire:click = "change_products_of_type(60)">
			<div class="m-auto d-flex">
				
			</div>
			
		</button>
					<button class="btn" wire:click = "change_products_of_type(61)">
			<div class="m-auto d-flex">
				
			</div>
			
		</button>
					<button class="btn" wire:click = "change_products_of_type(62)">
			<div class="m-auto d-flex">
				
			</div>
			
		</button>
					<button class="btn" wire:click = "change_products_of_type(64)">
			<div class="m-auto d-flex">
				
			</div>
			
		</button>
					<button class="btn" wire:click = "change_products_of_type(65)">
			<div class="m-auto d-flex">
				
			</div>
			
		</button>
					<button class="btn" wire:click = "change_products_of_type(66)">
			<div class="m-auto d-flex">
				
			</div>
			
		</button>
					<button class="btn" wire:click = "change_products_of_type(68)">
			<div class="m-auto d-flex">
				
			</div>
			
		</button>
					<button class="btn" wire:click = "change_products_of_type(69)">
			<div class="m-auto d-flex">
				
			</div>
			
		</button>
			</div>
</div>
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




	<div class="product-type-cards">
		@foreach($account as $accounts)
		<div class="product-type-card">

						<div class="tag-and-period">
							{{$accounts->duration}}
			
		</div>
	
	<div class="product-cover">
		<img src="{{asset('uploads/trader/'.$accounts->picture)}}">
	</div>

	<div class="product-info">

		<div class="meta-info">
			<div class="pinfo">
				<div>Product</div>
				<div>${{$accounts->account_balance}} Account</div>
			</div>
			<div class="pinfo">
				<div>Account balance</div>
				<div>${{$accounts->account_balance}}</div>
			</div>
			<div class="pinfo">
				<div>Profit Share</div>
				<div>{{$accounts->profit_share}}%</div>
			</div>
			<div class="pinfo">
				<div>Days per challenge</div>
				<div>{{$accounts->days_per_challenge}}</div>
			</div>
			<div class="pinfo">
				<div>Days per verification</div>
				<div>{{$accounts->days_per_verification}}</div>
			</div>

										<div class="pinfo">
					<div>Reward</div>
					<div>+{{$accounts->reward}} points</div>
				</div>
			
			<div class="pinfo">
				<div>Price</div>
				<div>
					Now ${{$accounts->price}}
												</div>
			</div>


		</div>

		<div class="product-controls">
			<form action="{{url('/buy-plan')}}" method="post">
				@csrf
			
				
                <input type="hidden" min="{{$accounts->price}}" max="{{$accounts->price}}" name="amount" value="{{$accounts->price}}"/>
				<input type="hidden"  name="product" value="{{$accounts->account_balance}}"/>
				<input type="hidden" name="plan_name" value="{{$accounts->account_balance}}  Account">
				<input type="hidden" name="plan_duration" value="{{$accounts->duration}}">
			
			<button class = "btn btn-info" wire:click = "buy_this_product({&quot;id&quot;:76,&quot;order&quot;:1,&quot;user_id&quot;:null,&quot;name&quot;:&quot;$3,000 Challenge Account&quot;,&quot;price&quot;:30,&quot;desc&quot;:0,&quot;currency&quot;:&quot;USD&quot;,&quot;balance&quot;:3000,&quot;platform&quot;:&quot;1&quot;,&quot;type&quot;:60,&quot;broker&quot;:&quot;FxLiveCapital&quot;,&quot;mtgroupChallenge&quot;:207,&quot;leverageChallenge&quot;:100,&quot;mtgroupVerification&quot;:208,&quot;leverageVerification&quot;:100,&quot;mtgroupLive&quot;:209,&quot;leverageLive&quot;:100,&quot;title&quot;:&quot;$3,000 Evaluation Challenge Account&quot;,&quot;descrip&quot;:&quot;&quot;,&quot;imgdark&quot;:&quot;65972e1dd7c7a.png&quot;,&quot;img&quot;:&quot;65972e1dd7c7a.png&quot;,&quot;amouttosell&quot;:0,&quot;periodo&quot;:3,&quot;mark&quot;:&quot;Monthly&quot;,&quot;paymentpercent&quot;:80,&quot;paymentpercent_ib&quot;:0,&quot;minProfitPercent&quot;:0,&quot;events_id&quot;:0,&quot;ib_program_type&quot;:0,&quot;ib_levels_id&quot;:13,&quot;ib_payment_type&quot;:0,&quot;reward_points&quot;:1,&quot;certificate_id&quot;:11,&quot;contest&quot;:0,&quot;read_only&quot;:0,&quot;withdraw&quot;:0,&quot;state&quot;:1,&quot;created_at&quot;:&quot;2024-01-04T22:15:57.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-01-21T13:36:34.000000Z&quot;,&quot;restrictions&quot;:{&quot;id&quot;:108,&quot;product_id&quot;:76,&quot;pt_challenge&quot;:&quot;8&quot;,&quot;mintd_challenge&quot;:&quot;0&quot;,&quot;pt_verification&quot;:&quot;5&quot;,&quot;mintd_verification&quot;:&quot;0&quot;,&quot;desc_loss_overall&quot;:&quot;12&quot;,&quot;desc_loss_daily&quot;:&quot;6&quot;,&quot;funded_loss_daily&quot;:&quot;6&quot;,&quot;funded_loss_overall&quot;:&quot;12&quot;,&quot;days_challenge&quot;:&quot;1000&quot;,&quot;days_verification&quot;:&quot;1000&quot;,&quot;created_at&quot;:&quot;2024-01-04T22:15:57.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-01-04T22:15:57.000000Z&quot;}})">Purchase Account</button>
		</form>
			<button class = "btn btn-dark" onclick="hiddenInfo('hi76', 1)">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
					<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
					<circle cx="12" cy="12" r="3"></circle>
				</svg>
			</button>
		</div>
	</div>


	<div class="hiden-info hi76">
							<div class="pinfo">
			<div>Challenge</div>
			<div>
				<span>Profit Target: {{$accounts->profit_target}}%</span>
				<span>Minimum trading days: {{$accounts->minimum_trading_days}}</span>
				<span>Leverage {{$accounts->leverage}}</span>
				<span>Days:{{$accounts->days_per_verification}}</span>
			</div>
		</div>
												<div class="pinfo">
			<div>Verification</div>
			<div>
				<span>Profit Target: {{$accounts->profit_target}}%</span>
				<span>Minimum trading days: {{$accounts->minimum_trading_days}}</span>
				<span>Leverage {{$accounts->leverage}}</span>
				<span>Days:{{$accounts->days_per_verification}}</span>
			</div>
		</div>
							<div class="pinfo">
			<div>Disqualifications on Challenge and Verification</div>
			<div>
				<span>Overall loss: -{{$accounts->overall_loss}}% </span>
				<span>Daily loss: -{{$accounts->daily_loss}}%</span>
			</div>
		</div>


		<div class="pinfo">
			<div>Funded Account</div>
			<div>
				<span>Max daily loss: {{$accounts->max_daily_loss}}% </span>
				<span>Max overall loss: {{$accounts->max_overall_loss}}%</span>
				<span>Leverage {{$accounts->leverage}}</span>
			</div>
		</div>



		<div class="pinfo">
			<div>General Conditions</div>
			<div>
				
				<span>Profit share: {{$accounts->profit_share}}%</span>
			</div>
		</div>

		<div class="pinfo">
			<button class = "btn btn-dark" onclick="hiddenInfo('hi76', 0)">Close</button>
		</div>
	</div>
</div>

@endforeach







			
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


<div class="modal fade" id="confirmPayoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
	<div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">Confirm order for payment</h5>
		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
		  <svg> ... </svg>
		</button>
	</div>
	<div class="modal-body">
		<p class="modal-text">
			We will start your Challenge as soon as we receive the payment. Your login credentials will be emailed to you within 24 hours of receiving the payment.
		</p>

		
		<div wire:loading>
			<div class="d-flex justify-content-center">
				<div class="myoverlayMsg">
					<div class="loader">
						<div class="loader-content">
							<div class="spinner-grow align-self-center text-primary"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal-footer d-flex justify-content-between">

						<div class="form-check form-switch form-check-inline m-auto ms-0">
			<input class="form-check-input me-2" type="checkbox" role="switch" id="flexSwitchCheckDefault" wire:model = "IsPaymentWithCoins">
			<label class="form-check-label m-0" for="flexSwitchCheckDefault">Use points</label>
		</div>
		
		<div class="d-flex">
			<button class="btn me-3" data-bs-dismiss="modal"><i class="flaticon-cancel-12"></i>Discard</button>
			<button type="button" class="btn btn-primary" onclick="confirm_purchase()">Purchase</button>
		</div>
	</div>

	
</div>
</div>
</div>


</div>


<!-- Livewire Component wire-end:ZCpoiABVNW61p7FPWKOx -->

			
							</div>
	</div>
</div>
</div>
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->



{{-- <script src="https://my.consummatetraders.com/theme/plugins/src/global/vendors.min.js"></script>
<script src="https://my.consummatetraders.com/theme/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://my.consummatetraders.com/theme/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="https://my.consummatetraders.com/theme/layouts/vertical-dark-menu/app.js"></script>

<script src="https://my.consummatetraders.com/theme/assets/js/custom.js"></script>


<script src="https://my.consummatetraders.com/theme/plugins/src/sweetalerts2/sweetalerts2.min.js"></script>

<script src="https://my.consummatetraders.com/theme/plugins/src/notification/snackbar/snackbar.min.js"></script>

<!-- END GLOBAL MANDATORY SCRIPTS --> --}}

<script>
</script>

<script src="livewire/livewire.js?id=90730a3b0e7144480175" data-turbo-eval="false" data-turbolinks-eval="false" ></script><script data-turbo-eval="false" data-turbolinks-eval="false" >window.livewire = new Livewire();window.Livewire = window.livewire;window.livewire_app_url = '';window.livewire_token = 'lxpqCjOPic269ILdSwTXnyyHlebhvMe99tYjhwY7';window.deferLoadingAlpine = function (callback) {window.addEventListener('livewire:load', function () {callback();});};let started = false;window.addEventListener('alpine:initializing', function () {if (! started) {window.livewire.start();started = true;}});document.addEventListener("DOMContentLoaded", function () {if (! started) {window.livewire.start();started = true;}});</script>

<script>
Livewire.on('success', Msg => {
Snackbar.show({
	text: Msg,
	pos: 'top-center',
	actionTextColor: '#fff',
	backgroundColor: '#4361ee',
	showAction: false
})
});

Livewire.on('warning', Msg => {
Snackbar.show({
	text: Msg,
	pos: 'top-center',
	actionTextColor: '#fff',
	backgroundColor: '#e2a03f',
	showAction: false
})
});

Livewire.on('error', Msg => {
Snackbar.show({
	text: Msg,
	pos: 'top-center',
	actionTextColor: '#fff',
	backgroundColor: '#e7515a',
	showAction: false
})
});

// Este evento es disparado por el Componente 'NavbarRewardBreakdownModalComponent'
Livewire.on('open_reward_breakdown_points', _=>{
$('#show_rewards_breakdown_modal').modal('show');
})

Livewire.on('modal', o=>{
$('#'+o.id).modal(o.action);
})

</script>

<script>
function hiddenInfo(id, opt){
	qw = "."+id;
	if(opt == 1)
		$(qw).addClass("show");
	else
		$(qw).removeClass("show");
}


function confirm_purchase()
{
	Swal.fire({
		title: "Confirm Purchase",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#1b2e4b',
		confirmButtonText: "Purchase!",
		cancelButtonText: "Cancel",
	}).then((result) => {
		if (result.isConfirmed) {
		window.livewire.find('ZCpoiABVNW61p7FPWKOx').purchase();
		}
	});
}

Livewire.on('askForPaymentModal', function(){
	$('#confirmPayoutModal').modal('show');
});


Livewire.on('HidePurchaseModal', _=>{
	$('#confirmPayoutModal').modal('hide');
});

</script>
</body>
</html>


@include('dashboard.footer')