
@include('admin.header')


<!-- Content wrapper scroll start -->
<div class="content-wrapper-scroll">

	<!-- Main header starts -->

</div>
<!-- Row end -->


<br>
<br>
<br>
<br>
<br>
			
                                  <!-- Row start -->
<div class="main-panel">
	<div class="content-wrapper">

<div class="col-md-6 grid-margin stretch-card">
		  <div class="card">
			<div class="card-body">
			  <p class="card-description">
						<form  action="{{ route('admin.update.password') }}" method="POST">
                                              @csrf
							<div class="col-sm-6  col-12">
								<div class="card">
									<div class="card-body">
										<div class="m-0">
											<label class="form-label">Current password:</label>
                                            <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput"
                                                 placeholder="Old Password">
                                @error('old_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6  col-12">
								<div class="card">
									<div class="card-body">
										<div class="m-0">
											<label class="form-label">new_password</label>
                                <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                                    placeholder="New Password">
                                @error('new_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6  col-12">
								<div class="card">
									<div class="card-body">
										<div class="m-0">
											<label class="form-label">Confirm Password</label>
                                            <input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput"
                                    placeholder="Confirm New Password">
										</div>
									</div>
								</div>
							</div>			
                            <button type="submit" class="btn btn-primary">
										Update Password
							</button>

						
						<!-- Row end -->
							
                           </form>
						

	</div>
		  </div>
		</div>       

</div>
</div>
</div>
					</div>
					<!-- Content wrapper end -->

				</div>
				<!-- Content wrapper scroll end -->
@include('admin.footer')