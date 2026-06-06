@include('admin.header')
<!-- End Sidebar -->
<div class="main-panel">
			<div class="content bg-dark ">
				<div class="page-inner">
					<div class="mt-2 mb-4">
					    <h1 class="title1 text-light d-inline">{{$user->name}} login activities</h1>
                        <div class="d-inline">
							<div class="float-right btn-group">
								<a class="btn btn-primary btn-sm" href=""> <i class="fa fa-arrow-left"></i> back</a>
							</div>
						</div>
					</div>
					<div>
    </div>                    <div>
    </div>					<div class="mb-5 row">
                                                    <div class="mb-4 col-md-12">
                                <a class="btn btn-danger btn-sm" href=""> <i class="fa fa-trash"></i> Clear Data</a>
                            </div>  
                        						<div class="col-md-12 card shadow p-4 bg-dark">
							<div class="table-responsive" data-example-id="hoverable-table"> 
								<table id="ShipTable" class="table table-hover text-light"> 
									<thead> 
										<tr>  
											
											<th>Transaction Type</th>
											<th>Transaction Amount</th>
                                            <th>Status</th>
											<th>Date</th>
										</tr> 
									</thead> 
									<tbody> 
                                        @foreach($transactions as $transactions)
										<tr> 
											
											<td>{{$transactions->transaction_type}}</td>
											@if($transactions->credit == '0')
                                            <td>${{number_format($transactions->debit, 2, '.', ',')}}</td> 
				                            @elseif($transactions->debit =='0')
				                            <td>${{number_format($transactions->credit, 2, '.', ',')}}</td> 
				                            @endif

										 @if($transactions->status=='1')
                                   <td><span class="badge badge-success">Approved</span></td> 
				                        @elseif($transactions->status=='0')
				                   <td><span class="badge badge-danger">Not Approved</span></td> 
				                         @endif
									<td>{{ \Carbon\Carbon::parse($transactions->created_at)->format('D, M j, Y g:i A') }}</td> 
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
				