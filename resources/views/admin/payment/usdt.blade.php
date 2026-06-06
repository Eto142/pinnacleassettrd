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
				<form method="post" action="{{route('admin.update-trc')}}" enctype="multipart/form-data">
					@csrf

   <div class="form-group">
   <input type="text" name="usdt_address" class="form-control form-control-user" placeholder="New wallet address" value="{{Auth::user()->usdt_address}}">
   </div>
   <div class="form-group">
   <input type="file" name = "image"  class="form-control">
	   <img src="{{asset('admin/uploads/admin/'.Auth::user()->usdtImage)}}" width="60px" height="60px"/>
	   @error('image')<small class="text-danger">{{$message}}</small> @enderror
	   </div>
  <button type="submit" name="usdt" class="btn btn-primary btn-user btn-block"> update </button>
   <hr>
</form>

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