@include('dashboard.header')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

        
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
				
			<div class="m-auto d-flex">
				
			</div>
		
			</div>
</div>





	<div class="product-type-cards">
    	@foreach($bot as $bots)
    <div class="product-type-card">

        <div class="tag-and-period">
         Level:  {{$bots->level}}
        </div>

        <div class="product-cover">
            <img src="{{asset('uploads/bots/'.$bots->image)}}" alt="Bot Image">
        </div>

        <div class="product-info">
            <div class="meta-info">
                <div class="pinfo">
                    <div>Bot ID</div>
                    <div>{{$bots->bot_id}}</div>
                </div>
                <div class="pinfo">
                    <div>Name</div>
                    <div>{{$bots->name}}</div>
                </div>
				<div class="pinfo">
                    <div>Price</div>
                    <div>${{ number_format($bots->price, 2) }}</div>
                </div>
                <div class="pinfo">
                    <div>Category</div>
                    <div>{{$bots->category}}</div>
                </div>
                <div class="pinfo">
                    <div>Processed</div>
                    <div>{{$bots->processed}}</div>
                </div>
                <div class="pinfo">
                    <div>Active Connections</div>
                    <div>{{$bots->active_connections}}</div>
                </div>
                <div class="pinfo">
                    <div>Rating</div>
                    <div>{{$bots->rating}}</div>
                </div>
                <div class="pinfo">
                    <div>Percentage Rating</div>
                    <div>{{$bots->active_connections}}</div>
                </div>
            </div>

          <div class="product-controls">
     <form action="{{ url('/connect-bot') }}" method="post">
        @csrf 
        <input type="hidden" name="bot_id" value="{{$bots->bot_id}}" />
        <input type="hidden" name="name" value="{{$bots->name}}" />
		{{-- <input type="hidden" name="level" value="{{$bots->level}}" /> --}}
        <input type="hidden" name="category" value="{{$bots->category}}" />
		<input type="hidden" name="price" value="{{$bots->price}}" />
		<input type="hidden" name="rating" value="{{$bots->rating}}" />
		<input type="hidden" name="image" value="{{$bots->image}}" />
		<center>
        <button class="btn btn-primary">
            <i class="bi bi-robot"></i>
            Connect to Bot
        </button>
	</center>
    </form>
</div>

        </div>

    </div>
	@endforeach

</div>

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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Connected!',
        text: '{{ session('success') }}',
        showConfirmButton: false,
        timer: 3000
    });
</script>
@endif

@if(session('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Insufficient Balance',
        text: '{{ session('error') }}',
        confirmButtonColor: '#d33',
        confirmButtonText: 'Top Up'
    });
</script>
@endif


@include('dashboard.footer')