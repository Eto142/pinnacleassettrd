@include('admin.header')
<div class="main-panel">
			<div class="content bg-dark">
				<div class="page-inner">
				@if(session('message'))
<div class="alert alert-success mb-2">{{session('message')}}</div>
@endif
					<div class="mt-2 mb-4">
						<h1 class="title1 text-light">Fundformeprogram users lists</h1>
					</div>
					
					<div>
    </div>                    <div>
    </div>					<div class="row">
						<div class="col-12">
							<a href="#" data-toggle="modal" data-target="#sendmailModal" class="btn btn-primary btn-lg" style="margin:10px;">Message all</a>
														{{-- <a href="{{route('manage.kyc')}}" class="btn btn-warning btn-lg">KYC</a> --}}
							 
							<a href="#" data-toggle="modal" data-target="#adduser" class="float-right btn btn-primary"> <i class='fas fa-plus-circle'></i> Add User</a>
							<!-- Modal -->
							<div class="modal fade" id="adduser" tabindex="-1" aria-h6ledby="exampleModalh6" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header bg-dark">
											<h3 class="mb-2 d-inline text-light">Manually Add Users</h3>
											<button type="button" class="close text-light" data-dismiss="modal" aria-h6="Close">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body bg-dark">
											<div>
											<form role="form" method="post" action="{{ route('add.user') }}">
                                         {{ csrf_field()}}	
																						<div class="form-row">
														<div class="form-group col-md-12">
															<h6 class="text-light">Username</h6>
															<input type="text" id="input1" class="form-control bg-dark text-light" name="username" required>
														</div>
														<div class="form-group col-md-12">
															<h6 class="text-light">Fullname</h6>
															<input type="text" class="form-control bg-dark text-light" name="name" required>
														</div>
														<div class="form-group col-md-12">
															<h6 class="text-light">Email</h6>
															<input type="email" class="form-control bg-dark text-light" name="email" required>
														</div>
														<div class="form-group col-md-12">
															<h6 class="text-light">Password</h6>
															<input type="password" class="form-control bg-dark text-light" name="password" required>
														</div>
														<div class="form-group col-md-12">
															<h6 class="text-light">Confirm Password</h6>
															<input type="password" class="form-control bg-dark text-light" name="password_confirmation" required>
														</div>
													</div>
													<button type="submit" class="px-4 btn btn-primary">Add User</button>
												</form>  
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="mb-5 row">
						
						<div class="col-md-12 shadow card p-4 bg-dark">
							<div class="row">
								<div class="col-12">
									<form class=" form-inline">
										<div class="">
											<select class="form-control bg-dark text-light" id="numofrecord">
												<option>10</option>
												<option>20</option>
												<option>30</option>
												<option>40</option>
												<option>50</option>
												<option>100</option>
												<option>200</option>
												<option>300</option>
												<option>400</option>
												<option>500</option>
												<option>600</option>
												<option>700</option>
												<option>800</option>
												<option>900</option>
												<option>1000</option>
											</select>
										</div>
										<div class="">
											<select class="form-control bg-dark text-light" id="order">
												<option value="desc">Descending</option>
												<option value="asc">Ascending</option>
											</select>
										</div>
										<div>
											<input type="text" id="searchitem" placeholder="Search by name or email" class="float-rightmb-2 mr-sm-2 form-control bg-dark text-light">
											<small id="errorsearch"></small>	
										</div>
										
									</form>
								</div>
							</div>
							<div class="table-responsive" data-example-id="hoverable-table"> 
								<table class="table table-hover text-light"> 
									<thead> 
										<tr> 
											<th>Client Name</th>
									
											<th>Email</th> 
											<th>Status</th>
											<th>Date registered</th> 
											<th>Action</th> 
										</tr> 
									</thead> 
								<tbody id="userslisttbl">
								@foreach($user as $users)
            <tr> 
                <td>
				{{$users->name}}
				</td>
                <td>{{$users->email}}</td> 
                @if($users->user_status=='1')
                <td><span class="badge badge-success">active</span></td> 
				@elseif($users->user_status=='0')
				<td><span class="badge badge-danger">inactive</span></td> 
				@endif
            	<td>{{ \Carbon\Carbon::parse($users->created_at)->format('D, M j, Y g:i A') }}</td> 
									
                <td>
                    <a class="btn btn-secondary btn-sm" href="{{url('profile/'.$users->id)}}" id="153"  role="button">
                        Manage
                    </a>
                </td> 
            </tr> 
            
           @endforeach
            
            </tbody> 
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<script>
				$('#input1').on('keypress', function(e) {
					return e.which !== 32;
				});
			</script>
	<script>
		function getallusers(){
			let number = document.querySelector('#numofrecord').value;
			let searchvalue = document.querySelector('#searchitem').value;
			let ordervalue = document.querySelector('#order').value;
			let table = document.querySelector('#userslisttbl');
			
			if (searchvalue == "") {
				searchvalue = "query";
			} else {
				searchvalue = searchvalue;
			}

			let url = "https://altruisticmarkets.com/account/admin/dashboard/getusers" + '/' + number + '/' + searchvalue + '/' + ordervalue;

			fetch(url)
			.then(function(res){
				return res.json();
			})
			.then(function (response){
				if(response.status === 200){
					table.innerHTML = response.data;
					document.querySelector('#searchitem').style.borderColor = '';
				}
				if(response.status === 201){
					table.innerHTML = response.data;
					document.querySelector('#searchitem').style.borderColor = 'red';
				}
			})
			.catch(function(err){
				console.log(err);
			});
			
		}

		let numberopt = document.querySelector('#numofrecord');
		let searchbox = document.querySelector('#searchitem');
		let order = document.querySelector('#order');
		numberopt.addEventListener('change', getallusers);
		order.addEventListener('change', getallusers);
		searchbox.addEventListener('keyup', getallusers);
		getallusers();

		function viewuser(id){
			let url = "https://altruisticmarkets.com/account/admin/dashboard/user-details" + '/' + id;
			window.location.href = url;
		}
	</script>
	<!-- send all users email -->
	<div id="sendmailModal" class="modal fade" role="dialog">
		<div class="modal-dialog">

		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header bg-dark">
			  <h4 class="modal-title text-light">This message will be sent to all your users.</h4>
			  <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body bg-dark">
				  <form method="post" action="https://altruisticmarkets.com/account/admin/dashboard/sendmailtoall">
					<input type="hidden" name="_token" value="EqGt2txdTJHMwXVRjoCB9yNMVUEKJvIhyXqL7wBp">					
					<div class=" form-group">
						<input type="text" name="subject" class="form-control bg-dark text-light" placeholder="Subject" required>
					</div>
					<div class=" form-group">
						<textarea placeholder="Type your message here" class="form-control bg-dark text-light" name="message" row="8" placeholder="Type your message here" required></textarea>
					</div>
					<div class=" form-group">
						<input type="submit" class="btn btn-light" value="Send">
					</div>
				 </form>
			</div>
		  </div>
		</div>
	  </div>
	  <!-- /send all users email Modal -->
			
@include('admin.footer')
				