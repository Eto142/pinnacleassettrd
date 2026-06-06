@include('dashboard.header')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-4"><a href="#custom-modal" class="btn btn-custom waves-effect waves-light mb-4"
                    data-animation="fadein" data-plugin="custommodal" data-overlayspeed="200"
                    data-overlaycolor="#36404a"><i class="mdi mdi-plus"></i> Add Member</a></div>
            <!-- end col -->
        </div>
        <!-- end row -->
        <div class="row">
            @foreach($traders as $trader)
            <div class="col-lg-4">
                <div class="text-center card-box">
                    <div class="member-card pt-2 pb-2">


                        <div class="thumb-lg member-thumb mx-auto"><img
                                src="{{asset('uploads/trader/'.$trader->image)}}" class="rounded-circle img-thumbnail"
                                alt="profile-image"></div>

                        <div class="">
                            <h4>{{$trader->name}}</h4>
                        </div>
                        <input type="hidden" name="copy_name" value="freddie">
                        <button name="copy" id="copyButton{{$trader->id}}"
                            class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light"
                            onclick="toggleCopyText('{{$trader->id}}')">Copy Now</button>


                        <!-- Add more buttons as needed with unique IDs and the toggleCopyText function -->



                        <div class="mt-4">
                            <div class="row">
                                <div class="col-4">
                                    <div class="mt-3">
                                        <h4>{{$trader->copier}}</h4>
                                        <p class="mb-0 text-muted">Copiers</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mt-3">
                                        <h4>{{$trader->copier}}%</h4>
                                        <p class="mb-0 text-muted">Gains</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mt-3">
                                        <h4>{{$trader->total_transactions}}</h4>
                                        <p class="mb-0 text-muted">Total Transactions</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>

    </div>
    <!-- container -->
</div>
<style>
    .card-box {
        padding: 20px;
        border-radius: 3px;
        margin-bottom: 30px;
        background-color: #fff;
    }

    .social-links li a {
        border-radius: 50%;
        color: rgba(121, 121, 121, .8);
        display: inline-block;
        height: 30px;
        line-height: 27px;
        border: 2px solid rgba(121, 121, 121, .5);
        text-align: center;
        width: 30px
    }

    .social-links li a:hover {
        color: #797979;
        border: 2px solid #797979
    }

    .thumb-lg {
        height: 88px;
        width: 88px;
    }

    .img-thumbnail {
        padding: .25rem;
        background-color: #fff;
        border: 1px solid #dee2e6;
        border-radius: .25rem;
        max-width: 70%;
        height: auto;
    }

    .text-pink {
        color: #ff679b !important;
    }

    .btn-rounded {
        border-radius: 2em;
    }

    .text-muted {
        color: #98a6ad !important;
    }
</style>
<!-- content @s -->

</div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    // Check if the text has been Copying and update the button text accordingly
    updateButtonText();
});

function toggleCopyText(traderId) {
    // Check if the text has been Copying
    if (localStorage.getItem("isTextCopying_" + traderId)) {
        // If Copying, change the button text to "Copy Now" and remove the flag
        document.getElementById("copyButton" + traderId).innerHTML = "Copy Now";
        localStorage.removeItem("isTextCopying_" + traderId);
    } else {
        // If not Copying, change the button text to "Copying" and set the flag
        document.getElementById("copyButton" + traderId).innerHTML = "Copying";
        localStorage.setItem("isTextCopying_" + traderId, true);
    }
}

function updateButtonText() {
    // Check the current state and update the button text accordingly
    @foreach($traders as $trader)
        if (localStorage.getItem("isTextCopying_{{ $trader->id }}")) {
            document.getElementById("copyButton{{ $trader->id }}").innerHTML = "Copying";
        } else {
            document.getElementById("copyButton{{ $trader->id }}").innerHTML = "Copy Now";
        }
    @endforeach
}


</script>


@include('dashboard.footer')