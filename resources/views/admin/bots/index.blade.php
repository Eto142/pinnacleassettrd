@include('admin.header')

<!-- End Sidebar -->
<div class="main-panel">
			<div class="content bg-dark">
				<div class="page-inner">
					<div class="mt-2 mb-4">
						<h1 class="title1 text-light">Add Bots</h1>
					</div>
					<div>
    </div>					<div>
    </div>					<div class="mb-5 row">
						<div class="mt-2 mb-3 col-lg-12">
							<a class="btn btn-primary" href="{{route('admin.bots.create')}}"><i class="fa fa-plus"></i>Add A new Bot</a>
						</div>
						<div class="row">
@forelse ($bots as $bot)
  <div class="col-lg-4 col-md-6 mb-4">
    <div class="card bg-dark text-light shadow p-3 h-100">
      
      <!-- Bot Image -->
      @if($bot->image)
        <img src="{{ asset('uploads/bots/' . $bot->image) }}" class="card-img-top mb-3" alt="Bot Image">
      @else
        <img src="{{ asset('uploads/bots/default.png') }}" class="card-img-top mb-3" alt="Default Image">
      @endif

      <!-- Bot Details -->
      <div class="card-body">
        <h2 class="card-title text-center">{{ $bot->level }}</h2>
          <h5 class="card-title text-center">{{ $bot->name }}</h5>
        <p class="mb-1">Bot ID: <span class="text-info">{{ $bot->bot_id }}</span></p>
        <p class="mb-1">Category: <span class="text-info">{{ $bot->category }}</span></p>
        <p class="mb-1">Processed: 
          <span class="text-info">
            {{ $bot->processed }}
          </span>
        </p>
        <p class="mb-1">Active Connections: <span class="text-light">{{ $bot->active_connections }}</span></p>
        <p class="mb-1">Price: <span class="text-warning">${{ number_format($bot->price, 2) }}</span></p>
        <p class="mb-1">Rating: <span class="text-primary">{{ $bot->rating }}%</span></p>
        <p class="mb-1">Min. % Rating: <span class="text-light">{{ $bot->percentage_rating }}%</span></p>
      </div>

      <!-- Actions -->
      <div class="card-footer bg-transparent d-flex justify-content-center gap-2">
       <a href="{{ route('admin.bots.edit', $bot->id) }}" class="btn btn-sm btn-primary">
          <i class="fa fa-pencil-alt"></i> Edit
        </a>
     <form id="delete-form-{{ $bot->id }}" action="{{ route('admin.bots.destroy', $bot->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="button" class="btn btn-danger btn-delete" data-id="{{ $bot->id }}">Delete</button>
</form>

      </div>
      
    </div>
  </div>
@empty
	<div class="mt-2 mb-3 col-lg-12">
							<h5 class="title1 text-light">No bots created yet.</h5>
						</div>

@endforelse
</div>

												
					</div>
				</div>
			</div>
				

      <!-- Include SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: "{{ session('success') }}",
        timer: 3000,
        showConfirmButton: false,
        timerProgressBar: true,
        position: 'top-end',
        toast: true
    });
</script>
@endif

<script>
document.querySelectorAll('.btn-delete').forEach(button => {
    button.addEventListener('click', function() {
        const botId = this.getAttribute('data-id');
        Swal.fire({
            title: 'Are you sure?',
            text: "This action cannot be undone!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + botId).submit();
            }
        });
    });
});
</script>




@include('admin.footer')
				