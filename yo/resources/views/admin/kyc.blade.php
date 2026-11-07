@include('admin.header')

<div class="main-panel bg-dark">
			<div class="content bg-dark">
				<div class="page-inner">
				@if(session('message'))
<div class="alert alert-success mb-2">{{session('message')}}</div>
 @endif
					<div class="mt-2 mb-4">
						<h1 class="title1 text-light">FundformeProgram account verification details</h1>
					</div>
							
										<div class="mb-5 row">
						<div class="col-12">
							<small class="text-light">if you can't see the image, try switching your uploaded location to another option from your admin settings page.</small>
						</div>
						<div class="col-12 card p-4 bg-dark shadow">
							<div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table"> 
								<table id="ShipTable" class="table table-hover  text-light"> 
									<thead>
										<tr>
											<th>Id Card Front</th>
											<th>Back</th>
											<th>Status</th>
											<th>Date</th>

										</tr>
									</thead>
									<tbody>

									
										<tr>

											<td> <img src="{{asset('uploads/kyc/'.$userProfile->id_card)}}" width="30%">
											</td>


											<td> <img src="{{asset('uploads/kyc/'.$userProfile->passport)}}" width="30%">
											</td>

											@if($userProfile->kyc_status=='0')
											<td>pending</td>
											@elseif($userProfile->kyc_status=='1')
											<td>approved</td>
											@elseif($userProfile->kyc_status=='2')
											<td>Declined</td>
											@endif
											<td>{{$userProfile->created_at}}</td>

											<td>
												<form action="{{url('accept-kyc/'.$userProfile->id)}}">
													@csrf
													<input type="hidden" name="status" value="1">
													<button type="submit" class="btn btn-primary me-2"
														href="">Approve</button>
												</form>

												<br>
												<form action="{{url('reject-kyc/'.$userProfile->id)}}">
													@csrf
													<input type="hidden" name="status" value="0">
													<button type="submit" class="btn btn-danger"
														href="">Decline</button>
												</form>
											</td>
										</tr>
									
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
				
			
@include('admin.footer')
				