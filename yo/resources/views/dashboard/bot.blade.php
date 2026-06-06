@include('dashboard.header')

<!-- content @s -->
<div class="nk-content nk-content-fluid">
  <div class="container-xl wide-lg">
    <video id="vid"
      style="top: 0; position:absolute;width: 1000px; overflow:hidden; margin-left: -100px; margin-top: -20px;"
      loop="true" autoplay="autoplay" muted>
      <source src="src1/crypto/bot.mp4" type="video/mp4">
    </video>
  </div>

  <style>
    @media only screen and (max-width: 600px) {
      #vid {
        width: 300px;

      }

    }
  </style>
  <br>
  <div>
    <ul class="nk-block-tools gx-3">
      <li><button type="button" onclick="showAlert()" class="btn btn-primary"><span>Activate</span> <em
            class="icon ni ni-arrow-long-right"></em></button></li>

    </ul>
    <script>
      // Function to show SweetAlert
  // resources/js/app.js


    // Function to show SweetAlert
    function showAlert() {
        Swal.fire({
            title: "To Activate Bot Deposit $3500",
            html: '<input type="text" name="bolt" style="color:blue;" id="inputField" class="swal2-input" placeholder="Your Input">',
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