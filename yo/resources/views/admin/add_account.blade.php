@include('admin.header')

<!-- End Sidebar -->
<div class="main-panel">
			<div class="content bg-dark">
				<div class="page-inner">
					<div class="mt-2 mb-4">
						<h1 class="title1 text-light">Expert traders</h1>
					</div>
					<div>
    </div>					<div>
    </div>					<div class="mb-5 row">
						<div class="mt-2 mb-3 col-lg-12">
							<a class="btn btn-primary" href="{{route('add.new.account')}}"><i class="fa fa-plus"></i>Add A new Account</a>
						</div>
						@foreach($accounts as $account)
									<div class="col-lg-4">
									
							<div class="pricing-table purple border p-4 card bg-dark shadow">
							<div class="price-tag">
										<img src="{{asset('uploads/trader/'.$account->picture)}}" class="card-img-top" alt="Image"><br>
											<center><i>All Accounts</i></center>
											<h2 class="text-light"></h2>
								</div>
								<!-- Features -->
								<div class="pricing-features">
								<!--	<div class="feature text-light">Minimum trading amount:<span class="text-light">$100</span></div>
									<div class="feature text-light">Maximum trading amount:<span  class="text-light">$900,000</span></div>-->
									<div class="feature text-light">Account Balance:<span class="text-light">{{$account->account_balance}}</span></div>
									<div class="feature text-light">Price:<span class="text-light">{{$account->price}}</span></div>
                                    <div class="feature text-light">Duration:<span class="text-light">{{$account->duration}}</span></div>
								</div> <br>
								
								<!-- Button -->
								<div class="text-center">
									<a href="{{url('edit_account/'.$account->id)}}" class="btn btn-primary"><i class="text-white flaticon-pencil"></i>
									</a> &nbsp; 
									<a href="{{url('delete_account/'.$account->id)}}" class="btn btn-danger"><i class="text-white fa fa-times"></i>
									</a>
								</div>
							</div>
						
						</div>	
						@endforeach	
						</div>	
												
					</div>
				</div>
			</div>
				


@include('admin.footer')
				