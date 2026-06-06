@include('admin.header')
<div class="main-panel">
			<div class="content bg-dark ">
				<div class="page-inner">
				@if(session('message'))
<div class="alert alert-success mb-2">{{session('message')}}</div>
@endif
					<div class="mt-2 mb-4">
					<h1 class="title1 text-light">Manage all purchased accounts</h1>
					</div>
					<div>
    </div>                    <div> 
    </div>					<div class="mb-5 row">
						<div class="col-12">
							<small class="text-light">all purchased accounts are here.</small>
						</div>
						<div class="col-12 card shadow p-4 bg-dark">
							<div class="table-responsive" data-example-id="hoverable-table"> 
								<table id="ShipTable" class="table table-hover text-light"> 
									<thead> 
										<tr> 
											<th>ID</th> 
											<th>Client name</th>
											<th>Account Name</th>
											<th>Amount</th>
											<th>Duration</th>
											<th>Status</th> 
											<th>Date created</th>
											<th>Action</th>
										</tr> 
									</thead> 
									<tbody> 
								
							
										@foreach($plans as $plan)
											<th scope="row">{{$plan->id}}</th>
											<td>{{$plan->name}}</td>
											<td>{{$plan->plan_name}}</td> 
											<td>${{number_format($plan->amount, 2, '.', ',')}}</td> 
											<td>{{$plan->plan_duration}}</td>
											
										 @if($plan->status=='1')
                                   <td><span class="badge badge-success">Approved</span></td> 
				                        @elseif($plan->status=='0')
				                   <td><span class="badge badge-danger">Not Approved</span></td> 
				                         @endif
									<td>{{ \Carbon\Carbon::parse($plan->created_at)->format('D, M j, Y g:i A') }}</td> 
									

                                        @if($plan->status=='1')
                                   <td><a type="submit" class="btn btn-danger" href="{{route('disapprove.account',$plan->id)}}">Disapprove</a></td> 
				                        @elseif($plan->status=='0')
				                   <td><a type="submit" class="btn btn-primary"  href="{{ route('approve.account', ['id' => $plan->id, 'amount' => $plan->amount, 'user_id' => $user->id]) }}">Approve</a></td> 
				                         @endif

                                         </tr> 
                                        @endforeach
									</tbody> 
								</table>
							</div>
						</div>
					</div>
				</div>	
			</div>
				

@include('admin.footer')
				