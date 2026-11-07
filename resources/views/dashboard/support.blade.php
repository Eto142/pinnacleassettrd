@include('dashboard.header')
<!-- resources/views/support.blade.php -->


<div class="container">
    <h1 class="mb-4">Support</h1>

    <div class="row">
        <div class="col-md-6">
            <div class="support-section">
                <h2>Contact Us</h2>
                <p>If you have any questions or need assistance, please feel free to contact our support team:</p>
                <ul>
                    <li>Email: support@icmgroup.org</li>
                    <li>Phone: 123-456-7890</li>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="support-section">
                <h2>Submit a Support Ticket</h2>
                <p>Fill out the form below to submit a support ticket:</p>
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>



<style>

.support-section {
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    padding: 20px;
    margin-bottom: 20px;
}

.support-section h2 {
    font-size: 24px;
    margin-top: 0;
    margin-bottom: 20px;
}

.support-section p {
    margin-bottom: 20px;
}

.support-section ul {
    padding-left: 20px;
    margin-bottom: 20px;
}

.support-section ul li {
    list-style-type: none;
}

.form-label {
    font-weight: bold;
}

.btn-primary {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

.btn-primary:hover {
    background-color: #0056b3;
}

/* Custom CSS for Support Page */

/* Adjust margins and padding */
.container {
    margin-top: 50px;
}

.row {
    margin-bottom: 30px;
}

/* Style form inputs and textarea */
.form-control {
    width: 100%;
}

/* Style submit button */
.btn-primary {
    width: 100%;
}

/* Add some spacing between form elements */
.mb-3 {
    margin-bottom: 20px;
}





</style>


    @include('dashboard.footer')