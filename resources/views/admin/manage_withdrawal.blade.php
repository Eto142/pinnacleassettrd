
@include('admin.header')
<div class="main-panel">
			<div class="content bg-dark">
				<div class="page-inner">
					<div class="mt-2 mb-4">
					<h1 class="title1 text-light">Manage clients withdrawals</h1>
					</div>
					<div>
    </div>                    <div>
    </div>				
					<div class="mb-5 row">
						<div class="col card p-3 shadow bg-dark">
							<div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table"> 
								<span style="margin:3px;">
								<table id="ShipTable" class="table table-hover text-light"> 
									<thead> 
										<tr> 
											<th>ID</th> 
											<th>Client name</th>
											<th>Amount requested</th>
											<th>Amount + charges</th>
											<th>Payment Method</th>
											<th>Receiver's email</th>
											<th>Status</th> 
											<th>Date created</th>
											<th>Option</th>
										</tr> 
									</thead> 
									<tbody> 
											@foreach($withdrawals as $with)																<tr> 
											<th scope="row">{{$with->id}}</th>
											<td>{{$with->name}}</td>
											<td>${{number_format($with->amount, 2, '.', ',')}}</td> 
											<td>${{number_format($with->amount * 0.20 + $with->amount, 2, '.', ',')}}</td> 
											<td>{{$with->method}}</td> 
											<td>{{$with->email}}</td> 
											<td>
											@if($with->status==='0')
											<span class="badge badge-danger">Pending</span>
											@elseif($with->status==='1')
											<span class="badge badge-success">Processed</span>
											@endif
												
											</td> 
											<td>{{ \Carbon\Carbon::parse($with->created_at)->format('D, M j, Y g:i A') }}</td> 
											<td>
											<a href="{{url('view-withdrawal/'.$with->id)}}" class="m-1 btn btn-info btn-sm"><i class="fa fa-eye"></i> View</a>
										 	</td> 
											@endforeach
										</tr> 
												
											</tbody> 
								</table>
							</div>
						</div>
					</div>
				</div>	
			</div>
@include('admin.footer')