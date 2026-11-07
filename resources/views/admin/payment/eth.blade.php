@include('admin.header')

<!-- Content wrapper scroll start -->
                   
               <br>
<br>
<br>
<br>
<br>
<div class="main-panel">
	<div class="content-wrapper">
<div class="col-md-6 grid-margin stretch-card">
		  <div class="card">
			<div class="card-body">
			  <p class="card-description">

                  <form method="post" action="{{route('admin.update-eth')}}" enctype="multipart/form-data">
                                     @csrf
                                     
                                     @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
                    <div class="form-group">
                        <label>Update Ethereum Wallet Address</label>
                      <input type="text" name="eth_address" class="form-control form-control-user" value="{{Auth::user()->eth_address}}">
                    </div>
                     <div class="form-group">
                    <label>Update Bar Code</label>
					<input type="file" name = "image"  class="form-control">
					<img src="{{asset('admin/uploads/admin/'.Auth::user()->ethImage)}}" width="60px" height="60px"/>
					@error('image')<small class="text-danger">{{$message}}</small> @enderror
					</div>
                    <button type="submit" class="btn btn-primary me-2">Update</button>
                  </form>
                </div>
              </div>
            </div>       

</div>
</div>
</div>
<!-- Content wrapper scroll end -->

@include('admin.footer')