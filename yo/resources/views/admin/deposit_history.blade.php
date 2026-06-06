@include('admin.header')
<!-- End Sidebar -->
<div class="main-panel">
			<div class="content bg-dark ">
				<div class="page-inner">
                @if(session('message'))
<div class="alert alert-success mb-2">{{session('message')}}</div>
@endif
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
											
										
											<th>Amount</th>
                                            <th>Mode</th>
                                            <th>Status</th>
                                        
											<th>Date</th>
                                            <th>Action</th>
										</tr> 
									</thead> 
									<tbody> 
                                        @foreach($deposit as $deposit)
										<tr> 
											
										<td>${{$deposit->amount}}</td>
                                        <td>{{$deposit->payment_method}}</td>

										 @if($deposit->status=='1')
                                   <td><span class="badge badge-success">Approved</span></td> 
				                        @elseif($deposit->status=='0')
				                   <td><span class="badge badge-danger">Not Approved</span></td> 
				                         @endif
                        
									<td>{{ \Carbon\Carbon::parse($deposit->created_at)->format('D, M j, Y g:i A') }}</td> 
									

                                        @if($deposit->status=='1')
                                   <td><a type="submit" class="btn btn-danger" href="{{route('disapprove.deposit',$deposit->id)}}">Disapprove</a></td> 
				                        @elseif($deposit->status=='0')
				                   <td><a type="submit" class="btn btn-primary"  href="{{ route('approve.deposit', ['id' => $deposit->id, 'amount' => $deposit->amount, 'user_id' => $user->id]) }}">Approve</a></td> 
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
				