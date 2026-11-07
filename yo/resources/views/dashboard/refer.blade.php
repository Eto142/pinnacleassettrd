@include('dashboard.header')


        
<div class="container">
    <div class="card">
        <div class="card-header">Referral Program</div>

        <div class="card-body">
            <p>Invite your friends to join our platform and earn rewards!</p>
            <p>Your referral link:</p>
            <input type="text" value="{{ Auth::user()->referral_link }}" readonly>
            <p>Share this link with your friends and earn rewards when they sign up!</p>
        </div>
    </div>
</div>

<style>


body {
    font-family: Arial, sans-serif;
    background-color: #f7f7f7;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.card {
    width: 100%;
    max-width: 400px;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 20px;
    box-sizing: border-box;
}

.card-header {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 10px;
    padding-bottom: 10px;
    border-bottom: 1px solid #ccc;
}

.card-body {
    margin-bottom: 10px;
}

.card-body p {
    margin-bottom: 10px;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.btn {
    display: inline-block;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
    text-decoration: none;
    text-align: center;
}

.btn:hover {
    background-color: #0056b3;
}





</style>
</body>
</html>







@include('dashboard.footer')