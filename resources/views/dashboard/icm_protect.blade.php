@include('dashboard.header')

<!-- content @s -->
<div class="activate-button">
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Activate</button>
</div>
<img src="bot.gif" alt="Robot" class="full-screen">

<!-- Rest of your content -->
<div class="container">
 
  <div class="robot-container">
      <div id="activity-log" class="activity-log">
          <!-- Trading activity will be displayed here -->
      </div>
  </div>
 
</div>

<style>


.full-screen {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures the image covers the entire container */
}

.activate-button {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1; /* Place it above the GIF */
}






</style>




  <br>
  <div>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    
     <script>
 @if(Auth::user()->bot_status=='1')
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("Bot Activated");

  @else
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  toastr.warning("Bot not activated yet, please activate");
  @endif
</script>
    

    

  <!-- Trigger the modal with a button -->
  
      <marquee style="color:white">
         @if(Auth::user()->bot_status=='1')
  
  ICM Protect Activated Sucessfully!
  	
  	 @else
 

  
 ICM Protect not activated yet, please Activate!

 
  @endif
  	
  	
</marquee>
  @if (session('status'))
                              <div class="alert alert-success" role="alert">
                                  {{ session('status') }}
                              </div>
                          @endif
                          @if($message = Session::get('success'))
                            <div class="alert alert-success">
                         <p>{{$message}}</p>
                            </div>
                         @endif
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h5 class="modal-title">Please deposit the fixed price of $3500 to purchase ICM Protect.</h5>
        </div>
        <div class="modal-body">
          <div class="form-group">
               @if (session('status'))
                              <div class="alert alert-success" role="alert">
                                  {{ session('status') }}
                              </div>
                          @endif
                          @if($message = Session::get('success'))
                            <div class="alert alert-success">
                         <p>{{$message}}</p>
                            </div>
                         @endif
  <form action="{{route('activate.bot')}}" method ="POST" enctype="multipart/form-data">
   {{ csrf_field()}}
    @if(Auth::user()->bot_status=='1')
 
  
  <div class="alert alert-success">
   ICM Protect Activated Sucessfully!
  	</div>
  	

  @else
 
 <div class="alert alert-primary">
  
 ICM Protect not activated yet, please Activate!
</div>
 
  @endif
  <label for="usr">Upload Proof of Payment</label>
  <input type="file" class="form-control" id="usr" name="image">
</div>
 <input type="submit" name="submit" value="submit">
</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

    <script>
      // Function to show SweetAlert
  // resources/js/app.js


    // Function to show SweetAlert
    function showAlert() {
        Swal.fire({
            title: "To Activate ICM Protect Deposit $3500",
            html: '<input type="text" name="bot" style="color:blue;" id="inputField" class="swal2-input" placeholder="Your Input">',
            showCancelButton: true,
            showConfirmButton: true,
            confirmButtonText: 'Submit',
        }).then((result) => {
            if (result.isConfirmed) {
                var userInput = document.getElementById('inputField').value;

                // Make an AJAX request to submit the form data
                axios.post('/activate-bot', { userInput: userInput })
                    .then(response => {
                        Swal.fire("Submitted!", response.data.message, "success");
                    })
                    .catch(error => {
                        Swal.fire("Error", "An error occurred while submitting the form.", "error");
                        console.error('Error submitting form:', error);
                    });
            }
        });
    }

 
;


    </script>
  </div>
  @include('dashboard.footer')