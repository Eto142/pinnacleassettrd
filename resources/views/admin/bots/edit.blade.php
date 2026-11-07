@include('admin.header')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<div class="main-panel">

			<div class="content bg-dark">
				<div class="page-inner">
					<div class="mt-2 mb-4">
						<h1 class="title1 text-light">Edit Bot</h1>
					</div>
					<div>
    </div>                    <div>
    </div>					<div class="mb-5 row">
						<div class="col-lg-12 ">
                            <div class="p-3 card bg-dark">
                                
       <div id="message"></div>
       <form id="botUpdateForm" data-id="{{ $bot->id }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
                  <div class="form-row">

                                                <div class="form-group col-md-6">
                                            <h5 class="text-light">Level</h5>
                                 <input  class="form-control text-light bg-dark" placeholder="Enter Level" type="text" value="{{ old('level', $bot->level) }}"  name="level" >
                                        </div>

                                        <div class="form-group col-md-6">
                                            <h5 class="text-light">Bot ID</h5>
                                 <input  class="form-control text-light bg-dark" placeholder="Enter Bot ID" type="text"  value="{{ old('bot_id', $bot->bot_id) }}"  name="bot_id" >
                                        </div>
	
                                        <div class="form-group col-md-6">
                                            <h5 class="text-light">Bot Name</h5> 			 
                                             <input placeholder="Enter Name" class="form-control text-light bg-dark" type="text" value="{{ old('name', $bot->name) }}"  name="name" > 
                                       </div>

                                     <div class="form-group col-md-6">
                                             <h5 class="text-light">Category</h5> 			 
                                             <input class="form-control text-light bg-dark" placeholder="Enter Category" type="text" value="{{ old('category', $bot->category) }}"  name="category" > 
        
                                       </div>
                                       
                                        <div class="form-group col-md-6">
                                             <h5 class="text-light">image</h5>
                                             @if($bot->image)
                                         <div class="mb-3">
                                             <img src="{{ asset('uploads/bots/' . $bot->image) }}" alt="Bot Image" class="img-thumbnail" style="max-height: 60px;">
                                         </div>
                                             @endif
 			 
                                             <input class="form-control text-light bg-dark" placeholder="upload image" type="file" name="image" value="{{ old('image', $bot->image) }}" > 
                                          
                                       </div>

                                     <div class="form-group col-md-6">
                                            <h5 class="text-light">Processed</h5> 
                                           <input class="form-control text-light bg-dark" placeholder="Enter Processed" type="number" name="processed" value="{{ old('processed', $bot->processed) }}" >   

                                       </div>
                                       <div class="form-group col-md-6">
                                            <h5 class="text-light">Active Connections</h5> 
                                           <input class="form-control text-light bg-dark" placeholder="Enter Active Connections" type="text" value="{{ old('active_connections', $bot->active_connections) }}"  name="active_connections">
                                       </div>

                                       <div class="form-group col-md-6">
                                            <h5 class="text-light">Price</h5> 
                                           <input class="form-control text-light bg-dark" placeholder="Enter Price" type="number" name="price" value="{{ old('price', $bot->price) }}">
                                       </div>
                                       
                    
                                         
                                    <div class="form-group col-md-6">
                                            <h5 class="text-light">Rating (%)</h5> 			 
                                             <input placeholder="Enter Rating" class="form-control text-light bg-dark" type="text" value="{{ old('rating', $bot->rating) }}" name="rating"> 
                                       </div>

                                       <div class="form-group col-md-6">
                                            <h5 class="text-light">Minimum Percentage Rating</h5> 			 
                                             <input placeholder="Enter Percentage Rating" class="form-control text-light bg-dark" type="text"value="{{ old('percentage_rating', $bot->percentage_rating) }}" name="percentage_rating"> 
                                       </div>

                                         
                                       
                                        <!-- Submit Button aligned at bottom -->
            <div class="col-12 text-end mt-4">
              <button type="submit" class="btn btn-primary px-5">Edit Bot</button>
            </div>
                                    </div>
                               </form>
                            
                            </div>
						</div>
					</div>
				</div>
			</div>
          
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function () {
    $('#botUpdateForm').on('submit', function (e) {
        e.preventDefault();

        let form = $(this);
        let formData = new FormData(this);
        let botId = form.data('id');

        $.ajax({
            url: "/admin/bots/" + botId,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                'X-HTTP-Method-Override': 'PUT'
            },
            success: function (response) {
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'success',
                    title: response.success || 'Bot updated successfully!',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer);
                        toast.addEventListener('mouseleave', Swal.resumeTimer);
                    }
                });

                // Optional: reload or redirect
                setTimeout(() => {
                    window.location.href = "{{ route('admin.bots.index') }}";
                }, 3000);
            },
            error: function (xhr) {
                let messageBox = $('#message');
                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;
                    let errorHtml = '<div class="alert alert-danger"><ul>';
                    $.each(errors, function (key, value) {
                        errorHtml += `<li>${value[0]}</li>`;
                    });
                    errorHtml += '</ul></div>';
                    messageBox.html(errorHtml);
                } else {
                    messageBox.html('<div class="alert alert-danger">Something went wrong. Please try again.</div>');
                }
            }
        });
    });
});
</script>





<!-- Bootstrap JS Bundle (includes Toast support) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

@include('admin.footer')