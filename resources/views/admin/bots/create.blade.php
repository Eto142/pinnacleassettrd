@include('admin.header')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<div class="main-panel">

			<div class="content bg-dark">
				<div class="page-inner">
					<div class="mt-2 mb-4">
						<h1 class="title1 text-light">Add New Bot</h1>
					</div>
					<div>
    </div>                    <div>
    </div>					<div class="mb-5 row">
						<div class="col-lg-12 ">
                            <div class="p-3 card bg-dark">
                                
                            <div id="message"></div>
                            <form  id="botForm" action="{{route('admin.bots.store')}}" method ="POST" enctype="multipart/form-data">
                                              @csrf                                   
                                            <div class="form-row">

                                                <div class="form-group col-md-6">
                                            <h5 class="text-light">Level</h5>
                                 <input  class="form-control text-light bg-dark" placeholder="Enter Level" type="text" name="level" required>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <h5 class="text-light">Bot ID</h5>
                                 <input  class="form-control text-light bg-dark" placeholder="Enter Bot ID" type="text" name="bot_id" required>
                                        </div>
	
                                        <div class="form-group col-md-6">
                                            <h5 class="text-light">Bot Name</h5> 			 
                                             <input placeholder="Enter Name" class="form-control text-light bg-dark" type="text" name="name" required> 
                                       </div>

                                     <div class="form-group col-md-6">
                                             <h5 class="text-light">Category</h5> 			 
                                             <input class="form-control text-light bg-dark" placeholder="Enter Category" type="text" name="category" required> 
        
                                       </div>
                                       
                                        <div class="form-group col-md-6">
                                             <h5 class="text-light">image</h5> 			 
                                             <input class="form-control text-light bg-dark" placeholder="upload image" type="file" name="image" required> 
                                          
                                       </div>

                                     <div class="form-group col-md-6">
                                            <h5 class="text-light">Processed</h5> 
                                           <input class="form-control text-light bg-dark" placeholder="Enter Processed" type="number" name="processed" required>   

                                       </div>
                                       <div class="form-group col-md-6">
                                            <h5 class="text-light">Active Connections</h5> 
                                           <input class="form-control text-light bg-dark" placeholder="Enter Active Connections" type="text" name="active_connections" required>
                                       </div>

                                       <div class="form-group col-md-6">
                                            <h5 class="text-light">Price</h5> 
                                           <input class="form-control text-light bg-dark" placeholder="Enter Price" type="number" name="price" required>
                                       </div>
                                       
                    
                                         
                                    <div class="form-group col-md-6">
                                            <h5 class="text-light">Rating (%)</h5> 			 
                                             <input placeholder="Enter Rating" class="form-control text-light bg-dark" type="text" name="rating" required> 
                                       </div>

                                       <div class="form-group col-md-6">
                                            <h5 class="text-light">Minimum Percentage Rating</h5> 			 
                                             <input placeholder="Enter Percentage Rating" class="form-control text-light bg-dark" type="text" name="percentage_rating" required> 
                                       </div>

                                         
                                       
                                        <!-- Submit Button aligned at bottom -->
            <div class="col-12 text-end mt-4">
              <button type="submit" class="btn btn-primary px-5">Add Bot</button>
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
    $('#botForm').on('submit', function (e) {
        e.preventDefault();

        let formData = new FormData(this);

        $.ajax({
            url: "{{ route('admin.bots.store') }}",
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                // ✅ SweetAlert2 Toast
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'success',
                    title: response.success,
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer);
                        toast.addEventListener('mouseleave', Swal.resumeTimer);
                    }
                });

                // Optional: Reset form
                $('#botForm')[0].reset();

                // Redirect after 3 seconds
                setTimeout(function () {
                    window.location.href = "{{ route('admin.bots.index') }}";
                }, 3000);
            },
            error: function (xhr) {
                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;
                    let errorHtml = '<div class="alert alert-danger"><ul>';
                    $.each(errors, function (key, value) {
                        errorHtml += '<li>' + value[0] + '</li>';
                    });
                    errorHtml += '</ul></div>';
                    $('#message').html(errorHtml);
                } else {
                    $('#message').html('<div class="alert alert-danger">Something went wrong.</div>');
                }
            }
        });
    });
});
</script>






<!-- Bootstrap JS Bundle (includes Toast support) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

@include('admin.footer')