@include('admin.header')
<!-- End Sidebar -->
<div class="main-panel">
			<div class="content bg-dark ">
				<div class="page-inner">
                @if(session('message'))
<div class="alert alert-success mb-2">{{session('message')}}</div>
@endif
					<div class="mt-2 mb-4">
					    <h1 class="title1 text-light d-inline">{{$user->name}} Bot History</h1>
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
    <table id="BotTable" class="table table-hover text-light"> 
        <thead> 
            <tr>  
                <th>Name</th>
                <th>Category</th>
                <th>Level</th>
                <th>Price</th>
                <th>Rating</th>
                <th>Connections</th>
                {{-- <th>Status</th> --}}
                <th>Date</th>
                {{-- <th>Action</th> --}}
            </tr> 
        </thead> 
        <tbody> 
            @foreach($histories as $history)
            <tr> 
                <td>{{ $history->name }}</td>
                <td>{{ $history->category }}</td>
                <td>{{ $history->level }}</td>
                <td>${{ $history->price }}</td>
				<td>{{ $history->active_connections }}</td>
                <td>{{ $history->rating }} ({{ $history->percentage_rating }}%)</td>
                <td>{{ \Carbon\Carbon::parse($history->created_at)->format('D, M j, Y g:i A') }}</td> 

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
				